 <div class="container">
                        <div class="row">
                            <div class="col-md-12">   
                             <h2 class="post-title text_decoration_single">
                                    <?php
                                        the_title(  );
                                    ?>
                                    <span class="dashicons dashicons-format-image"></span>
                                    
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
                            <!-- showing author information start -->
                            <div class="author_information">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-2 ">
                                            <div class="author_image">
                                                <?php
                                                   echo get_avatar(get_the_author_meta("ID"));
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="author_description">
                                                <h1>
                                                   <?php echo get_the_author_meta("display_name"); ?> 
                                                </h1>
                                                <p>
                                                    <?php echo get_the_author_meta("description"); ?> 
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- showing author information end -->
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
                