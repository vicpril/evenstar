<?php get_header();?>

	<div class="inner-page cover">
		<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
			<article <?php post_class('evenstar-page'); ?> id="post-<?php the_ID(); ?>">

				<h1><?php echo $alt_title; ?></h1>
				
				<?php the_content(); ?>

				<?php if (is_page('contact-us')) {
					echo do_shortcode('[contact-form-7 id="29" title="Contact form 1"]');
				} ?>
			</article>

		<?php endwhile; ?>
		<?php endif; ?>

	</div>

<?php get_footer(); ?>