<?php
/**
 * Template Name: part
 *
 * @package WordPress
 */
?>


<?php get_header(); ?>
<?php get_template_part('part/banner'); ?>

<div class="container mx-auto my-10">
    <?php if (have_rows('parts')): ?>
    <ul class="slides">
        <?php while (have_rows('parts')):
        the_row();
        $image = get_sub_field('img');
    ?>
        <li class="w-full flex items-center">
            <div class="w-[180px]">
            <img class="w-full" src="<?php echo esc_url($image['url']); ?>" />
            </div>
            <p class="ml-10">
                <?php the_sub_field('title'); ?>
            </p>
        </li>
        <?php endwhile; ?>
    </ul>
    <?php endif; ?>
</div>

<?php get_footer(); ?>