<?php get_header(); ?>
    <?php
        if( have_posts() ){
            while( have_posts() ){
                the_post();
                get_template_part( 'template-parts/content/content-single' );
            }
        }
    ?>
    <div class="comentarios-area">
        <?php comments_template(); ?>
    </div>
<?php get_footer(); ?>