<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'examitf.mysql.database.azure.com', 'it63070095@examitf', 'Kmitl123', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL PLEASE TRY AGAIN: '.mysqli_connect_error());
}


$product = $_POST['product'];
$price = $_POST['price'];
$discount = $_POST['price'];

$sql = "UPDATE guestbook SET price ='$price', discount = '$discount' WHERE product='$product' ";


if (mysqli_query($conn, $sql)) {
    echo "Edited successfully!";
    echo '<a href="https://nidaweb.azurewebsites.net/show.php"> click here to open first page </a>';
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>