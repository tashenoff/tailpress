<?php
/**
 * Template Name: single
 *
 * @package WordPress
 */
?>

<?php get_header(); ?>
<?php // get_template_part( 'parts/home/about'); ?> 
<?php // get_template_part( 'parts/home/service'); ?> 




<section class="bg home-bg block block__dark relative lg:mt-[85px] mt-[80px]">

    <div class="flex items-center overflow-hidden lg:h-[550px] h-[350px] justify-center flex-wrap w-full">

        <div class="container mx-auto z-40 relative">
            <h1 class="lg:mt-0 mt-20">
                Ассоциация
                аудиторских организаций <br>и аудиторов Казахстана

            </h1>
        

        </div>



    </div>



    

</section>





<section class="relative lg:-top-20 -top-10 z-40">
<div class="container mx-auto">


    <div class="w-full flex items-stretch lg:flex-nowrap flex-wrap">


        <div class="w-full lg:mr-5 ">
            
            <img class="w-full"  src="<?php bloginfo('template_url'); ?>/img/about.jpg" alt="">
            
        </div>

        <div class="w-full flex flex-col place-content-between bg-white">


            <div class="lg:px-5 py-10">
                <div class="border-b border-primary w-full mb-5 border-opacity-20">
                <h2 class="mb-5 font-bold uppercase">
                    
                <?php
                $about_home = get_field('about_home');
                if ($hero): ?>

<?php echo get_field($about_home['title']); ?>

<?php endif; ?>


</h2>
</div>

<p>
    Ассоциация аудиторских организаций и аудиторов Казахстана<br> аккредитована Комитетом
    внутреннего
    государственного аудита Министерства финансов Республики Казахстан от 5 марта 2018 года.
    <br>
    Cвидетельство
    №KZ56VNH00000011
    <br><br>
</p>

</div>


<div class="lg:px-5 py-5">
    <div class="border-b border-primary w-full mb-5 border-opacity-20">
        <h3 class="mb-5 uppercase">Целью Ассоциации является:</h3>
    </div>
    <ul class="mt-5">
        <li class="flex w-full py-2">
            <div class="div">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>


            <span> Обеспечение условий осуществления аудиторской деятельности членами ПАО;</span>
        </li>
        <li class="flex w-full py-2">
            <div class="div">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>

            </div>
            <span>Защита прав и законных интересов членов ПАО, содействие развитию и
                совершенствованию
                аудиторской профессии;</span>
        </li>
        <li class="flex w-full py-2">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <span>Увеличению профессионального потенциала аудиторских кадров.</span>
        </li>
    </ul>

</div>


</div>
</div>

</div>
</section>





<section class="block">

    <div class="container mx-auto">
        <div class="text-center my-10">
            <h1>НАШИ ПРЕИМУЩЕСТВА</h1>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-4 mt-20">

            <div class="flex flex-col w-full items-center justify-center text-center">
                <div class="bg-primary p-5 rounded-full mb-10">

                    <img class="w-[50px]" src="<?php bloginfo('template_url'); ?>/img/1.svg" alt="">
                </div>
                <h3 class="uppercase text-sm"> Профессиональная помощь <br>аудитору</h3>

            </div>

            <div class="flex flex-col w-full items-center justify-center text-center">
                <div class="bg-primary p-5 rounded-full mb-10">

                    <img class="w-[50px]" src="<?php bloginfo('template_url'); ?>/img/2.svg" alt="">
                </div>
                <h3 class="uppercase text-sm"> Повышение <br>квалификации</h3>

            </div>
            <div class="flex flex-col w-full items-center justify-center text-center">
                <div class="bg-primary p-5 rounded-full mb-10">

                    <img class="w-[50px]" src="<?php bloginfo('template_url'); ?>/img/3.svg" alt="">
                </div>
                <h3 class="uppercase text-sm"> Проведение внешнего<br>
                    контроля качества</h3>

            </div>
            <div class="flex flex-col w-full items-center justify-center text-center">
                <div class="bg-primary p-5 rounded-full mb-10">

                    <img class="w-[50px]" src="<?php bloginfo('template_url'); ?>/img/4.svg" alt="">
                </div>
                <h3 class="uppercase text-sm"> Нормативная<br>
                    правовая поддержка
                </h3>
            </div>


        </div>
    </div>
</section>


<section class="block bg people-bg bg-dark block__dark">


    <div class="relative z-40 py-20">
        <div class="text-center justify-center flex items-center w-full flex-wrap">

            <img class="w-[50px]" src="<?php bloginfo('template_url'); ?>/img/logo-white.svg" alt="">

            <div class="mb-10 flex items-center justify-center border-b border-white border-opacity-20 w-full py-10">
                <h3>«Ассоциация аудиторских организаций и аудиторов Казахстана»</h3>
            </div>


            <div class="container mx-auto">

                <div class="grid lg:grid-cols-2 grid-cols-1">
                    <div class="text-sm lg:mb-0 mb-10">

                        г. Астана, ул. Ш. Калдаякова 1, 276<br>
                        Адрес для почты: 010000, г.Астана, ул. Сыганак 47 <br> БЦ «Евроцентр», офис 1102
                    </div>


                    <div class="text-sm">
                        тел.: +7 (7172) 51 69 48, <br>+7 (7172) 51 69 14<br>
                        эл.адрес: info@audita.kz
                    </div>
                </div>


            </div>

        </div>

    </div>
</section>


<?php get_footer(); ?>