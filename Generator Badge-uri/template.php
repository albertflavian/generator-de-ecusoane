<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8"> 
  <meta name="author" content="Studentul FII">
  <title>Badge Generator</title>
  <link rel="icon" href="https://sslcdn.proz.com/images/32_profile_placeholder.png"> 
  <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
  <meta http-equiv='Content-Type' content='text/html; charset=utf8'/>
  <meta name='apple-mobile-web-app-capable' content='yes'/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/badge.css">  
</head>

<body>
    
    <div><h2>Sablon</h2></div>    
        <canvas id="myCanvas" width="340" height="240" style="border:4px solid #000000;">
            Browserul nu suporta canvas.
        </canvas>
		
        <div style="display:none;">
            <img id="source" src="https://pbs.twimg.com/profile_images/665284654660890624/PXEVxXVn_400x400.jpg" width="300" height="250">
        </div>		
		<script>		
		
		
        window.onload = function() 
		{
			
			var c = document.getElementById("myCanvas");
			var ctx = c.getContext("2d"); //desenz 2d
			var img = document.getElementById("source");		
			ctx.fillStyle = "white";
			ctx.fillRect (0, 0, 340, 240);
			switch ("<?php echo($_POST["varianta"])?>") 
			{
				
				case "1":
					ctx.fillRect (0, 0, 340, 240);
					ctx.fillStyle = "<?php echo($_POST["culoare"])?>";	//umple cu culoarea aleasa					 
					ctx.fillRect(0, 0, 130, 240);	//desenez dreptunghi
					ctx.drawImage(img, 33, 71, 104, 124, 21, 20, 87, 104);
					ctx.fillStyle = "#000000";					
					ctx.font = "25px Arial";
					ctx.fillText("<?php echo($_POST["Eveniment"])?>",140,50);
					ctx.font = "20px Arial";
					ctx.fillText("<?php echo($_POST["Rolul"])?>",140,80);
					
					break;
				case "2":  
					ctx.fillStyle = "white";
					ctx.fillStyle = "<?php echo($_POST["culoare"])?>";	
					ctx.fillRect(0, 0, 340, 180);
					ctx.fillStyle = "#000000";	
					ctx.drawImage(img, 33, 71, 104, 124, 221, 20, 87, 104);	
					ctx.font = "25px Arial";
					ctx.fillText("<?php echo($_POST["Eveniment"])?>",20,60);
					ctx.font = "20px Arial";
					ctx.fillText("<?php echo($_POST["Rolul"])?>",20,90);
										
					break;
				case "3":
					ctx.fillStyle = "<?php echo($_POST["culoare"])?>";
					ctx.fillRect(100, 0, 340, 180);
					ctx.font = "20px Arial";
					ctx.fillStyle = "#000000";	
					ctx.fillText("O sa fie ceva !",120,90);
					break;		
					
				default:					
					window.location.href = "eroare.php";
			}
		
		
		}
			function fisierulmeu() 
			{
				alert('Incarca fisier csv sau xml');			
				var x = document.getElementById("myFile");
				x.disabled = true;
			}
		
		</script>         
    <br><br><button  class="button button_green" type="button">Tipareste</button><br>
			<label class="adaugafisier button button_blue"> Incarca fisier
					<input type="file" class="file"style="display:none" />
			</label>
	
</body>
</html>