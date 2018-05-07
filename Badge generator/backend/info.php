



        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <title>Badge Generator</title>
            <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
            <meta http-equiv='Content-Type' content='text/html; charset=utf8'/>
            <meta name='apple-mobile-web-app-capable' content='yes'/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../css/badge.css">
        </head>
        <body>

        <?php

        $name = $_REQUEST['name'];
        $role = $_REQUEST['role'];
        $affiliation = $_REQUEST['affiliation'];
        $template = $_REQUEST['template'];
        $culoare = $_REQUEST['culoare'];
        $image    =   $_REQUEST['imageToUpload'];

        echo ("<br>name: " . $name);
        echo ("<br>role: " . $role);
        echo ("<br>affiliation: " . $affiliation);
        echo ("<br>template: " . $template);
        echo ("<br>Color: " . $culoare);
        echo ("<br>image: " . $image);


        ?>
        <canvas id="myCanvas" width="340" height="240" style="border:1px solid #000000;">
            Your browser does not support the canvas element.
        </canvas>
        <div style="display:none;">
        <img id="source" src=<?php echo("../image/" . $image)?> width="300" height="227">
        </div>
        <br><br><br>
        <script>

            window.onload = function() {

                var c = document.getElementById("myCanvas");
                var ctx = c.getContext("2d");
                var img = document.getElementById("source");
                switch ("<?php echo($template)?>")
                {
                    case "1":
                        ctx.fillStyle = "<?php echo($culoare)?>";
                        ctx.fillRect(0, 0, 130, 240);
                        ctx.fillStyle = "#000000";
                        ctx.drawImage(img, 33, 71, 104, 124, 21, 20, 87, 104);
                        ctx.font = "25px Arial";
                        ctx.fillText("<?php echo($name)?>",140,50);
                        ctx.font = "25px Arial";
                        ctx.fillText("<?php echo($affiliation)?>",140,80);
                        ctx.font = "25px Arial";
                        ctx.fillText("<?php echo($role)?>",140,110);

                        break;
                    case "2":
                        ctx.fillStyle = "<?php echo($culoare)?>";
                        ctx.fillRect(0, 0, 340, 180);
                        ctx.fillStyle = "#000000";
                        ctx.drawImage(img, 33, 71, 104, 124, 221, 20, 87, 104);
                        ctx.font = "25px Arial";
                        ctx.fillText("<?php echo($name)?>",20,60);
                        ctx.font = "25px Arial";
                        ctx.fillText("<?php echo($affiliation)?>",20,90);
                        ctx.font = "20px Arial";
                        ctx.fillText("<?php echo($role)?>",20,120);

                        break;
                    case "3":
                        ctx.fillStyle = "<?php echo($culoare)?>";
                        ctx.fillRect(100, 0, 340, 180);
                        break;

                        default:
                        window.location.href="eroare.php";
                }

            }
        </script>
        <br><br><button  class="button button_green" type="button">Tipareste</button><br>
        <button class="button button_blue" type="button" onclick="alert('Incarca fisier csv sau xml')">Adauga fisier</button>



        </body>
        </html>


