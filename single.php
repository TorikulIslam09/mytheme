<?php 

/*
    This is index.php main file 
*/
?>
<?php
    get_header();
 ?>
 
 <div id="post_section" class="mt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <?= get_template_part('./template_part/post_setup');?>
            </div>
            <div class="col-md-3">
               <?= get_sidebar('sibbar_1');?>
            </div>
        </div>
    </div>

 </div>


<?php
    get_footer();
 ?>