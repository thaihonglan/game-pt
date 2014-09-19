<?php
/* @var $this GameController */
?>
﻿
<div id="wrapper">
	<div class="location">
		Location：
		<a href="/">Trang chủ</a> &gt;
		<a href="<?php echo $this->createUrl('game/list'); ?>">Danh mục</a>
	</div>

	<div class="choose" openall="true">
		<div class="choose_list">
			<h3 class="clist_name">Phân loại：</h3>
			<dl class="clisr_dl">
				<dt class="current"><a href="javascript:void(0)">Toàn bộ</a></dt>
				<?php foreach ($productTypes as $productType): ?>
				<dd ><a href="javascript:void(0)"><?php echo $productType->name; ?></a></dd>
				<?php endforeach; ?>
			</dl>
		</div>
	</div>  <!--choose end-->

	<div class="choosenav mt20">
		<span class="app-ico"></span>
		<h3>Danh mục trò chơi</h3>
<!-- 		<div class="sorting"> -->
<!-- 			<ul class="sort_ul"> -->
<!-- 				<li class="current"><a href="javascript:void(0)">Mới</a></li> -->
<!-- 				<li ><a href="javascript:void(0)">Nổi</a></li> -->
<!-- 				<li ><a href="javascript:void(0)">Giới thiệu</a></li> -->
<!-- 			</ul> -->
<!-- 		</div> -->
	</div>  <!--resultnav end-->

	<div class="thelist">
		<div class="loading" id="loadingContent" style="display:none;">Đang chạy...</div>

		<?php foreach ($productList as $index => $product): ?>
		<dl class="setHover apps">
			<dt class="app_icon">
				<a class="app_a" target="_blank" title="<?php echo $product->name; ?>" href="<?php echo $this->createUrl('game/detail', array('pid' => $product->id)); ?>">
					<img alt="<?php echo $product->name; ?>" src="<?php echo IMAGE_URL.$product->avatar; ?>"/><span class="cover"></span>
				</a>
			</dt>
			<dd class="app_title">
				<h4><a class="h4_a" href="<?php echo $this->createUrl('game/detail', array('pid' => $product->id)); ?>" target="_blank"><?php echo $product->name; ?></a></h4>
				<div class="gradeStar1">
					<span class="star1 gray"></span>
					<span class="star1 orange" style="width:67.2px;"></span>
				</div>
				<p><?php echo $product->download; ?> lần download</p>
			</dd>
			<dd class="app_downl">
				<div class="good">
					<span class="addAnimate">+1</span>
					<span class="good_span voteTarget" href="javascipt:void(0)" title="thích"><?php echo $product->like; ?></span>
				</div>
				<div class="bad">
					<span class="addAnimate">+1</span>
					<span class="bad_span voteTarget" href="javascipt:void(0)" title="không thích"><?php echo $product->dislike; ?></span>
				</div>
			</dd>
		</dl>
		<?php endforeach; ?>
	</div>

	<div class="page">
		<div class="pagearea">
			<a class="onepage" href="javascript:void(0)">Trang đầu</a>
			<a class="abovepage" href="javascript:void(0)">Trang trước</a>
			<a class="current" href="javascript:void(0)">1</a>
			<a href="javascript:void(0)">2</a>
			<a class="nextpage" href="javascript:void(0)">Trang sau</a>
			<a class="lastpage" href="javascript:void(0)">Trang cuối</a>
		</div>
	</div>
</div>

