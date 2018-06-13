

<?php

        session_start();
        $fileName = $_SESSION['fileName'];
        $filePath = $_SESSION['filePath'];
        $fileExtension = $_SESSION['fileExtension'];

        if($fileExtension == "xml") {
            $xml = simplexml_load_file("$filePath") or die("Error: Cannot create object");

            echo("<br><br><br>");
            echo $filePath;




            echo("<br><br><br>");
            print_r($xml);
        }
        else if ($fileExtension == "csv")
        {


            $row = 1;
            if (($file = fopen($filePath, "r")) !== FALSE) {
                while (($data = fgetcsv($file, 100, ";")) !== FALSE) {
                    $num = count($data);
                    echo "<p> $num fields in line $row: <br /></p>\n";
                    $row++;
                    for ($c=0; $c < $num; $c++) {
                        echo $data[$c] . "<br />\n";
                    }
                }
            fclose($file);
            }
            $csv = array_map('str_getcsv', file($filePath));    //array with all lines from csv file

            print_r($csv);
            echo ("<hr><br>Arrays: <br>");
            for($i=0; $i < count($csv); ++$i)
            {
                $arr = explode(";",implode(" ",$csv[$i]));
                print_r($arr);
                echo ("<br>");
            }

        }

?>