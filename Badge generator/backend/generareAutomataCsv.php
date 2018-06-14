<?php
    session_start();
   //print_r($_SESSION);

$filePath = $_SESSION['filePath'];
$template = $_SESSION['template'];

$index = 0;
$row = 1;
if (($file = fopen($filePath, "r")) !== FALSE) {
    while (($data = fgetcsv($file, 100, ";")) !== FALSE) {
        $num = count($data);
        $row++;
    }
    fclose($file);
}
$csv = array_map('str_getcsv', file($filePath));    //array with all lines from csv file

//print_r($csv);
//echo ("<hr><br>Arrays: <br>");
for($i=0; $i < count($csv); ++$i)
{
    $arr = explode(";",implode(" ",$csv[$i]));
    $Nume =$arr[0];
    $Afiliere = $arr[1];
    $Rol = $arr[2];

    echo ('<canvas id="cnvs');
    echo $index;
    echo('" width="340" height="240" style="border:1px solid #000000;">');
    echo(' Your browser does not support the canvas element. </canvas> ');
    // echo('generator("cnvs'); echo($index); echo('");');


    ?>

    <script>


        var cv = document.getElementById("cnvs<?php echo $index; ?>");
        var ctx = cv.getContext("2d");
        ctx.fillStyle = "white";
        ctx.fillRect (0, 0, 340, 240);
        switch ("<?php echo($template)?>")
        {
            case "1":
                ctx.fillStyle = "<?php echo "blue"?>";
                ctx.fillRect(0, 0, 130, 240);
                ctx.fillStyle = "#000000";
                ctx.font = "25px Arial";
                ctx.fillText("<?php echo($Nume)?>",140,50);
                ctx.font = "25px Arial";
                ctx.fillText("<?php echo($Afiliere)?>",140,80);
                ctx.font = "25px Arial";
                ctx.fillText("<?php echo($Rol)?>",140,110);
                ctx.font = "25px Arial";
                break;
            case "2":
                ctx.fillStyle = "<?php echo "pink"?>";
                ctx.fillRect(0, 0, 340, 180);
                ctx.fillStyle = "#000000";
                ctx.font = "25px Arial";
                ctx.fillText("<?php echo($Nume)?>",20,60);
                ctx.font = "25px Arial";
                ctx.fillText("<?php echo($Afiliere)?>",20,90);
                ctx.font = "20px Arial";
                ctx.fillText("<?php echo($Rol)?>",20,120);
                ctx.font = "25px Arial";
                break;
            case "3":
                ctx.fillStyle = "<?php echo "lime"?>";
                ctx.fillRect(0, 0, 340, 180);
                ctx.fillStyle = "#000000";
                ctx.font = "25px Arial";
                ctx.fillText("<?php echo($Nume)?>",20,60);
                ctx.font = "25px Arial";
                ctx.fillText("<?php echo($Afiliere)?>",20,90);
                ctx.font = "20px Arial";
                ctx.fillText("<?php echo($Rol)?>",20,120);
                ctx.font = "25px Arial";
                break;
        }




    </script>



    <form method="post" accept-charset="utf-8" name="form1">
        <input name="hidden_data" id='hidden_data' type="hidden"/>
    </form>

    <script>
        (function convertCanvasToImage() {
            var canvas = document.getElementById("cnvs<?php echo $index; ?>");
            var dataURL = canvas.toDataURL("image/png");
            document.getElementById('hidden_data').value = dataURL;
            var fd = new FormData(document.forms["form1"]);

            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'imagine.php', true);

            xhr.upload.onprogress = function(e) {
                if (e.lengthComputable) {
                    var percentComplete = (e.loaded / e.total) * 100;
                    console.log(percentComplete + '% salvat');
                    //alert('Salvat cu succes');
                }
            };

            xhr.onload = function() {

            };
            xhr.send(fd);
        })();
    </script>

    <?php

    ++$index;
}

?>

<form action="download.php">
    <input type="submit" name="Submit" value="Download Zip">
    <input type="submit" value="Home" formaction="deleteData.php">
</form>


<?php

?>