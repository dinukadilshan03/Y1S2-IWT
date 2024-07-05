<?php
include 'config.php';
session_start();

// Check if user is logged in
if(!isset($_SESSION['u_ID'])) {
    header("Location: login_form.php");
    exit();
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete"])) {

    // Delete the record from the database
    $sql = "DELETE FROM user_form WHERE u_ID = {$_SESSION['u_ID']}";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("profile deleted successfully.");</script>';
        echo '<script>location.href = "login_form.php";</script>';

        exit();
    } else {
        echo "Error deleting record: " . $conn->error;

    }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Account</title>
    <link rel="stylesheet" href="styles/profile_delete.css"> 
    <script src="script/script.js" defer></script> 
</head>
<body>
    <div class="container">
        <h1>Delete Account</h1>
        <p>Are you sure you want to delete your account?</p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="submit" name="delete"value="Yes, Delete My Account">
        </form>
        <p><a href="user_profile.php">Cancel</a></p> <!-- Link to cancel deletion -->
    </div>
</body>
</html>
