<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <a href="http://localhost/ithemeone/">
                   <h3>
                    <?php echo bloginfo( "name" ); ?>
                   </h3> 
                </a>
                <!-- logo section start -->
                <?php
                 if(current_theme_supports( "custom-logo" )){
                    ?>
                    <div class="header-logo text-center">
                        <?php echo get_custom_logo(); ?>
                    </div>
                    <?php
                 }
                ?>
                <!-- logo section end -->
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