<?php 
    $categor = [ "Доски и лыжи", "Крепления", "Ботинки", "Одежда", "Инструменты", "Разное"];
    require('functions.php');
    $content = include_template('main.php', ['categor' => $categor, 'products' => $lots]);
    $page_layout = include_template('layout.php', ['content' => $content, 'categor' => $categor, 'user_name' => 'Андрей','title' => 'Главная']);
    print($page_layout);
?>