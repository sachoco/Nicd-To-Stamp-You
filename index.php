<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
			<header class="article-header">
				<div class="leading">
					<?php the_post_thumbnail(); ?>
				</div>
				<div class="title">
					<h1><?php the_title( ); ?></h1>
				</div>
			</header>
			<section class="entry-content-page">
				<?php the_content(); ?>
			</section>
		</article>


		<?php endwhile; ?>

		<?php bones_page_navi(); ?>

	<?php else : ?>

		<article id="post-not-found" class="hentry cf">
			<header class="article-header">
					<h1><?php _e( 'Oops, Post Not Found!', 'satopin' ); ?></h1>
			</header>
			<section class="entry-content">
				<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'satopin' ); ?></p>
			</section>
			<footer class="article-footer">
					<p><?php _e( 'This is the error message in the index.php template.', 'satopin' ); ?></p>
			</footer>
		</article>

	<?php endif; ?>			


<?php get_footer(); ?>
