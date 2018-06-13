
<?php
    session_start();
    $fileName = $_SESSION['fileName'];
    $filePath = $_SESSION['filePath'];
    echo $fileName;
    echo ("<br>");
    echo $filePath;



    if(!unlink($filePath))// delete file
        echo "File wasn't deleted!";
    else
        echo "File was deleted!";
echo ("<br>");echo ("<br>");echo ("<br>");echo ("<br>");

print_r($_SESSION);
    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy();
?>