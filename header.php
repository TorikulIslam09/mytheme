
<!DOCTYPE html>
<html <?= language_attributes();?>>
<head>
    <meta charset="<?= bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= wp_head();?>
</head>
<body>
    
<div id="heder" class="<?= get_theme_mod('menu_side_chang');?>">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-3">

                <div class="logo">
                    <a href="<?= home_url();?>">
                        <img src="<?= get_theme_mod('logo_position');?>" alt="">
                    </a>
                </div>

            </div>
            <div class="col-md-9">
                <div class="mnue_set" >
                <?= wp_nav_menu( array(
                     'theme_location' => 'Primary_menu',
                      'menu_id'      => 'menu_bar' 
                ) );?>
                </div>
            </div>
        </div>
    </div>
</div>