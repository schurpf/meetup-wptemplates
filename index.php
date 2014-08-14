<?php get_header(); ?>
<?php if ( have_posts() ) : ?>
			<div class="wp-loop">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
				<article>
					<header>
						<h1><?php the_title();?></h1>
					</header>
					<p><?php the_author( );?><span class="article-date"><?php the_date( );?> </span></p>
					<div class="content-wrap"><?php the_content();?></div>
				</article>
				<?php endwhile; ?>
			</div><!--wp-loop-->
<?php else : ?>
<p>Sorry no content here</p>
<?php endif; ?>
<?php get_footer(); ?>