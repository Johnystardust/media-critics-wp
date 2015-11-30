<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Media Critics
 * Date:        11/26/2015
 * Time:        11:06 AM
 *
 * @package Media Critics
 */
?>

<div id="call-back" class="container-fluid no-padding">
    <div class="row">
        <div class="col-md-12 no-padding">

            <div class="call-back-inner animated">
                <h2 class="no-margin">Wilt u teruggebeld worden?</h2>
                <a id="call-back-activate" class="button"><span class="txt">Bel mij terug</span><span class="bg"></span></a>
            </div>

            <div class="call-back-form animated">
                <?php
                $shortcode = get_sub_field('call_back_form_shortcode');
                echo do_shortcode($shortcode);
                ?>
            </div>

        </div>
    </div>
</div>