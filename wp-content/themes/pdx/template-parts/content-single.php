<?php
/**
 * @package pdx
 */
?>

<header class="entry-header">
	<?php
		// Post thumbnail.
		pdx_post_thumbnail();
	?>
	
	<div class="title-area">
		<div class="container padded-multiline">
			<?php the_title( '<h1 class="entry-title"><span>', '</span></h1>' ); ?>
		</div>
	</div>
</header><!-- .entry-header -->

<article id="post-<?php the_ID(); ?>" class="container <?php post_class(); ?>">
	<div class="entry-meta">
		<?php pdx_posted_on(); ?>
	</div><!-- .entry-meta -->
	
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'pdx' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php pdx_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
