<?php get_header(); ?>
<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title();?></h1>
			<p><?php the_author( );?>
			<span><?php the_date( );?> </span></p>
			<article><?php the_content();?></article>
			<?php endwhile; ?>

<?php else : ?>

<?php endif; ?>

<?php get_footer(); ?>