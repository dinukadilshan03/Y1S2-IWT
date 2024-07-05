<!DOCTYPE html>
<html>
	<head>
		<title>SMARTDOC</title>
		<link rel="stylesheet" type="text/css" href="styles/styles.css">
		<link rel="stylesheet" type="text/css" href="header.css">
		<link rel="stylesheet" type="text/css" href="footer.css">
		<script src="script/myscript.js">
		</script>
	</head>
	<body>
		<?php include 'header.php' ?>
		<div id="services">
		<h1 align="center" style="font-size: 80px;">WELCOME TO SMARTDOC!</h1><br><br>
		<form action="" method="post">
		<div id="About-us">
			<fieldset style="height:200px;width:400px;margin:0 auto;">
				<legend><b>"Make Your Health A Priority..."</b></legend>
			<p align="center">
				Healthy lifestyle is a lifestyle which includes <br>
				activities and habits that encourage <br>
				the development of total physical, mental, and spiritual <br>
				fitness, and which reduces the risk of major illness. <br>
				Healthy activities and habits include regular <br>
				exercise; a balanced, nutritious diet...
			</p>
			<div align="center">
				<a class="bttn"  href="asinu/aboutus/about.html">aboutus</a>
			</div>
			</fieldset>
		</div>
		<div id="services">
			<h2 align="center">Start Today With Us!</h2>
			<br>
			<h3 align="center"> Our Services...</h3>
			<br>
			<div class="container">

				<div class="image1"> <img src="./images/Healthcheckups.jpeg" alt="checkup" height="100px" align="left"/>
				<br>
				<button class="bttn" type="button" id="btn1" onclick="loadData('btn1')"> Checkup..</button>
				</div> 

				<div class="image2"> <img src="./images/Advices.jpg" alt="advices" height="100px" align="left"/>
				<br>
				<button class="bttn" type="button" id="btn2" onclick="loadData('btn2')"> Get Advices..</button>
				</div> 

				<div class="image3"> <img src="./images/dietplan.jpg" alt="dietplan" height="100px" align="left"/>
				<br>
				<button class="bttn" type="button" id="btn3" onclick="loadData('btn3')"> Diet Plans..</button>
				</div>
				
				<div class="image3"> <img src="./images/medicalreport.jpg" alt="report" height="100px" align="left"/>
				<br>
				<button class="bttn" type="button" id="btn4" onclick="loadData('btn4')"> Medical Reports..</button>
				</div>

			</div>
			<br><br>
			<div id="para">
    		<!-- Description will be displayed here -->
			</div>
		</div>
		<div id="doctorsAndTrainers">
            
		</div>
		<footer>
		<?php include 'footer.php' ?>
		</footer>
	</body>
	
</html>


