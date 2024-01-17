<?php

function logger()
{
    echo "Enter the text, to file:";
    $date = date("d-m-Y-H-i-s");
    $text = fgets(STDIN);
    return "[$date] $text";

}

function writeFromConsole(string $path)
{
    $logs = logger();
    $file = fopen($path, "a");
    if ($file) {
        fwrite($file, $logs);
        fclose($file);
    } else {
        echo "Error of opening file";
    }
}

function readFromFile(string $path)
{
    $file = fopen($path, "r");
    if ($file) {
        $fileSize = filesize($path);
        $read = fread($file, $fileSize);
        fclose($file);
        echo $read;
    } else {
        echo "Error of opening file";
    }
}

$filePath = "hello.txt";