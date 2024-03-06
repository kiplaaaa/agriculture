<?php
include('db.php'); // Assuming db.php contains your database connection code

// Check if form is submitted
if(isset($_POST['submit']))
 {
    $senderName = $_POST['name'];
    $source = $_POST['email'];
    $destination = $_POST['message'];
    

    // Prepare the SQL query
    $sql = "INSERT INTO faq (sender_name, source, destination) 
            VALUES ('$senderName', '$source', '$destination')";
    if ($conn->query($sql) === TRUE) {
        echo "Messaged successfully";
        header("Location: home.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
?>


