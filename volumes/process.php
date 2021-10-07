<?php

    $message = $_POST["message"];

    $files = $_FILES = scandir("./messages");
    $num_files = count($files) - 2; // . e ..

    $fileNAme = "msg-{$num_files}.txt";

    $file = fopen("./messages/{$fileNAme}", "x");

    fwrite($file, $message);

    fclose($file);

    header("Location: index.php");

?>