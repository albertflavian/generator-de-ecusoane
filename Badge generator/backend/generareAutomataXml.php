<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Badge Generator</title>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
    <meta http-equiv='Content-Type' content='text/html; charset=utf8'/>
    <meta name='apple-mobile-web-app-capable' content='yes'/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://sslcdn.proz.com/images/32_profile_placeholder.png">
    <!-- <link rel="stylesheet" href="../css/badge.css"> -->

</head>
<?php
session_start();
        $template = $_SESSION['template'];
        $filePath = $_SESSION['filePath'];
        $xml = simplexml_load_file("$filePath") or die("Error: Cannot create object");
        unlink($filePath);// delete file

        //print_r($_SESSION);
    session_unset();
    session_destroy();

//print_r ($xml->badge[2]->name);
$index = 0;
foreach ($xml->badge as $data)
{

    $Nume = $data->nume;
    $Afiliere = $data->afiliere;
    $Rol = $data->rol;

    echo ('<canvas id="cnvs');
    echo $index;
    echo('" width="340" height="240" style="border:1px solid #000000;">');
    echo(' Your browser does not support the canvas element. </canvas> ');
   // echo('generator("cnvs'); echo($index); echo('");');
    echo '<script type="text/javascript">',
    'generator("cnvs',$index,'");',
    '</script>'
    ;
    echo ("<br>"); echo ("<br>");



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
                ctx.fillStyle = "<?php echo "blue"?>";
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
                ctx.fillStyle = "<?php echo "blue"?>";
                ctx.fillRect(100, 0, 340, 240);
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

</body>

</html>