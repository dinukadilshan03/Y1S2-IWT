<!DOCTYPE html>
<html>
<head>
    
    <title>Doc_Details</title>
    <link rel="stylesheet" type="text/css"  href="styles/style2.css">
    

</head>
<body>
    
    <h1>Doctor_Details</h1>
    
    <fieldset>
        <legend><b>Doctor Info</b></legend>
        
       <form method="post" action="insert.php">
        ID : <input type = "text" name="did"> <br>
        Name : <input type = "text" name="dname"> <br>
        Specialization : <input type = "text" name="dspecialization"> <br>
        Experience : <input type = "text" name="dexperience"> <br>
        Email : <input type = "text" name="demail"> <br>
        Contact_No : <input type = "text" name="dcontact"> <br>
        
		<input type = "submit"><input type = "reset">

        </form>
    </fieldset>

    <br>
    <br>

    <fieldset>
        <legend><b>Doctor Info</b></legend>    
        
        <form method="post" action="update.php">
        ID : <input type = "text" name="did"> <br>
        Name : <input type = "text" name="dname"> <br>
        Specialization : <input type = "text" name="dspecialization"> <br>
        Experience : <input type = "text" name="dexperience"> <br>
        Email : <input type = "text" name="demail"> <br>
        Contact_No : <input type = "text" name="dcontact"> <br>
        
		<input type = "submit" value = "update">

        </form>

    </fieldset>
    <br>
    <br>

    <fieldset>
        <legend><b>Doctor Info</b></legend>    
        
        <form method="post" action="delete.php">
        ID : <input type = "text" name="did"> <br>
 
        
		<input type = "submit" value = "Delete">

        </form>

    </fieldset>

        
    



    
</body>
</html>