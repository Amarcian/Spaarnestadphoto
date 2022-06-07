<?php

get_header(); ?>

    <?php $the_query = new WP_Query( 'posts_per_page=1' ); ?>
    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

        <a href="<?php the_permalink() ?>">
            <div class="ExpositieInfo">
                <div class="NieuweExpositie"> <h3>Nieuwste Expositie</h3></div>

                <div class="ExpositieData">
                    <div class="ExpositieDataLeft">
                        <h1><?php the_title(); ?></h1>
                    </div>

                    <div class="ExpositieDataRight">
                        <h2><?php the_field('expositie_datum'); ?></h2>
                    </div>
                </div>
            </div>
        </a>
        
        <a href="<?php the_permalink() ?>">
            <button class="ExpositieButton">
                Bekijk Nu >
            </button>
        </a>
        
        <div class="FeaturedImageBig"><?php
            if ( has_post_thumbnail() ) {
	           the_post_thumbnail();
            } 
            ?></div>
        
<?php endwhile; wp_reset_postdata();?>

<?php
get_footer();
