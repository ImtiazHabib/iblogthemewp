<?php
    
   get_header();
?>
<body <?php body_class(  ); ?> >
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="http://localhost/ithemeone/about/">
                   <h3 class="tagline">
                    <?php echo bloginfo( "name" ); ?>
                   </h3> 
                </a>
                
                <h1 class="align-self-center display-1 text-center heading"><?php bloginfo("description"); ?></h1>
            </div>
        </div>
    </div>
</div>
<div class="posts <?php post_class(  ); ?>" >
    <!-- post started -->
    <?php
    while (have_posts()) {
        the_post(  );
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">   
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
                <div class="col-md-10 offset-md-1">
                    <!-- <ul class="list-unstyled">
                        <li>dhaka</li>
                    </ul> -->

                    <!-- showing post tags start -->
                   <?php echo get_the_tag_list( "<ul class=\"list-unstyled\"><li>", "<li></li>","</li></ul>"); ?>
                    <!-- showing post tags end -->
                     <p>
                        <?php
                        if(has_post_thumbnail(  )){
                            the_post_thumbnail( "large", array("class"=>"img-fluid") );
                        }
                        ?>
                    </p>
                    <p>
                        <!-- checking single page or not start -->
                        <?php

                           
                             the_content(  );
                           
                        ?>
                        <!-- checking single page or not end -->

                        
                    </p>

                </div>
                
            </div>

        </div>
    
        <?php
    }
    ?>
    <!-- post end -->  
</div>
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
