<?php
header("content-Type:text/html;charset=UTF-8");
header("Access-Control-Allow-Origin:*");

require_once '../model/DbUntil.class.php';

$db=new DbUntil();
$sql = "select * from `goods` as a,`spfl`as b where a.spfl_id=b.cp_id  order by sx ";
$arr = $db->search($sql,array(),$con);
 $json = json_encode($arr);
//  echo "<pre>";
 echo $json;
//  echo "</pre>";