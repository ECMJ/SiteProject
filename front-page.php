<?php get_header(); ?>

<div class="row">

    <?php
    // Args
    $my_args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'category_name' => 'destaque'
    );
    // Query
    $my_query = new WP_Query ($my_args);
    ?>

    <?php if( $my_query->have_posts()) : while( $my_query->have_posts()) : $my_query->the_post(); ?>

    <?php get_template_part('content'); ?>

    <?php endwhile; endif; ?>

    <?php wp_reset_query(); ?>

</div>

<div class="row">

    <div class="col-sm-12 col-md-8">

        <?php if(have_posts()) : while(have_posts()) : the_post();?>
        
        <?php get_template_part('content'); ?>

        <?php endwhile; ?>

        <?php else : get_404_template(); endif; ?>

        <div class="blog-pagination mb-5">
            <?php next_posts_link( 'Mais antigos' ); ?> <?php previous_posts_link( 'Mais novos' ); ?>
        </div>
    </div>

        <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
