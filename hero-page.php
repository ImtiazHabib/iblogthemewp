<?php

 $id = get_queried_object_id ();

        // Check if the post/page has featured image
        if ( has_post_thumbnail( $id ) ) {

            // Change thumbnail size, but I guess full is what you'll need
            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $id ), 'full' );

            $url = $image[0];

        } else {

            //Set a default image if Featured Image isn't set
            $url = '';

        }
 // $post_thumbnail_image = get_the_post_thumbnail_url(null,"large");

?>

<div class="header page-header" style="background-image: url('<?php echo $url; ?>');">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <a href="http://localhost/ithemeone/">
                   <h3>
                    <?php echo bloginfo( "name" ); ?>
                   </h3> 
                </a>
                <a href="<?php echo site_url( ); ?>">
                   <h1 class="align-self-center display-1 text-center heading"><?php bloginfo("description"); ?></h1>
                </a>
            </div>
            <div class="col-md-6">
                <div class="navigation_menu">
                     <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'topmenu',
                            'menu_id'        => 'topmenucontainer',
                            'menu_class'     => 'list-inline text-center',
                        )
                    );
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>