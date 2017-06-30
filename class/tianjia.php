<?php
header("content-Type:text/html;charset=UTF-8");
header("Access-Control-Allow-Origin:*");
require_once '../model/DbUntil.class.php';

    if(is_uploaded_file($_FILES["filename"]["tmp_name"])){//判断是否为上传文件
        $interim = $_FILES["filename"]["tmp_name"]; //临时文件地址
        $addclass = "../pup/".$_FILES["filename"]["name"];//目标保存地址
        move_uploaded_file($interim,$addclass);//将文件从临时区域移动到目标地址
    }
    if($_POST){
        $namesp=$_POST["namesp"];
        $jiage=$_POST["jiage"];
        $shu=$_POST["shu"];
        $spfl_id=$_POST["spfl_id"];
    }
    $db = new DbUntil();
    $sql = "insert into `goods`(`namesp`,`jiage`,`img`,`shu`,`spfl_id`) values(?,?,?,?,?)";
    $db->addDelUpd($sql, array($namesp,$jiage,$addclass,$shu,$spfl_id), $con);
    
    if ($con>0){
       header("location:../houtai/page/home.html");
    }else {
        echo false;
    }
