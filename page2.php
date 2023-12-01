<?php

declare(strict_types=1);
header('Content-Type: text/plain');
header('Content-disposition: attachment; filename="file.txt"');

echo $_GET["text"];