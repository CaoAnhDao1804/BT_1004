<?php
if ($idpb = $_REQUEST["idpb"]){
  if ($idpb=="") {
  header("location:xemttphongban.php");
} else {
  $link = mysql_connect("localhost","root","") or die("Không thể kết nối cơ sở dữ liệu");
  mysql_select_db("dulieu1");
  $sql ="Delete  from phongban where IDPB='$idpb'";
  $result = mysql_query($sql,$link);
  if(!$result){
  header("location:xemttphongban.php");
} else{
  echo "Xoa thanh cong!";
}
}
}



?>
