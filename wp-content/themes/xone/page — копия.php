<?php get_header();?>

	<div class="inner-page cover">
		<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
			<article <?php post_class('evenstar-page'); ?> id="<?php the_ID(); ?>">
				<?php $alt_totle = get_field('alt_title');
					if ($alt_title) { ?>
						<h1><?php echo $alt_title; ?></h1>
					<?php } else { ?>
						<h1><?php the_title();?></h1>
					<?php } ?>
				?>
			</article>

	</div>