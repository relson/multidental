<?php

$folder = 'uploads/';
$filename = strtotime("now") . '.jpg';
$input = file_get_contents("php://input");
$file_path = $folder . $filename;

file_put_contents($file_path, $input);

$_POST[''];