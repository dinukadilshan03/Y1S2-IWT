function loadData(name){
	if(name=="btn1"){
		document.getElementById("para").innerHTML = "Dr. Devinda is a cardiology. He has 8 years experience";
		document.getElementById("image1").src = "./IWT/images/image1.jpg";
	}
	else if(name=="btn2"){
		document.getElementById("para").innerHTML = "Dr. Ashini is a dermatology. She has 12 years experience";
		document.getElementById("image1").src = "./IWT/images/image2.jpg";
	}
	else if(name=="btn3"){
		document.getElementById("para").innerHTML = "Dr. Kalum is a dietician. He has 10 years experience";
		document.getElementById("image1").src = "./IWT/images/image3.jpg";
	}
	
	else{
		alert("Invalide!!!");
	}
}

//JS for alerts in login and register pages with redirect function
function displayAlertRedirect(message, redirectUrl) {
    if (confirm(message)) 
	{
        window.location.href = redirectUrl;
	}
};