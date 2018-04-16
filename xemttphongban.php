 <link rel="stylesheet" type="text/css" href="css1.css">

<?php
header("Content-type: text/html; charset=utf-8");
$link = mysql_connect("localhost","root","") or die("Không thể kết nối cơ sở dữ liệu");
mysql_select_db("dulieu1");
$sql ="select * from phongban";
$result = mysql_query($sql,$link);
if(!$result) {
  echo "Could not run query: " .mysql_error();
} else {
    echo '<h1> Dữ liệu tất cả phòng ban</h1>';

    echo'<table id="nhanvien" border="1" width="100%>"';
    echo '<tr><th>IDPB</th><th>Mô tả</th><th>Thời gian</th><th>Chức năng</th></tr>';
    while ($row = mysql_fetch_array($result)) {
      echo '<br>';
      echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td><a href="xemthongtinNVPB.php?IDPB='.$row[0].'">Xem nhân viên</a><a href="xoaphongban.php?idpb='.$row[0].'"> Xóa phòng ban</a><a href="chinhsuapb.php?idpb='.$row[0].'"> Chỉnh sửa phòng ban</a></td></tr>';
    }
  }
?>
