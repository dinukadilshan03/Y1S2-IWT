function loadData(data)
{
    if(data == 'btn1')
        {
            document.getElementById("para").innerHTML= "Experience seamless healthcare from the comfort of your home with our online medical checkup service. Our platform provides convenient access to professional medical consultations and evaluations, empowering you to manage your health efficiently. our experienced healthcare professionals offer personalized assessments, advice, and treatment plans tailored to your needs. From routine checkups to specialized consultations, our online platform ensures timely and accessible healthcare solutions, saving you time and prioritizing your well-being.";
        }
        else if(data == 'btn2')
            {
                document.getElementById("para").innerHTML= "Gain trusted medical insights and guidance conveniently through our online medical advice service. Our platform connects you with experienced healthcare professionals who provide personalized advice and recommendations tailored to your specific health concerns. Whether you seek information on symptoms, treatment options, or general wellness advice, our experts are here to support you. Through secure online consultations, get timely answers to your medical questions, empowering you to make informed decisions about your health. Take control of your well-being with our accessible and reliable online medical advice.";
            }
            else if(data =='btn3')
                {
                    document.getElementById("para").innerHTML= "Elevate your wellness journey with our personalized online diet plans. Designed by expert nutritionists, our tailored meal plans cater to your unique dietary needs and lifestyle goals. Whether you're aiming for weight loss, muscle gain, or overall health improvement, our comprehensive plans provide guidance, support, and delicious recipes to fuel your success. With convenient online access, track your progress, receive ongoing support, and enjoy the flexibility of adapting your plan to fit your busy schedule. Start your journey to a healthier lifestyle today with our online diet plans.";
                }
                else if(data =='btn4')
                {
                    document.getElementById("para").innerHTML= "Access your medical reports securely and conveniently through our online platform. Our service enables you to view and manage your medical records from anywhere, at any time. With user-friendly interfaces and robust security measures, you can trust that your sensitive information is protected. Whether you need to review test results, track your health history, or share reports with healthcare providers, our online platform streamlines the process for a seamless experience. Empower yourself with easy access to your medical reports and take charge of your health journey today.";
                }
                else
                {
                    alert('Invalid!!');
                }
}

//JS for alerts in create and clientlist pages with redirect function
function displayAlertRedirect(message, redirectUrl) {
    if (confirm(message))
    {
        window.location.href = redirectUrl;
    }
};