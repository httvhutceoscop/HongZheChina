<section class="entry-content">
<p>
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
</p>
<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</section>