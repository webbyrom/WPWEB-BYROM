<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package CMSSuperHeroes
 * @subpackage CMS Theme
 * @since 1.0.0
 */
?>
<?php  global $opt_theme_options, $opt_meta_options; ?>
<?php $word_number = '20';
	if (!empty($opt_theme_options['word_number'])) {
		$word_number = $opt_theme_options['word_number'];
	}
 ?>
<article <?php post_class('Webbyrom-blog'); ?>>
 	<div class="blog-outer">
 		<div class="blog-wrap">
 			<div class="row"> 
 				<div class="col-sm-12">
 			 	<?php  if(empty($opt_meta_options['opt-gallery'])) {
 				?>
 					<?php Webbyrom_post_archive_before(); ?>
						<?php if ( has_post_thumbnail()): ?>
							<div class="post-thumbnail">
								<a href="#"><?php Webbyrom_post_thumbnail('medium'); ?></a>		
							</div>
						<?php endif; ?>	
						<div class="blog-content">
							<header class="entry-header">
								<?php if(is_sticky())
						            echo '<span class="post-sticky"><span class="pe-7s-pin"></span></span>';
						        ?>

								<?php the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' ); ?>
								
							</header><!-- .entry-header -->

							<p>
								<?php
								/* translators: %s: Name of current post */
								echo Webbyrom_grid_limit_words(strip_tags(get_the_excerpt()),$word_number);
								wp_link_pages( array(
									'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages', 'Webbyrom' ) . '</span>',
									'after'       => '</div>',
									'link_before' => '<span>',
									'link_after'  => '</span>',
								) );
								?>
							</p>
							<?php Webbyrom_post_archive_after(); ?>

						</div><!-- .entry-content -->	
 				<?php } else{?>
 					<?php Webbyrom_post_archive_before(); ?>
					<div class="post-thumbnail">
						<?php Webbyrom_post_gallery('medium'); ?>				
					</div>
					<div class="blog-content">
						<header class="entry-header">
							<?php if(is_sticky())
					            echo '<span class="post-sticky"><span class="pe-7s-pin"></span></span>';
					        ?>
							<?php the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' ); ?>			
						</header><!-- .entry-header -->
						<p>
							<?php
							/* translators: %s: Name of current post */
							echo Webbyrom_grid_limit_words(strip_tags(get_the_excerpt()),$word_number);
							wp_link_pages( array(
								'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages', 'Webbyrom' ) . '</span>',
								'after'       => '</div>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
							) );
							?>
						</p>
						<?php Webbyrom_post_archive_after(); ?>
					</div><!-- .entry-content -->
				<?php } ?>	
				</div>	
			</div>
 		</div> 		
 	</div>
</article><!-- #post-## -->
