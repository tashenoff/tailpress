<?php
/**
 * Template Name: docks
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







                    <?php if ( $page = 'npa' ) { ?>
                    <!-- Start npa -->


                    <?php if (have_rows('npa')): ?>

                    <?php while (have_rows('npa')):
                            the_row();
                            $title = get_sub_field('title');
                            $file = get_sub_field('file');
                            
                  
                            
                    ?>











                    <? if( $file ): ?>








                <div
                    class="w-full group hover:bg-primary hover:bg-opacity-10 flex justify-between border border-primary border-opacity-20 mb-5 p-5">
                    <div>
                        <?php the_sub_field('title'); ?>
                    </div>


                    <a href="<?php echo $file['url']; ?>" class="flex">


                        <div class="invisible lg:group-hover:visible mr-3">
                          
                                скачать
                            

                        </div>

                        <div class="fiv">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 mr-5 text-primary">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                            </svg>
                        </div>
                    </a>



                </div>






                <?php endif; ?>





                <?php endwhile; ?>
                <?php endif; ?>


                <!-- End introduction -->
                <?php } ?>









                <?php if ( $page = 'obuchenie' ) { ?>
                    <!-- Start npa -->


                    <?php if (have_rows('obuchenie')): ?>

                    <?php while (have_rows('obuchenie')):
                            the_row();
                            $title = get_sub_field('title');
                            $file = get_sub_field('file');
                            
                  
                            
                    ?>











                    <? if( $file ): ?>








                <div
                    class="w-full group hover:bg-primary hover:bg-opacity-10 flex justify-between border border-primary border-opacity-20 mb-5 p-5">
                    <div>
                        <?php the_sub_field('title'); ?>
                    </div>


                    <a href="<?php echo $file['url']; ?>" class="flex">


                        <div class="invisible lg:group-hover:visible mr-3">
                          
                                скачать
                            

                        </div>

                        <div class="fiv">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 mr-5 text-primary">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                            </svg>
                        </div>
                    </a>



                </div>






                <?php endif; ?>





                <?php endwhile; ?>
                <?php endif; ?>


                <!-- End introduction -->
                <?php } ?>





                <?php if ( $page = 'cand' ) { ?>
                    <!-- Start npa -->


                    <?php if (have_rows('cand')): ?>

                    <?php while (have_rows('cand')):
                            the_row();
                            $title = get_sub_field('title');
                            $file = get_sub_field('file');
                            
                  
                            
                    ?>











                    <? if( $file ): ?>








                <div
                    class="w-full group hover:bg-primary hover:bg-opacity-10 flex justify-between border border-primary border-opacity-20 mb-5 p-5">
                    <div>
                        <?php the_sub_field('title'); ?>
                    </div>


                    <a href="<?php echo $file['url']; ?>" class="flex">


                        <div class="invisible lg:group-hover:visible mr-3">
                          
                                скачать
                            

                        </div>

                        <div class="fiv">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 mr-5 text-primary">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                            </svg>
                        </div>
                    </a>



                </div>






                <?php endif; ?>





                <?php endwhile; ?>
                <?php endif; ?>


                <!-- End introduction -->
                <?php } ?>



                <?php if ( $page = 'pao' ) { ?>
                    <!-- Start npa -->


                    <?php if (have_rows('pao')): ?>

                    <?php while (have_rows('pao')):
                            the_row();
                            $title = get_sub_field('title');
                            $file = get_sub_field('file');
                            
                  
                            
                    ?>











                    <? if( $file ): ?>








                <div
                    class="w-full group hover:bg-primary hover:bg-opacity-10 flex justify-between border border-primary border-opacity-20 mb-5 p-5">
                    <div>
                        <?php the_sub_field('title'); ?>
                    </div>


                    <a href="<?php echo $file['url']; ?>" class="flex">


                        <div class="invisible lg:group-hover:visible mr-3">
                          
                                скачать
                            

                        </div>

                        <div class="fiv">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 mr-5 text-primary">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                            </svg>
                        </div>
                    </a>



                </div>






                <?php endif; ?>





                <?php endwhile; ?>
                <?php endif; ?>


                <!-- End introduction -->
                <?php } ?>




                <?php if ( $page = 'other' ) { ?>
                    <!-- Start npa -->


                    <?php if (have_rows('other')): ?>

                    <?php while (have_rows('other')):
                            the_row();
                            $title = get_sub_field('title');
                            $file = get_sub_field('file');
                            
                  
                            
                    ?>











                    <? if( $file ): ?>








                <div
                    class="w-full group hover:bg-primary hover:bg-opacity-10 flex justify-between border border-primary border-opacity-20 mb-5 p-5">
                    <div>
                        <?php the_sub_field('title'); ?>
                    </div>


                    <a href="<?php echo $file['url']; ?>" class="flex">


                        <div class="invisible lg:group-hover:visible mr-3">
                          
                                скачать
                            

                        </div>

                        <div class="fiv">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 mr-5 text-primary">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                            </svg>
                        </div>
                    </a>



                </div>






                <?php endif; ?>





                <?php endwhile; ?>
                <?php endif; ?>


                <!-- End introduction -->
                <?php } ?>




                </p>


            </div>

        </div>
</section>


<?php get_footer(); ?>