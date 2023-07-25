
<?php 

/*
    This is index.php main file 
*/
?>


<?php
    get_header();
 ?>

    <?php
                    if(have_posts( )) :
                        while(have_posts( )) : the_post();
                ?>
                <div class="blog_info">
                    <div class="the_tumbnail">
                        <?= the_post_thumbnail('resize_thumbanails')?>
                    </div>
                        <div class="post_titile">
                            <a href="<?= the_permalink()?>">
                                <h1><?= the_title();?></h1>
                            </a>
                            <p><?= the_content();?></p>
                        </div>

                </div>
                <?php
                    endwhile;
                     else :
                        _e('no have post');

                    endif
        ?>

                <div id="page_nav">
                    <?php if ('torikul_pagenav') {torikul_pagenav(); } else{ ?>
                    <?php next_posts_link();?>
                    <?php previous_posts_link();?>
                    <?php } ?>
               </div>





<?php
    get_footer();
 ?>