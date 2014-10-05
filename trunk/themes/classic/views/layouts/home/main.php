<!DOCTYPE HTML>
<html lang="en-us">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<meta name="description" content="Vương Quốc Game" />
<meta name="keywords" content="Vương Quốc Game" />
<link rel="icon" href="/favicon.ico" type="image/x-icon" />
<link type="text/css" rel="stylesheet"
	href="<?php echo THEME_URL; ?>css/home.css?<?php echo time() ?>" />

<script type="text/javascript"
	src="<?php echo THEME_URL; ?>js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo THEME_URL; ?>js/home.js"></script>
<script type="text/javascript">
		var currentPageImagesPath = "/static/";
		currentPageImagesPath = location.protocol == "http:" ? currentPageImagesPath : "";
	</script>
<!--[if lt IE 7]>
	<link href="/static/css/ie6.css" rel="stylesheet" type="text/css" />
	<![endif]-->

</head>
<body>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-55109706-1', 'auto');
  ga('send', 'pageview');
</script>

	<!-- Google Tag Manager -->
	<noscript>
		<iframe src="//www.googletagmanager.com/ns.html?id=GTM-MNKRQM"
			height="0" width="0" style="display: none; visibility: hidden"></iframe>
	</noscript>
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MNKRQM');</script>
	<!-- End Google Tag Manager -->


	<!--Header begin-->
	<div id="hearder" class="header clearfix">
		<!--
	<div class="topbar">
		<div class="wrap clearfix">
			<div id="userLogin" class="login fl">
				<a href="javascript:void(0)" title="Login">Login</a> |
				<a href="javascript:void(0)" title="Register">Register</a>
			</div>
			<ul class="topMenu">
				<li><a href="javascript:void(0)" target="_blank">Home</a>|</li>
				<li><a href="javascript:void(0)" target="_blank">News</a>|</li>
				<li><a href="javascript:void(0)" target="_blank">Forum</a>|</li>
				<li><a href="javascript:void(0)" target="_blank">Payment</a>|</li>
			</ul>
		</div>
	</div>
	-->

		<div class="wrap">
			<div id="logo">
				<a href="http://game-pt.com/"><img src="/resource/logo/vqg.png"
					alt="Vương Quốc Game" title="Vương Quốc Game" /></a>
			</div>
			<div id="Ads-top">
				<a href="http://game-pt.com/"><img src="/resource/banner/banner_1.jpg" width="600" height="100" title="Quảng cáo" /></a>
			</div>

<!-- 			<a href="https://www.facebook.com/dialog/oauth?client_id=560122764114956&redirect_uri=http://game-pt.com/callback.php"> -->
<!-- 			<img width="140" src="/themes/classic/images/LoginWithFacebook.png"/></a> -->


<script>
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    if (response.status === 'connected') {
        
      testAPI();


      
    } else if (response.status === 'not_authorized') {
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into Facebook.';
    }
  }

  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '560122764114956',
    cookie     : true, 
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.1' // use version 2.1
  });

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

 };

  // Load the SDK asynchronously

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=845597502125970&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
 
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
//      document.getElementById('status').innerHTML =
//       'Thanks for logging in, ' + response.name + '!';
    });
  }
</script>

<!-- <div class="fb-login-button" data-max-rows="1" data-size="medium" data-show-faces="false" data-auto-logout-link="false"></div> -->

<div id="fb-root">
<div class="fb-login-button" data-max-rows="1" data-size="medium" data-show-faces="true" data-auto-logout-link="true"></div>
</div>

<!-- <br /> -->
<!-- <div -->
<!--   class="fb-like" -->
<!--   data-share="true" -->
<!--   data-width="450" -->
<!--   data-show-faces="true"> -->
<!-- </div> -->





<div id="status">
</div>			
			
			<!-- 		<div id="searchRight" class="mt20"> -->
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
							<a href="javascript:void(0)"></a>
			</div> -->
			<!-- 			<input name="" type="text" id="btn_search" searchbox="android" defaulttype="soft" class="seachInput" value="" /> -->

			<!-- 			<p>keyword：<a href="javascript:void(0)">Game Portal</a><a href="javascript:void(0)">Flash</a><a href="javascript:void(0)">UC</a><a href="javascript:void(0)">Game</a></p> -->
		</div>
	</div>

	<!-- 	<div id="nav"> -->
	 	<?php 
// 			$this->widget('zii.widgets.CMenu', array(
// 			'items' => array(
// 				array('label' => 'Home'    , 'url'=>array('/home/home/index')),
// 				array('label' => 'Game'    , 'url'=>array('/home/home')),
// 			),
// 			'htmlOptions' => array('class' => 'navList'),
// 			'activeCssClass' => 'on'
// 		)); ?>
	</div>
	</div>


	<!--Header end  -->

<?php echo $content; ?>

<div id="wrapper">
	<div id="Ads-bottom">
			<a href="http://game-pt.com/">
			<img src="/resource/banner/banner_1.jpg" width="700" height="150" title="Quảng cáo" /></a>
	</div>
</div>

<div class="clear"></div>
	<!--footer begin -->
	<div id="footer">
		
		<ul class="main">
			<li>
				<h5>Tin tức</h5> <a href="http://www.doisongphapluat.com/the-gioi/"
				target="_blank" rel="nofollow">Thế giới</a> <a
				href="http://www.doisongphapluat.com/xa-hoi/" target="_blank"
				rel="nofollow">Xã hội</a> <a
				href="http://www.doisongphapluat.com/tin-tuc-24h" target="_blank"
				rel="nofollow">Tin Tức 24H</a> <a
				href="http://www.doisongphapluat.com/giao-duc/" target="_blank"
				rel="nofollow">Giáo dục</a>
			</li>
			<li>
				<h5>Giải trí</h5> <a
				href="http://www.doisongphapluat.com/giai-tri/ngoi-sao/"
				rel="nofollow">Ngôi sao</a> <a
				href="http://www.doisongphapluat.com/giai-tri/am-nhac/"
				rel="nofollow">Âm nhạc</a> <a
				href="http://www.doisongphapluat.com/giai-tri/phim/" rel="nofollow">Phim
					ảnh</a> <a
				href="http://www.doisongphapluat.com/giai-tri/truyen-hinh/"
				rel="nofollow">Truyền hình</a>
			</li>
			<li>
				<h5>Thể thao</h5> <a
				href="http://www.doisongphapluat.com/the-thao/bong-da/"
				rel="nofollow">Bóng đá</a> <a
				href="http://www.doisongphapluat.com/the-thao/quan-vot/"
				rel="nofollow">Tennis</a> <a
				href="http://www.doisongphapluat.com/golf/" rel="nofollow">Golf</a>
				<a href="http://www.doisongphapluat.com/the-thao/world-cup-2014/"
				rel="nofollow">Worldcup 2014</a>
			</li>
			<li class="noPadding">
				<h5>Công nghệ</h5> <a href="http://www.techz.vn" rel="nofollow">TechZ</a>
				<a href="http://tinhte.vn" rel="">Tinh Tế</a> <a
				href="http://five.vn" rel="nofollow">5 Giây</a> <a
				href="http://www.chomobi.com" rel="nofollow">Chợ Mobi</a>
			</li>
		</ul>

		<!--<div class="friendlink clearfix">-->
		<!--<h6>Liên kết</h6>-->
		<!--<div class="friendL">-->
		<!--		<a href=""></a><b>|</b> -->
		<!--</div>-->
		<!--</div>-->

		<p>
			Bản quyền thuộc sở hữu công ty ABC <br />Giấy phép số xyz - <a
				href="http://game-pt.com/" class="sitemap">Sitemap</a>

		</p>
	</div>
	<!-- footer end   -->
</body>
</html>
