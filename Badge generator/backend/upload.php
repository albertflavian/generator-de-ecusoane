

<?php
    session_start();
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
                    $_SESSION['Error'] = "your file is too big!";
                    header("Location: ../frontend/info.html");
                }
            }
            else
            {
                $_SESSION['Error'] =  "There was an error uploading your file!";
                header("Location: ../frontend/info.html");
            }
        }
        else
        {
            $_SESSION['Error'] = "You cannot upload this file format!";
            header("Location: ../frontend/info.html");
        }

    }



?>

