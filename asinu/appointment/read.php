<!DOCTYPE html>
<html>
<head> 
<link rel="stylesheet" href="style.css">

</head>
<body>
   <table class="table" >

    <thead>
        <tr>
            <th scope="TokenID">TokenID</th>
            <th scope="FullName">FullName</th>
            <th scope="Gender">Gender</th>
            <th scope="ContactNumber">ContactNumber</th>
            <th scope="DateOfBirth">DateOfBirth</th>
            <th scope="Email">Email</th>
            <th scope="Procedure_type">Procedure Type</th>
            <th scope="appointment_Datetime">Appointment Date&Time</th>
            <th scope=" ">
            <th scope=""></th>
</tr>
</thead>
<tbody>
<?php

require 'config.php';

$sql="SELECT * FROM appointment";
$result=$con->query($sql);

if($result->num_rows>0)
{
   while($row=$result->fetch_assoc())
   {
    $id=$row["TokenID"];
    $fullname = $row["FullName"];
    $gender = $row["Gender"];
    $contact = $row["ContactNumber"];
    $dob = $row["DateOfBirth"];
    $email = $row["Email"];
    $procedure_type = $row["procedure_type"];
    $appointment_datetime = $row["appointment_Datetime"];
    echo'<tr>
    <td> '.$id.'</tb>
    <td>'.$fullname.'</td>
    <td>'.$gender.'</td>
    <td>'.$contact.'</td>
    <td>'.$dob.'</td>
    <td>'.$email.'</td>
    <td>'.$procedure_type.'</td>
    <td>'.$appointment_datetime.'</td>
    <td><button ><a href="edit.php?updateid='.$id.'">Update</a></button>
    </td>
    <td><button ><a href="delete.php?deleteid='.$id.'">Delete</a></button>
    </td>
    </tr>';


   }
}else{
    echo "No Appointmnet";
}
$con->close();
?>
</tbody>
</table>
    
</body>
</html>
