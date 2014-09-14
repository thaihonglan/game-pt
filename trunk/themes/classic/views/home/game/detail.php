<?php
/* @var $this GameController */
?>
﻿<div id="wrapper">
	<div class="location">
		Location：
		<a href="/home/home/">Home</a> &gt;
		<a href="/home/game/detail?pid=<?php echo $productDetail->id; ?>"><?php echo $productDetail->name; ?></a>
	</div>

	<div class="detail-l">
		<div class="detailContent">
			<div class="title-stat">
				<div class="pic">
					<img src="<?php echo IMAGE_URL . $productDetail->avatar; ?>" alt="魔物弹球 汉化版">
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
						<!--li class="w-450">标签：
							<a href='http://android.25pp.com/game/index/2003/0/0' target='_blank'></a>
						</li-->
					</ul>
				</div>
				<div class="bMunber clear">
					<div class="munberBox">
						<i class="errMsg"></i>
						<span class="good-ico voteTarget" href="http://android.25pp.com/game/app_comment/6084099/up/" title="顶" voteStyle="mode_one">
							<p><?php echo $productDetail->like; ?></p>
							<span class="addAnimate">+1</span>
						</span>
						<span class="bad-ico voteTarget" href="http://android.25pp.com/game/app_comment/6084099/down/" title="踩" voteStyle="mode_one">
							<p><?php echo $productDetail->dislike; ?></p>
							<span class="addAnimate">+1</span>
						</span>
					</div>
					<div class="downMunber">
						<ul>
						<li class="borderR"><span><?php echo $productDetail->download; ?></span><br>次下载</li>
						</ul>
					</div>
				</div>
			</div>

			<!-- Introduction begin-->
			<div class="aboutIntr">
				<div class="aoubtTxt">
					<h2>
						<span><?php echo $productDetail->name; ?></span>
						Description
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

			<!-- Game picture begin  -->
			<div class="gamePic">
				<div class="title">
					<h2><span>魔物弹球 汉化版</span>游戏截图</h2><span>（共 <?php echo count($productScreenshots) ?> 张）</span>
					<span class="lastBtn ctrlBtn">最后一张</span>
					<span class="firstBtn ctrlBtn">第一张</span>
				</div>
				<div class="picBox">
					<a href="javascript:;" class="previous"></a>
					<a href="javascript:;" class="next"></a>
					<div class="pic">
						<?php foreach ($productScreenshots as $index => $productScreenshot): ?>
						<img src="<?php echo IMAGE_URL . $productScreenshot->path; ?>" alt="<?php echo $productDetail->name; ?>(<?php echo $index; ?>)"/>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
			<!-- Game picture end -->

		</div>
	</div>
</div>

<div class="clear"></div>