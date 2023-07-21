<?php 

/*
    This is index.php main file 
*/
?>


<?php
    get_header();
 ?>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-9">
               <?php get_template_part('template_part/blog_setup');?>
            </div>
            <div class="col-md-3">
                <div class="sidbar-section">
                    <?= get_sidebar('sibbar_1')?>
                </div>
            </div>
        </div>
    </div>


<?php
    get_footer();
 ?>