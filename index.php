<?php 
   get_header();
?>

<body <?php body_class(  ); ?> >

<?php get_template_part( "template-parts/common/hero" ); ?>
<div class="posts" >
    <!-- post started -->
    <?php
    while (have_posts()) {
        the_post(  );
        ?>
        <div class="post" <?php post_class(  ); ?> >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <a href="<?php the_permalink( ); ?>">    
                 <h2 class="post-title">
                        <?php
                            the_title(  );
                        ?>
                    </h2>
                </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p>
                        <strong>
                        <?php
                            the_author(  );
                        ?> 
                        </strong><br/>
                        <?php
                         the_date(); 
                        ?>
                    </p>
                    <!-- <ul class="list-unstyled">
                        <li>dhaka</li>
                    </ul> -->

                    <!-- showing post tags start -->
                   <?php echo get_the_tag_list( "<ul class=\"list-unstyled\"><li>", "<li></li>","</li></ul>"); ?>
                    <!-- showing post tags end -->

                </div>
                <div class="col-md-8">
                    <p>
                        <?php
                            if(has_post_thumbnail(  )){
                                $thumbnail_image = get_the_post_thumbnail_url(null, "large" );
                                echo '<a href="#" data-featherlight="'.$thumbnail_image.'">';
                                the_post_thumbnail( "large", array("class"=>"img-fluid") );
                                echo "</a>";
                             }
                            ?>             
                    </p>
                    <p>
                        <!-- checking single page or not start -->
                        <?php

                           
                            the_excerpt();
                           
                        ?>
                        <!-- checking single page or not end -->

                        
                    </p>
                </div>
            </div>

        </div>
    </div>
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