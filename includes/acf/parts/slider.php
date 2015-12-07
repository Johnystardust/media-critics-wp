<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Media Critics
 * Date:        11/24/2015
 * Time:        2:44 PM
 *
 * @package Media Critics
 */
?>
<div id="header" class="container-fluid no-padding">
    <div class="slide-navigation">
        <div class="slide-left slide-navigation-button animated bounceOutLeft">
            <span class="bg"></span>
            <i class="icon icon-left-open"></i>
        </div>

        <div class="slide-right slide-navigation-button">
            <span class="bg"></span>
            <i class="icon icon-right-open"></i>
        </div>
    </div>

    <ul id="slide-container">
        <?php
        /*
        |----------------------------------------------------------------
        |   Loop through the sub-field and render each as a slide.
        |----------------------------------------------------------------
        */
        foreach(get_sub_field('slider') as $slide){
            ?>
            <li class="slide" style="background-image: url(<?php echo $slide['image']; ?>)">
                <div class="overlay">
                    <div class="title-text">
                        <span class="slide-title"><h2 class="no-margin"><?php echo $slide['title']; ?></h2></span><br/>
                        <span class="slide-text"><?php echo $slide['description']; ?></span>
                        <a href="<?php echo $slide['slide_link']; ?>">
                            <span class="slide-link">
                                <i class="icon-right-open icon"></i>
                                <span class="bg"></span>
                            </span>
                        </a>
                    </div>

                    <img class="prev-image" src="<?php echo $slide['prev_image']; ?>"/>
                    
                </div>
            </li>
            <?php
        }
        ?>
    </ul>

</div>