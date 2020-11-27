<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'examitf.mysql.database.azure.com', 'it63070095@examitf', 'Kmitl123', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$product = $_POST['product'];
$price = $_POST['price'];
$discount = $_POST['discount'];


$sql = "INSERT INTO guestbook (product , price , discount) VALUES ('$product', '$price', '$discount')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>