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
                <?php 
                    if(have_posts( )) :
                        while(have_posts()): the_post()
                ?>
                <div class="blog-info">
                    <div class="thumbnail">
                        <?= the_post_thumbnail('custom_img')?>
                    </div>
                    <div class="title">
                        <a href="<?= the_permalink();?>"> <h1><?= the_title()?></h1> </a>
                        <p> <?= the_excerpt();?> </p>
                        <a href="<?= the_permalink($post -> ID);?>"> Read More </a>
                    </div>
                
                </div>
                <?php 
                    endwhile;
                    else: 
                    _e('No have post');
                endif;
                ?>
              
              <div id="page_nav">
                <?php if ('torikul_pagenav') {torikul_pagenav(); } else{ ?>
                <?php next_posts_link(); ?>
                <?php previous_posts_link(); ?>
                <?php } ?>
               </div>


            </div>
            <div class="col-md-3">
                <h2>sidebar </h2>
            </div>
        </div>
    </div>


<?php
    get_footer();
 ?>