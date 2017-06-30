<?php
header("content-Type:text/html;charset=UTF-8");
header("Access-Control-Allow-Origin:*");
require_once 'class/User.class.php';
require_once 'class/Mvc.class.php';
session_start();
$class = "";
$action = "";
if(isset($_GET["class"])&isset($_GET["action"])){
    $class = $_GET["class"];
    $action = $_GET["action"];
}elseif(isset($_POST["class"])&isset($_POST["action"])){
    $class = $_POST["class"];
    $action = $_POST["action"];
}else{
    die("方法不匹配");
}

$obj = new $class();
$obj->$action();

if(isset($obj->error)){
    echo $obj->error;
}elseif(isset($obj->success)){
    if(isset($obj->url)){
        $url = $obj->url;
        header("location:${url}");
    }else{
        echo $obj->success;
    }
}
?>
<?php 
    echo "nihao haohao";
?>
