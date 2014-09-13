<?php
/* @var $this HomeController */

echo $hotProducts[0]->id;
?>
<!--part-a begin  -->
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
					<a href="/home/game/?pid=<?=$hotProduct->id?>" target="_blank">
						<img alt="<?=$hotProduct->name?>" src="<?=IMAGE_URL.$hotProduct->avatar?>"/>
						<span class="cover"></span>
					</a>
				</dt>
				<dd>
					<h4>
						<a href="/home/game/?pid=<?=$hotProduct->id?>" target="_blank" title="<?=$hotProduct->name?>"><?=$hotProduct->name?></a>
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
						<a href="/home/game/?pid=<?=$hotProduct->id?>" target="_blank" title="<?=$hotProduct->name?>"><?=$hotProduct->name?></a>
					</h5>
					<p>简介：</p>
					<p class="voteWraper">
						<a href="http://android.25pp.com/game/download/NjIzNDM0Nw==/aHR0cDovL2FuZHJvaWQtYXBwcy4yNXBwLmNvbS8yMDE0LzA4LzEzLzE0MDc4OTg0MDJfOTM0MzA2MjEyLmFwaw==/86e354e9e05bd6ed87a34515e652609c">立即下载</a>
						<span class="poor-ico voteTarget" title="踩" voteStyle="mode_four" href="http://android.25pp.com/game/app_comment/6234347/down/">4</span>
						<span class="good-ico voteTarget" title="顶" voteStyle="mode_four" href="http://android.25pp.com/game/app_comment/6234347/up/">2</span>
						<span class="addAnimate">+1</span>
					</p>
				</div>
			</dl>
			<?php endforeach; ?>
		</div>



