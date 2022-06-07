<?php

get_header(); ?>

    <div class="HeroImage">
            <?php
            if ( has_post_thumbnail() ) {
	           the_post_thumbnail();
            } 
            ?>
        </div>
        
        <!-- START Mobile Design  -->
        
        <a href="#" class="MapButtonClose"><img src="<?php bloginfo('template_url'); ?>/img/menuClose.svg"></a>
        <div class="googlemaps"><a class="mapButton" href="#"><img src="<?php bloginfo('template_url'); ?>/img/placeholdergooglemaps.jpg"></a></div>

        <!-- END Mobile Design   -->
        
        <div class="googlemaps mapVisable">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2451.9445109591575!2d4.324259115464857!3d52.08073997973335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5b71744264da1%3A0x9fb6ac3fa666d80f!2sStichting+Spaarnestad+Photo!5e0!3m2!1snl!2snl!4v1496740944733" width="20%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        
        <div class="ContentContainerPage">
            <div class="about">
                <?php
			         while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/content', 'page' );
                endwhile; // End of the loop.
			     ?>
            </div>
            
            <div class="buttons">
                <a href="http://spaarnestadphoto.nl/" target="_blank">
                    <button class="BeeldbankButton">
                        Bezoek onze beeldbank
                    </button>
                </a>
            </div>
        </div>
<?php
get_footer();
