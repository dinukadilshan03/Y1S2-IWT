<!DOCTYPE html>
<html>
<head>
	<title>Doctor Schedule</title>
	<link rel="stylesheet" type="text/css"  href="styles/style1.css">
	
	<script src= "script/myscript.js">
	</script>
	
	
</head>
<body>
    

	<h1>Doctors' Schedule</h1>
	<table border="1" width="75%">
		<tr>
			<th>Name</th>
			<th>Available_Days</th>
			<th>Time</th>
		</tr>
		<tr>
			<td>Devinda</td>
			<td>Monday</td>
			<td>4pm-10pm</td>	
		</tr>
		<tr>
			<td>Kalum</td>
			<td>Friday/Sunday</td>
			<td>2pm-6pm</td>	
		</tr>
		<tr>
			<td>Ashini</td>
			<td>Tuesday</td>
			<td>6am-8am</td>
		</tr>	
		<tr>
			<td>Nethum</td>
			<td>Sunday</td>
			<td>6am-8am/4pm-8pm</td>
		</tr>
		<tr>
			<td>Osura</td>
			<td>Sunday</td>
			<td>4pm-8pm</td>
		</tr>
		<tr>
			<td>Maneesha</td>
			<td>Monday/Friday</td>
			<td>6am-8am</td>
		</tr>
		<tr>
			<td>Thenuka</td>
			<td>Tuesday</td>
			<td>6am-8am/4pm-8pm</td>
		</tr>
		<tr>
			<td>Anjana</td>
			<td>Friday</td>
			<td>6am-9am</td>
		</tr>
		
	</table>

	<script>
	alert:("News page loaded!");
	document.write(Date());
	</script>
	</head> 
	<body> 
	 
	<header> 
	<h1 align="center">Doc_List</h1> 

	</header> 
	<hr class="border"> 
	 
	<center>
	<div class="newslayout">
	<button class="bttn1" type="button" id="btn1" onclick="loadData('btn1')">Dr.Devinda</button>
	<button class="bttn1" type="button" id="btn2" onclick="loadData('btn2')">Dr.Ashini</button>
	<button class="bttn1" type="button" id="btn3" onclick="loadData('btn3')">Dr.Kalum</button>

	</div>
	<img id="doc" src="images/doc.jpg">
	<p class="text1" id="para">Doctors, grappling with the burgeoning demands of modern healthcare, are navigating through the complexities of ever-evolving medical technologies

	
	</body>
	</html>