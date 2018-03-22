<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8"> 
  <meta name="author" content="Studentul FII">
  <title>Generator de badge-uri</title>
  <link rel="icon" href="https://sslcdn.proz.com/images/32_profile_placeholder.png"> 
  <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
  <meta http-equiv='Content-Type' content='text/html; charset=utf8'/>
  <meta name='apple-mobile-web-app-capable' content='yes'/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/badge.css"> 
</head>

<body>
 <div style="position:absolute;opacity:0.9;width:auto;left:4%;right:4%">
	
	<h1><span id="span1">&#60;&#60;&#60;Generatorul de badge-uri&#62;&#62;&#62;</span></h1>
	
   <br><br>
   
   <form action="template.php" name="myForm" method="post"> 
 	
	<div class="grid-container">
		<div class="grid-item">
			<label>Evenimentul desfasurat
					</br></label>
			<select name="Eveniment"style="width:40%">
                <option value="Conferinte">Conferinte</option>
                <option value="Ateliere de lucru">Ateliere de lucru</option>
                <option value="Petrecere">Petrecere</option>
                <option value="Expozitie">Expozitie</option>
                <option value="Grup de interes">Grup de interes</option>
                <option value="Diverse">Diverse</option>
			</select>			
		</div>
		
		<div class="grid-item">
			<label>Rolul persoanei</br></label>
			<select name="Rolul" style="width:40%">
                <option value="Vizitator">Vizitator</option>
                <option value="Stagiar">Stagiar</option>
                <option value="Organizator">Organizator</option>
                <option value="Participant">Participant</option>
                <option value="Invitat special">Invitat special</option>
                <option value="Profesor">Profesor</option>
                <option value="Student">Student</option>
                <option value="Diverse">Diverse</option>
            </select>
		</div>
		<div class="grid-item">
			<label>Culoare</br></label>
			<input name="culoare" type="color"id="valoareculoare" value="#00ccff" style="width:40%">	
		</div>
	</div>
	
	<br><br><br><br>
    <h1><span>Template-uri pentru badge-uri</span></h1>
	
	<br>
	
	<div class="grid-container">
		<div class="grid-item">
				<label>
					<input type="radio" name="varianta" value="1" /> Varianta 1<br>
					<img src="image/temp01.jpg">
				</label> 
		</div>
		<div class="grid-item">
				<label>
					<input type="radio" name="varianta" value="2" /> Varianta 2<br>
					<img src="image/temp02.jpg">
				</label> 
		</div>
		<div class="grid-item">
				<label>
					<input type="radio" name="varianta" value="3" /> Varianta 3<br>
					<img src="image/temp03.jpg">
				</label> 
		</div>
	</div>	
     	
   
    <br><div style="text-align: center">
			<label class="button button_blue">Sablon
					<input type="submit" style="display:none" />
			</label>
	
		</div>
  
  </form>
  </div>
  
</div>

</body>
</html>


