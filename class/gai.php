<?php
header("content-Type:text/html;charset=UTF-8");
header("Access-Control-Allow-Origin:*");
$id=$_GET["id"];
require_once '../model/DbUntil.class.php';
$db = new DbUntil();
    $sql="select * from `goods` where `id`=? and `sx`='已上架'";
    $db->addDelUpd($sql,array($id),$con);
    if ($con>0){
        $sql = "update `goods` set `sx`='已下架' where `id`=?";
        $db->addDelUpd($sql,array($id), $con);
        if ($con>0){
            echo ("成功下架");
        }else {
            echo false;
        }
    }else {
   
        $sql = "update `goods` set `sx`='已上架' where `id`=?";
        $db->addDelUpd($sql,array($id), $con);
        if ($con>0){
            echo ("成功上架");
        }else {
            echo false;
        }
    }