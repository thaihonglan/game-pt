<?php
/* @var $this GameController */
$this->pageTitle = Yii::app()->name . ' - ' . $productDetail->name;

?>
﻿


<div id="wrapper">
<!-- 	<div class="location"> -->
<!-- 		Location： -->
<!-- 		<a href="/">Trang chủ</a> &gt; -->
<!--  		<a href="<?php //echo $this->createUrl('game/list'); ?>">Danh mục</a> &gt; -->
<!--		<a href="<?php //echo $this->createUrl('game/detail', array('pid' => $productDetail->id)); ?>"><?php //echo $productDetail->name; ?></a> -->
<!-- 	</div> -->
			
				
	<div class="detail-l">
		<div class="detailContent">
		<div align="center" style="margin-bottom: 20px;">
			<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" id="Myflash" width="690" applicationComplete="init()"
				codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab">
					<param name="movie" value=<?php echo Yii::app()->request->baseUrl . '/resource/' . $productResource->path ?> />
					<param name="quality" value="high" />
<!-- 					<param name="bgcolor" value="#869ca7" /> -->
					<param name="allowScriptAccess" value="sameDomain" />

					<embed src="<?php echo Yii::app()->request->baseUrl . '/resource/' . $productResource->path ?>" quality="high" bgcolor="#ffffff" width="690" height="520" name="Myflash" align="middle"
						play="true" loop="false" quality="high" allowScriptAccess="sameDomain"
						type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer">
					</embed>
			</object>
		</div>
		
			<div class="title-stat">
				<div class="pic">
					<img src="<?php echo IMAGE_URL . $productDetail->avatar; ?>" alt="">
					<span class="cover"></span>
				</div>
				<div class="txt">
					<h1><?php echo $productDetail->name; ?></h1>
					<div class="gradeStar2">
						<span class="star2 gray"></span>
						<span class="star2 orange" style="width:100px;"></span>
					</div>
					<ul>
						<li>Version： <?php echo $productResource->version; ?></li>
						<li></li>
						<li>Time： <?php echo $productResource->create_date; ?></li>
						<!--li class="w-450">Tag
							<a href='' target='_blank'></a>
						</li-->
						<li></li><li></li>
						<li>
							<div
  								class="fb-like"
 								data-share="true"
  								data-width="450"
  								data-show-faces="true">
							</div>
						</li>
					</ul>
				</div>
				<div class="bMunber clear">
					<div class="munberBox">
						<i class="errMsg"></i>
						<span class="good-ico voteTarget" href="/game/app_comment/6084099/up/" title="Like" voteStyle="mode_one">
							<p><?php echo $productDetail->like; ?></p>
							<span class="addAnimate">+1</span>
						</span>
						<span class="bad-ico voteTarget" href="/game/app_comment/6084099/down/" title="Dislike" voteStyle="mode_one">
							<p><?php echo $productDetail->dislike; ?></p>
							<span class="addAnimate">+1</span>
						</span>
					</div>
					<div class="downMunber">
						<ul>
						<li class="borderR"><span><?php echo $productDetail->download; ?></span><br> lần tải</li>
						</ul>
					</div>
				</div>
			</div>


			<!-- Introduction begin-->
			<div class="aboutIntr">
				<div class="aoubtTxt">
					<h2>
						<span><?php echo $productDetail->name; ?></span>
						Giới thiệu :
					</h2>
					<div class="conTxt">
						<p>
							<?php echo $productDetail->description; ?>
						</p>
					</div>
				</div>
				<a href="javascript:;" class="more"></a>
			</div>
			<!-- Introduction end  -->



		</div>
				<div id="mainBox" class="comment" app_id="5208297" appver_id="200002320">
			<div class="title">
				<h2 class="comment-ico">Bình luận</h2>
			</div>
			<div id="scoreArea" class="score" style="display: block;">
				<h3>Mời bạn đánh giá</h3>
				<span id="txtScoreMsg" class="scoreMsg"></span>
				<p>
					<span class="val setHover" val="1">1 điểm</span>
					<span class="val setHover" val="2">2 điểm</span>
					<span class="val setHover" val="3">3 điểm</span>
					<span class="val setHover" val="4">4 điểm</span>
					<span class="val setHover on" val="5">5 điểm</span>
					<b><span id="txtAverage" class="num">5</span> điểm</b>
				</p>
			</div>
			<div id="commentArea">
				<div id="loginText"></div>
				<div id="commentBox" style="display: block;">
					<div class="userName clear">
						<input type="text" class="ipt_nickname" value="Hồng Lão" readonly="" style="color: rgb(51, 51, 51);">
						<span>Mời bạn tham gia bình luận</span>
					</div>
					<textarea class="ipt_content"></textarea>
					<div class="btnBottom">
						<!--<input type="text" class="ipt_checkcode" value="Mã xác nhận" maxlength="4" />
						<div class="yzmPic"><img class="img_checkcode" title="Hình không rõ, click vào đây để lấy hình khác!" /></div>-->
						<span class="txt_msg" style="display: none;">Cám ơn bạn đã bình luận</span> <span class="btn_submit setHover">Gửi bình luận</span> </div>
					</div>
				</div>
				<ul id="commentListArea">
					<li>
						<p class="nameDate">
							<span class="name"><b>Hồng Lão</b>　</span>
							<span class="stars">Trung binh: 5.0</span>
							<span class="date">2014-10-03 01:04:42</span>
						</p>
						<div class="replayBox" uplink="0" c_id="10169305"></div>
						<p class="contTxt">Hay quá !</p>
					</li>
				</ul>
				<div class="page clearfix"><div class="pagearea" id="pages"></div>
			</div>
		</div>
	</div>

	<div id="Ads-mid">
		<img src="/resource/banner/adsense_250x250.png">
		<img src="/resource/banner/adsense_250x250.png">
	</div>
	
	<div class="gameRank">
		<div class="title">
			<span class="on">Game tương tự</span>
		</div>
		<ul>
			<?php foreach ($similar as $index => $similar): ?>
			<li>
				<span class="listIco listIco-<?=($index + 1)?>"></span>
				<div class="nameDown">
					<a href="/game/detail?pid=<?=$similar->id?>"><?=$similar->name?></a>
					<span><?=$similar->download?> lần tải</span>
				</div>
				<div class="detailTxt">
					<div class="pic">
						<a href="/game/detail?pid=<?=$similar->id?>" target="_blank" title="<?=$similar->name?>">
							<img alt="<?=$similar->name?>" src="<?=IMAGE_URL.$similar->avatar?>"/>
							<span class="cover"></span>
						</a>
					</div>
					<div class="txt">
						<h4>
							<a href="/game/detail?pid=<?=$similar->id?>" target="_blank" title="<?=$similar->name?>"><?=$similar->name?></a>
						</h4>
					</div>
					<p class="clear" style="position:relative">
						<span class="game-good voteTarget" href="#" voteStyle="mode_three">Like：<i>866</i></span>
						<span><?=$similar->download?> lần tải</span>
						<span class="addAnimate">+1</span>
					</p>
				</div>
			</li>
			<?php endforeach; ?>
		</ul>
	</div>
	
	<div class="gameRank">
		<div class="title">
			<span class="on">Chơi nhiều nhất</span>
		</div>
		<ul>
			<?php foreach ($monthlyTopProducts as $index => $monthlyTopProduct): ?>
			<li>
				<span class="listIco listIco-<?=($index + 1)?>"></span>
				<div class="nameDown">
					<a href="/game/detail?pid=<?=$monthlyTopProduct->id?>"><?=$monthlyTopProduct->name?></a>
					<span><?=$monthlyTopProduct->download?> lần tải</span>
				</div>
				<div class="detailTxt">
					<div class="pic">
						<a href="/game/detail?pid=<?=$monthlyTopProduct->id?>" target="_blank" title="<?=$monthlyTopProduct->name?>">
							<img alt="<?=$monthlyTopProduct->name?>" src="<?=IMAGE_URL.$monthlyTopProduct->avatar?>"/>
							<span class="cover"></span>
						</a>
					</div>
					<div class="txt">
						<h4>
							<a href="/game/detail?pid=<?=$monthlyTopProduct->id?>" target="_blank" title="<?=$monthlyTopProduct->name?>"><?=$monthlyTopProduct->name?></a>
						</h4>
					</div>
					<p class="clear" style="position:relative">
						<span class="game-good voteTarget" href="#" voteStyle="mode_three">Like：<i>866</i></span>
						<span><?=$monthlyTopProduct->download?> lần tải</span>
						<span class="addAnimate">+1</span>
					</p>
				</div>
			</li>
			<?php endforeach; ?>
		</ul>
	</div> <!-- Top game end -->
	
</div>

<div class="clear"></div>