<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Media Critics
 * Date:        11/24/2015
 * Time:        3:15 PM
 *
 * @package Media Critics
 */
?>

<div id="services" class="container-fluid container-capped">
    <div class="row">
        <div class="col-md-12">
            <span class="headline">
                <h2 class="no-margin"><?php the_sub_field('title'); ?></h2>
                <hr/>
            </span>
            <span class="subline">
                <hr/>
                <h3><?php the_sub_field('subtitle'); ?></h3>
            </span>
        </div>
    </div>

    <div class="row row-services">

        <?php
        foreach(get_sub_field('services') as $service){
            ?>
            <div class="col-md-4 service">
                <div class="small-icon-wrapper">
                    <i class="icon <?php echo $service['icon']; ?>"></i>
                </div>
                <h3><?php echo $service['title']; ?></h3>

                <div class="text-wrapper">
                    <?php echo $service['description']; ?>
                </div>
            </div>
            <?php
        }
        ?>

    </div>
</div>