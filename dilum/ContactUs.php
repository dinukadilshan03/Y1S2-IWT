<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Contact Us</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href="styles/dbody.css">
        <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    </head>
    <body>
        <script src="script/Script.js"></script>
        <br><br><hr><br><br>
        <form style="margin: auto; width: 95%; background-color: rgba(255, 255, 255, 0.3); border-radius: 17px;" method="post" action="create.php">
            <fieldset style="border: 1px solid black; border-radius: 17px;">
                <img src="Images/call.jpg" alt="reception girl" align="Right" width="50%">
                <br><b style="margin-left: 19%; font-size: 25px;">Contact Us</b>
                <div style="margin-left: 10%;">
                    <br><b>Name</b><br>
                    <input type="text" value="First Name" name="cFname" required>
                    <input type="text" value="Last Name" name="cLname" required><br><br>
                    <b>Email</b><br>
                    <input type="email" name="cEmail" required><br><br>
                    <b>Message</b><br>
			        <textarea name="message" rows="3" required></textarea><br><br>
                    <b>Status</b><br>
                    <input type="tect" name="status" value="pending" readonly><br><br>
                    <input type="checkbox" id="checkBox" onchange="enableButton()">  I agree with privacy policy<br><br>
                    <input style="background-color: rgb(55, 117, 209); border-radius: 5px; color: white;" type="submit" value=" Submit " id="submitBtn" disabled>
                </div>
                <br><p style="font-size: 12px; margin-left: 20px;">***We are Here to help you, feel free to ask any quections and information***</p>
            </fieldset>
        </form><br><br><hr><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </body>
</html>