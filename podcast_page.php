<?php /* Template Name: Podcasts */ ?>
<?php get_header(); ?>

        <div class="ContainerPod">
            <div class="header">
            <h1><?php the_title(); ?></h1>	
        </div>
            
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
            
            
            <?php the_content();
            endwhile; else: ?>
            <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>
        

            <!--<div class="PodContainer">-->
          
           <!-- START Mobile Design  -->
           
           <!---<a class="arrowleftMobile" href=""><p>&#60;</p></a>
           <a class="arrowrightMobile" href=""><p>&#62;</p></a>-->
           
           <!-- END Mobile Design  -->
           
            <!--</div>-->
    </div>
<?php
get_footer();
