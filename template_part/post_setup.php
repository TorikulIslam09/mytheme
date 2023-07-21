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
    // if(have_posts( )) :
    //     while(have_posts()): the_post()
    if(have_posts()) {
        while(have_posts()) {
            the_post()
    
    ?>
    <div class="blog-info">
    <div class="thumbnail">
        <?= the_post_thumbnail('custom_img')?>
    </div>
        <div class="title">
            <a href="<?= the_permalink();?>">
            <h1><?= the_title()?></h1> 
            </a>
            <p> <?= the_content();?> </p>
        </div>

    </div>
    <?php 
        }
    }else {
        _e('No have post'); 
    }
        // endwhile;
        // else: 
        // _e('No have post');
        // endif;
    ?>
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