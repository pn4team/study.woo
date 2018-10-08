<div class="w3l_logo">
<?php 
    $logo_id = carbon_get_theme_option('est_header_logo'); 
    $logo = $logo_id ?  wp_get_attachment_image_src($logo_id, full) : '';
    $site_name = carbon_get_theme_option('est_header_site_name') ? carbon_get_theme_option('est_header_site_name') : get_bloginfo('name');
    $site_desc = carbon_get_theme_option('est_header_site_desc') ? carbon_get_theme_option('est_header_site_desc') : get_bloginfo('description');
?>
    <?php if($logo) : ?>
        <?php if (is_front_page() || is_home()) : ?>
            <h1 class="logo-title h1"><img src="<?php echo $logo[0] ?>" width="<?php echo $logo[1] ?>" height="<?php echo $logo[2] ?>" alt=""></h1>
        <?php else: ?>
            <h1 class="logo-title h1"><a href="<?php echo home_url('/'); ?>"><img src="<?php echo $logo[0] ?>" width="<?php echo $logo[1] ?>" height="<?php echo $logo[2] ?>" alt=""></a></h1>
        <?php endif; ?>
    <?php else : ?>
        <?php if (is_front_page() || is_home()) : ?>
            <h1 class="logo-title h1"><?php echo $site_name ?><span><?php echo $site_desc ?></span></h1>
        <?php else: ?>
            <h1 class="logo-title h1"><a href="<?php echo home_url('/'); ?>"><?php echo $site_name ?><span><?php echo $site_desc ?></span></a></h1>
        <?php endif; ?>
    <?php endif; ?>

</div>