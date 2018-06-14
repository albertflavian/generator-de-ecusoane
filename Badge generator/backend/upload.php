

<?php
    session_start();
    $template=$_POST['template'];
    $_SESSION['template']= $template;
    if(isset($_POST['submit'])) //submit ?
    {
        $file = $_FILES['fileToUpload'];
        //print_r($file);
        $fileName = $_FILES['fileToUpload']['name'];
        $fileTmpName = $_FILES['fileToUpload']['tmp_name'];
        $fileError = $_FILES['fileToUpload']['error'];
        $fileSize = $_FILES['fileToUpload']['size'];
        $fileType = $_FILES['fileToUpload']['type'];

        $fileExt = explode('.',$fileName);  // =>array with 2 fields: name and extension
        $fileExtension = strtolower(end($fileExt)); //end- last pice of data from an array

        $allowed = array('xml', 'csv');

        if(in_array($fileExtension,$allowed))
        {
            if ($fileError == 0)
            {
                if($fileSize < 100000)
                {
                    $fileNewName = uniqid('',true).".".$fileExtension; //create a uniq file
                    $fileDestionation = '../uploads/'.$fileNewName;

                    move_uploaded_file($fileTmpName,$fileDestionation);
                    echo "Upload Succes!" ;
                    echo ("<br> File name: ");
                    echo $fileNewName;
                    $_SESSION['fileName'] = $fileNewName;
                    $_SESSION['filePath'] = $fileDestionation;
                    $_SESSION['fileExtension'] = $fileExtension;
                    header("Location: get_data.php");


                }
                else
                {

                    $uploadErr = "your file is too big!";
                    $_SESSION['uploadErr'] = $uploadErr;
                    header("Location: ../backend/uploadError.php");
                }
            }
            else
            {
                $uploadErr = "There was an error uploading your file!";
                $_SESSION['uploadErr'] = $uploadErr;
                header("Location: ../backend/uploadError.php");
            }
        }
        else
        {
            $uploadErr = "You cannot upload this file format!";
            $_SESSION['uploadErr'] = $uploadErr;
            header("Location: ../backend/uploadError.php");
        }

    }



?>

