<?php
    
   get_header();
?>
<body <?php body_class(  ); ?> >
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="tagline">
                    <?php echo bloginfo( "name" ); ?>
                </h3>
                <h1 class="align-self-center display-1 text-center heading"><?php bloginfo("description"); ?></h1>
            </div>
        </div>
    </div>
</div>
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
                    <ul class="list-unstyled">
                        <li>dhaka</li>
                    </ul>
                </div>
                <div class="col-md-8">
                    <p>
                        <?php
                        if(has_post_thumbnail(  )){
                            the_post_thumbnail( "large", array("class"=>"img-fluid") );
                        }
                        ?>
                    </p>
                    <p>
                        <?php
                        //  check if the page is singel or home page 
                         the_content();
                            
                        ?>
                    </p>
                </div>
            </div>

        </div>
    </div>
        <?php
    }
    ?>
    <!-- post end -->  
</div>
    

<?php
   
   get_footer();
?>