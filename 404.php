<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Media Critics
 * Date:        11/24/2015
 * Time:        12:55 PM
 *
 * @package Media Critics
 */

get_header();

?>

<div id="header-small" class="container-fluid no-padding">
    <div class="overlay">
    <span class="headline">
        <h1>It’s through mistakes that you actually can grow. You have to get bad in order to get good. <small>Paula Scher</small></h1>
    </span>
     <span class="subline">
        <hr/>
        <h3>Media Critics critical about online media</h3>
    </span>
    </div>

    <img src="<?php echo get_stylesheet_directory_uri().'/assets/images/photo1.jpg'; ?>" alt="" width="100%"/>
</div>


<div id="text-title-subtitle" class="container-fluid container-capped">
    <div class="row">
        <div class="col-md-12">
        <span class="headline">
            <h2 class="no-margin">404 Error</h2>
            <hr/>
        </span>
         <span class="subline">
            <hr/>
            <h3>Pagina kan niet gevonden worden.</h3>
        </span>

            <div class="text">
                <p>
                    De pagina die u zoekt kan niet gevonden worden, dit kan een van de volgende redenen hebben.
                    <ul>
                        <li>De url is niet goed ingevuld.</li>
                        <li>De pagina bestaat niet meer</li>
                    </ul>
                </p>

                <p>
                    U kunt het volgende proberen.
                    <ul>
                        <li><a href="<?php echo get_home_url(); ?>">Keer terug naar de homepage</a></li>
                        <li><a href="#">Bekijk de sitemap</a></li>
                        <li><a href="<?php echo get_the_permalink(283); ?>">Neem contact met ons op</a></li>
                    </ul>
                </p>
            </div>
        </div>
    </div>
</div>



<?

get_footer();