<?php
/**
 * Template Name: about
 *
 * @package WordPress
 */
?>



<?php get_header(); ?>
<?php get_template_part('part/banner'); ?>

<section class="relative -top-10 z-40">
    <div class="container mx-auto">
        <div class="flex w-full">
            <div class="div p-5 bg-white w-full">

                <p class="w-full">

                <?php the_content(); ?>

                

                </p>


            </div>

        </div>
</section>


<?php get_footer(); ?>