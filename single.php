<?php
    
   get_header();
?>
<body <?php body_class(  ); ?> >
<?php get_template_part( "template-parts/common/hero" ); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="posts <?php post_class(  ); ?>" >
                <!-- post started -->
                <?php
                while (have_posts()) {
                    the_post(  );
                    ?>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">   
                             <h2 class="post-title text_decoration_single">
                                    <?php
                                        the_title(  );
                                    ?>
                                    <!-- checking post format and change according to that -->
                                    <?php
                                    if(has_post_format( 'quote' ))
                                    {
                                        echo '<span class="dashicons dashicons-editor-quote"></span>';
                                    }elseif(has_post_format( 'video' ))
                                    {
                                        echo '<span class="dashicons dashicons-format-video"></span>';
                                    }
                                    ?>
                             </h2>
                          
                            <p class="text_decoration_single">
                                    <strong>
                                    <?php
                                        the_author(  );
                                    ?> 
                                    </strong><br/>
                                    <?php
                                     echo get_the_date(); 
                                    ?>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- <ul class="list-unstyled">
                                    <li>dhaka</li>
                                </ul> -->

                                <!-- showing post tags start -->
                               <?php echo get_the_tag_list( "<ul class=\"list-unstyled\"><li>", "<li></li>","</li></ul>"); ?>
                                <!-- showing post tags end -->
                                 <p>
                                    <?php
                                    if(has_post_thumbnail(  )){
                                        // $thumbnail_image = get_the_post_thumbnail_url(null, "large" );
                                        echo '<a class="popup" href="#" data-featherlight="image">';
                                        the_post_thumbnail( "large", array("class"=>"img-fluid") );
                                        echo "</a>";
                                    }
                                    ?>
                                </p>
                                <p>
                                    <!-- checking single page or not start -->
                                    <?php

                                       
                                         the_content(  );

                                         // page break show
                                         wp_link_pages(  );

                                         next_post_link();
                                         
                                         echo "</br>";

                                         previous_post_link();
                                       
                                    ?>
                                    <!-- checking single page or not end -->
                                </p>
                            </div>
                            <div class="col-md-12">
                               <!-- check comments open or not and show comments start -->
                               <?php
                                if(comments_open(  )){
                                    comments_template();
                                }
                               ?>
                               <!-- check comments open or not and show comments end -->

                            </div>
                            
                        </div>

                    </div>
                
                    <?php
                }
                ?>
                <!-- post end -->  
            </div>  
        </div>
        <div class="col-md-4">
            <!-- right sidebar start -->
            <?php
              if(is_active_sidebar( "single_post_right_sidebar" ))
               dynamic_sidebar( "single_post_right_sidebar" ); 
            ?>
            <!-- right sidebar end -->

        </div>
    </div>
</div>


<?php
   
   get_footer();
?>
