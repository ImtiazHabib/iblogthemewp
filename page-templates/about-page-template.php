<?php
/*
*
* Template Name: Special Page Template
*/
?>
<?php
    
   get_header();
?>
<body <?php body_class(  ); ?> >
<?php get_template_part( 'template-parts/about-page-template/hero-page' ); ?>
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
                            </div>
                            
                        </div>

                    </div>
                
                    <?php
                }
                ?>
                <!-- post end -->  
            </div>  
        </div>
    </div>
</div>


<?php
   
   get_footer();
?>
