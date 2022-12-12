
</main>

<?php do_action( 'tailpress_content_end' ); ?>

</div>

<?php do_action( 'tailpress_content_after' ); ?>

<footer class="bg-primary p-5 w-full z-50">
    <div class="flex items-center">
        <div class="container mx-auto">
            <div class="flex lg:flex-nowrap flex-wrap justify-between">
                <div class="w-full lg:text-left text-center text-white uppercase tracking-wide text-sm lg:mb-0 mb-10">©
                    2022 www.audita.kz</div>
                <div class="w-full lg:text-right text-center text-white uppercase tracking-wide text-sm">
                    powered by alex</div>
            </div>
        </div>
    </div>



    <!-- Swiper JS -->
    <!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->

    <!-- Initialize Swiper -->
    <script>



var $ = jQuery.noConflict();



        $(".submenu-trigger").on("click", function (e) {

            $(this).toggleClass("active");

            // $(".navbar__menu").toggle("slide", {direction: "right" });


            $(".submenu").animate({
                height: "toggle"
            });


        });


        $(".mobile-menu-trigger").on("click", function (e) {
            if ($(".mobile-menu").hasClass("hidden")) {
                $(".mobile-menu").removeClass("hidden");
            }
            else {
                $(".mobile-menu").addClass("hidden");

            }
        });







        $(window).scroll(function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 500) {
                $(".navbar__wrap").addClass("shadow-lg");
            } else {
                $(".navbar__wrap").removeClass("shadow-lg");

            }
        });



        $("a[href='#top']").click(function () {
            $("html, body").animate({ scrollTop: 0 }, "slow");
            return false;
        });


     
    </script>



</footer>


</div>

<?php wp_footer(); ?>

</body>
</html>
