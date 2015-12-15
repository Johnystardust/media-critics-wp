<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Media Critics
 * Date:        11/24/2015
 * Time:        12:54 PM
 *
 * @package Media Critics
 */
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title><?php echo get_the_title(); ?> | Media Critics</title>

    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

    <?php wp_head(); ?>
</head>

<body>

    <div id="preloader">
        <div class="preload-overlay">
            <h1 class="no-margin">Media Critics</h1>
            <i class="icon icon-spin4 animate-spin"></i>
            <h3 class="no-margin">Even geduld alstublieft</h3>
        </div>

        <div class="preload preload-left"></div>
        <div class="preload preload-right"></div>
    </div>


<?php include_once('includes/template-files/menu.php'); ?>

