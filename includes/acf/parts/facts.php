<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Media Critics
 * Date:        11/24/2015
 * Time:        2:58 PM
 *
 * @package Media Critics
 */
?>

<script>
    $(document).ready(function(){
        /*
        |-------------------------------------------------------------------------------------------------------------------
        |   CountUp Waypoint Function
        |-------------------------------------------------------------------------------------------------------------------
        */
        var waypoint = new Waypoint({
            element: document.getElementById('facts'),
            handler: function() {
                $('.timer').countTo('start');
                $('.timer').removeClass('timer');
            },
            offset: 300
        });
    });
</script>

<div id="facts" class="container-fluid no-padding">

    <?php
    foreach(get_sub_field('facts') as $fact){
        ?>
        <div class="col-md-4 fact lines">
            <h2 class="timer" data-from="0" data-to="<?php echo $fact['number']; ?>">0</h2>
            <hr/>
            <h3><?php echo $fact['text']; ?></h3>
        </div>
        <?php
    }
    ?>

</div>