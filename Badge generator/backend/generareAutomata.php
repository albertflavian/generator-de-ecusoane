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
    $template=$_SESSION['template'];
    $Nume=$_SESSION['nume'];
    $Rol = $_SESSION['rol'];
    $Afiliere = $_SESSION['afiliere'];
    session_unset();

?>

<body>

<canvas id="cnvs" width="340" height="240" style="border:1px solid #000000;">
    Your browser does not support the canvas element.
</canvas>

<br>
<script>


    window.onload = function() {

        var cv = document.getElementById("cnvs");
        var ctx = cv.getContext("2d");
        var img = document.getElementById("source");
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

    }

</script>

</body>

</html>