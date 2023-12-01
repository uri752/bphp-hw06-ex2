<?php 

echo '<!DOCTYPE html>';

$file_txt = "Downloading_file_atlocalhost";

echo "It's a web server <br/>";

echo '<ul>';
echo '<li><a href="/page1.php">Страница 1</a></li>';
echo "<li><a href='/page2.php?text=$file_txt'>Страница 2</a></li>";
echo '<li><a href="/page3.php">Страница 3</a></li>';
echo '<li><a href="/page4.php">Страница 4</a></li>';
echo '</ul>';