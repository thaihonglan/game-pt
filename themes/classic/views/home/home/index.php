<?php
/* @var $this HomeController */
?>
<div id="wrapper">
	<!-- Menu -->
	<div id="menu" class="mt20">

<?php foreach ($productTypes as $index => $productType): ?>
	<?php if (($index % 8) == 0): ?>
	<dl>
		<dt<?php if (($index / 8) >= 1): ?> class="cBorderB"<?php endif; ?>>
			<h2>游戏</h2>
			<span>GAME</span>
		</dt>
		<dd<?php if (($index / 8) >= 1): ?> class="cBorderB aheight"<?php endif; ?>>
		<?php endif; ?>
			<?php if (($index % 8) != 0): ?>|<?php endif; ?>
			<a href="javascript:void(0)"><?php echo $productType->name; ?></a>
		<?php if (($index % 8) == 7): ?>
		</dd>
	</dl>
	<?php endif; ?>
<?php endforeach; ?>
</div>

<!-- Banner -->
<div id="banner">
<ul>
	<li>
		<a href="http://android.25pp.com/special_175.html">
			<img src="http://img.25pp.com/uploadfile/poster/images/2014/0710/20140710095315631.jpg" alt="" amount="1"/>
		</a> <!--<i class="i1"></i><i class="i2"></i><i class="i3"></i><i class="i4"></i>-->
		<!-- 鼠标移入图片之后滑上来的详情层 begin -->
		<div class="bannerDetail">
			<a href="http://android.25pp.com/special_175.html" target="_blank" class="hrefBox">
				<h3>每周新游精选</h3>
				<p>周周有惊喜，天天有新游，本周安卓新游推荐的好游戏有如休闲益智类的《挑个宠物》，飞行射击类的《疯狂的僵尸镇》，还有集刺激及竞技于一身的足球游戏...一起来玩，让炎炎夏日不再沉闷吧！</p>
				<em class="goin">点击进入&rarr;</em>
			</a>
		</div>
		<!--鼠标移入图片之后滑上来的详情层 end  -->
	</li>

			<li> <a href="http://android.25pp.com/detail_6181685.html"><img src="http://img.25pp.com/uploadfile/poster/images/2014/0712/20140712105404719.jpg" alt="" amount="1"/></a> <!--<i class="i1"></i><i class="i2"></i><i class="i3"></i><i class="i4"></i>-->
		<!--鼠标移入图片之后滑上来的详情层 begin-->
		<div class="bannerDetail">
			<a href="http://android.25pp.com/detail_6181685.html" target="_blank" class="hrefBox">
				<h3>索尼克跳跃：狂热</h3>
				<p>《索尼克跳跃：狂热 Sonic Jump Fever》属于《索尼克跳跃》系列作品，而且从表面看，新作除了几个界面上的变化和前作似乎没什么区别，玩法和整体风格上，都继承了《索尼克跳跃》。</p>
				<em class="goin">点击进入&rarr;</em>
			</a>
		</div>
		<!--鼠标移入图片之后滑上来的详情层 end  -->
	</li>
			<li> <a href="http://android.25pp.com/detail_6045887.html"><img src="http://img.25pp.com/uploadfile/poster/images/2014/0627/20140627040647246.jpg" alt="" amount="1"/></a> <!--<i class="i1"></i><i class="i2"></i><i class="i3"></i><i class="i4"></i>-->
		<!--鼠标移入图片之后滑上来的详情层 begin-->
		<div class="bannerDetail">
			<a href="http://android.25pp.com/detail_6045887.html" target="_blank" class="hrefBox">
				<h3>爸爸去哪儿2</h3>
				<p>湖南卫视官方唯一授权正版第二季《爸爸去哪儿》手机游戏 你终于可以在游戏中扮演节目秀中的各位星爸萌宝啦，随时随地畅游在各集节目的场景中，变成巨人冲破一切障碍，急速狂奔欣赏路边风景，还有磁铁、得分翻倍等道具让你畅快游戏。还在等什么？快来跟我们一起跑酷吧：）</p>
				<em class="goin">点击进入&rarr;</em>
			</a>
		</div>
		<!--鼠标移入图片之后滑上来的详情层 end  -->
	</li>
			<li> <a href="http://android.25pp.com/detail_1561337.html"><img src="http://img.25pp.com/uploadfile/poster/images/2014/0704/20140704050415874.jpg" alt="" amount="1"/></a> <!--<i class="i1"></i><i class="i2"></i><i class="i3"></i><i class="i4"></i>-->
		<!--鼠标移入图片之后滑上来的详情层 begin-->
		<div class="bannerDetail">
			<a href="http://android.25pp.com/detail_1561337.html" target="_blank" class="hrefBox">
				<h3>友军炮火</h3>
				<p>欢迎来到 Friendly Fire！身为指挥官，你的工作就是建造出壮观、众望所归的军队。全世界最强大火力的地位，将在你的功成名就之下保留下来 - 成为朋友称羡的焦点，也是敌人眼中的祸害。派出坦克、砲车与空中突击，把挡在路上的一切全面摧毁。</p>
				<em class="goin">点击进入&rarr;</em>
			</a>
		</div>
		<!--鼠标移入图片之后滑上来的详情层 end  -->
	</li>
			<li> <a href="http://android.25pp.com/detail_2039153.html"><img src="http://img.25pp.com/uploadfile/poster/images/2014/0704/20140704033114266.jpg" alt="" amount="1"/></a> <!--<i class="i1"></i><i class="i2"></i><i class="i3"></i><i class="i4"></i>-->
		<!--鼠标移入图片之后滑上来的详情层 begin-->
		<div class="bannerDetail">
			<a href="http://android.25pp.com/detail_2039153.html" target="_blank" class="hrefBox">
				<h3>掌阅听书 iReader</h3>
				<p>掌阅家族又添新成员啦！掌阅听书for Android 1.2 震撼发布，全方位打造史上最强力听书神器：海量正版、完全免费、超省流量、无限量下载、无广告、无插件、无VIP、无延迟！广大听友的最佳选择！</p>
				<em class="goin">点击进入&rarr;</em>
			</a>
		</div>
		<!--鼠标移入图片之后滑上来的详情层 end  -->
	</li>
		</ul>
</div>

<!-- Game  -->
<div class="part-a mt20">
	<!--Game recomment begin  -->
	<div class="recommend">
		<div class="home-title">
			<h2 class="game-ico">安卓游戏推荐</h2>
			<ul class="game_choose_p1">
				<li><h3 title="安卓热门游戏"><span>热门游戏</span></h3></li>
				<li><h3 title="安卓游戏最新发布"><span>最新发布</span></h3></li>
				<li><h3 title="安卓游戏编辑推荐"><span>编辑推荐</span></h3></li>
			</ul>
		</div>

		<div class="reList gcp1" style="display:block">
		<?php foreach ($hotProducts as $index => $hotProduct): ?>
			<dl class="setHover<?php if ($index == 0): ?> zIndex<?php endif;?>">
				<dt>
					<a href="/home/game/detail?pid=<?=$hotProduct->id?>" target="_blank">
						<img alt="<?=$hotProduct->name?>" src="<?=IMAGE_URL.$hotProduct->avatar?>"/>
						<span class="cover"></span>
					</a>
				</dt>
				<dd>
					<h4>
						<a href="/home/game/detail?pid=<?=$hotProduct->id?>" target="_blank" title="<?=$hotProduct->name?>"><?=$hotProduct->name?></a>
					</h4>
					<div class="gradeStar1">
						<span class="star1 gray"></span>
						<span class="star1 orange" style="width:72px;"></span>
					</div>
					<p><?=$hotProduct->download?>次下载</p>
				</dd>

				<div class="softIntr">
					<span class="sIco"></span>
					<h5>
						<a href="/home/game/detail?pid=<?=$hotProduct->id?>" target="_blank" title="<?=$hotProduct->name?>"><?=$hotProduct->name?></a>
					</h5>
					<p>简介：<?=$hotProduct->short_des?></p>
					<p class="voteWraper">
						<span class="poor-ico voteTarget" title="Dislike" voteStyle="mode_four"><?=$hotProduct->dislike?></span>
						<span class="good-ico voteTarget" title="Like" voteStyle="mode_four"><?=$hotProduct->like?></span>
						<span class="addAnimate">+1</span>
					</p>
				</div>
			</dl>
			<?php endforeach; ?>
		</div>

		<div class="reList gcp1">
		<?php foreach ($recentlyProducts as $index => $recentlyProduct): ?>
			<dl class="setHover<?php if ($index == 0): ?> zIndex<?php endif;?>">
				<dt>
					<a href="/home/game/detail?pid=<?=$recentlyProduct->id?>" target="_blank">
						<img alt="<?=$recentlyProduct->name?>" src="<?=IMAGE_URL.$recentlyProduct->avatar?>"/>
						<span class="cover"></span>
					</a>
				</dt>
				<dd>
					<h4>
						<a href="/home/game/detail?pid=<?=$recentlyProduct->id?>" target="_blank" title="<?=$recentlyProduct->name?>"><?=$recentlyProduct->name?></a>
					</h4>
					<div class="gradeStar1">
						<span class="star1 gray"></span>
						<span class="star1 orange" style="width:72px;"></span>
					</div>
					<p><?=$recentlyProduct->download?>次下载</p>
				</dd>

				<div class="softIntr">
					<span class="sIco"></span>
					<h5>
						<a href="/home/game/detail?pid=<?=$recentlyProduct->id?>" target="_blank" title="<?=$recentlyProduct->name?>"><?=$recentlyProduct->name?></a>
					</h5>
					<p>简介：<?=$recentlyProduct->short_des?></p>
					<p class="voteWraper">
						<span class="poor-ico voteTarget" title="Dislike" voteStyle="mode_four"><?=$recentlyProduct->dislike?></span>
						<span class="good-ico voteTarget" title="Like" voteStyle="mode_four"><?=$recentlyProduct->like?></span>
						<span class="addAnimate">+1</span>
					</p>
				</div>
			</dl>
			<?php endforeach; ?>
		</div>

		<div class="reList gcp1">
		<?php foreach ($recommendProducts as $index => $recommendProduct): ?>
			<dl class="setHover<?php if ($index == 0): ?> zIndex<?php endif;?>">
				<dt>
					<a href="/home/game/detail?pid=<?=$recommendProduct->id?>" target="_blank">
						<img alt="<?=$recommendProduct->name?>" src="<?=IMAGE_URL.$recommendProduct->avatar?>"/>
						<span class="cover"></span>
					</a>
				</dt>
				<dd>
					<h4>
						<a href="/home/game/detail?pid=<?=$recommendProduct->id?>" target="_blank" title="<?=$recommendProduct->name?>"><?=$recommendProduct->name?></a>
					</h4>
					<div class="gradeStar1">
						<span class="star1 gray"></span>
						<span class="star1 orange" style="width:72px;"></span>
					</div>
					<p><?=$recommendProduct->download?>次下载</p>
				</dd>

				<div class="softIntr">
					<span class="sIco"></span>
					<h5>
						<a href="/home/game/detail?pid=<?=$recommendProduct->id?>" target="_blank" title="<?=$recommendProduct->name?>"><?=$recommendProduct->name?></a>
					</h5>
					<p>简介：<?=$recommendProduct->short_des?></p>
					<p class="voteWraper">
						<span class="poor-ico voteTarget" title="Dislike" voteStyle="mode_four"><?=$recommendProduct->dislike?></span>
						<span class="good-ico voteTarget" title="Like" voteStyle="mode_four"><?=$recommendProduct->like?></span>
						<span class="addAnimate">+1</span>
					</p>
				</div>
			</dl>
			<?php endforeach; ?>
		</div>
	</div>

	<!--Top game begin  -->
	<div class="gameRank">
		<div class="title">
			<span class="on">安卓游戏排行榜</span>
		</div>
		<ul>
			<?php foreach ($monthlyTopProducts as $index => $monthlyTopProduct): ?>
			<li>
				<span class="listIco listIco-<?=($index + 1)?>"></span>
				<div class="nameDown">
					<a href="/home/game/detail?pid=<?=$monthlyTopProduct->id?>"><?=$monthlyTopProduct->name?></a>
					<span><?=$monthlyTopProduct->download?>下载</span>
				</div>
				<div class="detailTxt">
					<div class="pic">
						<a href="/home/game/detail?pid=<?=$monthlyTopProduct->id?>" target="_blank" title="<?=$monthlyTopProduct->name?>">
							<img alt="<?=$monthlyTopProduct->name?>" src="<?=IMAGE_URL.$recommendProduct->avatar?>"/>
							<span class="cover"></span>
						</a>
					</div>
					<div class="txt">
						<h4>
							<a href="/home/game/detail?pid=<?=$monthlyTopProduct->id?>" target="_blank" title="<?=$monthlyTopProduct->name?>"><?=$monthlyTopProduct->name?></a>
						</h4>
					</div>
					<p class="clear" style="position:relative">
						<span class="game-good voteTarget" href="#" voteStyle="mode_three">顶：<i>866</i></span>
						<span><?=$monthlyTopProduct->download?>下载</span>
						<span class="addAnimate">+1</span>
					</p>
				</div>
			</li>
			<?php endforeach; ?>
		</ul>
	</div> <!-- Top game end -->
	<div class="clear"></div>
</div> <!-- Game end  -->
