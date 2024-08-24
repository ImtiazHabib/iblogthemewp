<?php
/*
*
* Template Name: Custom Query
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
    $_p = get_posts(array(
      "post__in" => array(13,11),
      "paged" => $paged
    ));
    ?>
    <!-- custome query read post end -->

    <?php
    foreach ($_p as $post) {
        // it will show post data and you have to use wp_rest_postdata 
        setup_postdata( $post );
        ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php
    }
    wp_reset_postdata($post);
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