<?php

session_start();

echo 'Page 3 <br/>';

$_SESSION['count'] = isset($_SESSION['count']) ? ++$_SESSION['count'] : 0;

echo 'Количество открытий: '.$_SESSION['count'];

$count = $_SESSION['count'];
if ($count % 3 === 0) {
    $_SESSION['page3'] = $count;
    header('Location: http://localhost:8000/page4.php');
}