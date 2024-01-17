<?php


include "logs.php";
$filePath = "hello.txt";
function getLastLog($filePath)
{
    $allInfo = file($filePath, FILE_IGNORE_NEW_LINES);
    $lastLog = end($allInfo);
    echo "LAST LOG:" . $lastLog . PHP_EOL;
}

writeFromConsole($filePath);
readFromFile($filePath);
getLastLog($filePath) . PHP_EOL;
