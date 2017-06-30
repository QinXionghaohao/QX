<?php
header("content-Type:text/html;charset=UTF-8");
header("Access-Control-Allow-Origin:*");
$id=$_GET["id"];
require_once '../model/DbUntil.class.php';
$db = new DbUntil();
$sql = "delete from `goods` where `id`=?";
$db->addDelUpd($sql, array($id), $con);
if ($con>0){
    echo true;
}else {
    echo false;
}
