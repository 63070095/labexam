<html>
<head>
<title>ITF Lab</title>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'examitf.mysql.database.azure.com', 'it63070095@examitf', 'Kmitl123', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<table width="600" border="1">
  <tr>
      <th width="200"> <div align="center">ชื่อสินค้า</div></th>
      <th width="350"> <div align="center">ราคาต่อหน่วย </div></th>
      <th width="50"> <div align="center">ส่วนลด(%)</div></th>
      <th width="50"> <div align="center">ราคาหลังลด</div></th>
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
  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
</body>
</html>
