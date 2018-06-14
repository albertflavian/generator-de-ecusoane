<?php

session_start();
$dir = $_SESSION['dirPath'];
$files = new RecursiveIteratorIterator( new RecursiveDirectoryIterator($dir),RecursiveIteratorIterator::LEAVES_ONLY);
foreach ($files as $name => $file)
{
    if (!$file->isDir())
    {
        unlink($file);
    }

}
print_r($_SESSION);
unlink($_SESSION['filePath']);
unlink($_SESSION['zipFile']);
rmdir($dir);
session_unset();
session_destroy();


header("Location: ../frontend/home.html");



?>