<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package custom_theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.typekit.net/lng8cnv.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<header class="<?= is_page(7) ? '' : 'blured' ?>">
			<div class="container-fluid p-l-20 p-r-20">
				<div class="row justify-content-center">
					<div class="col-12">
						<nav class="row">
							<div class="col-lg-2 col-4">
								<div class="header-logo-container">
									<div>
										<a class="d-flex justify-content-start align-items-center" href="<?= get_site_url(); ?>">
											<img class="header-logo" src="<?= get_template_directory_uri() . '/resources/icons/ist-logo.svg' ?>" alt="">
											<div class="m-l-20 d-lg-block d-none">
												International <br> School of Tianjin
											</div>
										</a>
									</div>
								</div>
							</div>
							<div class="col-lg-6 offset-lg-2 col-4 offset-0 justify-content-center">
								<div class="header-links-container d-lg-block d-none text-center">
									<ul>
										<li>
											<a href="<?= get_permalink(2); ?>">
												WHY IST?
											</a>
										</li>
										<li>
											<a href="<?= get_permalink(3); ?>">
												CAMPUS TOUR
											</a>
										</li>
										<li>
											<a href="<?= get_permalink(4); ?>">
												INQUIRE NOW
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-lg-2 col-4">
								<div class="header-btn-container">
									<div id="search-btn d-lg-block d-none">
										<img class="search-btn-desktop d-none d-lg-block" id="header-search-btn" onload="SVGInject(this)" src="<?= get_template_directory_uri() . '/resources/icons/search-btn.svg' ?>" alt="">
										<img class="search-btn-mobile d-block d-lg-none" id="header-search-btn" onload="SVGInject(this)" src="<?= get_template_directory_uri() . '/resources/icons/search-btn.svg' ?>" alt="">
									</div>
									<div id="ham-btn" class="d-lg-block d-none">
										<img id="header-ham-btn" onload="SVGInject(this)" src="<?= get_template_directory_uri() . '/resources/icons/ham-btn.svg' ?>" alt="">
									</div>
									<div id="mobile-ham-btn" class="d-lg-none d-block">
										<img id="header-ham-btn" onload="SVGInject(this)" src="<?= get_template_directory_uri() . '/resources/icons/ham-btn.svg' ?>" alt="">
									</div>
								</div>
							</div>
						</nav>
					</div>
				</div>
			</div>
			<div id="desktop-nav-menu" class="d-none">
				<div class="close-ham-btn-container">
					<img id="header-ham-close-btn" onload="SVGInject(this)" src="<?= get_template_directory_uri() . '/resources/icons/ham-close.svg'; ?>" alt="">
				</div>
				<div class="container-fluid p-t-100 p-b-100">
					<div class="row justify-content-center">
						<div class="col-10">
							<div class="row link-lists-header">
								<div class="col-3">
									<ul>
										<li>
											PROGRAMS
										</li>
										<li>
											Overview
										</li>
										<li>
											Elementary Education
										</li>
										<li>
											<a href="">
												Baby Dragon Playgroup <br>
												0 - 3 years
											</a>
										</li>
										<li>
											<a href="">
												Baby Dragon Playgroup <br>
												0 - 3 years
											</a>
										</li>
										<li>
											<a href="">
												Baby Dragon Playgroup <br>
												0 - 3 years
											</a>
										</li>
										<li>
											Secondary Education
										</li>
										<li>
											<a href="">
												MYP Grades <br>
												6 - 10
											</a>
										</li>
										<li>
											<a href="">
												DP Grades <br>
												11 - 12
											</a>
										</li>
										<li>
											<a href="">
												Learning support
											</a>
										</li>
									</ul>
								</div>
								<div class="col-3">
									<ul>
										<li>
											ABOUT
										</li>
										<li>
											<a class="<?= is_page(11) ? 'active-link' : '';  ?>" href="<?= get_permalink(11); ?>">
												History
											</a>
										</li>
										<li>
											<a class="<?= is_page(13) ? 'active-link' : '';  ?>" href="<?= get_permalink(13); ?>">
												Beliefs & Values
											</a>
										</li>
										<li>
											<a class="<?= is_page(15) ? 'active-link' : '';  ?>" href="<?= get_permalink(15); ?>">
												Accreditattion
											</a>
										</li>
									</ul>
									<ul>
										<li>
											STUDENT LIFE
										</li>
										<li>
											<a href="">
												Co-curriculum Activities
											</a>
										</li>
										<li>
											<a href="">
												Atlhletics
											</a>
										</li>
										<li>
											<a href="">
												Community & Service
											</a>
										</li>
										<li>
											<a href="">
												Trips & Events
											</a>
										</li>
									</ul>
								</div>
								<div class="col-3">
									<ul>
										<li>
											CAMPUS
										</li>
										<li>
											<a href="">
												Facilities
											</a>
										</li>
										<li>
											<a href="">
												School Services
											</a>
										</li>
										<li>
											<a href="">
												Safeguarding
											</a>
										</li>
									</ul>
									<ul>
										<li>
											ADMISSION
										</li>
										<li>
											<a href="">
												Selection Activities
											</a>
										</li>
										<li>
											<a href="">
												Application forms
											</a>
										</li>
										<li>
											<a href="">
												Fees
											</a>
										</li>
										<li>
											<a href="">
												Scolarships
											</a>
										</li>
									</ul>
								</div>
								<div class="col-3">
									<ul>
										<li>
											COMMUNITY
										</li>
										<li>
											<a href="">
												Students
											</a>
										</li>
										<li>
											<a href="">
												Team
											</a>
										</li>
										<li>
											<a href="">
												Parent Faculty Organization
											</a>
										</li>
										<li>
											<a href="">
												Alunni
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="row desktop-nav-footer">
								<div class="col-6">
									<div class="ist-cta">
										Contact us
										<img onload="SVGInject(this);" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg'; ?>" alt="">
									</div>
								</div>
								<div class="col-3">
									<ul>
										<li>
											<a href="">
												Work with us
											</a>
										</li>
										<li>
											<a href="">
												News & events
											</a>
										</li>
									</ul>
								</div>
								<div class="col-3">
									<ul>
										<li>
											<a href="">
												Downloads
											</a>
										</li>
										<li>
											<a href="">
												School Calendar
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="mobile-nav-menu" class="p-30">
				<div class="header-mobile-ham p-b-60">
					<img onload="SVGInject(this); " src="<?= get_template_directory_uri() . '/resources/icons/ist-logo.svg'; ?>" alt="">
					<div class="close-nav-mobile-btn">
						<img onload="SVGInject(this); " src="<?= get_template_directory_uri() . '/resources/icons/ham-close.svg'; ?>" alt="">
					</div>
				</div>
				<div class="collapse-container" data-bs-toggle="collapse" href="#collapse-program" role="button" aria-expanded="false" aria-controls="collapse-program">
					<div>
						Programs
						<img src="<?= get_template_directory_uri() . '/resources/icons/plus.svg'; ?>" alt="">
						<img src="<?= get_template_directory_uri() . '/resources/icons/min.svg;' ?>" alt="">
					</div>
				</div>
				<div class="collapse-links-container">
					<div class="collapse" id="collapse-program">
						<ul class="link-list-mobile-nav">
							<li>
								<a href="">Overview</a>
							</li>
							<li class="collapse-2-container" data-bs-toggle="collapse" href="#collapse-elementary" role="button" aria-expanded="false" aria-controls="collapse-elementary">
								Elementary Education
								<img src="<?= get_template_directory_uri() . '/resources/icons/plus.svg'; ?>" alt="">
								<img src="<?= get_template_directory_uri() . '/resources/icons/min.svg;' ?>" alt="">
							</li>
							<li class="collapse" id="collapse-elementary">
								<div>
									<ul>
										<li>
											<a href="">
												Baby Dragon Playground 0 - 3 years
											</a>
										</li>
										<li>
											<a href="">
												PYP Early Years KG1 - KG2
											</a>
										</li>
										<li>
											<a href="">
												PYP KG3 - Grade 5
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="collapse-2-container" data-bs-toggle="collapse" href="#collapse-secondary" role="button" aria-expanded="false" aria-controls="collapse-secondary">
								Secondary Education
								<img src="<?= get_template_directory_uri() . '/resources/icons/plus.svg'; ?>" alt="">
								<img src="<?= get_template_directory_uri() . '/resources/icons/min.svg;' ?>" alt="">
							</li>
							<li class="collapse-links-container collapse" id="collapse-secondary">
								<ul>
									<li>
										<a href="">
											MYP Grades 6 - 10
										</a>
									</li>
									<li>
										<a href="">
											DP Grades 11 - 12
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="<?= get_permalink(15); ?>">Learning support</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="collapse-container" data-bs-toggle="collapse" href="#collapse-about" role="button" aria-expanded="false" aria-controls="collapse-about">
					<div>
						About
						<img src="<?= get_template_directory_uri() . '/resources/icons/plus.svg'; ?>" alt="">
						<img src="<?= get_template_directory_uri() . '/resources/icons/min.svg;' ?>" alt="">
					</div>
				</div>
				<div class="collapse collapse-links-container" id="collapse-about">
					<ul class="link-list-mobile-nav">
						<li>
							<a href="<?= get_permalink(11); ?>">History</a>
						</li>
						<li>
							<a href="">
								Governance
							</a>
						</li>
						<li>
							<a href="<?= get_permalink(13); ?>">
								Beliefs & Values
							</a>
						</li>
						<li>
							<a href="<?= get_permalink(15); ?>">
								Accreditation
							</a>
						</li>

					</ul>
				</div>
				<div class="collapse-container" data-bs-toggle="collapse" href="#collapse-campus" role="button" aria-expanded="false" aria-controls="collapse-campus">
					<div>
						Campus
						<img src="<?= get_template_directory_uri() . '/resources/icons/plus.svg'; ?>" alt="">
						<img src="<?= get_template_directory_uri() . '/resources/icons/min.svg;' ?>" alt="">
					</div>
				</div>
				<div class="collapse" id="collapse-campus">
					Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi expedita deleniti nobis doloribus earum magnam sint sit, vero repellendus assumenda perspiciatis, quidem doloremque nisi eligendi? Voluptatibus nesciunt reprehenderit neque tempore.
				</div>
				<div class="collapse-container" data-bs-toggle="collapse" href="#collapse-student" role="button" aria-expanded="false" aria-controls="collapse-student">
					<div>
						Student Life
						<img src="<?= get_template_directory_uri() . '/resources/icons/plus.svg'; ?>" alt="">
						<img src="<?= get_template_directory_uri() . '/resources/icons/min.svg;' ?>" alt="">
					</div>
				</div>
				<div class="collapse" id="collapse-student">
					Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi expedita deleniti nobis doloribus earum magnam sint sit, vero repellendus assumenda perspiciatis, quidem doloremque nisi eligendi? Voluptatibus nesciunt reprehenderit neque tempore.
				</div>
				<div class="collapse-container" data-bs-toggle="collapse" href="#collapse-admission" role="button" aria-expanded="false" aria-controls="collapse-admission">
					<div>
						Admission
						<img src="<?= get_template_directory_uri() . '/resources/icons/plus.svg'; ?>" alt="">
						<img src="<?= get_template_directory_uri() . '/resources/icons/min.svg;' ?>" alt="">
					</div>
				</div>
				<div class="collapse" id="collapse-admission">
					Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi expedita deleniti nobis doloribus earum magnam sint sit, vero repellendus assumenda perspiciatis, quidem doloremque nisi eligendi? Voluptatibus nesciunt reprehenderit neque tempore.
				</div>
				<div class="collapse-container" data-bs-toggle="collapse" href="#collapse-community" role="button" aria-expanded="false" aria-controls="collapse-community">
					<div>
						Community
						<img src="<?= get_template_directory_uri() . '/resources/icons/plus.svg'; ?>" alt="">
						<img src="<?= get_template_directory_uri() . '/resources/icons/min.svg;' ?>" alt="">
					</div>
				</div>
				<div class="collapse" id="collapse-community">
					Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi expedita deleniti nobis doloribus earum magnam sint sit, vero repellendus assumenda perspiciatis, quidem doloremque nisi eligendi? Voluptatibus nesciunt reprehenderit neque tempore.
				</div>
				<ul class="mobile-header-bottom-links">
					<li>
						<a href=""> Why IST?</a>
					</li>
					<li>
						<a href="">Work with us</a>
					</li>
					<li>
						<a href="">Campus tour</a>
					</li>
					<li>
						<a href="">News & events</a>
					</li>
					<li>
						<a href="">Downloads</a>
					</li>
					<li>
						<a href="">School Calendar</a>
					</li>
				</ul>
				<a href="">
					<div class="mobile-header-cta ist-cta">
						Contact us <img onload="SVGInject(this);" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg'; ?>" alt="">
					</div>
				</a>
			</div>
			<div id="desktop-search-container" class="d-none">
				<div class="close-search-desktop-container">
					<img id="close-search-desktop-btn" onload="SVGInject(this)" src="<?= get_template_directory_uri() . '/resources/icons/ham-close.svg'; ?>" alt="">
				</div>
				<div class="container-fluid p-t-100 p-b-100" id="vue-search-container-desktop">
					<div class="row justify-content-center">
						<div class="col-10">
							<div class="search-input">
								<input id="input-txt-search-desktop" @keyup="getResult()" class="desktop-search-input" placeholder="Find what you need using Smart Search..." type="text">
								<div>
									<img onload="SVGInject(this); " src="<?= get_template_directory_uri() . '/resources/icons/search-btn.svg' ?>" alt="">
								</div>
							</div>
							<div id="search-result-desktop" class="results-container">
								<div v-for="post in posts">
									<a v-bind:href="post.url">
										{{post.title}}
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="mobile-search-container" class="p-30">
				<div class="header-mobile-ham p-b-60">
					<img onload="SVGInject(this); " src="<?= get_template_directory_uri() . '/resources/icons/ist-logo.svg'; ?>" alt="">
					<div class="close-search-mobile-btn">
						<img onload="SVGInject(this); " src="<?= get_template_directory_uri() . '/resources/icons/ham-close.svg'; ?>" alt="">
					</div>
				</div>
				<div class="container-fluid" id="vue-search-container-mobile">
					<div class="row justify-content-center">
						<div class="col-12">
							<div class="search-input">
								<input id="input-txt-search-mobile" @keyup="getResult()" class="mobile-search-input" placeholder="Find what you need using Smart Search..." type="text">
								<div>
									<img onload="SVGInject(this); " src="<?= get_template_directory_uri() . '/resources/icons/search-btn.svg' ?>" alt="">
								</div>
							</div>
							<div id="search-result-mobile" class="results-container">
								<div v-for="post in posts">
									<a v-bind:href="post.url">
									<div v-html="post.title">
										
									</div>	
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>