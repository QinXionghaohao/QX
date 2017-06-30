<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/common.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
<script src="js/common_js.js" type="text/javascript"></script>
<script src="js/footer.js" type="text/javascript"></script>
<title>网站首页</title>
</head>
<style type="text/css">
a{
	color: red;
}
.bodyt{
    background-color: wheat;
    width: 1200px;

}
.bodyt div{
    display: inline-block;
    margin: 10px;
    background-color: powderblue;
    height:310px;
    width:218px;
    border-radius: 5px;
}
#font{
font-size: 18px;
color: royalblue;
}
#font1{
color: red;font-size:20px ;
}
.anniu{
    border: 1px solid yellow;
    margin-left: 5px;
    padding: 5px 10px;
    position: relative;
    top: 10px;
    cursor: pointer;
    background-color: yellow;
}

#dk{
/*border: 1px solid red;*/
background-color: aquamarine;
border-radius: 15px;
padding: 20px;
width: 500px;
height: 600px;
position: absolute;
z-index: 10000;
display: none;
}
.span{
    font-size: 20px;
    color: red;
}
#aa{
position: absolute;
/*background-color: royalblue;*/
width: 500px;
height: 250px;
top: 350px;
}
#pl{
margin-top: 30px;
}
.av{
	position: relative;
	top: -15px;
	padding-left: 20px;
	font-size: 20px;
	color: red;
}
.wbk{
			color: black; 
			background-color: white; 
			border: solid 2px aquamarine; 
			width: 490px; 
			height: 130px; 
			overflow-y: scroll;
			text-align: left; 
		}
</style>
<body>
<head>
<div id="header_top">
<div id="top">
<div class="Inside_pages">
<div class="Collection">

        <?php

        if (isset($_COOKIE["username"])){
            echo $_COOKIE["username"]."欢迎你";
            echo "<a href='../index.php?class=User&action=logout' class='pan'>退出登陆</a>";
        }else {
            echo "<a href='../html/dlu.php' class='green pan' id='a'>请登录</a>";
        }
        
        ?>
        
<a href="../houtai/page/login.html" class="green">管理员登陆</a>
<a href="../html/zhuce.php" class="green">免费注册</a></div>
<div class="hd_top_manu clearfix">
<ul class="clearfix">
<li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="">申请商家</a></li>
<li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">首页</a></li>
<li class="hd_menu_tit" data-addclass="hd_menu_hover"> <a href="#">我的小充</a> </li>
<li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">消息中心</a></li>
<li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">商品分类</a></li>
<li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">我的购物车<b id="ci-count"></b></a></li>
</ul>
</div>
</div>
</div>
<div id="header"  class="header page_style">
<div class="logo"><a href="index.html"><img src="images/logo.png" /></a></div>
<!--结束图层-->
<div class="Search">
<div class="search_list">
<ul>
<li class="current"><a href="#">产品</a></li>
<li><a href="#">信息</a></li>
</ul>
</div>
<a name="aa"></a>
<div class="clear search_cur">
<input name="searchName" id="searchName" class="search_box" onkeydown="keyDownSearch()" type="text">
<input name="" type="submit" value="搜 索"  class="Search_btn"/>
</div>
<div class="clear hotword">热门搜索词：香醋&nbsp;&nbsp;&nbsp;茶叶&nbsp;&nbsp;&nbsp;草莓&nbsp;&nbsp;&nbsp;葡萄&nbsp;&nbsp;&nbsp;菜油</div>
</div>
<!--购物车样式-->
<div class="hd_Shopping_list" id="Shopping_list">
<div class="s_cart"><a href="http://localhost/XM/shouye/yhxx.html">我的购物车</a> <i class="ci-right">&gt;</i><i class="ci-count" id="shopping-amount"></i></div>
<div class="dorpdown-layer">
<div class="spacer"></div>
<div class="prompt" ></div><div class="nogoods"><span id="gwtp"></span><span class="av" id="gwmc"></span><span class="av" id="gwjg"></span></div>
<ul class="p_s_list">
<li>
<!--<div class="img"><img src="images/tianma.png"></div>-->
<!--<div class="content"><p class="name"><a href="#">产品名称</a></p><p>颜色分类:紫花8255尺码:XL</p></div>-->
<div class="Operations">
<p class="Price"></p>
<p><a href="#"></a></p></div>
</li>
</ul>
<div class="Shopping_style">
<!--<div class="p-total">共<b>1</b>件商品　共计<strong>￥ 515.00</strong></div>-->
<a href="http://localhost/XM/shouye/yhxx.html" title="去购物车结算" id="btn-payforgoods" class="Shopping">去购物车结算</a>
</div>
</div>
</div>
</div>
<!--菜单栏-->
<div class="Navigation" id="Navigation">
<ul class="Navigation_name">
<li><a href="Home.html">首页</a></li>
<li class="hour"><span class="bg_muen"></span><a href="#">半小时生活圈</a></li>
<li><a href="#">你身边的超市</a></li>
<li><a href="#">预售专区</a><em class="hot_icon"></em></li>
<li><a href="products_list.html">商城</a></li>
	
<li><a href="#">好评商户</a></li>
<li><a href="#">热销活动</a></li>
<li><a href="Brands.html">联系我们</a></li>
</ul>
</div>
<script>$("#Navigation").slide({titCell:".Navigation_name li",trigger:"click"});</script>
</div>
</head>
<!--广告幻灯片样式-->
<div id="slideBox" class="slideBox">
<div class="hd">
<ul class="smallUl"></ul>
</div>
<div class="bd">
<ul>
<li><a href="#" target="_blank"><div style="background:url(AD/ad-1.jpg) no-repeat; background-position:center; width:100%; height:450px;"></div></a></li>
<li><a href="#" target="_blank"><div style="background:url(AD/ad-2.jpg) no-repeat; background-position:center ; width:100%; height:450px;"></div></a></li>
<li><a href="#" target="_blank"><div style="background:url(AD/ad-3.jpg) no-repeat rgb(226, 155, 197); background-position:center; width:100%; height:475px;"></div></a></li>
<li><a href="#" target="_blank"><div style="background:url(AD/ad-7.jpg) no-repeat #f7ddea; background-position:center; width:100%; height:450px;"></div></a></li>
<li><a href="#" target="_blank"><div style="background:url(AD/ad-6.jpg) no-repeat  #F60; background-position:center; width:100%; height:450px;"></div></a></li>
</ul>
</div>
<!-- 下面是前/后按钮-->
<a class="prev" href="javascript:void(0)"></a>
<a class="next" href="javascript:void(0)"></a>

</div>
<script type="text/javascript">
jQuery(".slideBox").slide({titCell:".hd ul",mainCell:".bd ul",autoPlay:true,autoPage:true});
</script>
</div>
<div id="dk">
	<div id="tp"></div>
	<span id="mz" class="span"></span>
	<span id="jg" class="span"></span>
	<span id="sl" class="span"></span>
<div id="aa" class="span">
<form >
购买数量：<input type="text" id="zongjia" name="num" value="1" />
</form>
总&emsp;&emsp;价：<span id="zj"></span><br/>
	
<a id="gm" class="anniu">购买</a>
<a id="qx" class="anniu">取消购买</a>

<div id="pl">
<span id="pp">评论：</span>
	<div id="lspl" class="wbk"  align=center></div>
</div>
</div>
</div>

<!--内容样式-->
<div id="mian">
<div class="clearfix marginbottom">
<!--产品分类样式-->
<div class="Menu_style" id="allSortOuterbox">
<div class="title_name"><em></em>所有商品分类</div>
<div class="content hd_allsort_out_box_new">
<ul class="Menu_list">
<li class="name">
<div class="Menu_name"><a href="product_list.html" >茶品类</a> <span>&lt;</span></div>
<div class="link_name">
<p>
<a href="Product_Detailed.html">茅台</a> |
<a href="#">五粮液</a> |
<a href="#">郎酒</a> |
<a href="#">剑南春</a>
<a href="Product_Detailed.html">茅台</a> |
<a href="#">五粮液</a> |
<a href="#">郎酒</a> |
<a href="#">剑南春</a>
</p>
</div>
<div class="menv_Detail">
<div class="cat_pannel clearfix">
<div class="hd_sort_list">
<dl class="clearfix" data-tpc="1">
<dt><a href="#">面膜<i>></i></a></dt>
<dd><a href="#">撕拉面膜</a><a href="#">面膜贴</a><a href="#">免洗面膜</a><a href="#">水洗面膜</a></dd>
</dl>
<dl class="clearfix" data-tpc="2">
<dt><a href="#">洁面<i>></i></a></dt>
<dd><a href="#">洁面摩丝</a><a href="#">洁面乳 </a><a href="#">洁面啫哩/胶</a><a href="#">面部去角质/磨砂</a><a href="#">洁面膏/霜</a><a href="#">洁肤皂</a></dd>
</dl>
<dl class="clearfix" data-tpc="3">
<dt><a href="#">化妆水<i>></i></a></dt>
<dd><a href="#"> 喷雾</a><a href="#"> 精华水</a><a href="#"> 柔肤水</a><a href="#">爽肤水</a><a href="#">收敛水/紧肤水</a></dd>
</dl>
<dl class="clearfix" data-tpc="4">
<dt><a href="#">眼部护理<i>></i></a></dt>
<dd><a href="#"> 眼膜</a><a href="#"> 眼部凝胶</a><a href="#">眼部精华</a><a href="#">眼霜</a></dd>
</dl>
<dl class="clearfix" data-tpc="4">
<dt><a href="#">眼部护理<i>></i></a></dt>
<dd><a href="#"> 眼膜</a><a href="#"> 眼部凝胶</a><a href="#">眼部精华</a><a href="#">眼霜</a></dd>
</dl>
<dl class="clearfix" data-tpc="4">
<dt><a href="#">防晒<i>></i></a></dt>
<dd><a href="#"> 眼膜</a><a href="#"> 眼部凝胶</a><a href="#">眼部精华</a><a href="#">眼霜</a></dd>
</dl>
<dl class="clearfix" data-tpc="4">
<dt><a href="#">唇部护理<i>></i></a></dt>
<dd><a href="#"> 眼膜</a><a href="#"> 眼部凝胶</a><a href="#">眼部精华</a><a href="#">眼霜</a></dd>
</dl> <dl class="clearfix" data-tpc="4">
<dt><a href="#">乳液/面霜<i>></i></a></dt>
<dd><a href="#"> 乳液</a><a href="#"> 面霜</a><a href="#">按摩霜</a><a href="#">面部啫喱</a><a href="#">凝露/凝胶</a></dd>
</dl>
</div><div class="Brands">
</div>
</div>
<!--品牌-->
</div>
</li>
<li class="name">
<div class="Menu_name"><a href="#" >豆制品类</a><span>&lt;</span></div>
<div class="link_name">
<a href="Product_Detailed.html"> 面霜</a> | <a href="#">眼霜</a> | <a href="#"> 面膜</a> | <a href="#">护肤套装</a>

</div>
<div class="menv_Detail">
<div class="cat_pannel clearfix">
</div>
</div>
</li>
<li class="name">
<div class="Menu_name"><a href="#" >菌菇类</a><span>&lt;</span></div>
<div class="link_name">
<a href="Product_Detailed.html"> 面霜</a><a href="#">眼霜</a><a href="#"> 面膜</a><a href="#">护肤套装</a>

</div>
<div class="menv_Detail">
<div class="cat_pannel clearfix">
</div>
</div>
</li>
<li class="name">
<div class="Menu_name"><a href="#" >粮油五谷类</a><span>&lt;</span></div>
<div class="link_name">
<a href="Product_Detailed.html"> 面霜</a><a href="#">眼霜</a><a href="#"> 面膜</a><a href="#">护肤套装</a>

</div>
<div class="menv_Detail">
<div class="cat_pannel clearfix">
</div>
</div>
</li>
<li class="name">
<div class="Menu_name"><a href="#" >禽蛋类</a><span>&lt;</span></div>
<div class="link_name">
<a href="Product_Detailed.html"> 面霜</a><a href="#">眼霜</a><a href="#"> 面膜</a><a href="#">护肤套装</a>

</div>
<div class="menv_Detail">
<div class="cat_pannel clearfix">
</div>
</div>
</li>
<li class="name">
<div class="Menu_name"><a href="#" >蔬菜类类</a><span>&lt;</span></div>
<div class="link_name">
<a href="Product_Detailed.html"> 面霜</a><a href="#">眼霜</a><a href="#"> 面膜</a><a href="#">护肤套装</a>

</div>
<div class="menv_Detail">
<div class="cat_pannel clearfix">
</div>
</div>
</li>
</ul>
</div>
</div>
<script>$("#allSortOuterbox").slide({ titCell:".Menu_list li",mainCell:".menv_Detail",	});</script>
<!--产品栏切换-->
<div class="product_list left">
<div class="slideGroup">
<div class="parHd">
<ul><li>新品上市</li></ul>
</div>
<div class="parBd">
<div class="slideBoxs">
<a class="sPrev" href="javascript:void(0)"></a>
<ul>
<li>
<div class="pic"><a href="#" target="_blank"><img src="products/p_11.jpg" /></a></div>
<div class="title">
<a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
<h3><b>￥</b>23.00</h3>
</div>
</li>
<li>
<div class="pic"><a href="#" target="_blank"><img src="products/p_12.jpg" /></a></div>
<div class="title">
<a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
<h3><b>￥</b>23.00</h3>
</div>
</li>
<li>
<div class="pic"><a href="#" target="_blank"><img src="products/p_13.jpg" /></a></div>
<div class="title">
<a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
<h3><b>￥</b>23.00</h3>
</div>
</li>
<li>
<div class="pic"><a href="#" target="_blank"><img src="products/p_15.jpg" /></a></div>
<div class="title">
<a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
<h3><b>￥</b>23.00</h3>
</div>
</li>
</ul>
<a class="sNext" href="javascript:void(0)"></a>
</div><!-- slideBox End -->

<div class="slideBoxs">
<a class="sPrev" href="javascript:void(0)"></a>
<ul>
<li>
<div class="pic"><a href="#" target="_blank"><img src="../pup/u=4031135461,3155734745&fm=26&gp=0.jpg" /></a></div>
<div class="title">
<a href="#" target="_blank" class="name">坨坨牛肉500g*3/箱</a>
<h3><b>￥</b>800.00</h3>
</div>
</li>
<li>
<div class="pic"><a href="#" target="_blank"><img src="products/p_15.jpg" /></a></div>
<div class="title">
<a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
<h3><b>￥</b>23.00</h3>
</div>
</li>
<li>
<div class="pic"><a href="#" target="_blank"><img src="products/p_34.jpg" /></a></div>
<div class="title">
<a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
<h3><b>￥</b>23.00</h3>
</div>
</li>
<li>
<div class="pic"><a href="#" target="_blank"><img src="products/p_58.jpg" /></a></div>
<div class="title">
<a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
<h3><b>￥</b>23.00</h3>
</div>
</li>
</ul>
<a class="sNext" href="javascript:void(0)"></a>
</div><!-- slideBox End -->

<div class="slideBoxs">
<a class="sPrev" href="javascript:void(0)"></a>
<ul>
<li>
<div class="pic"><a href="#" target="_blank"><img src="products/p_57.jpg" /></a></div>
<div class="title">
<a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
<h3><b>￥</b>23.00</h3>
</div>
</li>
<li>
<div class="pic"><a href="#" target="_blank"><img src="products/p_56.jpg" /></a></div>
<div class="title">
<a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
<h3><b>￥</b>23.00</h3>
</div>
</li>
<li>
<div class="pic"><a href="#" target="_blank"><img src="products/p_54.jpg" /></a></div>
<div class="title">
<a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
<h3><b>￥</b>23.00</h3>
</div>
</li>
<li>
<div class="pic"><a href="#" target="_blank"><img src="products/p_55.jpg" /></a></div>
<div class="title">
<a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
<h3><b>￥</b>23.00</h3>
</div>
</li>
</ul>
<a class="sNext" href="javascript:void(0)"></a>
</div><!-- slideBox End -->
<div class="slideBoxs">
<a class="sPrev" href="javascript:void(0)"></a>
<ul>
<li>
<div class="pic"><a href="#" target="_blank"><img src="products/p_50.jpg" /></a></div>
<div class="title">
<a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
<h3><b>￥</b>23.00</h3>
</div>
</li>
<li>
<div class="pic"><a href="#" target="_blank"><img src="products/p_51.jpg" /></a></div>
<div class="title">
<a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
<h3><b>￥</b>23.00</h3>
</div>
</li>
<li>
<div class="pic"><a href="#" target="_blank"><img src="products/p_52.jpg" /></a></div>
<div class="title">
<a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
<h3><b>￥</b>23.00</h3>
</div>
</li>
<li>
<div class="pic"><a href="#" target="_blank"><img src="products/p_53.jpg" /></a></div>
<div class="title">
<a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
<h3><b>￥</b>23.00</h3>
</div>
</li>
</ul>
<a class="sNext" href="javascript:void(0)"></a>
</div><!-- slideBox End -->
<div class="slideBoxs">
<a class="sPrev" href="javascript:void(0)"></a>
<ul>
<li>
<div class="pic"><a href="#" target="_blank"><img src="products/p_15.jpg" /></a></div>
<div class="title">
<a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
<h3><b>￥</b>23.00</h3>
</div>
</li>
<li>
<div class="pic"><a href="#" target="_blank"><img src="products/p_17.jpg" /></a></div>
<div class="title">
<a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
<h3><b>￥</b>23.00</h3>
</div>
</li>
<li>
<div class="pic"><a href="#" target="_blank"><img src="products/p_16.jpg" /></a></div>
<div class="title">
<a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
<h3><b>￥</b>23.00</h3>
</div>
</li>
<li>
<div class="pic"><a href="#" target="_blank"><img src="products/p_19.jpg" /></a></div>
<div class="title">
<a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
<h3><b>￥</b>23.00</h3>
</div>
</li>
</ul>
<a class="sNext" href="javascript:void(0)"></a>
</div><!-- slideBox End -->

</div><!-- parBd End -->
</div>
<script type="text/javascript">
/* 内层图片无缝滚动 */
jQuery(".slideGroup .slideBoxs").slide({ mainCell:"ul",vis:4,prevCell:".sPrev",nextCell:".sNext",effect:"leftMarquee",interTime:50,autoPlay:true,trigger:"click"});
/* 外层tab切换 */
jQuery(".slideGroup").slide({titCell:".parHd li",mainCell:".parBd"});
</script>
<!--广告样式-->
<div class="Ads_style"><a href="#"><img src="images/AD_03.png"  width="318"/></a><a href="#"><img src="images/AD_04.png" width="318"/></a><a href="#"><img src="images/AD_06.png" width="318"/></a></div>
</div>
</div>
<div class="bodyt">
</div>
<!--网站页脚-->
<div class="copyright">
<div class="copyright-bg">
<div class="hotline">为生活充电在线 <span>招商热线：****-********</span> 客服热线：400-******</div>
<div class="hotline co-ph">
	<a href="#aa">年代的啊</a>
<p>版权所有Copyright ©***************</p>
<p>*ICP备***************号 不良信息举报</p>
<p>总机电话：****-*********/194/195/196 客服电话：4000****** 传 真：********
</div>
</div>
</div>
<!--右侧菜单栏购物车样式-->
<div class="fixedBox">
<ul class="fixedBoxList">
<li class="fixeBoxLi user"><a href="#"> <span class="fixeBoxSpan"></span> <strong>消息中心</strong></a> </li>
<li class="fixeBoxLi Home"> <a href="./"> <span class="fixeBoxSpan"></span> <strong>收藏夹</strong> </a> </li>
<li class="fixeBoxLi BackToTop"> <span class="fixeBoxSpan"></span> <strong>返回顶部</strong> </li>
</ul>
</div>
<script type="text/javascript" src="../html/jquery-1.7.1.js"></script>
<script type="text/javascript">
$(function(){
    //				$.ajax({
    //					type:"get",
    //					data:{"class":"Mvc","action":"session"}
    //					url:"http://localhost/XM/index.php",
    //					success:function(res){
    //						alert(aa);
    //					}
    //				})
    /*$.ajax简结方式*/
    //				$.get(
    //					"http://localhost/XM/class/sytp.php",
    //					function(res){
    //						res=eval(res);
    //						for(i=0;i<res.length;i++){
    //							var obj = res[i];
    //							var goumai="<span class='anniu'id='gou'>购买</span>";
    //							var jiaru="<span class='anniu'>加入购物车</span>";
    //							var img = obj['img'];
    //							var tp ="<img src='"+img+"' style='height:220px;width:218px' />";
    //							var qian=".00"
    //							$(".bodyt").append("<div>"+tp+"<span id='font1'>"+"￥"+obj.jiage+qian+"</span><br/><span id='font'>"+obj.namesp+"</span><br>"+goumai+""+jiaru+"</div>");
    //
    //						}
    //					}
    //				)
    /* 遍历数据库页面类容 */
    var zong="";
    var aa="";
    $.ajax({
        type:"get",
        url:"http://localhost/XM/class/sytp.php",
        success:function(res){
            res=eval(res);
            for(i=0;i<res.length;i++){
                var obj = res[i];
                var goumai="<span class='anniu gou' for='"+obj.id+"' >购买</span>";
                var jiaru="<span class='anniu che' for='"+obj.id+"' >加入购物车</span>";
                var img = obj['img'];
                var tp ="<img src='"+img+"' style='height:220px;width:218px' />";
                var qian=".00";
                $(".bodyt").append("<div>"+tp+"<span id='font1'>"+"￥"+obj.jiage+qian+"</span><br/><span id='font'>"+obj.namesp+"</span><br>"+goumai+""+jiaru+"</div>");
            }
            /* 弹出购买栏 */
            $(".gou").live("click",function(){
          		var aa=$(".pan").text();
				if(aa=="请登录"){
					alert("未登录，请先登录");
				}else if(aa=="退出登陆"){
	                var id=$(this).attr("for");
	                $("#lspl").html("");
	                $("#dk").css("display","block");
	                $("#dk").css("position","fixed").css("top","100px").css("left","35%");
	                $.ajax({
	                    type:"get",
	                    data:{"id":id,"class":"Mvc","action":"goumai"},
	                    url:"http://localhost/XM/index.php?",
	                    success:function(res){
	                        res=eval(res);
	                        var obj=res[0];
	                        var img=obj['img'];
	                        var tp="<img src='"+img+"' style='height:300px;width:300px' />";
	                        var jiage="￥";
	                        var ll=".00";
	                        $("#tp").html(""+tp+"");
	                        $("#mz").html(""+obj.namesp+"");
	                        $("#jg").html(""+jiage+obj.jiage+ll+"");
	                        $("#sl").html(""+"剩余数量："+obj.shu+"");	                        
	                        /*购买总价*/
	                        $("#zj").html(obj.jiage+".00");
	                        for(i = 0; i < res.length; i++) {
								var obj = res[i];
								$("#lspl").append("<br><span>"+"&emsp;"+"&emsp;"+(i+1)+"."+obj.comment+"</span>");
							}
	                        $("#zongjia").keyup(function(){
	                            zong=parseInt($("#zongjia").val());
	                            aa=zong*obj.jiage;
	                            $("#zj").html(aa+".00");
	                            if(zong>obj.shu){
	                            	alert("数量不够");
	                            	return false;
	                            }
	                        })
	                        /*购买商品*/
	                            $("#gm").live("click",function(){
	                                var zo=$("#zongjia").val();
	                                zong=obj.shu-zo;
	                                aa=zo*obj.jiage;
	                                $.ajax({
	                                    type:"get",
	                                    data:{"money":aa,"id":id,"zong":zong,"class":"Mvc","action":"shan"},
	                                    url:"http://localhost/XM/index.php",
	                                    success:function(res){
	                                        if(res){
	                                            alert("购买成功");
	                                            location.href="shangjia.html?id="+id;
	                                        }
	                                    }
	                                });
	                            })
	                           	$("#qx").live("click",function(){
	                           		$("#dk").css("display","none");
									$("#db").html("");
	                           	})
	                    }
	                });
              	}
            })
             var a=0;
			        $(".che").live("click",function(){
			            a+=1;
			            $(".ci-count").html(a);
			            var id=$(this).attr("for");
			           	$.ajax({
			           		type:"get",
			           		data:{"id":id,"class":"Mvc","action":"goumai"},
			           		url:"http://localhost/XM/index.php",
			           		success:function(res){
			           			res=eval(res);
			           		var obj=res[0];
	                        var img=obj['img'];
	                        var tp="<img src='"+img+"' style='height:50px;width:50px;' />";
	                        var jiage="￥";
	                        var ll=".00";
	                        $("#gwtp").html(""+tp+"");
	                        $("#gwmc").html(""+obj.namesp+"");
	                        $("#gwjg").html(""+jiage+obj.jiage+ll+"");
			           		}
			           	});
			        })
        }
    });
        
})
</script>
</body>
</html>
