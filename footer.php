<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php 
                 if(is_active_sidebar("footer-left")){
                    dynamic_sidebar("footer-left");
                 }
                ?>
            </div>
        </div>
    </div>
</div>
<?php
 wp_footer(); 
?>
</body>

</html>