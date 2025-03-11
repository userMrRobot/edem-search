<?php

require_once 'vendor/autoload.php';
use Src\Search;

if ($argc !== 2) {
    echo "Ввели что-то не верно  в командной строке\n";
    exit(1);
}

$str = $argv[1];

$result = Search::search($str);
if ($result) echo "Результат: все ок\n";
else  echo "Результат: ошибка\n";

