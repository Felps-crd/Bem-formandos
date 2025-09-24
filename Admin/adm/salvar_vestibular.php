<?php
include_once('../../assets/php/conexao.php');

$id        = $_POST['id'] ?? null;
$nome      = $_POST['nome'] ?? '';
$categoria = $_POST['categoria'] ?? '';
$taxa      = $_POST['taxa'] ?? 0.00;

// Datas do calendário
$isen_inicio = $_POST['isen_inicio'] ?: null;
$isen_fim    = $_POST['isen_fim'] ?: null;
$insc_inicio = $_POST['insc_inicio'] ?: null;
$insc_fim    = $_POST['insc_fim'] ?: null;
$data_prova  = $_POST['data_prova'] ?: null;

if(empty($nome)){
    echo "<script>alert('O nome do vestibular é obrigatório'); history.back();</script>";
    exit;
}

if($id){ // editar vestibular
    // Atualiza vestibular
    $stmt = $conexao->prepare("UPDATE vestibulares SET nome=?, taxa=? WHERE id=?");
    $stmt->bind_param("sdi", $nome, $taxa, $id);
    $stmt->execute();

    // Atualiza categoria
    if($categoria){
        $stmt = $conexao->prepare("SELECT id FROM categorias WHERE vestibular_id=?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $res = $stmt->get_result();

        if($res->num_rows){
            $row = $res->fetch_assoc();
            $cat_id = $row['id'];
            $stmt = $conexao->prepare("UPDATE categorias SET nome=? WHERE id=?");
            $stmt->bind_param("si", $categoria, $cat_id);
            $stmt->execute();
        } else {
            // Se não existir categoria, cria
            $stmt = $conexao->prepare("INSERT INTO categorias (vestibular_id, nome) VALUES (?,?)");
            $stmt->bind_param("is", $id, $categoria);
            $stmt->execute();
        }
    }

    // Atualiza calendário
    $eventos = [
        ['titulo'=>'isenção','inicio'=>$isen_inicio,'fim'=>$isen_fim],
        ['titulo'=>'inscrição','inicio'=>$insc_inicio,'fim'=>$insc_fim],
        ['titulo'=>'prova','inicio'=>$data_prova,'fim'=>null],
    ];

    foreach($eventos as $ev){
        $stmt = $conexao->prepare("SELECT id FROM calendario WHERE vestibular_id=? AND titulo=?");
        $stmt->bind_param("is", $id, $ev['titulo']);
        $stmt->execute();
        $res = $stmt->get_result();

        if($res->num_rows){
            $row = $res->fetch_assoc();
            $stmt2 = $conexao->prepare("UPDATE calendario SET data_inicio=?, data_fim=? WHERE id=?");
            $stmt2->bind_param("ssi", $ev['inicio'], $ev['fim'], $row['id']);
            $stmt2->execute();
        } else if($ev['inicio']){
            $stmt2 = $conexao->prepare("INSERT INTO calendario (vestibular_id, titulo, data_inicio, data_fim) VALUES (?,?,?,?)");
            $stmt2->bind_param("isss", $id, $ev['titulo'], $ev['inicio'], $ev['fim']);
            $stmt2->execute();
        }
    }

} else { // adicionar vestibular
    $stmt = $conexao->prepare("INSERT INTO vestibulares (nome, taxa) VALUES (?,?)");
    $stmt->bind_param("sd", $nome, $taxa);
    $stmt->execute();
    $id = $stmt->insert_id;

    // Cria categoria e eventos se existirem
    if($categoria){
        $stmt = $conexao->prepare("INSERT INTO categorias (vestibular_id, nome) VALUES (?,?)");
        $stmt->bind_param("is", $id, $categoria);
        $stmt->execute();
    }

    $eventos = [
        ['titulo'=>'isenção','inicio'=>$isen_inicio,'fim'=>$isen_fim],
        ['titulo'=>'inscrição','inicio'=>$insc_inicio,'fim'=>$insc_fim],
        ['titulo'=>'prova','inicio'=>$data_prova,'fim'=>null],
    ];

    foreach($eventos as $ev){
        if($ev['inicio']){
            $stmt = $conexao->prepare("INSERT INTO calendario (vestibular_id, titulo, data_inicio, data_fim) VALUES (?,?,?,?)");
            $stmt->bind_param("isss", $id, $ev['titulo'], $ev['inicio'], $ev['fim']);
            $stmt->execute();
        }
    }
}

header("Location: tela-adm-vest.php");
exit;
?>
