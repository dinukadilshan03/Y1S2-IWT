function aboutUS(data){
     if(data=="btn1"){
        document.getElementById("doc").innerHTML="Welcome to Our Diet Planning and Health Checkup System";
        document.getElementById("text").innerHTML="Our system aims to provide personalized diet plans and health checkup services to help individuals achieve their health and fitness goals.We have a team of qualified nutritionists and healthcare professionals who are dedicated to designing effective diet plans tailored to your specific needs and requirements.Whether you're looking to lose weight, gain muscle, improve your overall health, or manage a specific health condition, we're here to support you every step of the way.";
        document.getElementById("smart").src="../aboutus/smartdoc7.jpg";
    }
     else if(data=="btn2"){
        document.getElementById("doc").innerHTML="Terms And Conditions";
        document.getElementById("text").innerHTML="Use our diet planning and health checkup system at your own risk. We're not liable for any health outcomes. Consult a professional for medical advice.";
        document.getElementById("smart").src="../aboutus/condition.jpg";
    }
    else if(data=="btn3"){
        document.getElementById("doc").innerHTML="Privacy Policy ";
        document.getElementById("text").innerHTML="We are committed to protecting your privacy. Any personal information collected through our health checkup system will be kept confidential and used only for the purpose of providing our services. We do not share your information with third parties unless required by law.";
        document.getElementById("smart").src="../aboutus/privacy01.jpg";
    }
    else if(data=="btn4"){
        document.getElementById("doc").innerHTML="Reviews";
        document.getElementById("text").innerHTML="Our health checkup system has received rave reviews from users worldwide. Clients commend its user-friendly interface and comprehensive health analysis. They praise its accuracy in tracking vital health metrics and appreciate the personalized insights provided. Many have reported significant improvements in their overall well-being since incorporating it into their health routine.";
        document.getElementById("smart").src="../aboutus/smartdoc2.jpg";
    }

    
}
