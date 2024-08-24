<?php
/*
*
* Template Name: Custom WP Query
*/
?>
<?php 
   get_header();
?>

<body <?php body_class(  ); ?> >

<?php get_template_part( "template-parts/common/hero" ); ?>
<div class="posts" >
    <h1>
        Post Under: Custom Query
    </h1>
    <!-- post started -->
    <!-- custome query read post start , use paged for pagination-->
    <?php
    $paged = get_query_var("paged")?get_query_var("paged"):1;
    $_p = new WP_Query(array(
      "post__in" => array(13,11),
      "paged" => $paged
    ));
    ?>
    <!-- custome query read post end -->

    <?php
    while ($_p->have_posts()) {
         $_p->the_post();
        ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php
    }
    wp_reset_query();
    ?>
    <!-- post end -->  
    <div class="posts_pagination">
        <div class="container">
            <div class="row">
               <div class="col-md-4">
                <!-- post pagination start -->
                   <?php 
                      // for custom query pagination
                      echo paginate_links(array(
                        'total' => 3

                      ));

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