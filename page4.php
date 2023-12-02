<?php

session_start();

// Доработка - добавлена проверка, иначе если сразу перейти на страницу 4, то будет ошибка
$count = isset($_SESSION['count']) ? $_SESSION['count'] : 0;

echo "Page 4 <br/>";
echo 'Количество открытий страницы 3: '.$count;


