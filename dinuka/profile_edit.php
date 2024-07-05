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

// Handle form submission for updating user details
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input fields
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    
    // Update user details in the database
    $update_query = "UPDATE user_form SET u_name='$name', u_email='$email', u_gender='$gender' WHERE u_ID={$_SESSION['u_ID']}";
    if(mysqli_query($conn, $update_query)) {
        // Successful update
        echo '<script>alert("profile updated successfully.");</script>';
        echo '<script>location.href = "user_profile.php";</script>';
        exit();
    } else {
        // Unsuccessful update
        echo '<script src="script.js"></script>';
        echo '<script>displayAlertRedirect("update unsuccessful!", "user_profile.php");</script>';
        exit();
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Details</title>
    <link rel="stylesheet" href="styles/profile_edit.css"> 
    <script src="script/script.js"></script> 

</head>
<body>
    <div class="container">
        <h1>Edit Details</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="profile-info">
                <label>Name:</label>
                <input type="text" name="name" value="<?php echo $name; ?>">
                <label>Email:</label>
                <input type="email" name="email" value="<?php echo $email; ?>">
                <label>Gender:</label>
                <select name="gender">
                    <option value="Male" <?php if($gender == 'Male') echo 'selected'; ?>>Male</option>
                    <option value="Female" <?php if($gender == 'Female') echo 'selected'; ?>>Female</option>
                </select>
                <input type="submit" value="Update" onclick="return confirm('Are you sure you want to update?')">
            </div>
        </form>
        <p><a href="u_profile.php">Cancel</a></p> <!-- Link to cancel editing -->
    </div>


</body>
</html>