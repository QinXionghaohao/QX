<?php
require_once 'model/DbUntil.class.php';
class Mvc
{
    public function goumai(){
        $id=$_GET["id"];
        $db=new DbUntil();
        $sql = "select * from `goods` as a, `spfl` as b, `pinglun` as c where a.spfl_id=b.cp_id and a.id=c.pl_id and a.id=?";
        $arr = $db->search($sql,array($id),$con);
         $json = json_encode($arr);
         echo $json;
        
    }
    public function gouma(){
        $id=$_GET["id"];
        $db=new DbUntil();
        $sql = "select * from `goods` as a, `spfl` as b, `pinglun` as c where a.spfl_id=b.cp_id and a.id=c.pl_id and c.pl_id=?";
        $arr = $db->search($sql,array($id),$con);
        $json = json_encode($arr);
        echo $json;
    
    }
    public function fl(){
        $name=$_GET["name"];
        $db=new DbUntil();
        $sql="select img from `goods` as a,`spfl`as b where a.spfl_id=b.cp_id and b.name=?";
        $arr=$db->search($sql,array($name),$con);
        $json = json_encode($arr);
        echo $json;
    }
    public function shan(){
        $zong=$_GET["zong"];
        $id=$_GET["id"];
        $money=$_GET["money"];
        $db=new DbUntil();
        $sql = "update `goods` set `shu`=? where id=?";
        $arr = $db->addDelUpd($sql,array($zong,$id),$con);
        $json = json_encode($arr);
        echo $json;
    }
    public function pinglun(){
        $id=$_GET["id"];
        $comment=$_GET["comment"];
        $db=new DbUntil();
        $sql="insert into `pinglun`(`comment`,`pl_id`) values(?,?)";
        $arr=$db->search($sql,array($comment,$id),$con);
        if ($con>0){
            echo true;
//             header("location:../shouye/index.php");
        }else {
            echo false;
        }
    }
}


?>