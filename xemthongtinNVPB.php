 <link rel="stylesheet" type="text/css" href="css1.css">

<?php
header("Content-type: text/html; charset=utf-8");

$mapb = $_REQUEST['IDPB'];
//ket noi co so  du lieu
$link = mysql_connect("localhost","root","") or die("Không thể kết nối cơ sở dữ liệu");
mysql_select_db("dulieu1");

if($mapb==""){
  $sql ="select * from nhanvien";
} else {
  $sql ="select * from nhanvien where IDPB ='$mapb'";

}
 $result = mysql_query($sql,$link);
if(!$result) {
  echo "Could not run query: " .mysql_error();
} else {
    echo '<h1> Dữ liệu nhân viên ứng với phòng ban :'.$mapb.'</h5>';
    echo'<table id ="nhanvien" border="1" width="100%>"';
    //echo '<caption> Du lieu nhan vien ung voi phong ban:'.$mapb.' </caption>';
    echo '<tr><th>IDNV</th><th>Hoten</th><th>Diachi</th></tr>';
    while ($row = mysql_fetch_array($result)) {
      echo '<br>';
      echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[3].'</td></tr>';
    }
  }


?>
