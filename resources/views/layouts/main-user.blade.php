<!doctype html>
<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<!-- Important stuff for SEO, don't neglect. (And don't dupicate values across your site!) -->
	<title>Ruang Internasional | The Multi-Purpose HTML5 Template</title>
	<meta name="author" content="" />
	<meta name="description" content="" />

	<!-- Don't forget to set your site up: http://google.com/webmasters -->
	<meta name="google-site-verification" content="" />
	<meta name="Copyright" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{ asset('assets/user') }}/images/logo/ruanginternasional.png">

    <link rel="apple-touch-icon" href="{{ asset('assets/user') }}/images/logo/ruanginternasional.png">

	<!-- concatenate and minify for production -->
	<link rel="stylesheet" href="{{ asset('assets/user') }}/css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/user') }}/css/settings.css" media="screen" />
	<link rel="stylesheet" href="{{ asset('assets/user') }}/css/bootstrap.css" type="text/css" media="all" />
	<link rel="stylesheet" href="{{ asset('assets/user') }}/css/mediaelementplayer.css" />
	<link rel="stylesheet" href="{{ asset('assets/user') }}/css/animate.min.css" type="text/css" media="all" />

	<link rel="stylesheet" href="{{ asset('assets/user') }}/css/magnific-popup.css" type="text/css" media="all" />
	<link rel="stylesheet" href="{{ asset('assets/user') }}/css/icon-fonts.css" type="text/css" media="all" />

	<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

</head>

<!-- Class ( site_boxed - dark - preloader1 - preloader2 - preloader3 - light_header - dark_sup_menu - menu_button_mode - transparent_header - header_on_side ) -->
<body class="preloader3 light_header">
<div id="preloader">
	<div class="spinner">
		<div class="sk-dot1"></div><div class="sk-dot2"></div>
		<div class="rect3"></div><div class="rect4"></div>
		<div class="rect5"></div>
	</div>
</div>

<div id="main_wrapper">
	<header id="site_header">
		<div class="topbar"><!-- class ( topbar_colored  ) -->
			<div class="content clearfix">

				<div class="top_details clearfix f_left">

					<span><i class="icon ico-phone5"></i><span class="title">Call Us :</span> (123) 456 - 7890</span>
					<span><i class="icon ico-comment2"></i><span class="title">Support :</span> (123) 456 - 7890</span>
				</div>

				<div class="top-socials box_socials f_right">
					<a href="#" target="_blank">
						<span class="soc_name">Facebook</span>
						<span class="soc_icon_bg"></span>
						<i class="ico-facebook4"></i>
					</a>
					<a href="#" target="_blank">
						<span class="soc_name">Twitter</span>
						<span class="soc_icon_bg"></span>
						<i class="ico-twitter4"></i>
					</a>


				 </div>
			</div>
			<!-- End content -->
			<span class="top_expande not_expanded">
				<i class="no_exp ico-angle-double-down"></i>
				<i class="exp ico-angle-double-up"></i>
			</span>
		</div>
		<!-- End topbar -->

		<div id="navigation_bar">
			<div class="content">
				<div id="logo">
					<a href="index.html">
						{{-- <img class="logo_dark" src="{{ asset('assets/user') }}/images/logo/ri.jpg" alt="Enar Logo" style="height: 200px"> --}}
						<img class="img-fluid" src="{{ asset('assets/user') }}/images/logo/ri.jpg" alt="Enar Logo" style="height: 200px">
					</a>
				</div>


				<nav id="main_nav">
					<div id="nav_menu">
						<span class="mobile_menu_trigger">
						    <a href="#" class="nav_trigger"><span></span></a>
						</span>
						<ul id="navy" class="clearfix">
							<li class="normal_menu mobile_menu_toggle current_page_item">
								<a href="index.html"><span>Home</span></a>

							</li>
							<li class="normal_menu mobile_menu_toggle">
								<a href="#"><span>About</span></a>
								<ul>
									<li class="normal_menu"><a href="page-about-us.html">About Us</a></li>
									<li class="normal_menu"><a href="page-about-me.html">About Me</a></li>




								</ul>
							</li>
							<li class="has_tab_menu mobile_menu_toggle">
								<a href="#"><span>Gallery</span></a>

							</li>
							<li class="normal_menu mobile_menu_toggle">
								<a href="blog-standard-sidebar-right.html"><span>Blog</span></a>
								<ul>
									<li class="normal_menu">
										<a href="blog-single-gallery.html">Blog Single Post</a>

									</li>
								</ul>
							</li>

						</ul>
					</div>
				</nav>
				<!-- End Nav -->

				<div class="clear"></div>
			</div>
		</div>
 	</header>
        <!-- End Main Header -->

	<!-- Slider Revolution -->
	<div class="tp-banner-container">
		<div class="tp-banner-panzoom-fullscreen" >
			<ul>
				<li data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-thumb="{{ asset('assets/user') }}/images/sliders/homeslider_thum1.jpg" data-delay="13000"  data-saveperformance="off"  data-title="Slide Title">
					<!-- MAIN IMAGE -->
					<img src="{{ asset('assets/user') }}/images/sliders/rev_bg1.jpg"  alt="kenburns1"  data-bgposition="top right" data-kenburns="on" data-duration="14000" data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="150" data-bgpositionend="bottom left">
					<!-- LAYERS -->

					<div class="tp-caption oswald_font ren_num_a sfb fadeout tp-resizeme rs-parallaxlevel-2"
						data-x="15" data-hoffset="0"
						data-y="center" data-voffset="-150"
						data-speed="1000"
						data-start="1400"
						data-easing="Power4.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.05"
						data-endelementdelay="0.1"
						data-endspeed="1000"
						data-endeasing="Power1.easeOut"
						style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">
						1
					</div>
					<!-- LAYER NR. 1 -->
					<div class="tp-caption oswald_font upper reddishbg_heavy_80 lfr fadeout tp-resizeme rs-parallaxlevel-2"
						data-x="15" data-hoffset="0"
						data-y="center" data-voffset="-55"
						data-speed="1000"
						data-start="800"
						data-easing="Power4.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.05"
						data-endelementdelay="0.1"
						data-endspeed="1000"
						data-endeasing="Power1.easeOut"
						style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">
						Enar
					</div>

					<!-- LAYER NR. 2 -->
					<div class="tp-caption oswald_font upper reddishbg_heavy_70 lfr fadeout tp-resizeme rs-parallaxlevel-2"
						data-x="15" data-hoffset="0"
						data-y="center" data-voffset="30"
						data-speed="1000"
						data-start="1000"
						data-easing="Power4.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.05"
						data-endelementdelay="0.1"
						data-endspeed="1000"
						data-endeasing="Power1.easeOut"
						style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">
						100% Responsive
					</div>
					<!-- LAYER NR. 3 -->
					<div class="tp-caption reddishbg_heavy_30 italic lfr fadeout tp-resizeme rs-parallaxlevel-2"
						data-x="15" data-hoffset="0"
						data-y="center" data-voffset="105"
						data-speed="1000"
						data-start="1200"
						data-easing="Power4.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.05"
						data-endelementdelay="0.1"
						data-endspeed="1000"
						data-endeasing="Power1.easeOut"
						style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">
						Full Responsive Multipurpose HTML5 Template
					</div>
				</li>

				<!-- SLIDE  -->
				<li data-transition="slideleft" data-slotamount="1" data-masterspeed="1500" data-thumb="{{ asset('assets/user') }}/images/sliders/homeslider_thum3.jpg" data-delay="15000"  data-saveperformance="off"  data-title="Slide Title">
					<!-- MAIN IMAGE -->
					<img src="{{ asset('assets/user') }}/images/sliders/rev_bg3.jpg"  alt="kenburns3"  data-bgposition="left top" data-kenburns="on" data-duration="16000" data-ease="Linear.easeNone" data-bgfit="130" data-bgfitend="100" data-bgpositionend="left top">
					<!-- LAYERS -->

					<div class="tp-caption oswald_font ren_num_a sfb fadeout tp-resizeme rs-parallaxlevel-2"
						data-x="15" data-hoffset="0"
						data-y="center" data-voffset="-150"
						data-speed="1000"
						data-start="1400"
						data-easing="Power4.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.05"
						data-endelementdelay="0.1"
						data-endspeed="1000"
						data-endeasing="Power1.easeOut"
						style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">
						2
					</div>
					<!-- LAYER NR. 1 -->
					<div class="tp-caption oswald_font upper reddishbg_heavy_80 lfr fadeout tp-resizeme rs-parallaxlevel-2"
						data-x="15" data-hoffset="0"
						data-y="center" data-voffset="-55"
						data-speed="1000"
						data-start="800"
						data-easing="Power4.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.05"
						data-endelementdelay="0.1"
						data-endspeed="1000"
						data-endeasing="Power1.easeOut"
						style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">
						Quality
					</div>

					<!-- LAYER NR. 2 -->
					<div class="tp-caption oswald_font upper reddishbg_heavy_70 lfr fadeout tp-resizeme rs-parallaxlevel-2"
						data-x="15" data-hoffset="0"
						data-y="center" data-voffset="30"
						data-speed="1000"
						data-start="1000"
						data-easing="Power4.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.05"
						data-endelementdelay="0.1"
						data-endspeed="1000"
						data-endeasing="Power1.easeOut"
						style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">
						Creative Unique Design
					</div>
					<!-- LAYER NR. 3 -->
					<div class="tp-caption reddishbg_heavy_30 italic lfr fadeout tp-resizeme rs-parallaxlevel-2"
						data-x="15" data-hoffset="0"
						data-y="center" data-voffset="105"
						data-speed="1000"
						data-start="1200"
						data-easing="Power4.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.05"
						data-endelementdelay="0.1"
						data-endspeed="1000"
						data-endeasing="Power1.easeOut"
						style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">
						Super Design - Clean Code  - Creative Theme
					</div>
				</li>
				<!-- SLIDE  -->
				<li data-transition="slideup" data-slotamount="1" data-masterspeed="1500" data-thumb="{{ asset('assets/user') }}/images/sliders/homeslider_thum4.jpg" data-delay="15000"  data-saveperformance="off"  data-title="Slide Title">
					<!-- MAIN IMAGE -->
					<img src="{{ asset('assets/user') }}/images/sliders/rev_bg4.jpg"  alt="kenburns4"  data-bgposition="right bottom" data-kenburns="on" data-duration="16000" data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="100" data-bgpositionend="left top">
					<!-- LAYERS -->

					<!-- LAYER NR. 2 -->
					<div class="tp-caption white_heavy_70 oswald_font tp-fade fadeout tp-resizeme rs-parallaxlevel-2"
						data-x="15" data-hoffset="0"
						data-y="center" data-voffset="-60"
						data-speed="500"
						data-start="500"
						data-easing="Power4.easeOut"
						data-splitin="chars"
						data-splitout="chars"
						data-elementdelay="0.05"
						data-endelementdelay="0.05"
						data-endspeed="300"
						data-endeasing="Power1.easeOut"
						style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">OUR FREEDOM
					</div>

					<!-- LAYER NR. 4 -->
					<div class="tp-caption light_medium_20 tp-fade fadeout tp-resizeme rs-parallaxlevel-2"
						data-x="15" data-hoffset="0"
						data-y="center" data-voffset="50"
						data-speed="600"
						data-start="800"
						data-easing="Power4.easeOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						data-endspeed="600"
						data-endeasing="Power1.easeOut"
						style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">&ldquo;Freedom is not worth having if it does not include<br/> the freedom to make mistakes.&rdquo; <br/>
			&mdash; Mahatma Gandhi
					</div>
				</li>
			</ul>
			<div class="tp-bannertimer"></div>
		</div>
	</div>
	<!-- End Slider Revolution -->





    <section class="content_section bg_fixed white_section">
        <span class="section_icon"><i class="ico-video3"></i></span>
        <div class="bg_overlay">
            <div class="content row_spacer clearfix">
                <!-- Video Frame-->
                <div class="video_frame centered">
                    <div class="video_frame_tl">
                        <div class="video_frame_br">
                            <div class="video_frame_bl row_spacer2">
                                <div class="main_title upper">
                                    <h2><span class="line"></span>Video</h2>
                                </div>
                                <span class="description1 centered">Video Penyerahan SK DPC PKB Sulawesi Selatan.</span>
                                <a class="btn_a popup-vimeo" href="https://lpppkbsulsel.or.id/assets/user/file/video1.mp4">
                                    <span>
                                        <i class="in_left ico-play5"></i>
                                        <span>Putar Video</span>
                                        <i class="in_right ico-play5"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Video Frame-->
            </div>
        </div>
    </section>

	<!-- Features Slider 1-->
	<section class="content_section">

		<div class="content row_spacer clearfix">

		    <div class="main_title centered upper">
			<h2><span class="line"><span class="dot"></span></span>About Us</h2>
		    </div>

		    <span class="description4 centered">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour of this randomised words which don't look even slightly believable.</span>

		    <div class="centered">
			    <a class="btn_c" href="#">
					<span class="btn_c_ic_a"><i class="ico-keyboard-arrow-right"></i></span>
					<span class="btn_c_t">Read More</span>
					<span class="btn_c_ic_b"><i class="ico-keyboard-arrow-right"></i></span>
				</a>
		    </div>

		</div>

	</section>
	<!-- End Features Slider 1 -->

	<!-- Section -->
	<section class="content_section">
		<div class="content row_spacer no_padding">
			<div class="rows_container clearfix">

				<div class="col-md-6">

					<p>This society has a vision is The Opening of The Interpretation Space of Indonesia's Young & Millennials Generation as an Agent of Change in the midst of the Global Society.</p>

					<ul class="list1 gray clearfix">
					    <li>Senior Web Designer</li>
					    <li>23 Years Old</li>
					    <li>7 Years Experience</li>
					    <li>Work in USA</li>
					    <li>500 Project by me</li>
					    <li>Other Details ...</li>
					</ul>
					<div class="social_links_widget clearfix">
						<a href="#" target="_blank" class="twitter"><i class="ico-twitter4"></i></a>
						<a href="#" target="_blank" class="facebook"><i class="ico-facebook4"></i></a>

						<a href="#" target="_blank" class="linkedin"><i class="ico-linkedin3"></i></a>




						<a href="#" target="_blank" class="instagram"><i class="ico-instagram3"></i></a>

					</div>
				</div><!-- Grid 6 -->

				<div class="col-md-6">
					<!-- <div class="main_title side_line upper small">
						<h2><span class="line"></span>My Skills</h2>
					</div> -->
					<h2 class="title1 upper">My Skills</h2>

					<div class="progress_bar" data-progress-val="80" data-progress-animation="easeOutQuad" data-progress-delay="300" data-progress-color="#0BACB8" style="animation-delay: 300ms;">
						<div class="fill_con">
							<div class="fill" style="background: rgb(11, 172, 184); width: 80%;">
								<span class="title" style="opacity: 1; left: 0px;">Web Design</span>
								<span class="value"><span class="num">80</span><span>%</span></span>
							</div>
						</div>
					</div>
					<div class="progress_bar" data-progress-val="60" data-progress-animation="easeOutQuad" data-progress-delay="600" data-progress-color="#398098" style="animation-delay: 600ms;">
						<div class="fill_con">
							<div class="fill" style="background: rgb(57, 128, 152); width: 60%;">
								<span class="title" style="opacity: 1; left: 0px;">Programming</span>
								<span class="value"><span class="num">60</span><span>%</span></span>
							</div>
						</div>
					</div>
					<div class="progress_bar" data-progress-val="70" data-progress-animation="easeOutQuad" data-progress-delay="900" data-progress-color="" style="animation-delay: 900ms;">
						<div class="fill_con">
							<div class="fill" style="width: 70%;">
								<span class="title" style="opacity: 1; left: 0px;">HTML/CSS</span>
								<span class="value"><span class="num">70</span><span>%</span></span>
							</div>
						</div>
					</div>
					<div class="progress_bar" data-progress-val="100" data-progress-animation="easeOutQuad" data-progress-delay="1200" data-progress-color="#0EA07D" style="animation-delay: 1200ms;">
						<div class="fill_con">
							<div class="fill" style="background: rgb(14, 160, 125); width: 100%;">
								<span class="title" style="opacity: 1; left: 0px;">Wordpress</span>
								<span class="value"><span class="num">100</span><span>%</span></span>
							</div>
						</div>
					</div>
					<div class="progress_bar" data-progress-val="40" data-progress-animation="easeOutQuad" data-progress-delay="1500" data-progress-color="#E74C3C" style="animation-delay: 1500ms;">
						<div class="fill_con">
							<div class="fill" style="background: rgb(231, 76, 60); width: 40%;">
								<span class="title" style="opacity: 1; left: 0px;">Joomla</span>
								<span class="value"><span class="num">40</span><span>%</span></span>
							</div>
						</div>
					</div>
				</div><!-- Grid 6 -->

			</div>
		</div>
	</section>
	<!-- End Section -->

    <section class="content_section bg_gray">
		<div class="container icons_spacer">
			<div class="main_title centered upper">
				<h2><span class="line"><span class="dot"></span></span>About Enar</h2>
			</div>
			<div class="icon_boxes_con style1 upper_title">
				<div class="col-md-3">
					<div class="service_box ">
						<span class="icon"><i class="ico-tools-2"></i></span>
						<div class="service_box_con">
							<h3>R.I Writing Moment (RIWM)</h3>
							<span class="desc">RIWM is a youth empowerment program through writing activities run by all members of the organization in accordance with the ongoing quarterly themes and selected topics. This article will be reviewed and edited by the team which will then be published in online or print media.</span>

						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="service_box">
						<span class="icon"><i class="ico-mobile4"></i></span>
						<div class="service_box_con">
							<h3>R.I Internal Discussion (RIID)</h3>
							<span class="desc">RIID is an internal discussion activity involving all members of the organization to brainstorm the issues raised during the current quarter. This activity has a topic that will be raised by each member of the organization into writing, seminars/talkshows, and social activities.</span>

						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="service_box">
						<span class="icon"><i class="ico-heart5"></i></span>
						<div class="service_box_con">
							<h3>R.I Webinar & Talkshow (RIWT)</h3>
							<span class="desc">RIWT is an example of RIID that spawned several webinars and talkshows packed antimainstream, current, and millennial-friendly consisting of 3 keynote speakers with general concepts or can also be with special concepts (Junior: high school students/vocational students equivalent, Seniors: D3/S1 students, Professionals: practitioners/entrepreneurs/young career workers) and 1 additional speaker (young dropout/person with special needs).</span>

						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="service_box">
						<span class="icon"><i class=" ico-key4"></i></span>
						<div class="service_box_con">
							<h3>R.I Creative Event (RICE)</h3>
							<span class="desc">RICE is a program or activity organized based on creative ideas and strategic ideas that target young people and the general public, through online/offline campaigns about various things in various places and involving many people.</span>
						</div>
					</div>
				</div>

                <div class="col-md-3">
					<div class="service_box">
						<span class="icon"><i class="ico-tools-2"></i></span>
						<div class="service_box_con">
							<h3>R.I Join Activities (RIJA)</h3>
							<span class="desc">RIJA is a collaboration program with several communities / organizations / companies / government agencies that give birth or support the birth and running of positive activities that impact many people and involve youth as actors.
                            </span>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="service_box">
						<span class="icon"><i class=" ico-mobile4"></i></span>
						<div class="service_box_con">
							<h3>R.I Workshop/Training (RIWT)</h3>
							<span class="desc">RIWT is a program of coaching and training as a form of empowerment to all young people, especially in the field of writing, public speaking, and leadership to be able to develop their capacity according to the type of workshops and training that run.
                            </span>

						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="service_box">
						<span class="icon"><i class=" ico-heart5"></i></span>
						<div class="service_box_con">
							<h3>R.I Lecture/Teacher Class & Mentoring (RILTCM)</h3>
							<span class="desc">RILTCM is a special program in the form of casual classes/lectures by bringing in speakers in the form of teachers or lecturers related to the issues raised.
                            </span>

						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="service_box">
						<span class="icon"><i class="ico-key4"></i></span>
						<div class="service_box_con">
							<h3>R.I Global Circle's (RIGC)</h3>
							<span class="desc">RIGC is a program of networking and connectivity of youth in Indonesia and internationally to be able to jointly make a sustainable educational movement by using social media platforms.</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



	<!-- Counter 3 -->
	<section class="content_section white_section bg_color2">
		<div class="content row_spacer">
			<div class="counter_b clearfix">
				<div class="col-md-3">
					<div class="counter animated" data-animation="fadeInDown" data-animation-delay="300">
						<span class="icon"><i class="ico-user5"></i></span>
						<span class="value" data-speed="4000" data-from="0" data-to="1500">1500</span>
						<span class="title">clients</span>
					</div>
				</div>
				<div class="col-md-3">
					<div class="counter animated" data-animation="fadeInDown" data-animation-delay="600">
						<span class="icon"><i class="ico-heart6"></i></span>
						<span class="value" data-speed="4000" data-from="0" data-to="13">13</span>
						<span class="title">Awards</span>
					</div>
				</div>
				<div class="col-md-3">
					<div class="counter animated" data-animation="fadeInDown" data-animation-delay="900">
						<span class="icon"><i class="ico-code2"></i></span>
						<span class="value" data-speed="4000" data-from="0" data-to="94771">94771</span>
						<span class="title">Line Of Code</span>
					</div>
				</div>
				<div class="col-md-3">
					<div class="counter animated" data-animation="fadeInDown" data-animation-delay="1200">
						<span class="icon"><i class="ico-paperplane"></i></span>
						<span class="value" data-speed="4000" data-from="0" data-to="384">384</span>
						<span class="title">Projects</span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Counter 3 -->

	<!-- Our Team 2 -->
	<section class="content_section">
		<div class="content row_spacer no_padding">
			<div class="rows_container clearfix">

				<div class="col-md-8">
					<h2 class="title1 upper">Our Vission</h2>
					<p><b>Lorem Ipsum is simply dummy text</b> of the printing and typeseting industry Lorem in text Ipsum has been the industry standar dummyy text ever since the when an iunesi known printer of took a galley of type and scrambled it to make a typea specimen book There are many variations of the paes sages the Lorem Ipsum.</p>
					<p>There are many variations of demo text passed sages of Lorem Ipsum available but the majority Lorem Ipsum is simply dummy text of the printing and typeseting industry Lorem in text Ipsum has been the industry standar dummyy text ever since the when an iunesi known.</p>
				</div>
				<div class="col-md-4">
					<span class="spacer30"></span>
					<img alt="Image Title" src="{{ asset('assets/user') }}/images/device.png">
				</div>
			</div>
		</div>
	</section>
	<!-- End Our Team 2 -->

	<!-- Icon Boxes Style 2 A -->
	<section class="content_section white_section bg_color11">

	        <div class="container icons_spacer">
			<div class="main_title centered upper">
				<h2>Our Services</h2>
			</div>

			<!-- Icon Boxes Con -->
			<div class="icon_boxes_con style2 icon_left_right upper_title clearfix">
				<div class="col-md-6">
					<div class="service_box">
						<a href="#"><span class="icon circle"><i class="ico-desktop2"></i></span></a>
						<div class="service_box_con">
							<h3>Premium Sliders Included</h3>
							<span class="desc">There are many variations of demo text passed sages of Lorem Ipsum available the majority.</span>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="service_box">
						<a href="#"><span class="icon circle"><i class="ico-tablet3"></i></span></a>
						<div class="service_box_con">
							<h3>100% Responsive Layout</h3>
							<span class="desc">There are many variations of demo text passed sages of Lorem Ipsum available the majority.</span>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="service_box">
						<a href="#"><span class="icon circle"><i class="ico-beaker"></i></span></a>
						<div class="service_box_con">
							<h3>Powerful Performance</h3>
							<span class="desc">There are many variations of demo text passed sages of Lorem Ipsum available the majority.</span>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="service_box">
						<a href="#"><span class="icon circle"><i class="ico-streetsign"></i></span></a>
						<div class="service_box_con">
							<h3>Awesome Mega menu</h3>
							<span class="desc">There are many variations of demo text passed sages of Lorem Ipsum available the majority.</span>
						</div>
					</div>
				</div>
			</div>
			<!-- End Icon Boxes Con -->
		</div>
	</section>
	<!-- End Icon Boxes Style 2 A -->


	<!-- Isotope Filter 1 four columns full without padding -->
	<section class="content_section bg_gray border_b_n">
	    <div class="row_spacer_t clearfix">

		    <div class="content">
			<div class="main_title centered upper">
			    <h2><span class="line"><i class="ico-wallet-travel"></i></span>Our Portfolio</h2>
			</div>
		    </div>

		    <!-- Filter Content -->
		    <div class="hm_filter_wrapper four_blocks project_text_nav full_portos no_sapce_portos nav_in_center upper_title porto_hidden_title">
			<div id="options" class="sort_options clearfix">
			    <ul data-option-key="filter" class="option-set clearfix" id="filter-by">
				<li><a data-option-value="*" class="selected" href="#"><span>all</span><span class="num"></span></a></li>
				<li><a data-option-value=".design" class="" href="#"><span>Design</span><span class="num"></span></a></li>
				<li><a data-option-value=".photography" class="" href="#"><span>Photography</span><span class="num"></span></a></li>
				<li><a data-option-value=".video" class="" href="#"><span>Video</span><span class="num"></span></a></li>
				<li><a data-option-value=".printing" class="" href="#"><span>Printing</span><span class="num"></span></a></li>
				<li><a data-option-value=".wordpress" class="" href="#"><span>Wordpress</span><span class="num"></span></a></li>
			    </ul>
			</div>

			<div class="hm_filter_wrapper_con">
			    <div class="filter_item_block video">
				    <div class="porto_block">
					    <div class="porto_type">
						    <a data-rel="magnific-popup" href="{{ asset('assets/user') }}/images/portfolio/porto1.jpg">
							    <img src="{{ asset('assets/user') }}/images/portfolio/porto1.jpg" alt="Portfolio Name">
						    </a>
						    <div class="porto_nav">
							    <a href="#" class="icon_expand"><span><i class="ico-maximize"></i></span></a>
							    <a href="#" class="icon_expand"><span><i class="ico-open"></i></span></a>
							    <a href="#" class="icon_expand"><span><i class="ico-link2"></i></span></a>
						    </div>
					    </div>
					    <div class="porto_desc">
						<h6 class="name">Flat Logo Design</h6>
						<div class="porto_meta clearfix">
						    <span class="porto_date"><span class="number">20141213</span>2014/12/13</span>
						    <span class="porto_nums">
							<span class="comm"><i class="ico-comments"></i><span class="comm_counter">45</span></span>
							<span class="like"><i class="ico-heart2"></i><span class="like_counter">120</span></span>
						    </span>
						</div>
					    </div>
				    </div>
			    </div><!-- Item -->

			    <div class="filter_item_block design video printing wordpress">
				    <div class="porto_block">
					    <div class="porto_type">
						    <a data-rel="magnific-popup" href="{{ asset('assets/user') }}/images/portfolio/porto2.jpg">
							    <img src="{{ asset('assets/user') }}/images/portfolio/porto2.jpg" alt="Portfolio Name">
						    </a>
						    <div class="porto_nav">
							    <a href="#" class="icon_expand"><span><i class="ico-maximize"></i></span></a>
							    <a href="#" class="icon_expand"><span><i class="ico-open"></i></span></a>
							    <a href="#" class="icon_expand"><span><i class="ico-link2"></i></span></a>
						    </div>
					    </div>
					    <div class="porto_desc">
						<h6 class="name">Dawn of Justice</h6>
						<div class="porto_meta clearfix">
						    <span class="porto_date"><span class="number">20141215</span>2014/12/15</span>
						    <span class="porto_nums">
							<span class="comm"><i class="ico-comments"></i><span class="comm_counter">12</span></span>
							<span class="like"><i class="ico-heart2"></i><span class="like_counter">100</span></span>
						    </span>
						</div>
					    </div>
				    </div>
			    </div><!-- Item -->

			    <div class="filter_item_block design wordpress">
				    <div class="porto_block">
					    <div class="porto_type">
						    <a data-rel="magnific-popup" href="images/portfolio/porto3.jpg">
							    <img src="images/portfolio/porto3.jpg" alt="Portfolio Name">
						    </a>
						    <div class="porto_nav">
							    <a href="#" class="icon_expand"><span><i class="ico-maximize"></i></span></a>
							    <a href="#" class="icon_expand"><span><i class="ico-open"></i></span></a>
							    <a href="#" class="icon_expand"><span><i class="ico-link2"></i></span></a>
						    </div>
					    </div>
					    <div class="porto_desc">
						<h6 class="name">Fly On the sky</h6>
						<div class="porto_meta clearfix">
						    <span class="porto_date"><span class="number">20141210</span>2014/12/10</span>
						    <span class="porto_nums">
							<span class="comm"><i class="ico-comments"></i><span class="comm_counter">20</span></span>
							<span class="like"><i class="ico-heart2"></i><span class="like_counter">263</span></span>
						    </span>
						</div>
					    </div>
				    </div>
			    </div><!-- Item -->

			    <div class="filter_item_block design photography printing">
				    <div class="porto_block">
					    <div class="porto_type">
						    <a data-rel="magnific-popup" href="images/portfolio/porto4.jpg">
							    <img src="images/portfolio/porto4.jpg" alt="Portfolio Name">
						    </a>
						    <div class="porto_nav">
							    <a href="#" class="icon_expand"><span><i class="ico-maximize"></i></span></a>
							    <a href="#" class="icon_expand"><span><i class="ico-open"></i></span></a>
							    <a href="#" class="icon_expand"><span><i class="ico-link2"></i></span></a>
						    </div>
					    </div>
					    <div class="porto_desc">
						<h6 class="name">Need For Speed</h6>
						<div class="porto_meta clearfix">
						    <span class="porto_date"><span class="number">20141220</span>2014/12/20</span>
						    <span class="porto_nums">
							<span class="comm"><i class="ico-comments"></i><span class="comm_counter">32</span></span>
							<span class="like"><i class="ico-heart2"></i><span class="like_counter">520</span></span>
						    </span>
						</div>
					    </div>
				    </div>
			    </div><!-- Item -->

			    <div class="filter_item_block design wordpress">
				    <div class="porto_block">
					    <div class="porto_type">
						    <a data-rel="magnific-popup" href="images/portfolio/porto5.jpg">
							    <img src="images/portfolio/porto5.jpg" alt="Portfolio Name">
						    </a>
						    <div class="porto_nav">
							    <a href="#" class="icon_expand"><span><i class="ico-maximize"></i></span></a>
							    <a href="#" class="icon_expand"><span><i class="ico-open"></i></span></a>
							    <a href="#" class="icon_expand"><span><i class="ico-link2"></i></span></a>
						    </div>
					    </div>
					    <div class="porto_desc">
						<h6 class="name">Days of Future</h6>
						<div class="porto_meta clearfix">
						    <span class="porto_date"><span class="number">20141122</span>2014/11/22</span>
						    <span class="porto_nums">
							<span class="comm"><i class="ico-comments"></i><span class="comm_counter">423</span></span>
							<span class="like"><i class="ico-heart2"></i><span class="like_counter">40</span></span>
						    </span>
						</div>
					    </div>
				    </div>
			    </div><!-- Item -->

			    <div class="filter_item_block design wordpress photography printing">
				    <div class="porto_block">
					    <div class="porto_type">
						    <a data-rel="magnific-popup" href="images/portfolio/porto6.jpg">
							    <img src="images/portfolio/porto6.jpg" alt="Portfolio Name">
						    </a>
						    <div class="porto_nav">
							    <a href="#" class="icon_expand"><span><i class="ico-maximize"></i></span></a>
							    <a href="#" class="icon_expand"><span><i class="ico-open"></i></span></a>
							    <a href="#" class="icon_expand"><span><i class="ico-link2"></i></span></a>
						    </div>
					    </div>
					    <div class="porto_desc">
						<h6 class="name">Star Lord</h6>
						<div class="porto_meta clearfix">
						    <span class="porto_date"><span class="number">20141110</span>2014/11/10</span>
						    <span class="porto_nums">
							<span class="comm"><i class="ico-comments"></i><span class="comm_counter">23</span></span>
							<span class="like"><i class="ico-heart2"></i><span class="like_counter">256</span></span>
						    </span>
						</div>
					    </div>
				    </div>
			    </div><!-- Item -->

			    <div class="filter_item_block design wordpress photography">
				    <div class="porto_block">
					    <div class="porto_type">
						    <a data-rel="magnific-popup" href="images/portfolio/porto7.jpg">
							    <img src="images/portfolio/porto7.jpg" alt="Portfolio Name">
						    </a>
						    <div class="porto_nav">
							    <a href="#" class="icon_expand"><span><i class="ico-maximize"></i></span></a>
							    <a href="#" class="icon_expand"><span><i class="ico-open"></i></span></a>
							    <a href="#" class="icon_expand"><span><i class="ico-link2"></i></span></a>
						    </div>
					    </div>
					    <div class="porto_desc">
						<h6 class="name">Into the light</h6>
						<div class="porto_meta clearfix">
						    <span class="porto_date"><span class="number">20141011</span>2014/10/11</span>
						    <span class="porto_nums">
							<span class="comm"><i class="ico-comments"></i><span class="comm_counter">125</span></span>
							<span class="like"><i class="ico-heart2"></i><span class="like_counter">766</span></span>
						    </span>
						</div>
					    </div>
				    </div>
			    </div><!-- Item -->

			    <div class="filter_item_block design wordpress printing">
				    <div class="porto_block">
					    <div class="porto_type">
						    <a data-rel="magnific-popup" href="images/portfolio/porto8.jpg">
							    <img src="images/portfolio/porto8.jpg" alt="Portfolio Name">
						    </a>
						    <div class="porto_nav">
							    <a href="#" class="icon_expand"><span><i class="ico-maximize"></i></span></a>
							    <a href="#" class="icon_expand"><span><i class="ico-open"></i></span></a>
							    <a href="#" class="icon_expand"><span><i class="ico-link2"></i></span></a>
						    </div>
					    </div>
					    <div class="porto_desc">
						<h6 class="name">Dont be Shy</h6>
						<div class="porto_meta clearfix">
						    <span class="porto_date"><span class="number">20141015</span>2014/10/15</span>
						    <span class="porto_nums">
							<span class="comm"><i class="ico-comments"></i><span class="comm_counter">221</span></span>
							<span class="like"><i class="ico-heart2"></i><span class="like_counter">345</span></span>
						    </span>
						</div>
					    </div>
				    </div>
			    </div><!-- Item -->

			</div>
		    </div>
		    <!-- End Filter Content -->

	    </div>
	</section>
	<!-- End Isotope Filter 1 four columns full without padding -->

	<!-- Add To Cart -->
	<section class="content_section">
		<div class="content row_spacer no_padding clearfix">
			<div class="main_title centered upper">
				<h2><span class="line"><i class="ico-cart2"></i></span>Add To Cart</h2>
			</div>

			<div class="shop_slider">

				<div class="add2cart_slide centered">
					<div class="add2cart_image">
						<a href="#" class="pro_add2cart_details">
							<span class="text"><i class="ico-angle-right"></i><span>Show Details</span></span>
						</a>
						<a data-rel="magnific-popup" href="images/cart/product6.jpg" class="add2cart_img">
							<span class="sale_new">
								<span class="text">Sale</span><span class="circle sale"></span>
							</span>
							<span class="add2cart_zoom"><i class="ico-plus3"></i></span>
							<img src="images/cart/product6.jpg" alt="Orange Tshirt">
						</a>
					</div>
					<div class="add2cart_details">
						<div class="con_cont">
							<a href="#" class="add2cart_prod_name">Orange Tshirt</a>
							<span class="add2cart_prod_cat">Men, T-Shirts</span>
							<span class="add2cart_prod_price">
								<del>$300</del><ins>$245</ins>
							</span>
							<div class="your_rate">
								<span class="outline_stars" data-rate="60"></span>
							</div>
							<a href="#" class="add2cart_btn"><i class="ico-cart"></i><span>Add To Cart</span></a>
						</div>
					</div>
				</div>

				<div class="add2cart_slide centered">
					<div class="add2cart_image">
						<a href="#" class="pro_add2cart_details">
							<span class="text"><i class="ico-angle-right"></i><span>Show Details</span></span>
						</a>
						<a data-rel="magnific-popup" href="images/cart/product2.jpg" class="add2cart_img">
							<span class="sale_new">
								<span class="text">New</span><span class="circle new"></span>
							</span>
							<span class="add2cart_zoom"><i class="ico-plus3"></i></span>
							<img src="images/cart/product2.jpg" alt="Light Denim Dress">
						</a>
					</div>
					<div class="add2cart_details">
						<div class="con_cont">
							<a href="#" class="add2cart_prod_name">Light Denim Dress</a>
							<span class="add2cart_prod_cat">Women, Dress</span>
							<span class="add2cart_prod_price">
								<ins>$78</ins>
							</span>
							<div class="your_rate">
								<span class="outline_stars" data-rate="80"></span>
							</div>
							<a href="#" class="add2cart_btn"><i class="ico-cart"></i><span>Add To Cart</span></a>
						</div>
					</div>
				</div>

				<div class="add2cart_slide centered">
					<div class="add2cart_image">
						<a href="#" class="pro_add2cart_details">
							<span class="text"><i class="ico-angle-right"></i><span>Show Details</span></span>
						</a>
						<a data-rel="magnific-popup" href="images/cart/product3.jpg" class="add2cart_img">
							<span class="add2cart_zoom"><i class="ico-plus3"></i></span>
							<img src="images/cart/product3.jpg" alt="Classic Wide Belt">
						</a>
					</div>
					<div class="add2cart_details">
						<div class="con_cont">
							<a href="#" class="add2cart_prod_name">Classic Wide Belt</a>
							<span class="add2cart_prod_cat">Men, Belts</span>
							<span class="add2cart_prod_price">
								<ins>$34</ins>
							</span>
							<div class="your_rate">
								<span class="outline_stars" data-rate="100"></span>
							</div>
							<a href="#" class="add2cart_btn"><i class="ico-cart"></i><span>Add To Cart</span></a>
						</div>
					</div>
				</div>

				<div class="add2cart_slide centered">
					<div class="add2cart_image">
						<a href="#" class="pro_add2cart_details">
							<span class="text"><i class="ico-angle-right"></i><span>Show Details</span></span>
						</a>
						<a data-rel="magnific-popup" href="images/cart/product4.jpg" class="add2cart_img">
							<span class="add2cart_zoom"><i class="ico-plus3"></i></span>
							<img src="images/cart/product4.jpg" alt="Slim Fit Chinos">
						</a>
					</div>
					<div class="add2cart_details">
						<div class="con_cont">
							<a href="#" class="add2cart_prod_name">Slim Fit Chinos</a>
							<span class="add2cart_prod_cat">Men, Jeans</span>
							<span class="add2cart_prod_price">
								<ins>$127</ins>
							</span>
							<div class="your_rate">
								<span class="outline_stars" data-rate="40"></span>
							</div>
							<a href="#" class="add2cart_btn"><i class="ico-cart"></i><span>Add To Cart</span></a>
						</div>
					</div>
				</div>

				<div class="add2cart_slide centered">
					<div class="add2cart_image">
						<a href="#" class="pro_add2cart_details">
							<span class="text"><i class="ico-angle-right"></i><span>Show Details</span></span>
						</a>
						<a data-rel="magnific-popup" href="images/cart/product1.jpg" class="add2cart_img">
							<span class="add2cart_zoom"><i class="ico-plus3"></i></span>
							<img src="images/cart/product1.jpg" alt="Chanel Handbag">
						</a>
					</div>
					<div class="add2cart_details">
						<div class="con_cont">
							<a href="#" class="add2cart_prod_name">Chanel Handbag</a>
							<span class="add2cart_prod_cat">Women, Bags</span>
							<span class="add2cart_prod_price">
								<del>$200</del><ins>$176</ins>
							</span>
							<div class="your_rate">
								<span class="outline_stars" data-rate="100"></span>
							</div>
							<a href="#" class="add2cart_btn"><i class="ico-cart"></i><span>Add To Cart</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Add To Cart  -->

	<!-- Pricing Tables 4 -->
	<section class="content_section">
		<div class="hm-pricing-container hm-full-width hm-secondary-theme">
			<ul class="hm-pricing-list">
				<li>
					<header class="hm-pricing-header">
						<h2>Basic</h2>

						<div class="hm-price">
							<span class="hm-currency">$</span>
							<span class="hm-value">30</span>
							<span class="hm-duration">mo</span>
						</div>
					</header> <!-- .hm-pricing-header -->

					<div class="hm-pricing-body">
						<ul class="hm-pricing-features">
							<li><em>256MB</em> Memory</li>
							<li><em>1</em> User</li>
							<li><em>1</em> Website</li>
							<li><em>1</em> Domain</li>
							<li><em>Unlimited</em> Bandwidth</li>
							<li><em>24/7</em> Support</li>
						</ul>
					</div> <!-- .hm-pricing-body -->

					<footer class="hm-pricing-footer">
						<a class="hm-select" href="#">Select</a>
					</footer> <!-- .hm-pricing-footer -->
				</li>
				<li class="hm-popular">
					<header class="hm-pricing-header">
						<h2>Popular</h2>

						<div class="hm-price">
							<span class="hm-currency">$</span>
							<span class="hm-value">60</span>
							<span class="hm-duration">mo</span>
						</div>
					</header> <!-- .hm-pricing-header -->

					<div class="hm-pricing-body">
						<ul class="hm-pricing-features">
							<li><em>512MB</em> Memory</li>
							<li><em>3</em> Users</li>
							<li><em>5</em> Websites</li>
							<li><em>7</em> Domains</li>
							<li><em>Unlimited</em> Bandwidth</li>
							<li><em>24/7</em> Support</li>
						</ul>
					</div> <!-- .hm-pricing-body -->

					<footer class="hm-pricing-footer">
						<a class="hm-select" href="#">Select</a>
					</footer> <!-- .hm-pricing-footer -->
				</li>
				<li>
					<header class="hm-pricing-header">
						<h2>Premier</h2>

						<div class="hm-price">
							<span class="hm-currency">$</span>
							<span class="hm-value">90</span>
							<span class="hm-duration">mo</span>
						</div>
					</header> <!-- .hm-pricing-header -->

					<div class="hm-pricing-body">
						<ul class="hm-pricing-features">
							<li><em>1024MB</em> Memory</li>
							<li><em>5</em> Users</li>
							<li><em>10</em> Websites</li>
							<li><em>10</em> Domains</li>
							<li><em>Unlimited</em> Bandwidth</li>
							<li><em>24/7</em> Support</li>
						</ul>
					</div> <!-- .hm-pricing-body -->

					<footer class="hm-pricing-footer">
						<a class="hm-select" href="#">Select</a>
					</footer>  <!-- .hm-pricing-footer -->
				</li>
			</ul> <!-- .hm-pricing-list -->

		</div> <!-- .hm-pricing-container -->
	</section>
	<!-- End Pricing Tables 4 -->


	<!-- Client Say 1 -->
	<section class="content_section">
		<div class="content row_spacer clearfix">
			<div class="main_title centered upper">
				<h2><span class="line"><i class="ico-comments-o"></i></span>Testimonials</h2>
			</div>
			<!-- Content Slider -->
			<div class="content_slider">
				<div class="content_slide clearfix">
					<div class="col-md-6">
						<div class="what_say_block">
							<span class="say_img"><a href="#"><img src="images/clients/team1-small.jpg" alt="Client Name"></a></span>
							<div class="say_datils">
								<h5>Alan Snow /<span>Client Job</span></h5>
								<span class="text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</span>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="what_say_block">
							<span class="say_img"><a href="#"><img src="images/clients/team2-small.jpg" alt="Client Name"></a></span>
							<div class="say_datils">
								<h5>John Doe /<span>Client Job</span></h5>
								<span class="text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</span>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="what_say_block">
							<span class="say_img"><a href="#"><img src="images/clients/team3-small.jpg" alt="Client Name"></a></span>
							<div class="say_datils">
								<h5>Harry John /<span>Client Job</span></h5>
								<span class="text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</span>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="what_say_block">
							<span class="say_img"><a href="#"><img src="images/clients/team4-small.jpg" alt="Client Name"></a></span>
							<div class="say_datils">
								<h5>Alan Snow /<span>Client Job</span></h5>
								<span class="text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</span>
							</div>
						</div>
					</div>
				</div>
				<div class="content_slide clearfix">
					<div class="col-md-6">
						<div class="what_say_block">
							<span class="say_img"><a href="#"><img src="images/clients/team1-small.jpg" alt="Client Name"></a></span>
							<div class="say_datils">
								<h5>Alan Snow /<span>Client Job</span></h5>
								<span class="text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</span>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="what_say_block">
							<span class="say_img"><a href="#"><img src="images/clients/team2-small.jpg" alt="Client Name"></a></span>
							<div class="say_datils">
								<h5>John Doe /<span>Client Job</span></h5>
								<span class="text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</span>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="what_say_block">
							<span class="say_img"><a href="#"><img src="images/clients/team3-small.jpg" alt="Client Name"></a></span>
							<div class="say_datils">
								<h5>Harry John /<span>Client Job</span></h5>
								<span class="text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</span>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="what_say_block">
							<span class="say_img"><a href="#"><img src="images/clients/team4-small.jpg" alt="Client Name"></a></span>
							<div class="say_datils">
								<h5>Alan Snow /<span>Client Job</span></h5>
								<span class="text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Content Slider -->
		</div>
	</section>
	<!-- End Client Say 1 -->

	<!-- Our Blog Grids -->
	<section class="content_section bg_gray">
		<div class="content row_spacer no_padding">
			<div class="main_title centered upper">
				<h2><span class="line"><i class="ico-pencil2"></i></span>From The Blog</h2>
			</div>

			<!-- Filter Content -->
			<div class="hm_filter_wrapper masonry_posts three_blocks">
				<ul class="hm_filter_wrapper_con">
			    		<li class="filter_item_block animated" data-animation-delay="300" data-animation="fadeInUp">
						<div class="blog_grid_block">
							<div class="blog_grid_desc">
								<h6 class="title"><a href="#">Awesome Gallery Post</a></h6>
							</div>
							<div class="feature_inner">
								<div class="feature_inner_corners">
									<div class="feature_inner_btns">
										<a href="#" class="expand_image"><i class="ico-maximize"></i></a>
										<a href="#" class="icon_link"><i class="ico-link3"></i></a>
									</div>
									<div class="porto_galla">
										<a href="images/blog/blog3.jpg" class="feature_inner_ling">
											<img src="images/blog/blog3.jpg" alt="Post Title">
										</a>
										<a href="images/blog/blog5.jpg" class="feature_inner_ling">
											<img src="images/blog/blog5.jpg" alt="Post Title">
										</a>
										<a href="images/blog/blog4.jpg" class="feature_inner_ling">
											<img src="images/blog/blog4.jpg" alt="Post Title">
										</a>
										<a href="images/blog/blog6.jpg" class="feature_inner_ling">
											<img src="images/blog/blog6.jpg" alt="Post Title">
										</a>
									</div>
								</div>
							</div>
							<div class="blog_grid_con">
								<a href="#" class="blog_grid_format"><i class="ico-gallery"></i></a>
								<span class="meta">
									<span class="meta_part">
										<a href="#">
											<i class="ico-clock7"></i>
											<span>February 15, 2015</span>
										</a>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-comment-o"></i>
											<span>45 Comments</span>
										</a>
									</span>
									<span class="meta_part">
										<i class="ico-folder-open-o"></i>
										<span>
											<a href="#">Photography</a>, <a href="#">Tutorials</a>
										</span>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-user5"></i>
											<span>John Doe</span>
										</a>
									</span>
								</span>
								<p class="desc">Lorem Ipsum is simply dummy text of the prine and typesetting industry Lorem Ipsum is simply dummy text of the prine and typesetting industry Lorem Ipsum.</p>
							</div>
						</div>
					</li><!-- Item -->
					<li class="filter_item_block animated" data-animation-delay="300" data-animation="fadeInUp">
						<div class="blog_grid_block">
							<div class="blog_grid_desc">
								<h6 class="title"><a href="#">Amazing standard post</a></h6>
							</div>
							<div class="feature_inner">
								<div class="feature_inner_corners">
									<div class="feature_inner_btns">
										<a href="#" class="expand_image"><i class="ico-maximize"></i></a>
										<a href="#" class="icon_link"><i class="ico-link3"></i></a>
									</div>
									<a href="images/team/member1.jpg" class="feature_inner_ling" data-rel="magnific-popup">
										<img src="images/team/member1.jpg" alt="Post Title">
									</a>
								</div>
							</div>
							<div class="blog_grid_con">
								<a href="#" class="blog_grid_format"><i class="ico-image4"></i></a>
								<span class="meta">
									<span class="meta_part">
										<a href="#">
											<i class="ico-clock7"></i>
											<span>February 15, 2015</span>
										</a>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-comment-o"></i>
											<span>41 Comments</span>
										</a>
									</span>
									<span class="meta_part">
										<i class="ico-folder-open-o"></i>
										<span>
											<a href="#">News</a>, <a href="#">Events</a>
										</span>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-user5"></i>
											<span>John Doe</span>
										</a>
									</span>
								</span>
								<p class="desc">Lorem Ipsum is simply dummy text of the prine and typesetting industry Lorem Ipsum is simply dummy text of the prine and typesetting industry Lorem Ipsum.</p>
							</div>
						</div>
					</li><!-- Item -->
					<li class="filter_item_block animated" data-animation-delay="300" data-animation="fadeInUp">
						<div class="blog_grid_block hosted_video_audio_con">
							<div class="blog_grid_desc">
								<h6 class="title"><a href="#">Self Hosted Audio</a></h6>
							</div>
							<div class="feature_inner no_corners">
								<div class="self_hosted_container">
									<audio class="hosted_audio" id="audio_player_1" width="100%" preload="metadata" controls="controls">
										<source src="http://www.enar.ideal-theme.com/html5/files/alro7-tasry.mp3" type="audio/mp3" />
									</audio>
								</div>
							</div>
							<div class="blog_grid_con">
								<a href="#" class="blog_grid_format"><i class="ico-pencil4"></i></a>
								<span class="meta">
									<span class="meta_part">
										<a href="#">
											<i class="ico-clock7"></i>
											<span>February 16, 2015</span>
										</a>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-comment-o"></i>
											<span>5 Comments</span>
										</a>
									</span>
									<span class="meta_part">
										<i class="ico-folder-open-o"></i>
										<span>
											<a href="#">Audio</a>, <a href="#">Music</a>
										</span>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-user5"></i>
											<span>John Doe</span>
										</a>
									</span>
								</span>
								<p class="desc">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
							</div>
						</div>
					</li><!-- Item -->
					<li class="filter_item_block animated" data-animation-delay="300" data-animation="fadeInUp">
						<div class="blog_grid_block">
							<div class="blog_grid_desc">
								<h6 class="title"><a href="#">My First Quote</a></h6>
							</div>
							<div class="feature_inner">
								<div class="feature_inner_corners">
									<!-- <div class="feature_inner_btns">
										<a href="#" class="expand_image"><i class="ico-maximize"></i></a>
										<a href="#" class="icon_link"><i class="ico-link3"></i></a>
									</div> -->
									<a href="#" class="quote_con">
										<span>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</span>
										<span class="quote_author">Mike Ehrmantraut</span>
									</a>
								</div>
							</div>
							<div class="blog_grid_con">
								<a href="#" class="blog_grid_format"><i class="ico-quote-right"></i></a>
								<span class="meta">
									<span class="meta_part">
										<a href="#">
											<i class="ico-clock7"></i>
											<span>February 19, 2015</span>
										</a>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-comment-o"></i>
											<span>7 Comments</span>
										</a>
									</span>
									<span class="meta_part">
										<i class="ico-folder-open-o"></i>
										<span>
											<a href="#">Articles</a>, <a href="#">Events</a>
										</span>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-user5"></i>
											<span>John Doe</span>
										</a>
									</span>
								</span>
								<p class="desc">Lorem Ipsum is simply dummy text of the prine and typesetting industry Lorem Ipsum is simply dummy text of the prine and typesetting industry Lorem Ipsum.</p>
							</div>
						</div>
					</li><!-- Item -->
					<li class="filter_item_block animated" data-animation-delay="300" data-animation="fadeInUp">
						<div class="blog_grid_block">
							<div class="blog_grid_desc">
								<h6 class="title"><a href="#">Standard Blog Post</a></h6>
							</div>
							<div class="feature_inner">
								<div class="feature_inner_corners">
									<div class="feature_inner_btns">
										<a href="#" class="expand_image"><i class="ico-maximize"></i></a>
										<a href="#" class="icon_link"><i class="ico-link3"></i></a>
									</div>
									<a href="{{ asset('assets/user') }}/images/team/member2.jpg" class="feature_inner_ling" data-rel="magnific-popup">
										<img src="{{ asset('assets/user') }}/images/team/member2.jpg" alt="Post Title">
									</a>
								</div>
							</div>
							<div class="blog_grid_con">
								<a href="#" class="blog_grid_format"><i class="ico-image4"></i></a>
								<span class="meta">
									<span class="meta_part">
										<a href="#">
											<i class="ico-clock7"></i>
											<span>February 22, 2015</span>
										</a>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-comment-o"></i>
											<span>19 Comments</span>
										</a>
									</span>
									<span class="meta_part">
										<i class="ico-folder-open-o"></i>
										<span>
											<a href="#">Photography</a>, <a href="#">Tutorials</a>
										</span>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-user5"></i>
											<span>John Doe</span>
										</a>
									</span>
								</span>
								<p class="desc">Lorem Ipsum is simply dummy text of the prine and typesetting industry Lorem Ipsum is simply dummy text of the prine and typesetting industry Lorem Ipsum.</p>
							</div>
						</div>
					</li><!-- Item -->
					<li class="filter_item_block animated" data-animation-delay="300" data-animation="fadeInUp">
						<div class="blog_grid_block">
							<div class="blog_grid_desc">
								<h6 class="title"><a href="#">SoundCloud Audio Post</a></h6>
							</div>
							<div class="feature_inner">
								<div class="feature_inner_corners">
									<div class="feature_inner_btns">
										<!-- <a href="#" class="expand_image"><i class="ico-maximize"></i></a> -->
										<a href="#" class="icon_link"><i class="ico-link3"></i></a>
									</div>
									<div class="embed-container">
										<iframe width="100%" style="overflow:hidden;border:none;" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/53909324&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
									</div>
								</div>
							</div>
							<div class="blog_grid_con">
								<a href="#" class="blog_grid_format"><i class="ico-sound3"></i></a>
								<span class="meta">
									<span class="meta_part">
										<a href="#">
											<i class="ico-clock7"></i>
											<span>February 23, 2015</span>
										</a>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-comment-o"></i>
											<span>15 Comments</span>
										</a>
									</span>
									<span class="meta_part">
										<i class="ico-folder-open-o"></i>
										<span>
											<a href="#">Media</a>, <a href="#">Music</a>
										</span>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-user5"></i>
											<span>John Doe</span>
										</a>
									</span>
								</span>
								<p class="desc">Lorem Ipsum is simply dummy text of the prine and typesetting industry prine.</p>
							</div>
						</div>
					</li><!-- Item -->
					<li class="filter_item_block animated" data-animation-delay="300" data-animation="fadeInUp">
						<div class="blog_grid_block">
							<div class="blog_grid_desc">
								<h6 class="title"><a href="#">Vimeo Video Post</a></h6>
							</div>
							<div class="feature_inner no_corners">
								<div class="feature_inner_corners">
									<!-- <div class="feature_inner_btns">
										<a href="#" class="expand_image"><i class="ico-maximize"></i></a>
										<a href="#" class="icon_link"><i class="ico-link3"></i></a>
									</div> -->
									<div class="embed-container">
										<iframe src="http://player.vimeo.com/video/29193046" width="100%" style="border: 0px none;" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
									</div>
								</div>
							</div>
							<div class="blog_grid_con">
								<a href="#" class="blog_grid_format"><i class="ico-video-camera"></i></a>
								<span class="meta">
									<span class="meta_part">
										<a href="#">
											<i class="ico-clock7"></i>
											<span>February 22, 2015</span>
										</a>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-comment-o"></i>
											<span>87 Comments</span>
										</a>
									</span>
									<span class="meta_part">
										<i class="ico-folder-open-o"></i>
										<span>
											<a href="#">Sports</a>, <a href="#">Summer</a>
										</span>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-user5"></i>
											<span>John Doe</span>
										</a>
									</span>
								</span>
								<p class="desc">Lorem Ipsum is simply dummy text of the prine and typesetting industry prine.</p>
							</div>
						</div>
					</li><!-- Item -->
				</ul>
			</div>
			<!-- End Filter Content -->
			<div class="centered">
				<a class="btn_c" href="#">
					<span class="btn_c_ic_a"><i class="ico-keyboard-arrow-right"></i></span>
					<span class="btn_c_t">See All Posts</span>
					<span class="btn_c_ic_b"><i class="ico-keyboard-arrow-right"></i></span>
				</a>
			</div>
		</div>
	</section>
	<!-- End Our Blog Grids -->

	<!-- Contact Us -->
	<section class="content_section">
		<div class="title_banner t_b_color3 upper centered">
			<div class="content">
				<h2>Contact Us</h2>
			</div>
		</div>
		<div class="content row_spacer no_padding">
			<div class="rows_container clearfix">
				<div class="col-md-6">
					<h2 class="title1 upper">Get On Touch</h2>
					<span class="spacer20"></span>

					<form class="hm_contact_form" id="contact-us-form" name="contact-us-form" action="php/phpmailer/sendemail.php" method="post">
						<div class="form_row clearfix">
							<label for="contact-us-name">
								<span class="hm_field_name">Name</span>
								<span class="hm_requires_star">*</span>
							</label>
							<input class="form_fill_fields hm_input_text" type="text" name="contact-us-name" id="contact-us-name" placeholder="Full Name" required>
						</div>
						<div class="form_row clearfix">
							<label for="contact-us-mail">
								<span class="hm_field_name">Email</span>
								<span class="hm_requires_star">*</span>
							</label>
							<input class="form_fill_fields hm_input_text" type="email" name="contact-us-mail" id="contact-us-mail" placeholder="mail@sitename.com" required>
						</div>
						<div class="form_row clearfix">
							<label for="contact-us-subject">
								<span class="hm_field_name">Subject</span>
							</label>
							<input class="form_fill_fields hm_input_text" type="text" name="contact-us-subject" id="contact-us-subject">
						</div>
						<div class="form_row clearfix">
							<label for="contact-us-message">
								<span class="hm_field_name">Message</span>
								<span class="hm_requires_star">*</span>
							</label>
							<textarea class="form_fill_fields hm_textarea" name="contact-us-message" id="contact-us-message" required></textarea>
						</div>
						<div class="form_row clearfix">
							<button type="submit" class="send_button full_button" name="contact-us-submit" id="contact-us-submit" value="submit">
								<i class="ico-check3"></i>
								<span>Send Your Message</span>
							</button>
						</div>
						<div class="form_row clearfix">
							<div id="form-messages"></div>
						</div>
						<div class="form_loader"></div>
					</form>
				</div><!-- Grid -->

				<div class="col-md-6">
					<h2 class="title1 upper">Locate Us on Map</h2>
					<span class="spacer20"></span>

					<div class="bordered_content with_text bordered">
						<div class="google_map" data-lat="-12.043333" data-long="-77.028333" data-text="Your location description 3">
						</div>
					</div>
					<span class="spacer10"></span>

                                        <h2 class="title1 upper">Contact Information</h2>
					<span class="c_detail">
						<span class="c_name">Address :</span>
						<span class="c_desc">34 Depot Street Massapequa, NY 11758</span>
					</span>
					<span class="c_detail">
						<span class="c_name">Phone :</span>
						<span class="c_desc">(305) 1234 5678 7891</span>
					</span>
					<span class="c_detail">
						<span class="c_name">Email :</span>
						<span class="c_desc">info@mail.com</span>
					</span>
					<span class="c_detail">
						<span class="c_name">Site :</span>
						<span class="c_desc">www.ideal-theme.com</span>
					</span>

				</div><!-- Grid -->
			</div>
		</div>
	</section>
	<!-- End Contact Us -->

	<!-- footer -->
	<footer id="footer">
		<div class="container row_spacer clearfix">
			<div class="rows_container clearfix">
				<div class="col-md-3">
					<div class="footer_row">
						<h6 class="footer_title">Company Info</h6>
						<img alt="Enar" src="{{ asset('assets/user') }}/images/logo-light.png">
						<span class="footer_desc">
							There are many  Purchase Now There are many variations of passages of Lorem Ipsum available, but the majority.
						</span>
						<a href="#" class="black_button">
							<i class="ico-angle-right"></i><span>Read More</span>
						</a>
					</div>
					<div class="footer_row">
						<h6 class="footer_title">Newsletter Signup</h6>
						<span class="footer_desc">
							By subscribing to our mailing list you will always be update with the latest news :
						</span>
						<form id="newsletter_form" class="newsletter_form" action="php/mailchimp/subscribe.php" method="post">
							<div class="newsletter_con">
								<input class="subscribe-mail" name="subscribe-mail" id="subscribe-mail" type="email" placeholder="Your Email Here ..." required>
								<button type="submit" name="submit" class="newsletter_button">
									<i class="subscribe_true ico-check3"></i>
									<i class="subscribe_btn ico-send-o"></i>
									<i class="refresh_loader ico-refresh4"></i>
								</button>
							</div>
							<div id="subscribe_output"></div>
						</form>
					</div>
				</div><!-- Grid -->

				<div class="col-md-3">
					<div class="footer_row">
						<h6 class="footer_title">Recent Posts</h6>
						<ul class="recent_posts_list">
							<li class="clearfix">
								<a href="#">
									<span class="recent_posts_img"><img src="{{ asset('assets/user') }}/images/blog/thumb1.jpg" alt="Post Title"></span>
									<span>Best HTML5 Theme</span>
								</a>
								<span class="recent_post_detail">2015/01/23</span>
								<span class="recent_post_detail">Tutorials, Videos</span>
							</li>
							<li class="clearfix">
								<a href="#">
									<span class="recent_posts_img"><img src="{{ asset('assets/user') }}/images/blog/thumb2.jpg" alt="Post Title"></span>
									<span>Responseve Design</span>
								</a>
								<span class="recent_post_detail">2015/02/17</span>
								<span class="recent_post_detail">Audio, Videos</span>
							</li>
							<li class="clearfix">
								<a href="#">
									<span class="recent_posts_img"><img src="{{ asset('assets/user') }}/images/blog/thumb3.jpg" alt="Post Title"></span>
									<span>Many Home Pages</span>
								</a>
								<span class="recent_post_detail">2015/02/17</span>
								<span class="recent_post_detail">Tutorials, Design</span>
							</li>
							<li class="clearfix">
								<a href="#">
									<span class="recent_posts_img"><img src="{{ asset('assets/user') }}/images/blog/thumb4.jpg" alt="Post Title"></span>
									<span>Best HTML5 Theme</span>
								</a>
								<span class="recent_post_detail">2015/01/23</span>
								<span class="recent_post_detail">Tutorials, Videos</span>
							</li>
						</ul>
						<a href="#" class="arrow_button full_width">
							<span>
								<i class="ico-arrow-forward"></i>
								<span>Read More Posts</span>
								<i class="ico-arrow-forward"></i>
							</span>
						</a>
					</div>
				</div><!-- Grid -->

				<div class="col-md-3">
					<div class="footer_row">
						<h6 class="footer_title">Cloud Tags</h6>
						<div class="tagcloud clearfix">
							<a href="#"><span class="tag">Wordpress</span></a>
							<a href="#"><span class="tag">Creative</span></a>
							<a href="#"><span class="tag">CSS3</span></a>
							<a href="#"><span class="tag">Design</span></a>
							<a href="#"><span class="tag">Graphic</span></a>
							<a href="#"><span class="tag">HTML5</span></a>
							<a href="#"><span class="tag">SEO</span></a>
							<a href="#"><span class="tag">CSS3</span></a>
                                                        <a href="#"><span class="tag">Web Design</span></a>
						</div>
					</div>
					<div class="footer_row">
						<h6 class="footer_title">Flicker Widget</h6>
						<div class="flickr_widget_block clearfix">
							<span class="flickr_badge_image">
								<a href="#">
									<img src="{{ asset('assets/user') }}/images/flicker/flicker1.jpg" alt="Image Name" title="Flicker Image">
								</a>
							</span>
							<span class="flickr_badge_image">
								<a href="#">
									<img src="{{ asset('assets/user') }}/images/flicker/flicker2.jpg" alt="Image Name" title="Flicker Image">
								</a>
							</span>
							<span class="flickr_badge_image">
								<a href="#">
									<img src="{{ asset('assets/user') }}/images/flicker/flicker3.jpg" alt="Image Name" title="Flicker Image">
								</a>
							</span>
							<span class="flickr_badge_image">
								<a href="#">
									<img src="{{ asset('assets/user') }}/images/flicker/flicker4.jpg" alt="Image Name" title="Flicker Image">
								</a>
							</span>
							<span class="flickr_badge_image">
								<a href="#">
									<img src="{{ asset('assets/user') }}/images/flicker/flicker5.jpg" alt="Image Name" title="Flicker Image">
								</a>
							</span>
							<span class="flickr_badge_image">
								<a href="#">
									<img src="{{ asset('assets/user') }}/images/flicker/flicker6.jpg" alt="Image Name" title="Flicker Image">
								</a>
							</span>
						</div>
					</div>
				</div><!-- Grid -->

				<div class="col-md-3">
					<div class="footer_row">
						<h6 class="footer_title">Best Author</h6>
						<div class="about_author clearfix">
							<a href="#" class="about_author_link">
								<img src="{{ asset('assets/user') }}/images/clients/team2-medium.jpg" alt="Author Name">
								<span>John Doe</span>
							</a>
							<div class="social_media clearfix">
								<a class="twitter" target="_blank" href="#">
									<i class="ico-twitter4"></i>
								</a>
								<a class="facebook" target="_blank" href="#">
									<i class="ico-facebook4"></i>
								</a>
								<a class="googleplus" target="_blank" href="#">
									<i class="ico-google-plus"></i>
								</a>
								<a class="linkedin" target="_blank" href="#">
									<i class="ico-linkedin3"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="footer_row">
						<h6 class="footer_title">Custom Video</h6>
						<a class="hm_vid_con popup-vimeo" href="http://vimeo.com/29193046">
							<span class="vid_icon"><i class="ico-play5"></i></span>
							<img alt="Video Title" src="{{ asset('assets/user') }}/images/blog/blog5.jpg">
						</a>
					</div>
				</div><!-- Grid -->
			</div>
		</div>
		<div class="footer_copyright">
			<div class="container clearfix">
				<div class="col-md-6">
					<span class="footer_copy_text">Copyright &copy; 2015 Powered By <a href="#">IdealTheme</a> - <a href="#">Enar Theme</a> - All Rights Reserved</span>
				</div>
				<div class="col-md-6 clearfix">
					<ul class="footer_menu clearfix">
						<li><a href="#"><span>Home</span></a></li>
						<li>/</li>
						<li><a href="#"><span>About Us</span></a></li>
						<li>/</li>
						<li><a href="#"><span>Help Center</span></a></li>
						<li>/</li>
						<li><a href="#"><span>Contact Us</span></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- End footer -->
	<a href="#0" class="hm_go_top"></a>
</div>
<!-- End wrapper -->

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="{{ asset('assets/user') }}/js/jquery.js"><\/script>')</script>
<script src="{{ asset('assets/user') }}/js/plugins.js"></script>
<script src="{{ asset('assets/user') }}/js/jquery.themepunch.tools.min.js"></script>
<script src="{{ asset('assets/user') }}/js/jquery.themepunch.revolution.min.js"></script>
<script src="{{ asset('assets/user') }}/js/mediaelement-and-player.min.js"></script>
<script src="{{ asset('assets/user') }}/js/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3&amp;sensor=true"></script>
<script src="{{ asset('assets/user') }}/js/gmaps.js"></script>
<!-- this is where we put our custom functions -->
<script type="text/javascript" src="{{ asset('assets/user') }}/js/functions.js"></script>
</body>
</html>
