 <div class="container">
                        <div class="row">
                            <div class="col-md-12">   
                             <h2 class="post-title text_decoration_single">
                                    <?php
                                        the_title(  );
                                    ?>
                                    <!-- checking post format and change according to that -->
                                    <?php
                                    if(has_post_format( 'quote' ))
                                    {
                                        echo '<span class="dashicons dashicons-editor-quote"></span>';
                                    }elseif(has_post_format( 'video' ))
                                    {
                                        echo '<span class="dashicons dashicons-format-video"></span>';
                                    }
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
                            <div class="col-md-12">
                                <div class="slider">
                                            <?php
                                            if ( class_exists( 'Attachments' ) ) {
                                                $attachments = new Attachments( 'slider' );
                                                if ( $attachments->exist() ) {
                                                    while ( $attachment = $attachments->get() ) { ?>
                                                        <div>
                                                            <?php echo $attachments->image( 'large' ); ?>
                                                        </div>
                                                        <?php
                                                    }
                                                }
                                            }
                                            ?>
                                        </div>
                                        <div>
                                            <?php
                                            if ( !class_exists( 'Attachments' ) ) {
                                                if ( has_post_thumbnail() ) {
                                                    $thumbnail_url = get_the_post_thumbnail_url( null, "large" );
                                                    printf( '<a class="popup" href="%s" data-featherlight="image">', $thumbnail_url );
                                                    the_post_thumbnail( "large", array( "class" => "img-fluid" ) );
                                                    echo '</a>';
                                                }
                                            }

                                            the_content();
                                            wp_link_pages();

                                            ?>
                                        </div>
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
                