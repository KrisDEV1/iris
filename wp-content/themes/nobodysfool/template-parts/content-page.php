<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nobodys-fool
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="custom-page">
    <header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        <?php //get_the_date('<span class="date">', '</span>');
        $author = get_the_author();
        $author_link = get_the_author_meta('email');?> <p class="entry-author"><?php echo $author;?>, <?php echo $author_link;?></p>
        <?php $post_date = get_the_date( 'l,jS F Y' ); ?> <p class="entry-date"><?php echo $post_date;?></p>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'nobodysfool' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', 'nobodysfool' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->
