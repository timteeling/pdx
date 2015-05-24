<?php
/**
 * @package pdx
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			// Post thumbnail.
			pdx_post_thumbnail();
		?>
		
		<div class="title-area">
			<div class="container padded-multiline">
				<?php the_title( sprintf( '<h1 class="entry-title"><span><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</span></a></h1>' ); ?>
			</div>
		</div>
	</header>
</article>