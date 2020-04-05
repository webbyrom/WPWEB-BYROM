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
<?php 
 
$style ='';
if(has_post_thumbnail()){
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'medium' );
    $image_url = esc_url($image[0]);
    $style = 'style="background-image:url('.$image_url.'); background-size: cover;background-position: center;"';
}

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
	 				<div class="post-status">
	 					<div class="entry-wrap" <?php echo ''.$style; ?>>
							<header class="entry-header">
						        <?php Webbyrom_post_status(); ?>
								<?php the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' ); ?>			
							</header><!-- .entry-header -->
					    </div>
					    <div class="blog-content">
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
							<?php Webbyrom_archive_detail1(); ?>
						</div>
	 				</div>
	 					<!-- .entry-content -->		
				</div>
			</div>
 		</div> 		
 	</div>
</article><!-- #post-## -->
<?php
