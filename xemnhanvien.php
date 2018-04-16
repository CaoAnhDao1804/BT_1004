 <link rel="stylesheet" type="text/css" href="css1.css">

<?php
header("Content-type: text/html; charset=utf-8");
$link = mysql_connect("localhost","root","") or die("Không thể kết nối cơ sở dữ liệu");
mysql_select_db("dulieu1");
$sql ="select * from nhanvien";
$result = mysql_query($sql,$link);
if(!$result) {
  echo "Could not run query: " .mysql_error();
} else {
  echo '<h1> Dữ liệu nhân viên tất cả phòng ban</h1>';
    echo'<table id = "nhanvien" border="1"  width="100%>"';
    // echo '<caption > Dữ liệu nhân viên tất cả phòng ban </caption>';
    echo '<tr><th>IDNV</th><th>Hoten</th><th>IDPB</th><th>Diachi</th><th>Chức năng</th></tr>';
    while ($row = mysql_fetch_array($result)) {
      echo '<br>';
      echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td> <a  href="chinhsuanv.php?manv='.$row[0].'" width=50%> Chỉnh sửa</a><a href="xoanv.php?manv='.$row[0].'">Xóa</a></td></tr>';
    }
  }
?>
