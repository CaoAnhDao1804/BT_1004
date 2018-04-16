<?php
$link = mysql_connect("localhost","root","") or die("Không thể kết nối cơ sở dữ liệu");
  mysql_select_db("dulieu1");
    $IDPB =$_REQUEST['idpb'];
    $mota= $_REQUEST['mota'];
    $thoigian=$_REQUEST['thoigian'];
    $update= mysql_query("Update phongban  set Mota='$mota', Thoigian='$thoigian' where IDPB='$IDPB'");

    if ($update){
        header("location:xemttphongban.php");
    }
    else {
        header("location:chinhsuapb.php");
    }
?>
