<?php
require 'config.php';

$id=$_GET['updateid'];
$sql="SELECT *FROM appointment WHERE TokenID=$id";
$result=$con->query($sql);
$row=mysqli_fetch_assoc($result);
$fullname = $row["FullName"];
    $gender = $row["Gender"];
    $contact = $row["ContactNumber"];
    $dob = $row["DateOfBirth"];
    $email = $row["Email"];
    $procedure_type = $row["procedure_type"];
    $appointment_datetime = $row["appointment_Datetime"];
if(isset($_POST['update'])){

    $fullname = $_POST["Name"];
    $gender = $_POST["gender"];
    $contact = $_POST["contact"];
    $dob = $_POST["dateofbirth"];
    $email = $_POST["email"];
    $procedure_type = $_POST["ptype"];
    $appointment_datetime = $_POST["appointment_datetime"];

    $sql="UPDATE appointment SET FullName='$fullname',Gender='$gender',ContactNumber='$contact',DateOfBirth='$dob',Email='$email',Procedure_type='$procedure_type',appointment_Datetime='$appointment_datetime' WHERE TokenID=$id";
    $result=$con->query($sql);
 if ($result) { 
    echo'<script>alert("Appointment Updated Successfully.");</script>';
    echo '<script>location.href = "read.php";</script>';
    }else{
        echo "Error: " . $con->error;
    } 
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    

    
    <link rel="stylesheet" href="style.css">

    <title>Edit Appointment </title>
</head>

<body>
<div class="container">
        <header> Edit Appointment</header>

        <form  method="post">
            <div class="form first">
                <div class="details personal">
                    <div class="fields">
                        <div class="input-field">
            <label>Full Name</label>
            <input type="text" name="Name" placeholder="Enter your first name" required value=<?php echo $fullname;?> ><br><br>
                    </div>
            <div class="input-field">
            <label for="gender">Gender</label>
            <select name="gender"  required>
                <option disabled selected>Select gender</option>
                
                    <option value="Male" <?php if($gender == 'Male') echo 'selected'; ?>>Male</option>
                    <option value="Female" <?php if($gender == 'Female') echo 'selected'; ?>>Female</option>
                </select>
            
            </select><br><br></div>
            <div class="input-field">
            <label>Contact</label>
            <input type="number" name="contact" placeholder="Enter contact number" required value=<?php echo $contact;?>><br><br>
        </div>
        <div class="input-field">
            <label>Date of Birth</label>
            <input type="date" name="dateofbirth" placeholder="Enter birth date" required value=<?php echo $dob;?>><br><br>
        </div>
        <div class="input-field">
            <label>Email</label>
            <input type="email" name="email" placeholder="example@example.com" required
            value=<?php echo $email;?>><br><br>
        </div>
        <div class="input-field">
            <label for="procedure_type">Which procedure for?</label>
            <select name="ptype" required value=<?php echo $procedure_type;?> >
                <option disabled selected>Select Procedure Type</option>
                <option value="Initial Consultation">Initial Consultation</option>
                <option value="Follow-up Appointment">Follow-up Appointment</option>
                <option value="Routine Check-up">Routine Check-up</option>
                <option value="Surgical Procedure">Surgical Procedure</option>
            </select>
            <br><br>
            </div>
            <div class="input-field">
            <label>Prefer Appointment Date & Time </label>
            <input type="datetime-local" name="appointment_datetime" placeholder="appointment date&time" required value=<?php echo $appointment_datetime;?>><br><br>
                </div>
                <button type="submit" name="update">
            <span class="btnText">Update</span>
            </button>
        </div>
            </div>
        </div>
    </div>
        </form>
    </div>

    <script src="script.js"></script>
</body>

</html>