<!DOCTYPE HTML>
<html lang="en-us">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<meta name="description" content="Game Portal"/>
<meta name="keywords" content="Game Portal"/>
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
				<a href="game-pt.com/home/home/" title="Login">Login</a> |
				<a href="game-pt.com/home/home/" title="Register">Register</a>
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
		<div id="logo"><a href="http://game-pt.com/home/home/" ><img src="/static/images/logo.jpg" alt="Game Portal" title="GAME PORTAL" /></a></div>
		<div id="searchRight" class="mt25">
			<!-- <div class="search">
				<div id="searchTypeIco">
					<i class="soft"></i>
				</div>
				<ul class="typebox">
					<li><i class="soft"></i><p>Software</p></li>
								<li><i class="bell"></i><p>Ringtone</p></li>
								<li><i class="wallpaper"></i><p>Wallpaper</p></li>
								<li><i class="news"></i><p>News</p></li>
				</ul>
							<input name="" type="text" class="input" value="Search"/>
							<a href="game-pt.com/home/home/"></a>
			</div> -->
<!-- 			<input name="" type="text" id="btn_search" searchbox="android" defaulttype="soft" class="seachInput" value="" /> -->

<!-- 			<p>keyword：<a href="game-pt.com/home/home/search/Game Portal">Game Portal</a><a href="http://android.25pp.com/search/QQ">QQ</a><a href="http://android.25pp.com/search/UC">UC</a><a href="http://android.25pp.com/search/淘宝">淘宝</a></p> -->
		</div>
	</div>
	<div id="nav">
		<?php $this->widget('zii.widgets.CMenu', array(
			'items' => array(
				array('label' => 'Home'    , 'url'=>array('/home/home/index')),
				array('label' => 'Game'    , 'url'=>array('/home/home')),
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
			<h5>Đời sống & Pháp luật</h5>
			<a href="http://www.doisongphapluat.com/" target="_blank" rel="nofollow">Trang chủ</a>
			<a href="http://www.doisongphapluat.com/xa-hoi/" target="_blank" rel="nofollow">Xã hội</a>
			<a href="http://www.doisongphapluat.com/tin-tuc-24h" target="_blank" rel="nofollow">Tin Tức 24H</a>
			<a href="http://www.doisongphapluat.com/cong-nghe/" target="_blank" rel="nofollow">Công nghệ</a>
		</li>
		<li>
			<h5>Giải trí</h5>
			<a href="http://www.doisongphapluat.com/giai-tri/ngoi-sao/" rel="nofollow">Ngôi sao</a>
			<a href="http://www.doisongphapluat.com/giai-tri/am-nhac/" rel="nofollow">Âm nhạc</a>
			<a href="http://www.doisongphapluat.com/giai-tri/phim/" rel="nofollow">Phim ảnh</a>
			<a href="http://www.doisongphapluat.com/giai-tri/truyen-hinh/" rel="nofollow">Truyền hình</a>
		</li>
		<li>
			<h5>Thể thao</h5>
			<a href="http://www.doisongphapluat.com/the-thao/bong-da/" rel="nofollow">Bóng đá</a>
			<a href="http://www.doisongphapluat.com/the-thao/quan-vot/" rel="nofollow">Tennis</a>
			<a href="http://www.doisongphapluat.com/golf/" rel="nofollow">Golf</a>
			<a href="http://www.doisongphapluat.com/the-thao/world-cup-2014/" rel="nofollow">Worldcup 2014</a>
		</li>
		<li class="noPadding">
			<h5>Công nghệ</h5>
			<a href="http://www.techz.vn" rel="nofollow">TechZ</a>
			<a href="http://tinhte.vn" rel="">Tinh Tế</a>
			<a href="http://five.vn" rel="nofollow">5 Giây</a>
			<a href="http://www.chomobi.com" rel="nofollow">Chợ Mobi</a>
		</li>
	</ul>

	<!--<div class="friendlink clearfix">-->
		<!--<h6>Liên kết</h6>-->
		<!--<div class="friendL">-->
		<!--		<a href=""></a><b>|</b> -->
				<!--</div>-->
	<!--</div>-->

	<p>Bản quyền thuộc sở hữu công ty ABC
	<br/>Giấy phép số xyz - <a href="game-pt.com/home/home" class="sitemap">Sitemap</a>
	<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_5855645'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s5.cnzz.com/stat.php%3Fid%3D5855645%26show%3Dpic1' type='text/javascript'%3E%3C/script%3E"));</script>
	</p>
</div>
<!-- footer end   -->
</body>
</html>
