
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
             <link rel="stylesheet" href="../css/style.css"> 
         
        </head>
        <body>

        <?php

        $name = $_REQUEST['name'];
        $role = $_REQUEST['role'];
        $affiliation = $_REQUEST['affiliation'];
        $template = $_REQUEST['template'];
        $culoare = $_REQUEST['culoare'];
        $image    = $_REQUEST['imageToUpload'];
        $url    =   $_REQUEST['url'];
       // $handle = fopen($_FILES["imageToUpload"]["tmp_name"], 'r');

       // echo ("<br>Color: " . $image);

        echo ("<br>Name: " . $name);
        echo ("<br>Role: " . $role);
        echo ("<br>Affiliation: " . $affiliation);
        echo ("<br>Template: " . $template);
        echo ("<br>Color: " . $culoare);


        ?>
        <canvas id="cnvs" width="340" height="240" style="border:1px solid #000000;">
            Your browser does not support the canvas element.
        </canvas>
        <div style="display:none;">
        img id="source" src="<?php echo("../image/".$image)?>" alt="photo" height="240" width="200"
        <!-- <img id="source" src="../image/temp03.jpg" alt="photo" height="240" width="200"> -->
        </div>
        <br><br><br>
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
                        ctx.fillStyle = "<?php echo($culoare)?>";
                        ctx.fillRect(0, 0, 130, 240);
                        ctx.fillStyle = "#000000";
                        ctx.font = "25px Arial";
                        ctx.fillText("<?php echo($name)?>",140,50);
                        ctx.font = "25px Arial";
                        ctx.fillText("<?php echo($affiliation)?>",140,80);
                        ctx.font = "25px Arial";
                        ctx.fillText("<?php echo($role)?>",140,110);
                        ctx.font = "25px Arial";
                        ctx.fillText("<?php echo($url)?>",20,140);
                        //ctx.drawImage(img, 33, 71, 104, 124, 21, 20, 87, 104);
                        ctx.drawImage(img, 15, 15, 100, 100);
                        break;
                    case "2":
                        ctx.fillStyle = "<?php echo($culoare)?>";
                        ctx.fillRect(0, 0, 340, 180);
                        ctx.fillStyle = "#000000";
                        ctx.font = "25px Arial";
                        ctx.fillText("<?php echo($name)?>",20,60);
                        ctx.font = "25px Arial";
                        ctx.fillText("<?php echo($affiliation)?>",20,90);
                        ctx.font = "20px Arial";
                        ctx.fillText("<?php echo($role)?>",20,120);
                        ctx.font = "25px Arial";
                        ctx.fillText("<?php echo($url)?>",20,150);
                        //ctx.drawImage(img, 33, 71, 104, 124, 221, 20, 87, 104);
                        ctx.drawImage(img,210,20,104,124);
                        break;
                    case "3":
                        ctx.fillStyle = "<?php echo($culoare)?>";
                        ctx.fillRect(0, 0, 340, 240);
                        ctx.fillStyle = "#000000";
                        ctx.font = "25px Arial";
                        ctx.fillText("<?php echo($name)?>",20,60);
                        ctx.font = "25px Arial";
                        ctx.fillText("<?php echo($affiliation)?>",20,90);
                        ctx.font = "20px Arial";
                        ctx.fillText("<?php echo($role)?>",20,120);
                        ctx.font = "25px Arial";
                        ctx.fillText("<?php echo($url)?>",20,150);
                        //ctx.drawImage(img, 33, 71, 104, 124, 221, 20, 87, 104);
                        ctx.drawImage(img,210,20,104,124);
                        break;

                        default:
                        window.location.href="eroare.php";
                }    
                

            }  
     
        </script>


        <br><br>
        <div style="padding-left: 100px">
            <button class="button button_green" type="button" onclick="convertCanvasToImage()"  >Salveaza PNG</button>
            <br>
        </div>       
        
        <form method="post" accept-charset="utf-8" name="form1">
            <input name="hidden_data" id='hidden_data' type="hidden"/>
        </form>
        
        <script>
              function convertCanvasToImage() {
                var canvas = document.getElementById("cnvs");
                var dataURL = canvas.toDataURL("image/png");
                document.getElementById('hidden_data').value = dataURL;
                var fd = new FormData(document.forms["form1"]);
 
                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'imagine.php', true);
 
                xhr.upload.onprogress = function(e) {
                    if (e.lengthComputable) {
                        var percentComplete = (e.loaded / e.total) * 100;
                        console.log(percentComplete + '% salvat');
                        alert('Salvat cu succes');
                    }
                };
 
                xhr.onload = function() {
 
                };
                xhr.send(fd);
            };
        </script>
        </body>
        </html>
