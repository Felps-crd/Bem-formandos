<?php
// fetch_events.php
session_start();
include_once('../../assets/php/conexao.php');

header('Content-Type: application/json; charset=utf-8');

if (!isset($_SESSION['adm_id'])) {
    http_response_code(401);
    echo json_encode(['error' => 'unauthorized']);
    exit;
}

$vest_id = isset($_GET['id']) ? intval($_GET['id']) : 0;
if ($vest_id <= 0) {
    echo json_encode([]);
    exit;
}

$sql = "SELECT id, titulo, data_inicio, data_fim FROM calendario WHERE vestibular_id = ? ORDER BY data_inicio, id";
$stmt = $conexao->prepare($sql);
if (!$stmt) {
    http_response_code(500);
    echo json_encode(['error' => $conexao->error]);
    exit;
}
$stmt->bind_param('i', $vest_id);
$stmt->execute();
$result = $stmt->get_result();

$events = [];
while ($row = $result->fetch_assoc()) {
    $events[] = [
        'id' => (int)$row['id'],
        'titulo' => $row['titulo'],
        'inicio' => $row['data_inicio'],
        'fim' => $row['data_fim']
    ];
}

echo json_encode($events, JSON_UNESCAPED_UNICODE);
