<?php
include('db.php');

// Check if form is submitted
if(isset($_POST['submitt'])) {
    // Get the username and password from the form
    $username = $_POST["fullNames"];
    $password = $_POST["password"];

    // Prepare the SQL query to retrieve user information
    // Use prepared statements to prevent SQL injection
    $sql = "SELECT * FROM users WHERE `Full Names` = ? AND `Password` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // User found, grant access
        $row = $result->fetch_assoc();
        echo "Access granted! Welcome, " . $row['Full Names'];
        header("Location: home.php");
        // Redirect user to a protected page or perform other actions
        exit; // Terminate script execution after redirection
    } else {
        // User not found or incorrect credentials
        // Redirect after 2 seconds
        header("Refresh: 2; URL=Login.php");
        echo "Invalid username or password";
    }
}
?>
