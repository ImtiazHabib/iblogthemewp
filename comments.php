<div class="comments">
    <h2 class="comments-title">
        <?php
        $ibwp_cn = get_comments_number();
        if ( 1 == $ibwp_cn ) {
            _e( "1 Comment", "ibwp" );
        } else {
            echo $ibwp_cn . " " . __( "Comments", "ibwp" );
        }
        ?>
    </h2>
    <div class="comments-list">
        <?php
        wp_list_comments();
        ?>
        <div class="comments-pagination">
            <?php
            the_comments_pagination( array(
                'screen_reader_text' => __( 'Pagination', 'ibwp' ),
                'prev_text'          => '<' . __( 'Previous Comments', 'ibwp' ),
                'next_text'          => '>' . __( 'Next Comments', 'ibwp' ),
            ) );
            ?>
        </div>
        <?php
        if ( ! comments_open() ) {
            _e( "Comments are closed.", "ibwp" );
        }
        ?>
    </div>

    <div class="comments-form">
        <?php
        comment_form();
        ?>
    </div>
</div>



<!-- <?php
// // Get only the approved comments
// // and get specific comment
// $args = array(
// 	'status' => 'approve',
// 	'post_id' => get_the_ID(),
// );

// // The comment Query
// $comments_query = new WP_Comment_Query();
// $comments       = $comments_query->query( $args );

// // Comment Loop
// if ( $comments ) {
// 	foreach ( $comments as $comment ) {
// 		// here is the main comments body part start
// 		?>
// 		<div class="media">
// 			 for showing comment author image  -->
			 
				<!-- echo get_avatar( get_the_author_meta( 'ID' ), $size = '32', $default = '', $alt = '', $args = array( 'class' => 'mr-3' ) );  -->
			
		
		 
 		  <!-- <div class="media-body">
 		    <h5 class="mt-0">
 		    	<?php ($comment); ?>
 		    		
 		    	</h5>
		    <p><?php ($comment); ?></p>
 		  </div>
		</div>  -->
 		
<!-- // 		// here is the main comments body part start
// 		echo '<p>' . $comment->comment_content . '</p>';
// 	}
// } else {
// 	echo 'No comments found.';
 -->