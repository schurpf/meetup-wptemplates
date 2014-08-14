<?php
/*
Template Name: My Custom Page
*/
get_header(); ?>
<p>This is a custom page template, modify it as you like. It will only affect pages that use this template.</p>
<?php if ( have_posts() ) : ?>
			<div class="wp-loop custom">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
				<article>
					<header>
						<h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
					</header>
					<p><?php the_author( );?><span class="article-date"><?php the_date( );?> </span></p>
					<div class="content-wrap"><?php the_content();?></div>
				</article>
				<?php endwhile; ?>
			</div><!--wp-loop-->
<?php else : ?>
<p>Sorry your search didn't result in any matches.</p>
<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

