<?php
include 'header.php';
include 'sidebar.php';
include 'dbconfig.php';

$sqlAdminProduct = "SELECT * FROM Product_master ";
$objQuerysqlProduct = mysqli_query($dbconfig, $sqlselProduct);
?>
    <td width="80%" align="center">
    <h1>สินค้าทั้งหมด</h1>
    <table border="1" width="100%">
      <th width="5%">รหัสสินค้า</th>
      <th>ชื่อสินค้า</th>
      <th>รายละเอียด</th>
      <th>ราคา</th>
      <th>รูปภาพ</th>
      <?php
                                    while ($objResultProduct = mysqli_fetch_array($objQuerysqlProduct)) {
                                        ?>
                                        <tr>
                                          <td width="30%">
                                              <img src="images\products\products<?php echo $objResultProduct["Product_ID"]; ?>.jpg" alt="" width="200px"><br>
                                          </td>
                                          <td valign="top" align="left">
                                            <b>รหัสสินค้า</b> : <?php echo $objResultProduct["Product_ID"]; ?><br>
                                            <b>ชื่อสินค้า</b> : <?php echo $objResultProduct["Product_name"]; ?><br>
                                            <b>รายละเอียด</b> : <?php echo $objResultProduct["Product_detail"]; ?><br><br>
                                            <b>ราคา</b> : <?php echo $objResultProduct["Price"]; ?> บาท<br><br>
                                            <a href="order.php?ProductID=<?php echo $objResultProduct["Product_ID"];?>">สั่งซื้อ</a>
                                          </td>
                                        </tr>
                                        <?php
                                    }
                                    mysqli_close($dbconfig);
                                    ?>
    </table>
    </td>
<?php include 'footer.php' ?>
