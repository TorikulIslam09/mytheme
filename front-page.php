<?php
    get_header();
 ?>
<div id="fron_page" class="mt-5">
    <div class="container">
            <div class="slider">
         
                <?php 
                        $args = array(  
                            'post_type' => 'service',
                            'post_status' => 'publish',
                            'posts_per_page' => 4, 
                            'orderby' => 'title', 
                            'order' => 'ASC', 
                        );
                    
                        $loop = new WP_Query( $args ); 
                            
                        while ( $loop->have_posts() ) : $loop->the_post(); 
                ?>

                <div class="col ">
                    <div class="card mb-3">
                        <a href="<?= the_permalink();?>">
                            <?= the_post_thumbnail('post-thumbnails');?>
                        </a>
                        <div class="card-body">
                                <a href="<?= the_permalink();?>"> <h5 class="card-title"> <?= the_title();?> </h5> </a>
                            <p class="card-text"> <?= the_excerpt();?> </p>
                        </div>
             
                        </div>
                </div>
                <?php 
                    endwhile;
                    wp_reset_postdata(); 
                ?>

              
       
    </div>
</div>



<?php
    get_footer();
 ?>