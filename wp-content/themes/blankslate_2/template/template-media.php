<?php
if (have_posts()) {
	$index = 0;
	while (have_posts()) {
		the_post();
		$index ++;
		$isNewRow = ($index % 4 == 1);
		$isFinishRow = ($index % 4 == 0);
?>
	<?php if ($isNewRow) {?>
	<div class="row">
	<?php }?>
		<div class="col-md-3">
			<div class="ap-product">
				<div class="image">
					<a href="<?php the_permalink()?>">
						<?php 
						$postId = get_the_ID();
						$post_thumb_url = get_the_post_thumbnail_url($postId, 'medium');
						if (!empty($post_thumb_url)) {
							the_post_thumbnail('medium' ); 
						} else {
							$post_thumb_url = get_template_directory_uri().'/assets/images/media-thumb-default.png';
							echo '<img width="263" height="182" src="'.$post_thumb_url.'" class="attachment-medium size-medium wp-post-image" alt="">';
						}						
						?>
					</a>
				</div>
				<div class="info">
					<div class="time"><?php echo get_the_date('l, d/m/Y')?> (GMT+7)</div>
					<a href="<?php the_permalink()?>" class="name">
						<?php the_title();?>
					</a>
					<div class="divide"></div>
				</div>
			</div>
		</div>
	<?php if ($isFinishRow) {?>
	</div>
	<?php }?>
	<?php } ?>
	<?php if ($index % 4 != 0) {?>
	</div>
	<?php }?>
	<?php 
	wp_reset_postdata(); numeric_paging();?>
	
<?php }?>