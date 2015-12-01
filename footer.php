<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Media Critics
 * Date:        11/24/2015
 * Time:        12:54 PM
 *
 * @package Media Critics
 */

if('portfolio' == get_post_type()){
    $border = 'style="border: none;"';
}
else {
    $border = '';
}
?>

<div id="footer" class="container-fluid container-capped" <?php echo $border; ?>>
    <div class="row">

        <div class="col-md-3 footer-widget">
            <h3>Contact</h3>
            <ul>
                <li><?php the_field('company_name', 'option'); ?></li>
                <li><?php the_field('address', 'option'); ?></li>
                <li><?php the_field('postal', 'option'); ?></li>
                <li><i class="icon icon-post"></i><?php the_field('mail', 'option'); ?></li>
                <li><i class="icon icon-phone"></i><?php the_field('tel', 'option'); ?></li>
            </ul>
        </div>

        <?php dynamic_sidebar('footer'); ?>

        <div class="col-md-3 footer-widget">
            <ul class="social-links">
                <?php
                $facebook = get_field('facebook', 'option');
                if(!empty($facebook)){
                    ?>
                    <li><a href="<?php the_field('facebook', 'option'); ?>" target="_blank"><i class="icon icon-facebook-circled"></i></a></li>
                    <?php
                }
                $linked_in = get_field('linked_in', 'option');
                if(!empty($linked_in)){
                    ?>
                    <li><a href="<?php the_field('linked_in', 'option'); ?>" target="_blank"><i class="icon icon-linkedin-circled"></i></a></li>
                <?php
                }
                $twitter = get_field('twitter', 'option');
                if(!empty($twitter)){
                    ?>
                    <li><a href="<?php the_field('twitter', 'option'); ?>" target="_blank"><i class="icon icon-twitter-circled"></i></a></li>
                <?php
                }
                $tumblr = get_field('tumblr', 'option');
                if(!empty($tumblr)){
                    ?>
                    <li><a href="<?php the_field('tumblr', 'option'); ?>" target="_blank"><i class="icon icon-tumblr-circled"></i></a></li>
                <?php
                }
                $google = get_field('google_plus', 'option');
                if(!empty($google)){
                    ?>
                    <li><a href="<?php the_field('google_plus', 'option'); ?>" target="_blank"><i class="icon icon-gplus-circled"></i></a></li>
                <?php
                }
                ?>
            </ul>
        </div>


    </div>

    <div class="row credits">
        <div class="col-md-12">
            <small>Copyright &copy; 2015 Media Critics</small>
        </div>
    </div>
</div>

</body>
</html>