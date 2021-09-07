<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package coolmat
 */
global $item_number	
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<!-- 1. Our title on the left -->
		<h1 class="entry-title">
			<?php 
				the_title();
			?>
		</h1>

		<!-- 2. Number of the menu item in the middle-->
		<div class="entry-number">
			<span><?php echo $item_number; ?></span>
		</div>


		<!-- 3. Our price (content ) on the right -->
		<div class="entry-price">
			<?php 
				the_content();
			?>
		</div>

	</header><!-- .entry-header -->

	<?php coolmat_post_thumbnail(); ?>
</article><!-- #post <?php the_ID(); ?> -->