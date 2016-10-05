<?php
/**
 * @package natalia
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">

		<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>

		<div class="entry-meta">

			<?php natalia_posted_on(); ?>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

     <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?> 
    
	<div class="entry-content">

		<?php the_content(); ?>
		
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'natalia' ),
				'after'  => '</div>',
			) );
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php natalia_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
