<?php
function ListProducts($args = array()) {
    query_posts($args);
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
							$post_thumb_url = get_template_directory_uri().'/assets/images/product-thumb-default.png';
							echo '<img width="263" height="182" src="'.$post_thumb_url.'" class="attachment-medium size-medium wp-post-image" alt="">';
						}						
						?>
					</a>
				</div>
				<div class="info">
					<a href="<?php the_permalink()?>" class="name">
						<?php the_title();?>
					</a>
					<div class="heart">
						<?php
						for ($i = 0; $i < 5; $i++) {
							echo '<span class="heart-icon heart-'.$i.'">';
							if ($i == 4 && rand(0,1)) {
								echo '<img src="'.get_template_directory_uri().'/assets/images/heart-normal.png'.'" />';
							} else {
								echo '<img src="'.get_template_directory_uri().'/assets/images/heart-active.png'.'" />';
							}							
							echo '</span>';
						}
						?>
					</div>
					<div class="price">
						<?php echo number_format(types_field_meta_value('product-price', $post->ID));?> VND
					</div>
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
	
<?php }}?>