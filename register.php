<?php
include('db.php'); // Assuming db.php contains your database connection code

// Check if form is submitted
if(isset($_POST['submit'])) {
    // Get the form data
    $fullNames = $_POST["fullNames"];
    $phoneNumber = $_POST["phoneNumber"];
    $email = $_POST["email"];
    $id_number = $_POST["id_number"];
    $password = $_POST["password"];
    $passwordd = $_POST["conpassword"];

    // Prepare the SQL query
    $sql = "INSERT INTO users (`Full Names`, `Phone Number`, `Email`, `ID number`, `Password`, `Confirm password`) 
            VALUES ('$fullNames', '$phoneNumber', '$email', '$id_number', '$password', '$passwordd')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: Login.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        header("Location: Login.php"); // Redirect to Login.php
        exit; // Ensure no further code execution after redirection
    }
} else {
    echo "Form not submitted";
}
?>
