<?php get_header(); ?>

	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
    
    	<?php the_excerpt(); ?>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>