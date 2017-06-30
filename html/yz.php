<?php
header("content-Type:text/json;charset=UTF-8");
header("Access-Control-Allow-Origin:*"); 
session_start();
$but=$_POST["but"];
// echo $but;
$codes = $_SESSION["code"];
// echo $codes;
// echo json_encode(array($but,$codes));
//echo $but;

if($but != $codes){
    echo false;
}else {
    echo true;
}
?>