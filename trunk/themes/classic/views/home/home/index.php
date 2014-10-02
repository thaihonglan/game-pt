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
			<h2>Danh mục</h2>
<!-- 			<span>Category</span> -->
		</dt>
		<dd<?php if (($index / 8) >= 1): ?> class="cBorderB aheight"<?php endif; ?>>
		<?php endif; ?>
			<?php if (($index % 8) != 0): ?>|<?php endif; ?>
			<a href="<?php echo $this->createUrl('game/list', array('tid' => $productType->id)); ?>"><?php echo $productType->name; ?></a>
		<?php if (($index % 8) == 7): ?>
		</dd>
	</dl>
	<?php endif; ?>
<?php endforeach; ?>
</div>

<!-- Banner -->
<div id="banner">
<ul>
	<?php foreach ($banners as $index => $banner): ?>
	<li>
		<a href="javascript:void(0)">
			<img height="300" src="<?=BANNER_URL.$banner->image?>" alt="" amount="1"/>
		</a> <!--<i class="i1"></i><i class="i2"></i><i class="i3"></i><i class="i4"></i>-->
		<!--  begin -->
		<div class="bannerDetail">
			<a href="javascript:void(0)" target="_blank" class="hrefBox">
				<h3><?php echo $banner->name?></h3>
				<p><?php echo $banner->description?></p>
				<em class="goin">Xem &rarr;</em>
			</a>
		</div>
		<!-- end  -->
	</li>
	<?php endforeach; ?>

</ul>
</div>

<!-- Main Game -->
<div class="part-a mt20">
	<!--Game recomment begin  -->
	<div class="recommend">
		<div class="home-title">
			<h2 class="game-ico">Flash Game</h2>
			<ul class="game_choose_p1">
				<li><h3 title="Hot nhất"><span>Hot nhất</span></h3></li>
				<li><h3 title="Mới nhất"><span>Mới nhất</span></h3></li>
				<li><h3 title="Thích nhất"><span>Thích nhất</span></h3></li>
			</ul>
		</div>

		<div class="reList gcp1" style="display:block">
		<?php foreach ($hotProducts as $index => $hotProduct): ?>
			<dl class="setHover<?php if ($index == 0): ?> zIndex<?php endif;?>">
				<dt>
					<a href="<?php echo $this->createUrl('game/detail', array('pid' => $hotProduct->id)); ?>" target="_blank">
						<img alt="<?=$hotProduct->name?>" src="<?=IMAGE_URL.$hotProduct->avatar?>"/>
						<span class="cover"></span>
					</a>
				</dt>
				<dd>
					<h4>
						<a href="<?php echo $this->createUrl('game/detail', array('pid' => $hotProduct->id)); ?>" target="_blank" title="<?=$hotProduct->name?>"><?=$hotProduct->name?></a>
					</h4>
					<div class="gradeStar1">
						<span class="star1 gray"></span>
						<span class="star1 orange" style="width:72px;"></span>
					</div>
					<p><?=$hotProduct->download?> lần chơi</p>
				</dd>

				<div class="softIntr">
					<span class="sIco"></span>
					<h5>
						<a href="<?php echo $this->createUrl('game/detail', array('pid' => $hotProduct->id)); ?>" target="_blank" title="<?=$hotProduct->name?>"><?=$hotProduct->name?></a>
					</h5>
					<p>Mô tả: <?=$hotProduct->short_des?></p>
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
					<a href="<?php echo $this->createUrl('game/detail', array('pid' => $recentlyProduct->id)); ?>" target="_blank">
						<img alt="<?=$recentlyProduct->name?>" src="<?=IMAGE_URL.$recentlyProduct->avatar?>"/>
						<span class="cover"></span>
					</a>
				</dt>
				<dd>
					<h4>
						<a href="<?php echo $this->createUrl('game/detail', array('pid' => $recentlyProduct->id)); ?>" target="_blank" title="<?=$recentlyProduct->name?>"><?=$recentlyProduct->name?></a>
					</h4>
					<div class="gradeStar1">
						<span class="star1 gray"></span>
						<span class="star1 orange" style="width:72px;"></span>
					</div>
					<p><?=$recentlyProduct->download?> lần chơi</p>
				</dd>

				<div class="softIntr">
					<span class="sIco"></span>
					<h5>
						<a href="<?php echo $this->createUrl('game/detail', array('pid' => $recentlyProduct->id)); ?>" target="_blank" title="<?=$recentlyProduct->name?>"><?=$recentlyProduct->name?></a>
					</h5>
					<p>Mô tả: <?=$recentlyProduct->short_des?></p>
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
					<a href="<?php echo $this->createUrl('game/detail', array('pid' => $recommendProduct->id)); ?>" target="_blank">
						<img alt="<?=$recommendProduct->name?>" src="<?=IMAGE_URL.$recommendProduct->avatar?>"/>
						<span class="cover"></span>
					</a>
				</dt>
				<dd>
					<h4>
						<a href="<?php echo $this->createUrl('game/detail', array('pid' => $recommendProduct->id)); ?>" target="_blank" title="<?=$recommendProduct->name?>"><?=$recommendProduct->name?></a>
					</h4>
					<div class="gradeStar1">
						<span class="star1 gray"></span>
						<span class="star1 orange" style="width:72px;"></span>
					</div>
					<p><?=$recommendProduct->download?> lần chơi</p>
				</dd>

				<div class="softIntr">
					<span class="sIco"></span>
					<h5>
						<a href="<?php echo $this->createUrl('game/detail', array('pid' => $recommendProduct->id)); ?>" target="_blank" title="<?=$recommendProduct->name?>"><?=$recommendProduct->name?></a>
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
			<span class="on">Bảng xếp hạng</span>
		</div>
		<ul>
			<?php foreach ($monthlyTopProducts as $index => $monthlyTopProduct): ?>
			<li>
				<span class="listIco listIco-<?=($index + 1)?>"></span>
				<div class="nameDown">
					<a href="<?php echo $this->createUrl('game/detail', array('pid' => $monthlyTopProduct->id)); ?>"><?=$monthlyTopProduct->name?></a>
					<span><?=$monthlyTopProduct->download?> lần chơi</span>
				</div>
				<div class="detailTxt">
					<div class="pic">
						<a href="<?php echo $this->createUrl('game/detail', array('pid' => $monthlyTopProduct->id)); ?>" target="_blank" title="<?=$monthlyTopProduct->name?>">
							<img alt="<?=$monthlyTopProduct->name?>" src="<?=IMAGE_URL.$monthlyTopProduct->avatar?>"/>
							<span class="cover"></span>
						</a>
					</div>
					<div class="txt">
						<h4>
							<a href="<?php echo $this->createUrl('game/detail', array('pid' => $monthlyTopProduct->id)); ?>" target="_blank" title="<?=$monthlyTopProduct->name?>"><?=$monthlyTopProduct->name?></a>
						</h4>
					</div>
					<p class="clear" style="position:relative">
						<span class="game-good voteTarget" href="#" voteStyle="mode_three">Like：<i>866</i></span>
						<span><?=$monthlyTopProduct->download?> lần chơi</span>
						<span class="addAnimate">+1</span>
					</p>
				</div>
			</li>
			<?php endforeach; ?>
		</ul>
	</div> <!-- Top game end -->
	<div class="clear"></div>
</div> <!-- Main Game end  -->


<!-- Game Category 1 -->
<div class="part-b mt20">
	<!--Game recomment begin  -->
	<div class="recommend">
		<div class="home-title">
			<h2 class="game-ico">Hành Động</h2>
			<ul class="game_choose_p2">
				<li><h3 title="Hot nhất"><span>Hot nhất</span></h3></li>
				<li><h3 title="Mới nhất"><span>Mới nhất</span></h3></li>
				<li><h3 title="Thích nhất"><span>Thích nhất</span></h3></li>
			</ul>
		</div>

		<div class="reList gcp2" style="display:block">
		<?php foreach ($hotProductsCate1 as $index => $hotProduct): ?>
			<dl class="setHover<?php if ($index == 0): ?> zIndex<?php endif;?>">
				<dt>
					<a href="<?php echo $this->createUrl('game/detail', array('pid' => $hotProduct->id)); ?>" target="_blank">
						<img alt="<?=$hotProduct->name?>" src="<?=IMAGE_URL.$hotProduct->avatar?>"/>
						<span class="cover"></span>
					</a>
				</dt>
				<dd>
					<h4>
						<a href="<?php echo $this->createUrl('game/detail', array('pid' => $hotProduct->id)); ?>" target="_blank" title="<?=$hotProduct->name?>"><?=$hotProduct->name?></a>
					</h4>
					<div class="gradeStar1">
						<span class="star1 gray"></span>
						<span class="star1 orange" style="width:72px;"></span>
					</div>
					<p><?=$hotProduct->download?> lần chơi</p>
				</dd>

				<div class="softIntr">
					<span class="sIco"></span>
					<h5>
						<a href="<?php echo $this->createUrl('game/detail', array('pid' => $hotProduct->id)); ?>" target="_blank" title="<?=$hotProduct->name?>"><?=$hotProduct->name?></a>
					</h5>
					<p>Mô tả: <?=$hotProduct->short_des?></p>
					<p class="voteWraper">
						<span class="poor-ico voteTarget" title="Dislike" voteStyle="mode_four"><?=$hotProduct->dislike?></span>
						<span class="good-ico voteTarget" title="Like" voteStyle="mode_four"><?=$hotProduct->like?></span>
						<span class="addAnimate">+1</span>
					</p>
				</div>
			</dl>
			<?php endforeach; ?>
		</div>

		<div class="reList gcp2">
		<?php foreach ($recentlyProductsCate1 as $index => $recentlyProduct): ?>
			<dl class="setHover<?php if ($index == 0): ?> zIndex<?php endif;?>">
				<dt>
					<a href="<?php echo $this->createUrl('game/detail', array('pid' => $recentlyProduct->id)); ?>" target="_blank">
						<img alt="<?=$recentlyProduct->name?>" src="<?=IMAGE_URL.$recentlyProduct->avatar?>"/>
						<span class="cover"></span>
					</a>
				</dt>
				<dd>
					<h4>
						<a href="<?php echo $this->createUrl('game/detail', array('pid' => $recentlyProduct->id)); ?>" target="_blank" title="<?=$recentlyProduct->name?>"><?=$recentlyProduct->name?></a>
					</h4>
					<div class="gradeStar1">
						<span class="star1 gray"></span>
						<span class="star1 orange" style="width:72px;"></span>
					</div>
					<p><?=$recentlyProduct->download?> lần chơi</p>
				</dd>

				<div class="softIntr">
					<span class="sIco"></span>
					<h5>
						<a href="<?php echo $this->createUrl('game/detail', array('pid' => $recentlyProduct->id)); ?>" target="_blank" title="<?=$recentlyProduct->name?>"><?=$recentlyProduct->name?></a>
					</h5>
					<p>Mô tả: <?=$recentlyProduct->short_des?></p>
					<p class="voteWraper">
						<span class="poor-ico voteTarget" title="Dislike" voteStyle="mode_four"><?=$recentlyProduct->dislike?></span>
						<span class="good-ico voteTarget" title="Like" voteStyle="mode_four"><?=$recentlyProduct->like?></span>
						<span class="addAnimate">+1</span>
					</p>
				</div>
			</dl>
			<?php endforeach; ?>
		</div>

		<div class="reList gcp2">
		<?php foreach ($recommendProductsCate1 as $index => $recommendProduct): ?>
			<dl class="setHover<?php if ($index == 0): ?> zIndex<?php endif;?>">
				<dt>
					<a href="<?php echo $this->createUrl('game/detail', array('pid' => $recommendProduct->id)); ?>" target="_blank">
						<img alt="<?=$recommendProduct->name?>" src="<?=IMAGE_URL.$recommendProduct->avatar?>"/>
						<span class="cover"></span>
					</a>
				</dt>
				<dd>
					<h4>
						<a href="<?php echo $this->createUrl('game/detail', array('pid' => $recommendProduct->id)); ?>" target="_blank" title="<?=$recommendProduct->name?>"><?=$recommendProduct->name?></a>
					</h4>
					<div class="gradeStar1">
						<span class="star1 gray"></span>
						<span class="star1 orange" style="width:72px;"></span>
					</div>
					<p><?=$recommendProduct->download?> lần chơi</p>
				</dd>

				<div class="softIntr">
					<span class="sIco"></span>
					<h5>
						<a href="<?php echo $this->createUrl('game/detail', array('pid' => $recommendProduct->id)); ?>" target="_blank" title="<?=$recommendProduct->name?>"><?=$recommendProduct->name?></a>
					</h5>
					<p>Mô tả: <?=$recommendProduct->short_des?></p>
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
			<span class="on">Bảng xếp hạng</span>
		</div>
		<ul>
			<?php foreach ($monthlyTopProductsCate1 as $index => $monthlyTopProduct): ?>
			<li>
				<span class="listIco listIco-<?=($index + 1)?>"></span>
				<div class="nameDown">
					<a href="<?php echo $this->createUrl('game/detail', array('pid' => $monthlyTopProduct->id)); ?>"><?=$monthlyTopProduct->name?></a>
					<span><?=$monthlyTopProduct->download?> lần chơi</span>
				</div>
				<div class="detailTxt">
					<div class="pic">
						<a href="<?php echo $this->createUrl('game/detail', array('pid' => $monthlyTopProduct->id)); ?>" target="_blank" title="<?=$monthlyTopProduct->name?>">
							<img alt="<?=$monthlyTopProduct->name?>" src="<?=IMAGE_URL.$monthlyTopProduct->avatar?>"/>
							<span class="cover"></span>
						</a>
					</div>
					<div class="txt">
						<h4>
							<a href="<?php echo $this->createUrl('game/detail', array('pid' => $monthlyTopProduct->id)); ?>" target="_blank" title="<?=$monthlyTopProduct->name?>"><?=$monthlyTopProduct->name?></a>
						</h4>
					</div>
					<p class="clear" style="position:relative">
						<span class="game-good voteTarget" href="#" voteStyle="mode_three">Like：<i>866</i></span>
						<span><?=$monthlyTopProduct->download?> lần chơi</span>
						<span class="addAnimate">+1</span>
					</p>
				</div>
			</li>
			<?php endforeach; ?>
		</ul>
	</div> <!-- Top game end -->
	<div class="clear"></div>
</div> <!-- Game Category 1 end  -->


<!-- Game Category 2 -->
<div class="part-c mt20">
	<!--Game recomment begin  -->
	<div class="recommend">
		<div class="home-title">
			<h2 class="game-ico">Trí Tuệ</h2>
			<ul class="game_choose_p3">
				<li><h3 title="Hot nhất"><span>Hot nhất</span></h3></li>
				<li><h3 title="Mới nhất"><span>Mới nhất</span></h3></li>
				<li><h3 title="Thích nhất"><span>Thích nhất</span></h3></li>
			</ul>
		</div>

		<div class="reList gcp3" style="display:block">
		<?php foreach ($hotProductsCate2 as $index => $hotProduct): ?>
			<dl class="setHover<?php if ($index == 0): ?> zIndex<?php endif;?>">
				<dt>
					<a href="<?php echo $this->createUrl('game/detail', array('pid' => $hotProduct->id)); ?>" target="_blank">
						<img alt="<?=$hotProduct->name?>" src="<?=IMAGE_URL.$hotProduct->avatar?>"/>
						<span class="cover"></span>
					</a>
				</dt>
				<dd>
					<h4>
						<a href="<?php echo $this->createUrl('game/detail', array('pid' => $hotProduct->id)); ?>" target="_blank" title="<?=$hotProduct->name?>"><?=$hotProduct->name?></a>
					</h4>
					<div class="gradeStar1">
						<span class="star1 gray"></span>
						<span class="star1 orange" style="width:72px;"></span>
					</div>
					<p><?=$hotProduct->download?> lần chơi</p>
				</dd>

				<div class="softIntr">
					<span class="sIco"></span>
					<h5>
						<a href="<?php echo $this->createUrl('game/detail', array('pid' => $hotProduct->id)); ?>" target="_blank" title="<?=$hotProduct->name?>"><?=$hotProduct->name?></a>
					</h5>
					<p>Mô tả: <?=$hotProduct->short_des?></p>
					<p class="voteWraper">
						<span class="poor-ico voteTarget" title="Dislike" voteStyle="mode_four"><?=$hotProduct->dislike?></span>
						<span class="good-ico voteTarget" title="Like" voteStyle="mode_four"><?=$hotProduct->like?></span>
						<span class="addAnimate">+1</span>
					</p>
				</div>
			</dl>
			<?php endforeach; ?>
		</div>

		<div class="reList gcp3">
		<?php foreach ($recentlyProductsCate2 as $index => $recentlyProduct): ?>
			<dl class="setHover<?php if ($index == 0): ?> zIndex<?php endif;?>">
				<dt>
					<a href="<?php echo $this->createUrl('game/detail', array('pid' => $recentlyProduct->id)); ?>" target="_blank">
						<img alt="<?=$recentlyProduct->name?>" src="<?=IMAGE_URL.$recentlyProduct->avatar?>"/>
						<span class="cover"></span>
					</a>
				</dt>
				<dd>
					<h4>
						<a href="<?php echo $this->createUrl('game/detail', array('pid' => $recentlyProduct->id)); ?>" target="_blank" title="<?=$recentlyProduct->name?>"><?=$recentlyProduct->name?></a>
					</h4>
					<div class="gradeStar1">
						<span class="star1 gray"></span>
						<span class="star1 orange" style="width:72px;"></span>
					</div>
					<p><?=$recentlyProduct->download?> lần chơi</p>
				</dd>

				<div class="softIntr">
					<span class="sIco"></span>
					<h5>
						<a href="<?php echo $this->createUrl('game/detail', array('pid' => $recentlyProduct->id)); ?>" target="_blank" title="<?=$recentlyProduct->name?>"><?=$recentlyProduct->name?></a>
					</h5>
					<p>Mô tả: <?=$recentlyProduct->short_des?></p>
					<p class="voteWraper">
						<span class="poor-ico voteTarget" title="Dislike" voteStyle="mode_four"><?=$recentlyProduct->dislike?></span>
						<span class="good-ico voteTarget" title="Like" voteStyle="mode_four"><?=$recentlyProduct->like?></span>
						<span class="addAnimate">+1</span>
					</p>
				</div>
			</dl>
			<?php endforeach; ?>
		</div>

		<div class="reList gcp3">
		<?php foreach ($recommendProductsCate2 as $index => $recommendProduct): ?>
			<dl class="setHover<?php if ($index == 0): ?> zIndex<?php endif;?>">
				<dt>
					<a href="<?php echo $this->createUrl('game/detail', array('pid' => $recommendProduct->id)); ?>" target="_blank">
						<img alt="<?=$recommendProduct->name?>" src="<?=IMAGE_URL.$recommendProduct->avatar?>"/>
						<span class="cover"></span>
					</a>
				</dt>
				<dd>
					<h4>
						<a href="<?php echo $this->createUrl('game/detail', array('pid' => $recommendProduct->id)); ?>" target="_blank" title="<?=$recommendProduct->name?>"><?=$recommendProduct->name?></a>
					</h4>
					<div class="gradeStar1">
						<span class="star1 gray"></span>
						<span class="star1 orange" style="width:72px;"></span>
					</div>
					<p><?=$recommendProduct->download?> lần chơi</p>
				</dd>

				<div class="softIntr">
					<span class="sIco"></span>
					<h5>
						<a href="<?php echo $this->createUrl('game/detail', array('pid' => $recommendProduct->id)); ?>" target="_blank" title="<?=$recommendProduct->name?>"><?=$recommendProduct->name?></a>
					</h5>
					<p>Mô tả: <?=$recommendProduct->short_des?></p>
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
			<span class="on">Bảng xếp hạng</span>
		</div>
		<ul>
			<?php foreach ($monthlyTopProductsCate2 as $index => $monthlyTopProduct): ?>
			<li>
				<span class="listIco listIco-<?=($index + 1)?>"></span>
				<div class="nameDown">
					<a href="<?php echo $this->createUrl('game/detail', array('pid' => $monthlyTopProduct->id)); ?>"><?=$monthlyTopProduct->name?></a>
					<span><?=$monthlyTopProduct->download?> lần chơi</span>
				</div>
				<div class="detailTxt">
					<div class="pic">
						<a href="<?php echo $this->createUrl('game/detail', array('pid' => $monthlyTopProduct->id)); ?>" target="_blank" title="<?=$monthlyTopProduct->name?>">
							<img alt="<?=$monthlyTopProduct->name?>" src="<?=IMAGE_URL.$monthlyTopProduct->avatar?>"/>
							<span class="cover"></span>
						</a>
					</div>
					<div class="txt">
						<h4>
							<a href="<?php echo $this->createUrl('game/detail', array('pid' => $monthlyTopProduct->id)); ?>" target="_blank" title="<?=$monthlyTopProduct->name?>"><?=$monthlyTopProduct->name?></a>
						</h4>
					</div>
					<p class="clear" style="position:relative">
						<span class="game-good voteTarget" href="#" voteStyle="mode_three">Like：<i>866</i></span>
						<span><?=$monthlyTopProduct->download?> lần chơi</span>
						<span class="addAnimate">+1</span>
					</p>
				</div>
			</li>
			<?php endforeach; ?>
		</ul>
	</div> <!-- Top game end -->
	<div class="clear"></div>
</div> <!-- Game Category 2 end  -->
</div>
