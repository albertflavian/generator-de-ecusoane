<!DOCTYPE html>
        <html lang="en">

<?php

        session_start();
        $fileName = $_SESSION['fileName'];
        $filePath = $_SESSION['filePath'];
        $fileExtension = $_SESSION['fileExtension'];

        if($fileExtension == "xml") {
            $xml = simplexml_load_file("$filePath") or die("Error: Cannot create object");

            header("Location: ../backend/generareAutomataXml.php");
            print_r($xml);
        }
        else if ($fileExtension == "csv")
        {

            /*
            fgetcsv() returns NULL if an invalid handle is supplied or FALSE on other errors, including end of file.
            */

            $row = 1;
            $array = array();
            $i=0;
            if (($file = fopen($filePath, "r")) !== FALSE) {
                while (($data = fgetcsv($file, 100, ";")) !== FALSE) {
                    $num = count($data);
                    echo "<p> $num fields in line $row: <br /></p>\n";
                    $row++;

                    // for ($c=0; $c < $num; $c++) {
                    //     echo $data[$c] . "<br />\n";
                    // }
                    // $Nume = $data[0];
                    // $Afiliere = $data[1];
                    // $Rol = $data[2];

                    // echo $Nume . "<br />\n";
                    // echo $Afiliere  . "<br />\n";
                    // echo $Rol . "<br />\n";

                    array_push($array, $data[0], $data[1], $data[2]);

                    echo $array[$i++]. "<br />\n";
                    
                    echo $array[$i++]  . "<br />\n";
                    echo $array[$i++]. "<br />\n";
                }
            fclose($file);
            }

           
               


            

            $csv = array_map('str_getcsv', file($filePath));    //array with all lines from csv file

            print_r($csv);
            echo   "<br />\n";
            print_r($csv[0][0]);
            echo   "<br />\n";
            print_r($csv[1][0]);

            echo ("<hr><br>Arrays: <br>");
           
            for($i=0; $i < count($csv); ++$i)
            {
                $arr = explode(";",implode(" ",$csv[$i]));
                print_r($arr);
                echo ("<br>");
            }

        }

?>
 <canvas id="cnvs1" width="340" height="240" style="border:1px solid #000000;">
            Your browser does not support the canvas element.
        </canvas>
        

<canvas id="cnvs2" width="340" height="240" style="border:1px solid #000000;">
            Your browser does not support the canvas element.
        </canvas>
        

<canvas id="cnvs3" width="340" height="240" style="border:1px solid #000000;">
            Your browser does not support the canvas element.
        </canvas>
        <script>
           
            
                
        var cv = document.getElementById("cnvs1");
                var ctx = cv.getContext("2d");
                var img = document.getElementById("source");
                ctx.fillStyle = "white";
			    ctx.fillRect (0, 0, 340, 240);
                ctx.fillStyle = "blue";
                        ctx.fillRect(0, 0, 130, 240);
                        ctx.fillStyle = "#000000";
                        ctx.font = "25px Arial";
                        ctx.fillText("<?php echo($array[0])?>",140,50);
                        ctx.font = "25px Arial";
                        ctx.fillText("<?php echo($array[1])?>",140,80);
                        ctx.font = "25px Arial";
                        ctx.fillText("<?php echo($array[2])?>",140,110);
                        ctx.font = "25px Arial";
                        
           
        </script>
       <br><br>

        <script>
           
            
                
           var cv = document.getElementById("cnvs2");
                   var ctx = cv.getContext("2d");
                   var img = document.getElementById("source");
                   ctx.fillStyle = "white";
                   ctx.fillRect (0, 0, 340, 240);
                   ctx.fillStyle = "blue";
                           ctx.fillRect(0, 0, 130, 240);
                           ctx.fillStyle = "#000000";
                           ctx.font = "25px Arial";
                           ctx.fillText("<?php echo($array[3])?>",140,50);
                           ctx.font = "25px Arial";
                           ctx.fillText("<?php echo($array[4])?>",140,80);
                           ctx.font = "25px Arial";
                           ctx.fillText("<?php echo($array[5])?>",140,110);
                           ctx.font = "25px Arial";
                           
              
           </script>

        <script>
           
            
                
           var cv = document.getElementById("cnvs3");
                   var ctx = cv.getContext("2d");
                   var img = document.getElementById("source");
                   ctx.fillStyle = "white";
                   ctx.fillRect (0, 0, 340, 240);
                   ctx.fillStyle = "blue";
                           ctx.fillRect(0, 0, 130, 240);
                           ctx.fillStyle = "#000000";
                           ctx.font = "25px Arial";
                           ctx.fillText("<?php echo($array[6])?>",140,50);
                           ctx.font = "25px Arial";
                           ctx.fillText("<?php echo($array[7])?>",140,80);
                           ctx.font = "25px Arial";
                           ctx.fillText("<?php echo($array[8])?>",140,110);
                           ctx.font = "25px Arial";
                           
              
           </script>
    
</html>