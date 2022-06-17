<!doctype html>
<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
    <link
        href='http://fonts.googleapis.com/css?family=Lato:300,300italic,400italic,600,600italic,700,700italic,800,800italic'
        rel='stylesheet' type='text/css'>
    <link
        href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
        rel='stylesheet' type='text/css'>

</head>

<!-- Class ( site_boxed - dark - preloader1 - preloader2 - preloader3 - light_header - dark_sup_menu - menu_button_mode - transparent_header - header_on_side ) -->

<body class="preloader3 light_header">
    <div id="preloader">
        <div class="spinner">
            <div class="sk-dot1"></div>
            <div class="sk-dot2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
    </div>

    <div id="main_wrapper">
        <header id="site_header">
            <div class="topbar">
                <!-- class ( topbar_colored  ) -->
                <div class="content clearfix">

                    <div class="top_details clearfix f_left">

                        <span><i class="icon ico-phone5"></i><span class="title">Call Us :</span> +62
                            896-3676-6724</span>
                        <span><i class="icon ico-comment2"></i><span class="title">Support :</span> +62
                            896-3676-6724</span>
                    </div>

                    <div class="top-socials box_socials f_right">
                        <a href="https://web.facebook.com/ruanginternasionalofficial/" target="_blank">
                            <span class="soc_name">Facebook</span>
                            <span class="soc_icon_bg"></span>
                            <i class="ico-facebook4"></i>
                        </a>
                        <a href="https://twitter.com/ruanginternasio" target="_blank">
                            <span class="soc_name">Twitter</span>
                            <span class="soc_icon_bg"></span>
                            <i class="ico-twitter4"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/ruang-internasional/" target="_blank">
                            <span class="soc_name">LinkedIn</span>
                            <span class="soc_icon_bg"></span>
                            <i class="ico-linkedin3"></i>
                        </a>
                        <a href="https://vt.tiktok.com/ZSdUuto4T/" target="_blank">
                            <span class="soc_name">TikTok</span>
                            <span class="soc_icon_bg"></span>
                            <i class="fa-brands fa-tiktok"></i>
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
                        <a href="{{ route('home') }}">
                            {{-- <img class="logo_dark" src="{{ asset('assets/user') }}/images/logo/ri.jpg" alt="Enar Logo" style="height: 200px"> --}}
                            <img class="img-fluid" src="{{ asset('assets/user') }}/images/logo/ri.jpg"
                                alt="Enar Logo" style="height: 200px">
                        </a>
                    </div>


                    <nav id="main_nav">
                        <div id="nav_menu">
                            <span class="mobile_menu_trigger">
                                <a href="#" class="nav_trigger"><span></span></a>
                            </span>
                            <ul id="navy" class="clearfix">
                                <li
                                    class="normal_menu mobile_menu_toggle {{ $var == 'home' ? 'current_page_item' : '' }}">
                                    <a href="{{ route('home') }}"><span>Home</span></a>

                                </li>
                                <li
                                    class="normal_menu mobile_menu_toggle {{ $var == 'about' ? 'current_page_item' : '' }}">
                                    <a href="#"><span>About</span></a>
                                    <ul>
                                        <li class="normal_menu"><a href="{{ route('about') }}">About Us</a></li>
                                        <li class="normal_menu"><a href="{{ route('team') }}">About Me</a></li>




                                    </ul>
                                </li>
                                <li
                                    class="has_tab_menu mobile_menu_toggle {{ $var == 'gallery' ? 'current_page_item' : '' }}">
                                    <a href="{{ route('our-gallery') }}"><span>Gallery</span></a>

                                </li>
                                <li
                                    class="normal_menu mobile_menu_toggle {{ $var == 'post' ? 'current_page_item' : '' }}">
                                    <a href="{{ route('post') }}"><span>Blogs</span></a>

                                </li>
                                <li
                                    class="has_tab_menu mobile_menu_toggle {{ $var == 'contact' ? 'current_page_item' : '' }}">
                                    <a href="{{ route('contact') }}"><span>Contact Us</span></a>

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



        @yield('slider')

        @yield('content-user')



        <!-- footer -->
        <footer id="footer" style="margin-top: 30px">
            <div class="container row_spacer clearfix">
                <div class="rows_container clearfix">
                    <div class="col-md-6">
                        <div class="footer_row">
                            <h6 class="footer_title">RUANG INTERNASIONAL</h6>
                            <img alt="Enar" src="{{ asset('assets/user') }}/images/logo/ri.jpg">
                            <span class="footer_desc">
                                Ruang Internasional, founded on December 19, 2019, is the # 1 Anti-Mainstream Youth
                                Organization in Indonesia, which was born from the anxiety of some Indonesian youths
                                about efforts to humanize and empower youth to become critical, creative, and active
                            </span>
                            <a href="{{ route('about') }}" class="black_button">
                                <i class="ico-angle-right"></i><span>Read More</span>
                            </a>
                        </div>
                        {{-- <div class="footer_row">
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
					</div> --}}
                    </div><!-- Grid -->

                    <div class="col-md-3">
                        <div class="footer_row">
                            <h6 class="footer_title">USEFUL LINKS</h6>
                            {{-- <ul class="recent_posts_list">
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
						</ul> --}}
                            <ul class="list1 gray clearfix">
                                <li><a href="{{ route('about') }}"> About</a>
                                </li>
                                <li><a href="{{ route('our-gallery') }}"> Gallery</a>
                                </li>
                                <li><a href="{{ route('post') }}"> Blog</a>
                                </li>
                                <li><a href="{{ route('contact') }}"> Contact Us</a>
                                </li>

                            </ul>
                            {{-- <a href="#" class="arrow_button full_width">
							<span>
								<i class="ico-arrow-forward"></i>
								<span>Read More Posts</span>
								<i class="ico-arrow-forward"></i>
							</span>
						</a> --}}
                        </div>
                    </div><!-- Grid -->

                    <div class="col-md-3">
                        <div class="footer_row">
                            <h6 class="footer_title">Media Sosial</h6>
                            <div class="social_media clearfix">
                                <a class="twitter" target="_blank" href="https://twitter.com/ruanginternasio">
                                    <i class="ico-twitter4"></i>
                                </a>
                                <a class="facebook" target="_blank"
                                    href="https://web.facebook.com/ruanginternasionalofficial/">
                                    <i class="ico-facebook4"></i>
                                </a>
                                <a class="linkedin" target="_blank"
                                    href="https://www.linkedin.com/company/ruang-internasional/">
                                    <i class="ico-linkedin3"></i>
                                </a>
                                <a class="tiktok" target="_blank" href="https://vt.tiktok.com/ZSdUuto4T/">
                                    <i class="fa-brands fa-tiktok"></i>
                                </a>
                                {{-- <a class="facebook" target="_blank" href="https://www.instagram.com/azhar_arsyad_sh">
                                <i class="fab fa-instagram"></i>
                            </a> --}}
                            </div>
                        </div>
                        <div class="footer_row">
                            <ul class="recent_posts_list">
                                <li class="c_con clearfix">
                                    <i class="icon ico-location5"></i> <span class="c_desc">Jl. Perindustrian IV
                                        No. 20, Kebon Pala, Jakarta Timur, DKI Jakarta.</span>
                                </li>
                                <li class="c_con clearfix">
                                    <i class="icon ico-phone5"></i> <span class="c_desc">+62
                                        896-3676-6724</span>
                                </li>
                                <li class="c_con clearfix">
                                    <i class="icon ico-paperplane"></i> <span
                                        class="c_desc">ruanginternasional.id@gmail.com
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>
            <div class="footer_copyright">
                <div class="container clearfix">
                    <div class="col-md-12 centered">
                        <span class="footer_copy_text">Copyright &copy; {{ date('Y') }} Powered By <a
                                href="#">Ruang Internasional</a> - All Rights Reserved</span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End footer -->
        <a href="https://cutt.ly/vGh57OY" target="_blank" class="hm_go_top"></a>
    </div>
    <!-- End wrapper -->

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
        window.jQuery || document.write(
            '<script src="{{ asset('
                                                                                                                                                                                                        			assets / user ') }}/js/jquery.js"><\/script>'
        );
    </script>
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
