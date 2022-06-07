<?php

get_header(); ?>

    <div class="HeroImage">
            <?php
            if ( has_post_thumbnail() ) {
	           the_post_thumbnail();
            } 
            ?>
        </div>

        <?php if( get_field('podcast') ): ?>
            <div class="PodcastTrigger">
                <img src="<?php bloginfo('template_url'); ?>/img/podcasttrigger.svg">
            </div>
        <?php endif; ?>
        
        <div class="ContentContainer">
            <?php if( get_field('podcast') ): ?>
                <div class="podcast"><?php the_field('podcast'); ?></div>
            <?php endif; ?>
            
            <h1><?php the_title(); ?></h1>	
            
            <?php if( get_field('beeldbank_link') ): ?>
                <div class="buttons">
                    <a href="<?php the_field('beeldbank_link'); ?>" target="_blank">
                        <button class="BeeldbankButton">
                            Bezoek onze beeldbank
                        </button>
                    </a>
                </div>
            
                <div class="podcast"><?php the_field('podcast'); ?></div>
            <?php endif; ?>
            
            
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
            <?php the_content();
            endwhile; else: ?>
            <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>
            
            <?php  $file = get_field('pdf'); if( $file ): ?>
                <p class="pdfdownloadtext">Meer lezen over deze expositie? <br>
                Download hier de PDF en lees onderweg verder op laptop, tablet of telefoon.</p>
            
                <a href="<?php echo $file['url']; ?>" target="_blank"><button class="pdfdownload">Download PDF</button></a>
            <?php endif; ?>
        </div>
<?php
get_footer();
