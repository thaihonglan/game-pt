<!DOCTYPE HTML>
<html lang="en-us">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<meta name="description" content="PP助手安卓网-提供最全最好玩的安卓游戏、安卓Android手机游戏、安卓软件、 安卓手机主题、安卓刷机Rom，APK游戏软件等资源的免费下载！"/>
<meta name="keywords" content="安卓游戏、好玩的安卓游戏，25PP安卓网"/>
<base href="/themes/classic/" />
<link rel="icon" href="/favicon.ico" type="image/x-icon" />
<link type="text/css" rel="stylesheet" href="css/base.css?<?php echo time() ?>" />
<link type="text/css" rel="stylesheet" href="css/appDetail.css?<?php echo time() ?>" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-comment.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript">
	var currentPageImagesPath = "/static/";
	currentPageImagesPath = location.protocol == "http:" ? currentPageImagesPath : "";
</script>
<!--[if lt IE 7]>
<link href="/static/css/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body>

<!--Header begin-->
<div id="hearder" class="header clearfix">
	<!--
	<div class="topbar">
		<div class="wrap clearfix">
			<div id="userLogin" class="login fl">
				<a href="https://u.25pp.com/?url=http%3A%2F%2Fandroid.25pp.com%2F" title="Login">Login</a> |
				<a href="https://u.25pp.com/user/regist/?url=http%3A%2F%2Fandroid.25pp.com%2F" title="Register">Register</a>
			</div>
			<ul class="topMenu">
				<li><a href="javascript:void(0)" target="_blank">Home</a>|</li>
				<li><a href="javascript:void(0)" target="_blank">iOS</a>|</li>
				<li><a href="javascript:void(0)" target="_blank">Android</a>|</li>
				<li><a href="javascript:void(0)" target="_blank">News</a>|</li>
				<li><a href="javascript:void(0)" target="_blank">Forum</a>|</li>
				<li><a href="javascript:void(0)" target="_blank">Product</a>|</li>
				<li><a href="javascript:void(0)" target="_blank">iOS Jailbreak</a>|</li>
				<li><a href="javascript:void(0)" target="_blank">Payment</a>|</li>
			</ul>
		</div>
	</div>
	-->

	<div class="wrap">
		<div id="logo"><a href="http://android.25pp.com/" ><img src="/static/images/logo.jpg" alt="PP助手安卓网" title="免费安卓游戏软件下载" /></a></div>
		<div id="searchRight" class="mt25">
			<!-- <div class="search">
				<div id="searchTypeIco">
					<i class="soft"></i>
				</div>
				<ul class="typebox">
					<li><i class="soft"></i><p>软件游戏</p></li>
								<li><i class="bell"></i><p>铃声</p></li>
								<li><i class="wallpaper"></i><p>壁纸</p></li>
								<li><i class="news"></i><p>资讯</p></li>
				</ul>
							<input name="" type="text" class="input" value="搜索资源"/>
							<a href="http://android.25pp.com/search"></a>
			</div> -->
			<input name="" type="text" id="btn_search" searchbox="android" defaulttype="soft" class="seachInput" value="" />

			<p>热词：<a href="http://android.25pp.com/search/PP助手">PP助手</a><a href="http://android.25pp.com/search/QQ">QQ</a><a href="http://android.25pp.com/search/UC">UC</a><a href="http://android.25pp.com/search/淘宝">淘宝</a></p>
		</div>
	</div>
	<div id="nav">
		<?php $this->widget('zii.widgets.CMenu', array(
			'items' => array(
				array('label' => 'Home'    , 'url'=>array('/home/home/index')),
				array('label' => 'Game'    , 'url'=>array('/home/game/index')),
			),
			'htmlOptions' => array('class' => 'navList'),
			'activeCssClass' => 'on'
		)); ?>
	</div>
</div>
<!--Header end  -->

<?php echo $content; ?>

<div class="clear"></div>
<!--footer begin -->
<div id="footer">
	<ul class="main">
		<li>
			<h5>Sản phẩm</h5>
			<a href="http://pro.25pp.com/ppwin" target="_blank" rel="nofollow">PP助手(电脑)</a>
			<a href="http://pro.25pp.com/pp_iphone_zb" target="_blank" rel="nofollow">PP助手(未越狱)</a>
			<a href="http://pro.25pp.com/ppios" target="_blank" rel="nofollow">PP助手(越狱)</a>
			<a href="http://pro.25pp.com/pp_android" target="_blank" rel="nofollow">PP助手(安卓)</a>
		</li>
		<li>
			<h5>Download</h5>
			<a href="http://android.25pp.com/game/" rel="nofollow">Game</a><a href="http://android.25pp.com/software/" rel="nofollow">软件资源</a>
			<a href="http://android.25pp.com/special/" rel="nofollow">Chuyên đề</a><a href="http://android.25pp.com/bizhi/" rel="nofollow">精美壁纸</a>
		</li>
		<li>
			<h5>Khu Jailbreak</h5>
			<a href="http://www.25pp.com/jailbreak/iphone4syueyu/" rel="nofollow">Hướng dẫn Jailbreak</a><a href="http://www.25pp.com/jailbreak/unlock.html" rel="nofollow">解锁教程</a>
			<a href="http://jailbreak.25pp.com/gujian/" rel="nofollow">Firmware</a><a href="http://www.25pp.com/jailbreak/errorcode.html" rel="nofollow">常见错误</a>
		</li>
		<li class="noPadding">
			<h5>About</h5>
			<a href="http://www.25pp.com/aboutus.html" rel="nofollow">Công ty</a><a href="http://www.25pp.com/aboutus.html#zhaopin" rel="nofollow">诚聘英才</a>
			<a href="http://pro.25pp.com/feedback.html" rel="nofollow">Feedback</a><a href="http://www.25pp.com/aboutus.html#contact" rel="nofollow">联系我们</a>
		</li>
	</ul>

	<!--<div class="friendlink clearfix">-->
		<!--<h6>Liên kết</h6>-->
		<!--<div class="friendL">-->
		<!--		<a href=""></a><b>|</b> -->
				<!--</div>-->
	<!--</div>-->

	<p>Copyright © 2014 by HTLM Group
	<br/>Giấy phép số xyz - <a href="game-pt.com/home/home" class="sitemap">Sitemap</a>
	<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_5855645'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s5.cnzz.com/stat.php%3Fid%3D5855645%26show%3Dpic1' type='text/javascript'%3E%3C/script%3E"));</script>
	</p>
</div>
<!-- footer end   -->
</body>
</html>
