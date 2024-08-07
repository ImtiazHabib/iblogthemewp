<?php 
   get_header();
?>

<body <?php body_class(  ); ?> >

<?php get_template_part( "template-parts/common/hero" ); ?>
<div class="posts" >
    <h1>
        Post Under: <?php the_author(); ?>
    </h1>
    <!-- showing author information start -->
        <div class="author_information">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 ">
                        <div class="author_image">
                            <?php
                               echo get_avatar(get_the_author_meta("ID"));
                            ?>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="author_description">
                            <h1>
                               <?php echo get_the_author_meta("display_name"); ?> 
                            </h1>
                            <p>
                                <?php echo get_the_author_meta("description"); ?> 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- showing author information end -->
    <!-- post started -->
    <?php
    while (have_posts()) {
        the_post(  );
        ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php
    }
    ?>
    <!-- post end -->  
    <div class="posts_pagination">
        <div class="container">
            <div class="row">
               <div class="col-md-4">
                <!-- post pagination start -->
                   <?php 

                      the_posts_pagination( array(
                        'mid_size'  => 2,
                        'screen_reader_text' => '',
                        'prev_text' => __( 'New Post', 'ibwp' ),
                        'next_text' => __( 'Old Post', 'ibwp' ),
                    ) ); 

                    ?>
                <!-- post pagination end -->

               </div>
               <div class="col-md-8">
                   
               </div>  
            </div>
        </div>
    </div>
    
</div>
    

<?php
   
   get_footer();
?>