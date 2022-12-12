<?php
/**
 * Template Name: contact
 *
 * @package WordPress
 */
?>



<?php get_header(); ?>
<?php get_template_part('part/banner'); ?>

<section class="relative -top-10 z-40">
    <div class="container mx-auto">
        <div class="grid lg:grid-cols-2 grid-cols-1 gap-4">
            <div class="div p-5 bg-white">

                <p class="w-full border border-primary border-opacity-20 mb-5 p-5">
                    г. Астана, ул. Ш. Калдаякова 1, 276<br>
                    Фактический адрес: 010000, г.Астана, ул. Сыганак 29,<br>
                    БЦ «Евроцентр», офис 231<br>
                </p>

                <p class="w-full border border-primary border-opacity-20 mb-5 p-5">
                    тел.: +7 (7172) 51 69 48,<br>
                    +7 (7172) 51 69 14<br>
                    эл.адрес: info@audita.kz<br>
                </p>
            </div>
            <div class="div p-5 bg-white">


                <div class="mapouter">
                    <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no"
                            marginheight="0" marginwidth="0"
                            src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=University of Oxford&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
                            href="https://mcpedls.com/">minecraft download</a></div>
                    <style>
                        .mapouter {
                            position: relative;
                            text-align: right;
                            width: 100%;
                            height: 400px;
                        }

                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            width: 100%;
                            height: 400px;
                        }

                        .gmap_iframe {
                            height: 400px !important;
                        }
                    </style>
                </div>

            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>