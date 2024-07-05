<?php
include 'config.php';

session_start();

// Check if user is logged in
if(!isset($_SESSION['u_ID'])) {
    header("Location: login_form.php");
    exit();
}

// Fetch user data from the database based on the session information
$query = "SELECT * FROM user_form WHERE u_ID = {$_SESSION['u_ID']}";
$result = mysqli_query($conn, $query);

// Check if user exists
if(mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $name = $row['u_name'];
    $email = $row['u_email'];
    $gender = $row['u_gender'];
    $user_type = $row['u_type'];
} else {
    // Handle user not found
    echo "User not found!";
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="styles/user_profile.css">  
</head>
<body>

    <div class="container">
        <h1>User Profile</h1>
        <div class="profile-info">
            <p><strong>Name:</strong> <?php echo $name; ?></p>
            <p><strong>Email:</strong> <?php echo $email; ?></p>
            <p><strong>Gender:</strong> <?php echo $gender; ?></p>
            <p><strong>User Type:</strong> <?php echo $user_type; ?></p>
        </div>
        <a href="profile_edit.php" class="button">Edit Details</a>
        <a href="profile_delete.php" class="button">Delete Account</a>
        <a href="login_form.php" class="button">Logout</a>
    </div>

<?php include 'footer.php';?>

</body>
</html>
