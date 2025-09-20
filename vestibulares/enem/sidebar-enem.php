<?php
$menu_items = [
     'home-enem.php' => ['label' => 'O que é o ENEM','icon' => 'bi bi-info-circle-fill'],
     'redacao.php' => ['label' => 'Redação', 'icon' => 'bi bi-pen-fill'],
     'calendario.php'=> ['label' => 'Calendário','icon' => 'bi bi-calendar-fill'],
     'inscricao.php' => ['label' => 'Inscrição', 'icon' => 'bi bi-person-check-fill'],
     'SISU.php' => ['label' => 'SISU', 'icon' => 'bi bi-award-fill'],
     'PROUNI.php'=>['label' => 'PROUNI', 'icon' => 'bi bi-clipboard-fill'],
     'FIES.php' =>['label' => 'FIES', 'icon' => 'bi bi-credit-card-fill']
];
$current = basename($_SERVER['PHP_SELF']);
$sidebar_title = $sidebar_title ?? 'ENEM'; 
?>

<nav id="sidebar" class="sidebar sidebar--enem" aria-label="Menu <?php echo htmlspecialchars($sidebar_title); ?>">
    <div class="sidebar__header">
        <button type="button" class="sidebar__menu-btn" id="sidebarToggle" aria-controls="sidebar" aria-expanded="false">
            <i class="bi bi-list"></i>
        </button>
        <span class="sidebar__title"><?php echo htmlspecialchars($sidebar_title); ?></span>
  </div>
  <div class="sidebar__separator" aria-hidden="true"></div>
  
    <ul class="sidebar__list">
        <?php foreach ($menu_items as $href => $item):
            $is_active = ($current === $href);
        ?>
        <li class="sidebar__item<?php echo $is_active ? ' sidebar__item--active ' : ''; ?>">
            <a 
            href="<?php echo htmlspecialchars($href, ENT_QUOTES, 'UTF-8'); ?>"
            class="sidebar__link<?php echo $is_active ? ' active' : ''; ?>"
            <?php echo $is_active ? 'aria-current="page"' : ''; ?>
            >
            <i class="bi <?php echo $item['icon']; ?>"></i>
            <?php echo htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8');?>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>
</nav>
