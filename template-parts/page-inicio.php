<?php
/*
Template Name: Inicio
*/

get_header();
?>



<!-- hero section -->
<section class="section section-hero" id="section-hero">
    <div class="full-width">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-pause="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="6000">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner1.jpg" class="d-block w-100" alt="fruto del cacao" />
                </div>
                <div class="carousel-item" data-bs-interval="6000">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner2.jpg" class="d-block w-100" alt="chocolate y producto Ankoa" />
                </div>
            </div>
        </div>
    </div>
</section>

<!-- history section -->
<section class="section section-history" id="section-history">
    <div class="history-anchor" id="anchor-history"></div>
    <div class="container">
        <div class="section-inner text-center">
            <div class="heading">
                <h2 data-aos="fade-down" data-aos-duration="600" data-aos-easing="ease-in">
                    NUESTRA HISTORIA
                </h2>
            </div>
            <div class="content">
                <p>
                    Todo empezó en 2021 por Annie y Vania, dos hermanas
                    ecuatorianas, que a pesar de más de 13 años de distanciamiento
                    geográfico mantuvieron sus lazos familiares intactos y más
                    fuertes que nunca. Esta idea se formó pensando en dar una mejor
                    visibilidad a mujeres como nosotras que podemos abrir caminos de
                    oportunidades, siendo un claro ejemplo para la equidad de género
                    en la sociedad. Nuestro chocolate se elabora en un ecosistema
                    natural permitiendo vivir una experiencia única en tu paladar,
                    una explosión de sabores sin igual. Cuidamos cada detalle para
                    entregarte un chocolate exclusivo con sabores y aromas
                    impresionantes.
                </p>
            </div>
            <div class="history-footer">
                <div class="coordinates">
                    <div class="coordinates">0°41′<span id="latitude">00</span>″S&nbsp;80°06′<span id="longitude">00</span>″O</div>
                </div>
            </div>
            <div class="history-footer-after">
                <p>CACAO NACIONAL - ECUADOR</p>
            </div>
        </div>
    </div>
</section>

<!-- products section -->
<section class="section section-products" id="section-products">
    <div class="anchor products-anchor" id="anchor-products"></div>
    <div class="full-width">
        <div class="section-inner container">
            <div class="section-products__heading">
                <h2 data-aos="fade-right" data-aos-duration="600" data-aos-easing="ease-in">
                    COMBINAMOS LOS MEJORES SABORES <br />Y TEXTURAS DE NUESTRA
                    TIERRA <br />100% ECUATORIANO
                </h2>
            </div>
            <div class="section-products__gallery flex">
                <div class="gallery__item">
                    <div class="item">
                        <img class="gallery__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/Ankoa65.jpg" alt="ankoa barra de chocolate al 65%" />
                        <p class="gallery__tag">
                            Exquisita tableta de chocolate con 65% de cacao, elaborado
                            cuidadosamente con manos ecuatorianas.
                        </p>
                    </div>
                </div>
                <div class="gallery__item">
                    <img class="gallery__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/Ankoa75.jpg" alt="ankoa barra de chocolate al 75%" />
                    <p class="gallery__tag">
                        La opción perfecta para los amantes del chocolate oscuro y los
                        sabores únicos.
                    </p>
                </div>
                <div class="gallery__item">
                    <img class="gallery__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/Ankoa85.jpg" alt="ankoa barra de chocolate al 85%" />
                    <p class="gallery__tag">
                        Nuestras barras de 85% de cacao son intensamente amargas y
                        tienen una agradable textura.
                    </p>
                </div>
            </div>
        </div>

        <div class="section-inner container">
            <div class="section-products__footer">
                <h2 data-aos="fade-down" data-aos-duration="600" data-aos-easing="ease-in">
                    AMOR<br />AL PRIMER<br />
                    MORDISCO
                </h2>
                <p>
                    En Ankoa nos encargamos de seleccionar las mejores semillas de
                    cacao para crear un chocolate único, al primer mordisco
                    encontrarás toda una mezcla inigualable de sabores, aromas y
                    texturas.
                </p>
                <p>
                    Nuestro cacao es plantado y procesado por manos ecuatorianas,
                    para llevar una experiencia excepcional a tu paladar.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- mission section -->
<section class="section section-mission pos-rel" id="section-mission">
    <div class="mission-logo"  data-aos="fade-left">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logoankoa-big.svg" alt="logo de ankoa chocolate">
    </div>
    <div class="anchor mission-anchor" id="anchor-mission"></div>
    <div class="full-width" id="parallax">
        <div class="section-inner grid">

            <div class="section-mission__content section-column flex-reverse">
                <div class="mission__content">
                    <h2 data-aos="fade-right" data-aos-easing="ease-in" data-aos-duration="500">MISIÓN</h2>
                    <p>
                        Estamos comprometidas en ofrecer a nuestros clientes chocolate
                        de la más alta calidad, con productos nobles que nos entrega
                        la naturaleza, contribuyendo a nuestro país y cuidando del
                        medio ambiente.
                    </p>
                </div>
            </div>


            <div class="section-mission__image section-column">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mission-section-mobil.jpg" alt="logo de ankoa chocolate">
            </div>

        </div>
    </div>
</section>

<!-- contact section -->
<section class="section section-contact" id="section-contact">
    <div class="anchor contact-anchor" id="anchor-contact"></div>
    <div class="container">
        <h2 class="text-center text-white">¿CÓMO PODEMOS AYUDARTE?</h2>
        <p class="text-center  text-white">Para más información envíanos un mensaje mediante el siguiente formulario.</p>
        <div class="contact-form">
            <?php echo do_shortcode('[contact-form-7 id="69" title="ankoa-contact-form"]'); ?>

        </div>
    </div>

</secction>


<?php get_footer(); ?>