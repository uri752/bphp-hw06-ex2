<?php

session_start();

echo 'Page 3 <br/>';

// Доработка - человек уже перешел на страницу, следовательно счетчик = 1
$_SESSION['count'] = isset($_SESSION['count']) ? ++$_SESSION['count'] : 1;

echo 'Количество открытий: '.$_SESSION['count'];

$count = $_SESSION['count'];
if ($count % 3 === 0) {    
    // Доработка - убрал лишнюю переменню для page3 и использую count
    header('Location: http://localhost:8000/page4.php');
}