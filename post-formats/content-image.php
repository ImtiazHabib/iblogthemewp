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

                                         ?>
                                         <!-- metabox field acf section start -->
                                         <?php
                                          if(function_exists("the_field")){
                                            ?>
                                            <div class="metafield">
                                                <h1>camera Model : <?php the_field("camera_model"); ?></h1>
                                                <h1>Capture date : 
                                                    <?php 
                                                    $ibwp_capture_date = get_field("capture_date"); 
                                                    echo $ibwp_capture_date;
                                                    ?></h1>

                                                    <?php 
                                                    $ibwp_image = get_field("image");
                                                    $ibwp_image_path = wp_get_attachment_image_src( $ibwp_image);
                                                    echo "<img src='".esc_url( $ibwp_image_path[0] ). "'/>'";

                                                    ?>
                                                    <!-- metabox file k dekhanor jnno code start -->
                                                    <p>
                                                    <?php 
                                                    // get the i_file id 
                                                     $file_i = get_field("i_file");
                                                     if($file_i){
                                                        $file_url = wp_get_attachment_url( $file_i );
                                                        // getting this file thumbnail
                                                        $file_thumbnail = get_field("thumbnail",$file_url);
                                                        if($file_thumbnail){
                                                            $file_thumb_details = wp_get_attachment_image_src($file_thumbnail);
                                                            echo "<a href='{$file_url}' target='_blank' ><img src='".esc_url( $file_thumb_details[0] ). "'/></a>";
                                                        }else{
                                                            echo "<a href='{$file_url}' target='_blank' >{$file_url}</a>";
                                                        }
                                                     }

                                                    ?>
                                                    </p>

                                         
                                                    <!-- metabox file k dekhanor jnno code end -->
                                                
                                            </div>

                                            <?php
                                          }
                                         

                                         ?>
                                         <!-- metabox field acf section end -->




                                         <?php
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
                                if(!post_password_required()){
                                    comments_template();
                                }
                               ?>
                               <!-- check comments open or not and show comments end -->

                            </div>
                            
                        </div>

                    </div>
                