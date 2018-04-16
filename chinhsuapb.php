<?php
if ($idpb = $_REQUEST["idpb"]){
  if ($idpb=="") {
  header("location:xemttphongban.php");
} else {
  $link = mysql_connect("localhost","root","") or die("Không thể kết nối cơ sở dữ liệu");
  mysql_select_db("dulieu1");
  $sql ="select * from phongban where IDPB='$idpb'";
  $result = mysql_query($sql,$link);
  if(!$result){
  header("location:xemttphongban.php");
} else{

  $row = mysql_fetch_array($result);
}
}
}



?>
<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="css1.css">
   <?php header("Content-type: text/html; charset=utf-8");
?>
  <title></title>
</head>
<body>
  <div class="timkiem">

<form name="form1" action="xulychinhsuapb.php">
  <table>
    <caption>Chỉnh sửa phòng ban </caption>

    <tbody>

      <tr>
        <td>IDNV : </td>
        <td><input type="text" name="idpb" value="<?php  echo $row[0];?>"</td>
        <td>Mô tả : </td>
        <td><input type="text" name="mota" value="<?php  echo $row[1];?>"</td>
      </tr>
      <tr>
        <td>Thời gian : </td>
        <td><input type="text" name="thoigian" value="<?php  echo $row[2];?>"></td>
      </tr>

      <tr>
        <td> <input type="submit" name="chinhsua" value="Xác nhận "></td>
        <td> <input type="button" name="exit" value="Exit"></td>
      </tr>
    </tbody>
  </table>
  </form>
</div>
</body>
</html>
