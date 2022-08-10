<?php
/**
 * The template for displaying all single posts.
 *
 * @package MagCrunch
 */

get_header(); ?>

<article class="article lc">
	<div class="l-two-col">
		<div class="l-main-container no-overflow-x" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

		<?php endwhile; // end of the loop. ?>
            <?php if ( comments_open() ) :?>
                <div class="l-main-container">
                    <div class="l-main">
                        <?php comments_template();?>
                    </div>
                </div><!-- .l-main-container -->
            <?php endif;?>
		</div><!-- .l-main-container -->

		<div class="l-sidebar demo-block">
			<div class="accordion recirc-accordion">
				<ul>
					<?php $posttags = get_the_tags(); $categories = get_the_category(); $i = 0; $j = 0;
		
					if ($categories) {
					  	foreach($categories as $cat) {
					  		$j++;
					  		if ( 3 >= $j ) {
						    	echo '<li><div class="loaded acc-handle"><a href="' . get_category_link($cat->term_id) . '">' . $cat->cat_name . '</a></div></li>'; 
						    }
					  	}
					}

					if ($posttags) {
					  	foreach($posttags as $tag) {
					  		$i++;
					  		if ( 3 >= $i ) {
						    	echo '<li><div class="loaded acc-handle"><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></div></li>'; 
						    }
					  	}
					}?>

					<?php ct_popular_posts('5');?>
				</ul>
			</div><!-- .accordion.recirc-accordion -->
		</div><!-- .l-sidebar.demo-block -->

	</div><!-- .l-two-col-expose -->
</article><!-- .article.lc -->

<?php get_footer(); ?>