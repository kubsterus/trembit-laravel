<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package MagCrunch
 */

get_header(); ?>

	<div class="lc flush lc-island">
		<div class="l-two-col no-overflow-x">
            <div class="l-main-container">
				<div class="l-main">

                    <div class="tuck lc-padding">
                        <div class="tabs tabs-large">
                            <ul class="tab-list tabs-no-select">
                                <?php
                                    global $wp;
                                    $current_url = add_query_arg($wp->query_string, '', home_url($wp->request));
                                ?>
                               <li class="latest"><a href="<?php echo esc_url( home_url($wp->request) . '/?order=latest' ); ?>" class="tabs-no-preventdefault<?php if ( !isset($_GET['order']) || ($_GET['order']!='popular') ) echo ' active'; ?>">Latest</a></li>
                               <li class="popular"><a class="tabs-no-preventdefault<?php if ( isset($_GET['order']) && ($_GET['order']=='popular') ) echo ' active'; ?>" href="<?php echo esc_url( home_url($wp->request) . '/?order=popular' ); ?>">Popular</a></li>
                            </ul>
                        </div>
                    </div>
					
                    <?php
                    $args = array();

                    if ( isset($_GET['order']) ) {
                        switch ($_GET['order'])
                        {
                            case 'latest' : $args = array('orderby' => 'date'); break;
                            case 'popular' : $args = array('meta_key' => 'views','orderby' => 'meta_value_num', 'ignore_sticky_posts' => 1); break;
                            default : $args = array('orderby' => 'date');
                        }

                        global $wp_query;

                        $arms = array_merge($args, $wp_query->query);
                        query_posts($arms);
                    }

                    ;?>

				<?php if ( have_posts() ) : ?>

					<ul class="river lc-padding" id="river1">

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
							/* Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'content', get_post_format() );
						?>

					<?php endwhile; ?>

					<?php clonetemplates_numeric_paging_nav(); ?>

					</ul><!-- #river1 -->

				<?php else : ?>

					<?php get_template_part( 'content', 'none' ); ?>

				<?php endif; ?>

				</div><!-- .l-main -->
			</div><!-- .l-main-container -->

			<?php get_sidebar(); ?>

		</div><!-- .l-two-col -->
	</div><!-- .lc.flush -->

<?php get_footer(); ?>
