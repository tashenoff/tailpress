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
                    <?php the_field('adress'); ?><br>
                </p>

                <p class="w-full border border-primary border-opacity-20 mb-5 p-5">
                    <?php the_field('phone'); ?><br>
                    <?php the_field('phone_two'); ?><br>
                    эл.адрес: info@audita.kz<br>
                </p>
            </div>
            <div class="div p-5 bg-white">


                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2504.4040645812793!2d71.45278045169758!3d51.11945447947305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4245851c946eae5f%3A0x6a753c3ab1cda479!2z0YPQuy4g0KjQsNC80YjQuCDQmtCw0LvQtNCw0Y_QutC-0LLQsCAxLCDQkNGB0YLQsNC90LAgMDIwMDAw!5e0!3m2!1sru!2skz!4v1671623727996!5m2!1sru!2skz"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>