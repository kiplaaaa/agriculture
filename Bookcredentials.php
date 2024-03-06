
<?php
include('db.php'); // Assuming db.php contains your database connection code

// Check if form is submitted
if(isset($_POST['submit']))
 {
    $senderName = $_POST['senderName'];
    $source = $_POST['location'];
    $destination = $_POST['destiny'];
    $recipientName = $_POST['recipientName'];
    $productName = $_POST['productName'];

    // Prepare the SQL query
    $sql = "INSERT INTO shipments (sender_name, source, destination, recipient_name, product_name) 
            VALUES ('$senderName', '$source', '$destination', '$recipientName', '$productName')";
    if ($conn->query($sql) === TRUE) {
        echo "Shipment booked successfully";
        header("Location:home.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
?>

