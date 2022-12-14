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
		<div class="header-layover"></div>
		<header class="<?= get_the_ID() != 7  ? 'blured' : '' ?>">
			<div class="container-fluid p-l-20 p-r-20">
				<div class="row justify-content-center g-0">
					<div class="col-12">
						<nav class="row g-0">
							<div class="col-lg-3 col-5 p-0">
								<div class="header-logo-container">
									<div>
										<a class="d-flex justify-content-start align-items-center" href="<?= get_site_url(); ?>">
											<img style="width:100px;height:50px;" class="header-logo" src="<?= get_template_directory_uri() . '/resources/icons/ist-logo.svg' ?>" alt="">
											<div class="logo-text m-l-20" style="color:#fff;line-height:1;">
												International <br> School of Tianjin
											</div>
										</a>
									</div>
								</div>
							</div>
							<div class="col-lg-5 offset-lg-2 col-4 offset-0 justify-content-around">
								<div class="header-links-container d-lg-block d-none text-center">
									<ul class="d-flex aling-items-center justify-content-around">
										<li>
											<a class="<?= is_page(229) ? 'active-link' : ''; ?>" href="<?= get_permalink(229); ?>">
												WHY IST?
											</a>
										</li>
										<li>
											<a class="<?= is_page(108) ? 'active-link' : ''; ?>" href="<?= get_home_url() . '/facilities'; ?>">
												CAMPUS TOUR
											</a>
										</li>
										<li>
											<a class="<?= is_page(217) ? 'active-link' : ''; ?>" href="<?= get_permalink(217); ?>">
												INQUIRE NOW
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-lg-2 col-3">
								<div class="header-btn-container">
									<div id="search-btn">
										<div class="search-btn-desktop">
											<img class="d-none d-lg-block" id="header-search-btn" onload="SVGInject(this)" src="<?= get_template_directory_uri() . '/resources/icons/search-btn.svg' ?>" alt="">
										</div>
										<div class="search-btn-mobile">
											<img class="search-btn-mobile d-block d-lg-none" id="header-search-btn" onload="SVGInject(this)" src="<?= get_template_directory_uri() . '/resources/icons/search-btn.svg' ?>" alt="">
										</div>
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
				<div class="container-fluid p-t-40 p-b-40 h-100">
					<div class="row justify-content-center h-100">
						<div class="col-11 column-container-header-desktop h-100">
							<div class="row link-lists-header">
								<div class="col-4">
									<ul>
										<li style="font-size:20px; font-weight:500;">
											PROGRAMS
										</li>
										<li>
											<a class="<?= get_the_ID() == 23 ? 'active-link' : '';  ?>" style="font-size:20px; font-weight:500;" href="<?= get_permalink(23); ?>">
												Overview
											</a>
										</li>
										<li>
											<a class="<?= get_the_ID() == 35 ? 'active-link' : ''; ?>" style="font-size:20px; font-weight:500;" href="<?= get_permalink(35); ?>">
												Elementary Education
											</a>
										</li>
										<li>
											<a class="<?= get_the_ID() == 144 ? 'active-link' : ''; ?>" href="<?= get_permalink(144); ?>">
												Baby Dragon Playgroup <br>
												0 - 3 years
											</a>
										</li>
										<li>
											<a class="<?= get_the_ID() == 145 ? 'active-link' : ''; ?>" href="<?= get_permalink(145); ?>">
												PYP Early Years<br>
												KG1 - KG2
											</a>
										</li>
										<li>
											<a class="<?= get_the_ID() == 143 ? 'active-link' : ''; ?>" href="<?= get_permalink(143); ?>">
												PYP <br>
												KG3 - Grade 5
											</a>
										</li>
										<li>
											<a class="<?= get_the_ID() == 37 ? 'active-link' : ''; ?>" style="font-size:20px; font-weight:500;" href="<?= get_permalink(37); ?>">
												Secondary Education
											</a>
										</li>
										<li>
											<a class="<?= get_the_ID() == 146 ? 'active-link' : ''; ?>" href="<?= get_permalink(146); ?>">
												MYP Grades <br>
												6 - 10
											</a>
										</li>
										<li>
											<a class="<?= get_the_ID() == 147 ? 'active-link' : ''; ?>" href="<?= get_permalink(147); ?>">
												DP Grades <br>
												11 - 12
											</a>
										</li>
										<li>
											<a class="<?= get_the_ID() == 39 ? 'active-link' : ''; ?>" style="font-size:20px; font-weight:500;" href="<?= get_permalink(39); ?>">
												Learning support
											</a>
										</li>
									</ul>
								</div>
								<div class="col-3">
									<ul>
										<li style="font-weight:500;font-size:20px;">
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
												Accreditation
											</a>
										</li>
									</ul>
									<ul>
										<li style="font-weight:500;font-size:20px;">
											STUDENT LIFE
										</li>
										<li>
											<a class="<?= is_page(184) ? 'active-link' : ''; ?>" href="<?= get_permalink(184); ?>">
												Co-curriculum Activities
											</a>
										</li>
										<li>
											<a class="<?= is_page(186) ? 'active-link' : ''; ?>" href="<?= get_permalink(186); ?>">
												Atlhletics
											</a>
										</li>
										<li>
											<a class="<?= is_page(188) ? 'active-link' : ''; ?>" href="<?= get_permalink(188); ?>">
												Community & Service
											</a>
										</li>
										<li>
											<a class="<?= is_page(190) ? 'active-link' : ''; ?>" href="<?= get_permalink(190);  ?>">
												Trips & Events
											</a>
										</li>
									</ul>
								</div>
								<div class="col-3">
									<ul>
										<li style="font-weight:500;font-size:20px;">
											CAMPUS
										</li>
										<li>
											<a class="<?= get_the_ID() == 108 ? 'active-link' : ''; ?>" href="<?= get_permalink(108); ?>">
												Facilities
											</a>
										</li>
										<li>
											<a class="<?= get_the_ID() == 111 ? 'active-link' : ''; ?>" href="<?= get_permalink(111); ?>">
												School Services
											</a>
										</li>
										<li>
											<a class="<?= get_the_ID() == 113 ? 'active-link' : ''; ?>" href="<?= get_permalink(113); ?>">
												Safeguarding
											</a>
										</li>
									</ul>
									<ul>
										<li style="font-weight:500;font-size:20px;">
											ADMISSION
										</li>
										<li>
											<a class="<?= get_the_ID() == 158 ? 'active-link' : ''; ?>" href="<?= get_permalink(158); ?>">
												Selection Activities
											</a>
										</li>
										<li>
											<a class="<?= get_the_ID() == 164 ? 'active-link' : ''; ?>" href="<?= get_permalink(164); ?>">
												Application forms
											</a>
										</li>
										<li>
											<a class="<?= get_the_ID() == 160 ? 'active-link' : ''; ?>" href="<?= get_permalink(160); ?>">
												Fees
											</a>
										</li>
										<li>
											<a class="<?= get_the_ID() == 162 ? 'active-link' : ''; ?>" href="<?= get_permalink(162); ?>">
												Scholarships
											</a>
										</li>
									</ul>
								</div>
								<div class="col-2">
									<ul>
										<li style="font-weight:500;font-size:20px;">
											COMMUNITY
										</li>
										<li>
											<a class="<?= get_the_ID() == 178 ? 'active-link' : ''; ?>" href="<?= get_permalink(178); ?>">
												Students
											</a>
										</li>
										<li>
											<a class="<?= get_the_ID() == 171 ? 'active-link' : ''; ?>" href="<?= get_permalink(171); ?>">
												Team
											</a>
										</li>
										<li>
											<a class="<?= get_the_ID() == 174 ? 'active-link' : ''; ?>" href="<?= get_permalink(174); ?>">
												Parent Faculty Organization
											</a>
										</li>
										<li>
											<a class="<?= get_the_ID() == 176 ? 'active-link' : ''; ?>" href="<?= get_permalink(176); ?>">
												Alumni
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="row desktop-nav-footer align-items-end p-b-110">
								<div class="col-6">
									<a class="ist-cta" href="<?= get_permalink(217); ?>" style="color: #CC0001;">
										Contact us
										<img onload="SVGInject(this);" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg'; ?>" alt="">
									</a>
								</div>
								<div class="col-3">
									<ul>
										<li>
											<a class="<?= is_page(219) ? 'active-link' : ''; ?>" href="<?= get_permalink(219); ?>">
												Work with us
											</a>
										</li>
										<li>
											<a class="<?= is_page(231) ? 'active-link' : ''; ?>" href="<?= get_permalink(231); ?>">
												News & events
											</a>
										</li>
									</ul>
								</div>
								<div class="col-3">
									<ul>
										<li>
											<a class="<?= is_page(215) ? 'active-link' : '';  ?>" href="<?= get_permalink(215); ?>">
												Downloads
											</a>
										</li>
										<li>
											<a class="<?= is_page(221) ? 'active-link' : ''; ?>" href="<?= get_permalink(221); ?>">
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
					<a href="<?= get_permalink(7); ?>">
						<img onload="SVGInject(this); " src="<?= get_template_directory_uri() . '/resources/icons/ist-logo.svg'; ?>" alt="">
					</a>
					<div class="close-nav-mobile-btn">
						<image onload="SVGInject(this); " src="<?= get_template_directory_uri() . '/resources/icons/ham-close.svg'; ?>" alt="">
					</div>
				</div>
				<div class="collapse-container" data-bs-toggle="collapse" href="#collapse-program" role="button" aria-expanded="false" aria-controls="collapse-program">
					<div>
						Programs
						<image src="<?= get_template_directory_uri() . '/resources/icons/plus.svg'; ?>" alt="">
							<image src="<?= get_template_directory_uri() . '/resources/icons/min.svg;' ?>" alt="">
					</div>
				</div>
				<div class="collapse-links-container">
					<div class="collapse" id="collapse-program">
						<ul class="link-list-mobile-nav">
							<li>
								<a class="<?= get_the_ID() == 23 ? 'active-link' : ''; ?>" href="<?= get_permalink(23); ?>">Overview</a>
							</li>
							<li class="collapse-2-container" data-bs-toggle="collapse" href="#collapse-elementary" role="button" aria-expanded="false" aria-controls="collapse-elementary">
								Elementary Education
								<image src="<?= get_template_directory_uri() . '/resources/icons/plus.svg'; ?>" alt="">
									<image src="<?= get_template_directory_uri() . '/resources/icons/min.svg;' ?>" alt="">
							</li>
							<li class="collapse" id="collapse-elementary">
								<div>
									<ul>
										<li>
											<a class="<?= get_the_ID() == 144 ? 'active-link' : ''; ?>" href="<?= get_permalink(144); ?>">
												Baby Dragon Playground 0 - 3 years
											</a>
										</li>
										<li>
											<a class="<?= get_the_ID() == 145 ? 'active-link' : ''; ?>" href="<?= get_permalink(145); ?>">
												PYP Early Years KG1 - KG2
											</a>
										</li>
										<li>
											<a class="<?= get_the_ID() == 143 ? 'active-link' : ''; ?>" href="<?= get_permalink(143); ?>">
												PYP KG3 - Grade 5
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="collapse-2-container" data-bs-toggle="collapse" href="#collapse-secondary" role="button" aria-expanded="false" aria-controls="collapse-secondary">
								Secondary Education
								<image src="<?= get_template_directory_uri() . '/resources/icons/plus.svg'; ?>" alt="">
									<image src="<?= get_template_directory_uri() . '/resources/icons/min.svg;' ?>" alt="">
							</li>
							<li class="collapse-links-container collapse" id="collapse-secondary">
								<ul>
									<li>
										<a class="<?= get_the_ID() == 146 ? 'active-link' : ''; ?>" href="<?= get_permalink(146); ?>">
											MYP Grades 6 - 10
										</a>
									</li>
									<li>
										<a class="<?= get_the_ID() == 147 ? 'active-link' : ''; ?>" href="<?= get_permalink(147); ?>">
											DP Grades 11 - 12
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a class="<?= get_the_ID() == 39 ? 'active-link' : ''; ?>" href="<?= get_permalink(39); ?>">Learning support</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="collapse-container" data-bs-toggle="collapse" href="#collapse-about" role="button" aria-expanded="false" aria-controls="collapse-about">
					<div>
						About
						<image src="<?= get_template_directory_uri() . '/resources/icons/plus.svg'; ?>" alt="">
							<image src="<?= get_template_directory_uri() . '/resources/icons/min.svg;' ?>" alt="">
					</div>
				</div>
				<div class="collapse collapse-links-container" id="collapse-about">
					<ul class="link-list-mobile-nav">
						<li>
							<a class="<?= get_the_ID() == 11 ? 'active-link' : ''; ?>" href="<?= get_permalink(11); ?>">
								History
							</a>
						</li>
						<li>
							<a class="<?= get_the_ID() == 13 ? 'active-link' : ''; ?>" href="<?= get_permalink(13); ?>">
								Beliefs & Values
							</a>
						</li>
						<li>
							<a class="<?= get_the_ID() == 15 ? 'active-link' : ''; ?>" href="<?= get_permalink(15); ?>">
								Accreditation
							</a>
						</li>
					</ul>
				</div>
				<div class="collapse-container" data-bs-toggle="collapse" href="#collapse-campus" role="button" aria-expanded="false" aria-controls="collapse-campus">
					<div>
						Campus
						<image src="<?= get_template_directory_uri() . '/resources/icons/plus.svg'; ?>" alt="">
							<image src="<?= get_template_directory_uri() . '/resources/icons/min.svg;' ?>" alt="">
					</div>
				</div>
				<div class="collapse" id="collapse-campus">
					<ul class="link-list-mobile-nav">
						<li>
							<a class="<?= get_the_ID() == 108 ? 'active-link' :  ''; ?>" href="<?= get_permalink(108); ?>">
								Facilities
							</a>
						</li>
						<li>
							<a class="<?= get_the_ID() == 111 ? 'active-link' : ''; ?>" href="<?= get_permalink(111); ?>">
								School Services
							</a>
						</li>
						<li>
							<a class="<?= get_the_ID() == 113 ? 'active-link' : ''; ?>" href="<?= get_permalink(113); ?>">
								Safeguarding
							</a>
						</li>
					</ul>
				</div>
				<div class="collapse-container" data-bs-toggle="collapse" href="#collapse-student" role="button" aria-expanded="false" aria-controls="collapse-student">
					<div>
						Student Life
						<image src="<?= get_template_directory_uri() . '/resources/icons/plus.svg'; ?>" alt="">
							<image src="<?= get_template_directory_uri() . '/resources/icons/min.svg;' ?>" alt="">
					</div>
				</div>
				<div class="collapse" id="collapse-student">
					<ul class="link-list-mobile-nav">
						<li>
							<a class="<?= is_page(184) ? 'active-link' : ''; ?>" href="<?= get_permalink(184); ?>">
								Co-curricular Activities
							</a>
						</li>
						<li>
							<a class="<?= is_page(186) ? 'active-link' : ''; ?>" href="<?= get_permalink(186); ?>">
								Athletics
							</a>
						</li>
						<li>
							<a class="<?= is_page(188) ? 'active-link' : ''; ?>" href="<?= get_permalink(188); ?>">
								Community & Service
							</a>
						</li>
						<li>
							<a class="<?= is_page(190) ? 'active-link' : ''; ?>" href="<?= get_permalink(190); ?>">
								Trips & Events
							</a>
						</li>
					</ul>
				</div>
				<div class="collapse-container" data-bs-toggle="collapse" href="#collapse-admission" role="button" aria-expanded="false" aria-controls="collapse-admission">
					<div>
						Admission
						<image src="<?= get_template_directory_uri() . '/resources/icons/plus.svg'; ?>" alt="">
							<image src="<?= get_template_directory_uri() . '/resources/icons/min.png;' ?>" alt="">
					</div>
				</div>
				<div class="collapse" id="collapse-admission">
					<ul class="link-list-mobile-nav">
						<li>
							<a class="<?= get_the_ID() == 158 ? 'active-link' : ''; ?>" href="<?= get_permalink(158); ?>">
								Selection policies
							</a>
						</li>
						<li>
							<a class="<?= get_the_ID() == 164 ? 'active-link' : ''; ?>" href="<?= get_permalink(164); ?>">
								Application forms
							</a>
						</li>
						<li>
							<a class="<?= get_the_ID() == 160 ? 'active-link' : ''; ?>" href="<?= get_permalink(160); ?>">
								Fees
							</a>
						</li>
						<li>
							<a class="<?= get_the_ID() == 162 ? 'active-link' : ''; ?>" href="<?= get_permalink(162); ?>">
								Scholarship
							</a>
						</li>
					</ul>
				</div>
				<div class="collapse-container" data-bs-toggle="collapse" href="#collapse-community" role="button" aria-expanded="false" aria-controls="collapse-community">
					<div>
						Community
						<image src="<?= get_template_directory_uri() . '/resources/icons/plus.svg'; ?>" alt="">
							<image src="<?= get_template_directory_uri() . '/resources/icons/min.svg;' ?>" alt="">
					</div>
				</div>
				<div class="collapse" id="collapse-community">
					<ul class="link-list-mobile-nav">
						<li>
							<a class="<?= get_the_ID() == 178 ? 'active-link' : ''; ?>" href="<?= get_permalink(178); ?>">
								Students
							</a>
						</li>
						<li>
							<a class="<?= get_the_ID() == 171 ? 'active-link' : ''; ?>" href="<?= get_permalink(171); ?>">
								Team
							</a>
						</li>
						<li>
							<a class="<?= get_the_ID() == 174 ? 'active-link' : ''; ?>" href="<?= get_permalink(174); ?>">
								Parent Faculty Organization
							</a>
						</li>
						<li>
							<a class="<?= get_the_ID() == 176 ? 'active-link' : ''; ?>" href="<?= get_permalink(176); ?>">
								Alumni
							</a>
						</li>
					</ul>
				</div>
				<ul class="mobile-header-bottom-links">
					<li>
						<a class="<?= is_page(229) ? 'active-link' : '';  ?>" href="<?= get_permalink(229); ?>">
							Why IST?
						</a>
					</li>
					<li>
						<a class="<?= is_page(219) ? 'active-link' : ''; ?>" href="<?= get_permalink(219); ?>">
							Work with us
						</a>
					</li>
					<li>
						<a class="<?= is_page(108) ? 'active-link' : ''; ?>" href="<?= get_permalink(108); ?>">
							Campus tour
						</a>
					</li>
					<li>
						<a class="<?= is_page(231) ? 'active-link' : ''; ?>" href="<?= get_permalink(231); ?>">
							News & events
						</a>
					</li>
					<li>
						<a class="<?= is_page(215) ? 'active-link' : ''; ?>" href="<?= get_permalink(215); ?>">
							Downloads
						</a>
					</li>
					<li>
						<a class="<?= is_page(221) ? 'active-link' : '' ?>" href="<?= get_permalink(221); ?>">
							School Calendar
						</a>
					</li>
				</ul>
				<a class="<?= is_page(217) ? 'active-link' : ''; ?>" href="<?= get_permalink(217); ?>">
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
									<img style="width:60px; height:60px;" onload="SVGInject(this); " src="<?= get_template_directory_uri() . '/resources/icons/search-btn.svg' ?>" alt="">
								</div>
							</div>
							<div id="search-result-desktop" class="results-container">
								<div v-for="post in posts">
									<a v-bind:href="post.url">
										<div v-html="post.title"></div>
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
									<img onload="SVGInject(this);" style="width:60px;height:60px;" src="<?= get_template_directory_uri() . '/resources/icons/search-btn.svg' ?>" alt="">
								</div>
							</div>
							<div id="search-result-mobile" class="results-container">
								<div v-for="post in posts">
									<a v-bind:href="post.url">
										<div v-html="post.title"></div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>