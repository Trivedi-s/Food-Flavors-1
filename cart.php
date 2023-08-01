<?php
$itemName = $_POST['itemName'];    
$conn = new mysqli("localhost", "root","", "newfoodflv");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into cart(itemName)values(?)");
    $stmt->bind_param("s", $itemName);
    $stmt->execute();
    echo "Done...!";
    $stmt->close();
    $conn->close();
}
?> 
