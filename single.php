<?php
    
   get_header();
   $ibwp_class_layout_change = "col-md-8";
   if(!is_active_sidebar("single_post_right_sidebar")){
     $ibwp_class_layout_change = "col-md-12";
   }
?>
<body <?php body_class(  ); ?> >
<?php get_template_part( "template-parts/common/hero" ); ?>
<div class="container">
    <div class="row">
        <!-- changing class layout -->
        <div class="<?php echo $class_layout_change; ?>">
            <div class="posts <?php post_class(  ); ?>" >
                <!-- post started -->
                <?php
                while (have_posts()) {
                    the_post(  );
                   
                   // <!-- single post section start -->

                   // <!-- calling single post formats -->

                   // <!-- single post section end -->

                    get_template_part("post-formats/content",get_post_format());
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
