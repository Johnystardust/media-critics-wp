<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Media Critics
 * Date:        11/24/2015
 * Time:        3:03 PM
 *
 * @package Media Critics
 */
?>

<div id="strategy" class="container-fluid container-capped">

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

    <div class="row row-icons">
        <?php
        foreach(get_sub_field('strategy') as $strategy){
            ?>
            <div class="col-md-3 strategy-point">
                <div class="icon-wrapper">
                    <i class="icon <?php echo $strategy['icon']; ?>"></i>
                </div>
                <h3><?php echo $strategy['title']; ?></h3>
                <?php echo $strategy['description']; ?>
            </div>
            <?php
        }
        ?>
    </div>

</div>