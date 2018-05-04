

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