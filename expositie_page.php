<?php /* Template Name: Expositie */ ?>
<?php get_header(); ?>
        <div class="header">
            <h1><?php the_title(); ?></h1>	
            <div class="searchExpo">
                <?php get_search_form(); ?>
            </div>
        </div>
        <!-- START Mobile Design  -->

        <a class="arrowleftMobile"><p>&#60;</p></a>
        <a class="arrowrightMobile"><p>&#62;</p></a>

        <!-- END Mobile Design  -->
           <div class="expoScrollContainer">
               
                <div class="expoScrollContainerContainer">
                    <?php $custom_query = new WP_Query('cat=-9'); // exclude category 9
                    while($custom_query->have_posts()) : $custom_query->the_post(); ?>
                        <div class="itemExpo">
                            <a href="<?php the_permalink(); ?>" <?php post_class(); ?> id="post-<?php the_ID(); ?>">

                                <?php the_post_thumbnail(); ?>
                                <h1><?php the_title(); ?></h1>
                                <?php the_content(); ?>
                                <h3 class="date"><?php the_field('expositie_datum'); ?></h3>
                            </a>
                        </div>


                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); // reset the query ?>
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
                    $(".expoScrollContainerContainer").css( "width", (widthContainer*numItems) +5);
                    
                    $(".arrowright").click(function(){
                        var leftPos = $('.expoScrollContainer').scrollLeft();
                        var widthContainer = $('.itemExpo').width() + 24;
                        $(".expoScrollContainer").animate({scrollLeft: leftPos + (widthContainer)}, 300);
                    });
                    $(".volgende").click(function(){
                        var leftPos = $('.expoScrollContainer').scrollLeft();
                        var widthContainer = $('.itemExpo').width() + 24;
                        $(".expoScrollContainer").animate({scrollLeft: leftPos + (widthContainer)}, 300);
                    });
                    $(".arrowrightMobile").click(function(){
                        var leftPos = $('.expoScrollContainer').scrollLeft();
                        var widthContainer = $('.itemExpo').width() + 24;
                        $(".expoScrollContainer").animate({scrollLeft: leftPos + (widthContainer)}, 300);
                    });
                    $(".arrowleft").click(function(){
                        var leftPos = $('.expoScrollContainer').scrollLeft();
                        var widthContainer = $('.itemExpo').width() + 24;
                        $(".expoScrollContainer").animate({scrollLeft: leftPos - (widthContainer)}, 300);
                    });
                    $(".vorige").click(function(){
                        var leftPos = $('.expoScrollContainer').scrollLeft();
                        var widthContainer = $('.itemExpo').width() + 24;
                        $(".expoScrollContainer").animate({scrollLeft: leftPos - (widthContainer)}, 300);
                    });
                    $(".arrowleftMobile").click(function(){
                        var leftPos = $('.expoScrollContainer').scrollLeft();
                        var widthContainer = $('.itemExpo').width() + 24;
                        $(".expoScrollContainer").animate({scrollLeft: leftPos - (widthContainer)}, 300);
                    });
                    //window.onresize = function(){ location.reload(); };
                });
            </script>
            <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
            <script src="https://css-tricks.com/examples/HorzScrolling/jquery.mousewheel.js"></script>
            <script>
                $('.expoScrollContainer').mousewheel(function(e, delta) {
                    this.scrollLeft -= (delta * 40);
                    e.preventDefault();
                });
            </script>
<?php
get_footer();
