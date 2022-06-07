<?php get_header(); ?>
<?php $idUser = $_GET['s']; ?>
        <div class="header">
            <h1>Zoek resultaat voor <?php echo $idUser ?> </h1>	
            <div class="searchExpo">
<!--                <input type="search" name="search" value="Zoek een expositie">-->
                <?php get_search_form(); ?>
            </div>
        </div>
        <!-- START Mobile Design  -->

        <a class="arrowleftMobile"><p>&#60;</p></a>
        <a class="arrowrightMobile"><p>&#62;</p></a>

        <!-- END Mobile Design  -->
           <div class="expoScrollContainer">
                <div class="expoScrollContainerContainer">

		<?php
		if ( have_posts() ) : ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>

				<div class="itemExpo">
                    <a href="<?php the_permalink(); ?>" <?php post_class(); ?> id="post-<?php the_ID(); ?>">

                        <?php the_post_thumbnail(); ?>
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                        <h3 class="date"> September 2016</h3>
                    </a>
                </div>

			<?php endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
</div>
            </div>
            <div class="timeline">
                <hr>
                <a href="#" class="arrowleft">&#60;</a>
                <a href="#" class="arrowright">&#62;</a>

                <a href="#" class="vorige">Vorige</a>
                <a href="#" class="volgende">Volgende</a>
            </div>
            <script>
                $(document).ready(function(){
                    var widthContainer = $('.itemExpo').width() + 24;
                    var numItems = $('.itemExpo').length;
                    $(".expoScrollContainerContainer").css( "width", (widthContainer*numItems)+5 );
                    
                    $(".arrowright").click(function(){
                        var leftPos = $('.expoScrollContainer').scrollLeft();
                        var widthContainer = $('.itemExpo').width() + 24;
                        $(".expoScrollContainer").animate({scrollLeft: leftPos + (widthContainer*4)}, 300);
                    });
                    $(".volgende").click(function(){
                        var leftPos = $('.expoScrollContainer').scrollLeft();
                        var widthContainer = $('.itemExpo').width() + 24;
                        $(".expoScrollContainer").animate({scrollLeft: leftPos + (widthContainer*4)}, 300);
                    });
                    $(".arrowrightMobile").click(function(){
                        var leftPos = $('.expoScrollContainer').scrollLeft();
                        var widthContainer = $('.itemExpo').width() + 24;
                        $(".expoScrollContainer").animate({scrollLeft: leftPos + (widthContainer)}, 300);
                    });
                    $(".arrowleft").click(function(){
                        var leftPos = $('.expoScrollContainer').scrollLeft();
                        var widthContainer = $('.itemExpo').width() + 24;
                        $(".expoScrollContainer").animate({scrollLeft: leftPos - (widthContainer*4)}, 300);
                    });
                    $(".vorige").click(function(){
                        var leftPos = $('.expoScrollContainer').scrollLeft();
                        var widthContainer = $('.itemExpo').width() + 24;
                        $(".expoScrollContainer").animate({scrollLeft: leftPos - (widthContainer*4)}, 300);
                    });
                    $(".arrowleftMobile").click(function(){
                        var leftPos = $('.expoScrollContainer').scrollLeft();
                        var widthContainer = $('.itemExpo').width() + 24;
                        $(".expoScrollContainer").animate({scrollLeft: leftPos + (widthContainer)}, 300);
                    });
                });
            </script>
<?php
get_footer();
