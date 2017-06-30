<?php
header("content-Type:text/html;charset=UTF-8");
require_once "model/DbUntil.class.php";
class User
{
    var $id;
    var $username;
    var $password;
//     //保存等级
    var $vip;
//     //保存失败信息
    var $error;
//     //保存成功信息
    var $success;
//     //跳转的页面
    var $url;
    var $db;
    public function __construct(){
        $this->db = new DbUntil();
    }
    
    private function create($username,$password,$vip){
        $this->username = $username;
        $this->password = $password;
        $this->vip=$vip;
    }

    /**
     * 注册方法，传两个参数
     * username代表用户名
     * password代表密码
     * 也可以使用不传的方式
     */
    public function register(){
//        session_start();
       if ($_SESSION["code"]==$_POST["w"]){
        if(isset($_POST["username"])&isset($_POST["password"])&isset($_POST["pass"])){
            $username = $_POST["username"];
            $password = $_POST["password"];
            $pass=$_POST["pass"];
            if ($password==$pass){
                    $sql = "select * from `yonghu` where username=?";
                    $this->db->search($sql,array($username),$con);
                    if($con>0){
                        $this->error = "用户名已存在";
                    }else{                  
                        $dengji=1;
                        if($username=="浩浩"||$username=="秦雄"){
                            $dengji=2;
                        };
                        $sql1 = "insert into `yonghu`(`username`,`password`,`vip`) values(?,?,?)";
                        $res = $this->db->addDelUpd($sql1,array($username,$password,$dengji), $con);
                        if($res){
                            $this->success = "注册成功"; 
                            $sql = "select * from `yonghu` where username=?";
                            $arr=$this->db->search($sql,array($username),$con);
                            if($con>0){
                                $this->create($arr[0]["username"],$arr[0]["password"], $arr[0]["vip"]);
                                if($this->vip==1){
                                    $this->url="http://localhost/XM/html/dlu.php";
                                }elseif($this->vip==2){
                                    $this->url="http://localhost/XM/houtai/page/login.html";
                                }
                            }
                               
                        }
                       
                    }
                }else {
                    echo "两次密码不相同";
                    echo "<meta http-equiv=\"refresh\" content=\"1;url='/XM/html/zhuce.php'\">";
                }   
             }
         }else {
             echo "验证码错误";
             echo "<meta http-equiv=\"refresh\" content=\"1;url='/XM/html/zhuce.php'\">";
         }
    }
    
    /**
     * 登陆方法
     */
     function login(){
        if(isset($_POST["username"])&isset($_POST["password"])){
            $username = $_POST["username"];
            $password = $_POST["password"];
    
            $sql = "select * from `yonghu` where `username`=? and `password`=?";
            $arr = $this->db->search($sql,array($username,$password),$con);
            if($con>0){
                $this->create($arr[0]["username"],$arr[0]["password"], $arr[0]["vip"]);
                $this->success = "登陆成功";
                                setcookie("username",$username,time()+50000);
//                 $_SESSION["username"]=$username;
                if($this->vip==1){
                    $this->url="http://localhost/XM/shouye/index.php";
                }elseif($this->vip==2){
                    $this->url="http://localhost/XM/houtai/page/index.php";
                }
            }else {
                $this->error="用户名或者密码错误";
                echo "<meta http-equiv=\"refresh\" content=\"1;url='/XM/html/dlu.php'\">";
            }
        }
    }
    
    public function logout(){
        setcookie("username",username,time()-1);
        $this->success="退出成功";
        $this->url="shouye/index.php";
    }
    public function __call($fun,$args){
        echo "不能调用不存在的方法${fun},"."参数是:";
        print_r($args);
    }

}
?>