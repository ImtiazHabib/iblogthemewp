<div class="header">
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