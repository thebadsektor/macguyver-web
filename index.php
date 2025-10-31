<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

$page = basename($page);

$pagePath = 'src/views/pages/' . $page . '.php';

if (!file_exists($pagePath)) {
    $page = 'home';
}

include 'src/views/layout.php';