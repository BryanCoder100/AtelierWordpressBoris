<?php get_header(); ?>
<div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php the_content(); ?>

    <?php endwhile;
    endif; ?>
</div>
<div class="container">
<?php $loop = new WP_Query((array('post_type' => 'parcours','order'=>'ASC'))); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

            <section>

                <div><?php the_content() ?></div>
            </section>

    <?php endwhile; wp_reset_query(); ?>
</div>
<div class="container">
<?php $loop = new WP_Query((array('post_type' => 'portfolio','order'=>'ASC'))); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

            <section>
                
                <div><?php the_content() ?></div>
            </section>

    <?php endwhile; wp_reset_query(); ?>
</div>
<?php get_footer(); ?>