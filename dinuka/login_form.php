<?php

include 'config.php';
session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = ($_POST['password']);

   $select = " SELECT * FROM user_form WHERE u_email = '$email' && u_password = '$pass'";

   $result = mysqli_query($conn, $select);
   if(mysqli_num_rows($result) > 0){
      $row = mysqli_fetch_array($result);
  
      // Set $_SESSION['u_ID'] to the user's ID
      $_SESSION['u_ID'] = $row['u_ID'];
  
      if($row['u_type'] == 'Admin'){
          $_SESSION['admin_name'] = $row['u_ID'];
          // Display success alert using JavaScript function with redirect
          echo '<script src="script/script.js"></script>';
          echo '<script>displayAlertRedirect("Login successful! Welcome '.$row['u_name'].'", "../rashi/adminlogin.php");</script>';
          exit();
      } elseif($row['u_type'] == 'User'){
          $_SESSION['user_name'] = $row['u_ID'];
          // Display success alert using JavaScript function with redirect
       
      }   echo '<script src="script/script.js"></script>';
          echo '<script>displayAlertRedirect("Login successful! Welcome '.$row['u_name'].'", "../homepage.php");</script>';
          exit();
  }
  
   else{
      $error[] = 'Incorrect email or password!';
      
   }
}

?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>SmartDoc | Login</title>
  
   <link rel="stylesheet" href="styles/login_form.css">
   
</head>
<body style="background:#eeeeee;" >

<div class="form-container">

   <form action="" method="post" style="background:#fff;">
      <h3>Login</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" placeholder="Email"  required>
      <input type="password" name="password" required placeholder="Password">

      <input type="submit" name="submit" value="login" class="form-btn">
      <p>Don't have an account? <a href="register_form.php">Sign Up</a></p>
   </form>

</div>

</body>
</html>