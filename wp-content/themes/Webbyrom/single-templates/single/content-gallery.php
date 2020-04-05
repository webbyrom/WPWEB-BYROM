<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @since 1.0.0
 */
?>
<?php global $opt_theme_options; ?>
<?php $category = get_the_terms( get_the_ID(), 'category', '', ', ' ); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-post-wrap ">
		<div class="entry-text">
			<header class="entry-header">
				<?php if ( (!empty($opt_theme_options['single_page_title_layout']) && $opt_theme_options['single_page_title_layout']  == 7 ) || ( (empty($opt_theme_options['single_page_title_layout']) || (!empty($opt_theme_options['single_page_title_layout']) && $opt_theme_options['single_page_title_layout'] < 2 ) )&& $opt_theme_options['page_title_layout'] == 7)  ): ?>
					<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
				<?php endif; ?>	
				<?php Webbyrom_post_detail(); ?>
			</header><!-- .entry-header -->	
			<div class="post-gallery">
				<?php Webbyrom_post_gallery('large'); ?>	
			</div>
				<?php
				/* translators: %s: Name of current post */
				the_content( sprintf(
					__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'Webbyrom' ),
					the_title( '<span class="screen-reader-text">', '</span>', false )
				) );

				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'Webbyrom' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
				) );
				?>
		</div>				   	
			<?php Webbyrom_post_sharing(); ?>
			<?php Webbyrom_post_tag(); ?>
	</div> 
		<?php  Webbyrom_post_author(); ?>
		<?php if (!empty($opt_theme_options['single_related']) && $opt_theme_options['single_related'] == 1): ?>
			<?php Webbyrom_post_related($category);?>
    	<?php endif ?>
</article><!-- #post-## -->
