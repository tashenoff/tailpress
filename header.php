<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>


	<script>
		var $ = jQuery.noConflict();



		$(function () {
			$(window).scroll(function () {
				if ($(this).scrollTop() > 100) {
					$('#menu-top').addClass("bg-primary shadow-sm border-b border-black border-opacity-20");
					// $('#menu-top').removeClass("border-b");
				} else {
					$('#menu-top').removeClass("bg-primary");
					$('#menu-top').addClass("border-b");
				}
			});
		});


	</script>



</head>

<body>

	<?php do_action('tailpress_site_before'); ?>

	<div id="page" class="min-h-screen flex flex-col">

		<?php do_action('tailpress_header'); ?>

		<header>


			<div id="menu-top" class="bg-white text-black w-full lg:px-5 lg:py-0 transition-all fixed z-50">
				<div class="container mx-auto">
					<div class="flex lg:p-0 p-5 w-full justify-between items-center ">
						<a href="/" class="">

							<img class="mr-5 lg:w-full w-[200px]" src="<?php bloginfo('template_url'); ?>/img/logo.svg"
								alt="">
						</a>


						<div class="flex w-full items-center">

							<nav
								class="mobile-menu lg:block hidden flex navbar w-full lg:h-auto h-screen lg:relative left-0 absolute lg:top-0 top-16 lg:bg-white bg-primary">
								<ul
									class="lg:px-0 px-10 menu w-full lg:flex lg:flex-nowrap justify-center items-center flex-wrap lg:justify-end">
									<li><a href="/">ГЛАВНАЯ</a></li>
									<li><a href="/ob-assocziaczii">ОБ АССОЦИАЦИИ</a></li>
									<li class="submenu-trigger flex flex-col group relative ">


										<a class="group flex lg:items-center w-full lg:justify-center justify-between text-left"
											href="#">


											<span>
												ДОКУМЕНТЫ
											</span>

											<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
												stroke-width="1.5" stroke="currentColor"
												class="group-hover:rotate-180 transition-all w-4 h-3 ml-4">
												<path stroke-linecap="round" stroke-linejoin="round"
													d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
											</svg>



										</a>

										<ul
											class="submenu hidden left-0 lg:shadow-xl lg:top-20 top-0 lg:group-hover:block text-primary  lg:absolute bg-white">
											<li>
												<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
													stroke-width="1.5" stroke="currentColor" class="mr-3 w-4 h-4">
													<path stroke-linecap="round" stroke-linejoin="round"
														d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
												</svg>

												<a class="" href="/npa">НПА</a>
											</li>
											<li>
												<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
													stroke-width="1.5" stroke="currentColor" class="mr-3 w-4 h-4">
													<path stroke-linecap="round" stroke-linejoin="round"
														d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
												</svg>

												<a href="/dlya-chlenov-pao">Для членов ПАО</a>
											</li>
											<li>
												<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
													stroke-width="1.5" stroke="currentColor" class="mr-3 w-4 h-4">
													<path stroke-linecap="round" stroke-linejoin="round"
														d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
												</svg>

												<a href="/obuchenie">Обучение</a>
											</li>
											<li>
												<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
													stroke-width="1.5" stroke="currentColor" class="mr-3 w-4 h-4">
													<path stroke-linecap="round" stroke-linejoin="round"
														d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
												</svg>

												<a href="/kandidatam">Кандидатам</a>
											</li>
											<li>
												<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
													stroke-width="1.5" stroke="currentColor" class="mr-3 w-4 h-4">
													<path stroke-linecap="round" stroke-linejoin="round"
														d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
												</svg>

												<a href="/drugie">Другие</a>
											</li>

										</ul>


									</li>
									<li><a href="/sotrudnichestvo">СОТРУДНИЧЕСТВО </a></li>
									<li><a href="kontakty/">КОНТАКТЫ </a></li>






									<div
										class="flex items-center lg:mt-0 mt-5  phone lg:border-l border-black border-opacity-10">
										<div
											class="lg:bg-primary bg-white lg:mx-5 mr-5 rounded-full w-8 h-8 flex items-center justify-center">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
												fill="currentColor" class="w-5 h-5 lg:text-white text-primary">
												<path fill-rule="evenodd"
													d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z"
													clip-rule="evenodd" />
											</svg>

										</div>

										<a class="lg:text-black text-white" href=""><?php the_field('phone'); ?></a>
										<!-- <button class="btn btn-primary lg:block hidden">Написать нам</button> -->
									</div>


								</ul>






							</nav>




						</div>




						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
							stroke="currentColor" class="w-10 h-10 hamburger mobile-menu-trigger lg:hidden">
							<path stroke-linecap="round" stroke-linejoin="round"
								d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
						</svg>


					</div>
				</div>
			</div>


		</header>

		<div id="content" class="site-content">



			<?php do_action('tailpress_content_start'); ?>

			<main>