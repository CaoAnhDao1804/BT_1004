<?php
echo "hello";

if (isset($_POST['chinhsua'])){
  echo "hello";

    $hoten    =$_POST["hoten"];
    $idpb        =$_POST["idpb"];
    $diachi           =$_POST["diachi"];


    $link = mysql_connect("localhost","root","") or die("Không thể kết nối cơ sở dữ liệu");
  mysql_select_db("dulieu1");

    $insert= mysql_query("INSERT INTO nhanvien (Hoten, IDPB,Diachi) values('$hoten','$idpb','$diachi')") or die("Khong the duoc");
    if ($insert){
        echo "Bạn đã thêm thành công!";
    }
    else {
        echo "Việc thêm đã thất bại , vui lòng kiểm tra lại!";
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

  <form name="form1" action="">
  <table>
    <caption>Thêm nhân viên</caption>

    <tbody>

      <tr>
        <td>Họ tên nhân viên : </td>
        <td><input type="text" name="hoten" value=""</td>
      </tr>
      <tr>
        <td>IPPB : </td>
        <td><input type="text" name="ippb" value=""></td>
      </tr>
      <tr>
        <td>Địa chỉ nhân viên : </td>
        <td><input type="text" name="diachi" value=""></td>
      </tr>
      <tr>
        <td> <input type="submit" name="chinhsua" value="Thêm nhân viên "></td>
        <td> <input type="button" name="exit" value="Exit"></td>
      </tr>
    </tbody>
  </table>
  </form>
</div>
</body>
</html>
