<html>
<head>
<title>LAB ITF DATABASE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  p.ex1 {
    margin-top: 25px;
  }
  </style>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'examitf.mysql.database.azure.com', 'it63070095@examitf', 'Kmitl123', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL PLEASE TRY AGAIN !: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>

<div class="container">
    <div class="form">
        <p class="ex1"><h1><center>Information</center></h1></p>
    </div>
  <table width="600" border="1" class="table table-sm table-striped" class="center" class="ex1">
    <tr class="warning">
      <th width="200"> <div align="center">ชื่อสินค้า</div></th>
      <th width="100"> <div align="center">ราคาต่อหน่วย </div></th>
      <th width="100"> <div align="center">ส่วนลด(%)</div></th>
      <th width="100"> <div align="center">ราคาหลังลด</div></th>
      <th width="100"> <div align="center">การจัดการ</div></th>
    </tr>
  <?php
  while($Result = mysqli_fetch_array($res))
  {
  ?>
    <tr>
      <td><center><?php echo $Result['product'];?></center></td>
      <td><center><?php echo $Result['price'];?></center></td>
      <td><center><?php echo $Result['discount'];?></center></td>
      <td><center><?php echo $Result['total'];?></center></td>
      <td><center><a href="edit.html"><input type="submit" value="Update" class="btn btn-secondary"></a></center></td>

    </tr>
  <?php
  }
  ?>
  </table>
  <center><a href="form.html"><input type="submit" value="INSERT" class="btn btn-dark"></a></center>
  <?php
  mysqli_close($conn);
  ?>
</div>
</body>
</html>
