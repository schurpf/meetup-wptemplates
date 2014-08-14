<?php get_header(); ?>
<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<?php the_title();?>
			<?php 
			the_author( );
			the_date( );	
			the_content();
			the_excerpt();		
			?>
			<br />

			<?php endwhile; ?>

<?php else : ?>

<?php endif; ?>

<?php get_footer(); ?>