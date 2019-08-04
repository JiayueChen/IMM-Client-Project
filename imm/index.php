<?php get_header(); ?>


<!--PROGRAM OVERVIEW SECTION-->
<?php query_posts('pagename=program-overview');
if ( have_posts() ) :while ( have_posts() ) : the_post(); ?>
<section class="section pb-5 section-program-overview content">
    <!--   fake div fix the sticky nav -->
    <div id="program-overview"></div>

    <div class="container section-body">

        <div>
            <h2 class="section-title-left"><?php the_title(); ?></h2>
        </div>
        <div>
            <?php the_content(); ?>
        </div>
        <div class="buttons row pt-5 pb-4">
            <div class="col ebrochure-button">
                <a href="<?php bloginfo("template_url"); ?>/assets/e-brochure.pdf" target="_blank">eBrochure</a>
            </div>
            <div class="col moreinfo-button">
                <a href="https://www.algonquincollege.com/mediaanddesign/program/imm/" target="_blank">
                    <button>More Info</button>
                </a>
            </div>
        </div>
    </div>
</section>
<?php endwhile; else: ?>
<?php _e('Sorry, no posts matched your criteria.'); ?>
<?php endif; ?>


<!--COURSES SECTION-->
<section class="section pb-2 section-program-courses">
    <!--   fake div fix the sticky nav -->
    <div id="courses"></div>

    <div class="container section-body">
        <div>
            <h2 class="section-title-right">Courses</h2>
        </div>
        <div>
            <h3 class="level pb-4">Level 1</h3>

            <div class="row ">
                <?php 

                $args = array (
                   'category_name'	=>	'level1'
               );

                $myquery = new WP_Query( $args );

                if ( $myquery->have_posts() ) {
                   while ( $myquery->have_posts() ) {
                      $myquery->the_post();
                      ?>
                <div class="col-12 col-sm-6 col-md-4 courses-div pb-4">
                    <div class="course-image pb-4" data-toggle="modal" data-target="#<?php global $post; echo $post->post_name ?>-Modal">
                        <?php the_post_thumbnail(); ?>
                    </div>

                    <p class="course-title pt-2"><?php the_title(); ?></p>


                    <!-- Web Design Modal -->
                    <div class="modal fade" id="<?php global $post; echo $post->post_name ?>-Modal" tabindex="-1" role="dialog" aria-labelledby="<?php global $post; echo $post->post_name ?>-Modal-Label" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><?php the_title(); ?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <?php the_content(); ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <?php
                }
            } else {

               _e('Sorry, no posts matched your criteria.'); 
           }
           wp_reset_postdata();
           ?>
            </div>
        </div>
    </div>

    <!--Divider-->
    <div>
        <img class="curtain" src="<?php bloginfo("template_url"); ?>/assets/images/curtain.png" alt="courses divider">
    </div>

    <!--Level 2 Courses-->
    <div class="container section-body pb-3">
        <h3 class="level pb-4">Level 2</h3>

        <div class="row">
            <?php 

        $args = array (
            'category_name'	=>	'level2'
        );

        $myquery = new WP_Query( $args );

        if ( $myquery->have_posts() ) {
            while ( $myquery->have_posts() ) {
               $myquery->the_post();
               ?>
            <div class="col-12 col-sm-6 col-md-4 courses-div pb-4">
                <div class="course-image pb-4" data-toggle="modal" data-target="#<?php global $post; echo $post->post_name ?>-Modal">
                    <?php the_post_thumbnail(); ?>
                </div>

                <p class="course-title pt-2"><?php the_title(); ?></p>

                <!-- Databases & Serverside Modal -->
                <div class="modal fade" id="<?php global $post; echo $post->post_name ?>-Modal" tabindex="-1" role="dialog" aria-labelledby="<?php global $post; echo $post->post_name ?>-Modal-Label" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><?php the_title(); ?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <?php the_content() ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
    }
} else {

    _e('Sorry, no posts matched your criteria.'); 
}
wp_reset_postdata();
?>

        </div>
    </div>
</section>

<!--FACULTY SECTION-->
<section class="section pb-2 section-program-faculty">
    <!--   fake div fix the sticky nav -->
    <div id="faculty"></div>

    <!--Faculty cards for tablet screen sizes and bigger-->
    <div class="container section-body" id="faculty-cards-tablet">
        <div>
            <h2 class="section-title-left">Faculty</h2>
            <div class="row pb-4">
                <?php 
                $args = array (
                    'category_name'	=>	'faculty',
                    'orderby' => 'title',
                    'order'  => 'ASC',
                );

                $myquery = new WP_Query( $args );

                if ( $myquery->have_posts() ) {
                    while ( $myquery->have_posts() ) {
                        $myquery->the_post();
                        ?>

                <div class="col-xs-12 col-sm-6 align-items-stretch pb-5 card-div">
                    <div class="card">
                        <div class="card-img-top">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="card-title">
                        </div>
                        <div class="professor-name">
                            <p><?php the_title(); ?></p>
                        </div>
                        <div class="card-body">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
                <?php
                    }
                } else {

                    _e('Sorry, no posts matched your criteria.'); 
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>


    <!--Faculty cards for mobile screen sizes-->

    <div class="container section-body" id="faculty-cards-mobile">
        <div>
            <h2 class="section-title-left" id="Faculty">Faculty</h2>
            <div class="row pb-4">
                <?php 
                $args = array (
                    'category_name'	=>	'faculty'
                );

                $myquery = new WP_Query( $args );

                if ( $myquery->have_posts() ) {
                    while ( $myquery->have_posts() ) {
                        $myquery->the_post();
                        ?>

                <div class="col-xs-12 col-sm-6 d-flex align-items-stretch pb-5 card-div">
                    <div class="card">
                        <div class="card-img-top">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="card-title">
                        </div>

                        <div class="professor-name">
                            <p><?php the_title(); ?></p>
                        </div>
                    </div>
                </div>

                <?php
                    }
                } else {

                    _e('Sorry, no posts matched your criteria.'); 
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>


</section>

<!--TESTIMONIALS SECTION-->
<section class="section section-program-testimonials pb-5">
    <!--   fake div fix the sticky nav -->
    <div id="testimonials"></div>

    <div class="container section-body">
        <div>
            <h2 class="section-title-right">Testimonials</h2>
        </div>
        <div class="col-12 testimonial-video ">
            <?php 
            $args = array (
            'category_name' => 'testimonials'
            );

            $myquery = new WP_Query( $args );

            if ( $myquery->have_posts() ) {
                while ( $myquery->have_posts() ) {
                    $myquery->the_post();
                    the_content();
                }
            } else {
            _e('Sorry, no posts matched your criteria.');
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
