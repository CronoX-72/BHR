<a href=" <?php the_permalink(); ?> ">
    <figure>
        <div class="img-destacados">
            <?php
                if( has_post_thumbnail() ){
                    the_post_thumbnail( 'post-thumbnails', array( 'class' => 'imagen-destacada' ) );                
                }
            ?>
        </div>
        <div class="capa-destacados">
            <h2>
                <?php the_title(); ?>
            </h2>
        </div>
    </figure>
</a>