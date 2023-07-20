<?php 

/*
    This is index.php main file 
*/

?>

<!DOCTYPE html>
<html <?= language_attributes();?>>
<head>
    <meta charset="<?= bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= wp_head();?>
</head>
<body>
    
<div id="heder">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-3">

                <div class="logo">
                    <a href="<?= home_url();?>">
                        <img src="<?= get_template_directory_uri();?>/img/final-logo.png" alt="">
                    </a>
                </div>

            </div>

            <div class="col-md-9">
                <div class="menu-bar" id="menu_bar">
                <ul>
                <li><a href="#"> Home </a></li>
                <li><a href="">About</a></li>
                <li><a href="">Service</a>
                    <ul>
                        <li><a href="">Drp_down_it</a></li>
                        <li><a href="">Drp_down_it</a></li>
                        <li><a href="">Drp_down_it</a></li>
                        <li><a href="">Drp_down_it</a></li>
                        <li><a href="">Drp_down_it</a>
                            <ul>
                                <li><a href="">second items</a></li>
                                <li><a href="">second items</a></li>
                                <li><a href="">second items</a></li>
                                <li><a href="">second items</a></li>
                                <li><a href="">second items</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="">Geallary</a></li>
                <li><a href=""> Contact </a></li>
            </ul>
                </div>
            </div>
        </div>
    </div>
</div>



<?php wp_footer();?>
</body>
</html>