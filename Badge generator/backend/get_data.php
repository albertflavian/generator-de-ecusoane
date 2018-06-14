

<?php
        session_start();
        $template = $_SESSION['template'];
        $fileName = $_SESSION['fileName'];
        $filePath = $_SESSION['filePath'];
        $fileExtension = $_SESSION['fileExtension'];

        $newDir = uniqid('tmpDir',true);
        $dir = "../png/".$newDir;
        mkdir($dir);
        $_SESSION['dirPath'] = $dir;

        if($fileExtension == "xml") {

             $_SESSION['fileName'] = $fileName;
             $_SESSION['filePath'] = $filePath;

               header("Location: generareAutomataXml.php");

        }
        else if ($fileExtension == "csv")
        {
            //$_SESSION['fileName'] = $fileName;
            //$_SESSION['filePath'] = $filePath;

            header("Location: generareAutomataCsv.php");
        }



?>