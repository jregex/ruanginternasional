@extends('layouts.main-user')

@section('slider')
    <!-- Slider Revolution -->
    <div class="tp-banner-container">
        <div class="tp-banner-panzoom-fullscreen">
            <ul>
                <li data-transition="fade" data-slotamount="1" data-masterspeed="1500"
                    data-thumb="{{ asset('assets/user') }}/images/logo/gambarawal1.jpg" data-delay="13000"
                    data-saveperformance="off" data-title="Slide Title">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('assets/user') }}/images/logo/gambarawal1.jpg" alt="kenburns1"
                        data-bgposition="top right" data-kenburns="on" data-duration="14000" data-ease="Linear.easeNone"
                        data-bgfit="100" data-bgfitend="150" data-bgpositionend="bottom left">
                    <!-- LAYERS -->

                    <div class="tp-caption oswald_font ren_num_a sfb fadeout tp-resizeme rs-parallaxlevel-2" data-x="15"
                        data-hoffset="0" data-y="center" data-voffset="-150" data-speed="1000" data-start="1400"
                        data-easing="Power4.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05"
                        data-endelementdelay="0.1" data-endspeed="1000" data-endeasing="Power1.easeOut"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">
                        #1
                    </div>
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption oswald_font upper reddishbg_heavy_80 lfr fadeout tp-resizeme rs-parallaxlevel-2"
                        data-x="15" data-hoffset="0" data-y="250" data-voffset="-55" data-speed="1000" data-start="800"
                        data-easing="Power4.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05"
                        data-endelementdelay="0.1" data-endspeed="1000" data-endeasing="Power1.easeOut"
                        style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">
                        Anti-Mainstream Youth Empowerment <br> Organization in Indonesia
                    </div>


                </li>

                <li data-transition="slideup" data-slotamount="1" data-masterspeed="1500"
                    data-thumb="{{ asset('assets/user') }}/images/foto/foto90.jpg" data-delay="15000"
                    data-saveperformance="off" data-title="Slide Title">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('assets/user') }}/images/foto/foto90.jpg" alt="kenburns4"
                        data-bgposition="right bottom" data-kenburns="on" data-duration="16000" data-ease="Linear.easeNone"
                        data-bgfit="100" data-bgfitend="100" data-bgpositionend="left top">
                    <!-- LAYERS -->

                    <!-- LAYER NR. 2 -->
                    {{-- <div class="tp-caption white_heavy_70 oswald_font tp-fade fadeout tp-resizeme rs-parallaxlevel-2"
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
            </div> --}}

                    <!-- LAYER NR. 4 -->
                    {{-- <div class="tp-caption light_medium_20 tp-fade fadeout tp-resizeme rs-parallaxlevel-2"
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
            </div> --}}
                </li>
            </ul>
            <div class="tp-bannertimer"></div>
        </div>
    </div>
    <!-- End Slider Revolution -->
@endsection

@section('content-user')
    <!-- Features Slider 1-->
    {{-- about us --}}
    {{-- <section class="content_section">

        <div class="content row_spacer clearfix">

            <div class="main_title centered upper">
                <h2><span class="line"><span class="dot"></span></span>About Us</h2>
            </div>

            <span class="title1 centered">Ruang Internasional, founded on December 19, 2019, is the # 1
                Anti-Mainstream Youth Organization in Indonesia, which was born from the anxiety of some Indonesian youths
                about efforts to humanize and empower youth to become critical, creative, and active individuals in applying
                and developing their abilities to be able to participate and contribute in the midst of a global society
                both directly and through other contemporary platforms as a form of youth response to developments in
                science and technology.</span>



        </div>

    </section> --}}
    <!-- End Features Slider 1 -->
    {{-- about us --}}



    <!-- Section -->
    <section class="content_section">
        <div class="content row_spacer no_padding">
            <div class="rows_container clearfix">

                <div class="col-md-6">

                    <h6 class="title2">Become a Home of Youth Empowerment in Asia that support Youth Activities and
                        Create Agent of Change in the midst of Global Society.
                    </h6>

                    <ul class="list3 gray clearfix">
                        <h3 class="title1 upper">Mission of our society</h3>
                        <li>We facilitate youth empowerment activities to develop youth capacities
                        </li>
                        <li>We promote youth activities in writing, public speaking, leadership, research, mentoring,
                            voluuntering, entrepreneurship, and global youth relationship
                        </li>
                        <li>We teach and train youth to be think critically and creatively
                        </li>
                        <li>We develop any strategic program, both local, national, regional, and international level
                        </li>
                        <li>We facilitate career journey and best experiences in organization
                        </li>
                        <li>We facilitate special opportunities to show the youth talents</li>
                        <li>We preparing the youth to be a professional people in the future</li>

                    </ul>

                </div><!-- Grid 6 -->

                <div class="col-md-6">
                    <img class="img" src="{{ asset('assets/user') }}/images/logo/gambar1.jpg" alt="Mission">
                </div><!-- Grid 6 -->

            </div>
        </div>
    </section>
    <!-- End Section -->

    <!-- Our Team 2 -->
    <section class="content_section bg_color11">
        <div class="content row_spacer no_padding">
            <div class="rows_container clearfix">
                <div class="col-md-6">
                    <span class="spacer30"></span>
                    <img class="img" src="{{ asset('assets/user') }}/images/logo/gambar2.png"
                        alt="Our Background">
                </div>
                <div class="col-md-6">
                    <h2 class="title1 title_color1 upper">Our Background</h2>
                    <p>Ruang Internasional was established on December 19th, 2019 as an
                        #1 Anti-Mainstream Youth Empowerment Organization in Indonesia that was born from the anxiety of
                        some Indonesian youths in an effort to humanize and empower youth to be critical, creative, and
                        active in applying and developing their abilities to be able to play a role and contribute in the
                        midst of global society, both directly or through other contemporary platforms as a form of youth's
                        response to the development of science and technology. Until now, Ruang Internasional continues to
                        develop with several approaches that focus on the fields of youth empowerment, both writing, public
                        speaking, leadership, entrepreneur, social entreprise, volunteering, and global youth
                        relationships..........
                    </p>
                </div>

            </div>
        </div>
    </section>
    <!-- End Our Team 2 -->

    {{-- program & activitys --}}
    <section class="content_section border_b_n clearfix">
        <div class="container icons_spacer">
            <div class="main_title centered upper">
                <h2><span class="line"><span class="dot"></span></span>Program & Activities</h2>

            </div>
            <div class="icon_boxes_con style1 upper_title">
                <div class="col-md-3">
                    <div class="service_box ">
                        <span class="icon"><i class="ico-tools-2"></i></span>
                        <div class="service_box_con">
                            <h3>R.I Writing Moment (RIWM)</h3>
                            <span class="desc">RIWM is a youth empowerment program through writing activities run
                                by all members of the organization in accordance with the ongoing quarterly themes and
                                selected topics. This article will be reviewed and edited by the team which will then be
                                published in online or print media.</span>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="service_box">
                        <span class="icon"><i class="ico-mobile4"></i></span>
                        <div class="service_box_con">
                            <h3>R.I Internal Discussion (RIID)</h3>
                            <span class="desc">RIID is an internal discussion activity involving all members of
                                the organization to brainstorm the issues raised during the current quarter. This activity
                                has a topic that will be raised by each member of the organization into writing,
                                seminars/talkshows, and social activities.</span>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="service_box">
                        <span class="icon"><i class="ico-heart5"></i></span>
                        <div class="service_box_con">
                            <h3>R.I Webinar & Talkshow (RIWT)</h3>
                            <span class="desc">RIWT is an example of RIID that spawned several webinars and
                                talkshows packed antimainstream, current, and millennial-friendly consisting of 3 keynote
                                speakers with general concepts or can also be with special concepts (Junior: high school
                                students/vocational students equivalent, Seniors: D3/S1 students, Professionals:
                                practitioners/entrepreneurs/young career workers) and 1 additional speaker (young
                                dropout/person with special needs).</span>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="service_box">
                        <span class="icon"><i class=" ico-key4"></i></span>
                        <div class="service_box_con">
                            <h3>R.I Creative Event (RICE)</h3>
                            <span class="desc">RICE is a program or activity organized based on creative ideas
                                and
                                strategic ideas that target young people and the general public, through online/offline
                                campaigns about various things in various places and involving many people.</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="service_box">
                        <span class="icon"><i class="ico-tools-2"></i></span>
                        <div class="service_box_con">
                            <h3>R.I Join Activities (RIJA)</h3>
                            <span class="desc">RIJA is a collaboration program with several communities /
                                organizations / companies / government agencies that give birth or support the birth and
                                running of positive activities that impact many people and involve youth as actors.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="service_box">
                        <span class="icon"><i class=" ico-mobile4"></i></span>
                        <div class="service_box_con">
                            <h3>R.I Workshop/Training (RIWT)</h3>
                            <span class="desc">RIWT is a program of coaching and training as a form of
                                empowerment
                                to all young people, especially in the field of writing, public speaking, and leadership to
                                be able to develop their capacity according to the type of workshops and training that run.
                            </span>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="service_box">
                        <span class="icon"><i class=" ico-heart5"></i></span>
                        <div class="service_box_con">
                            <h3>R.I Lecture/Teacher Class & Mentoring (RILTCM)</h3>
                            <span class="desc">RILTCM is a special program in the form of casual classes/lectures
                                by bringing in speakers in the form of teachers or lecturers related to the issues raised.
                            </span>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="service_box">
                        <span class="icon"><i class="ico-key4"></i></span>
                        <div class="service_box_con">
                            <h3>R.I Global Circle's (RIGC)</h3>
                            <span class="desc">RIGC is a program of networking and connectivity of youth in
                                Indonesia and internationally to be able to jointly make a sustainable educational movement
                                by using social media platforms.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- membership --}}
    <section class="content_section bg_gray border_b_n border_t_n">
        <div class="content row_spacer">
            <div class="main_title centered upper">
                <h2><span class="line"><span class="dot"></span></span>The Empowerment Focus</h2>
            </div>
            <ul class="tree_features clearfix row_spacer">
                <li data-bgcolor="#0072A5" style="background-color: rgb(0, 114, 165);">
                    <span class="leaf_icon"><i class="fa-solid fa-pencil fa-2x"></i></span>
                    <div class="leaf_con align-items-center">
                        <h5 class="tree_features_t">Writing</h5>

                    </div>
                    <span class="tree_curv" style="background-color: rgb(0, 114, 165);"></span>
                </li>
                <li data-bgcolor="#4D4294" style="background-color: rgb(77, 66, 148);">
                    <span class="leaf_icon"><i class="fa-brands fa-speakap fa-2x"></i></span>
                    <div class="leaf_con align-items-center">
                        <h5 class="tree_features_t">Public Speaking</h5>
                    </div>
                    <span class="tree_curv" style="background-color: rgb(77, 66, 148);"></span>
                </li>
                <li data-bgcolor="#F36A71" style="background-color: rgb(243, 106, 113);">
                    <span class="leaf_icon"><i class="fa-solid fa-user-tie fa-2x"></i></span>
                    <div class="leaf_con align-items-center">
                        <h5 class="tree_features_t">Leadership</h5>
                    </div>
                    <span class="tree_curv" style="background-color: rgb(243, 106, 113);"></span>
                </li>
                <li data-bgcolor="#B853A3" style="background-color: rgb(184, 83, 163);">
                    <span class="leaf_icon"><i class="fa-solid fa-person-military-pointing fa-2x fa-2x"></i></span>
                    <div class="leaf_con align-items-center">
                        <h5 class="tree_features_t">Mentoring</h5>
                    </div>
                    <span class="tree_curv" style="background-color: rgb(184, 83, 163);"></span>
                </li>
                <li data-bgcolor="#0CAEBF" style="background-color: rgb(12, 174, 191);">
                    <span class="leaf_icon"><i class="fa-solid fa-magnifying-glass fa-2x"></i></span>
                    <div class="leaf_con align-items-center">
                        <h5 class="tree_features_t">Research</h5>
                    </div>
                    <span class="tree_curv" style="background-color: rgb(12, 174, 191);"></span>
                </li>
                <li data-bgcolor="#1BBC9B" style="background-color: rgb(27, 188, 155);">
                    <span class="leaf_icon"><i class="fa-solid fa-child-reaching fa-2x"></i></span>
                    <div class="leaf_con align-items-center">
                        <h5 class="tree_features_t">Global Youth Relationship</h5>
                    </div>
                    <span class="tree_curv" style="background-color: rgb(27, 188, 155);"></span>
                </li>
                <li data-bgcolor="#4D4294" style="background-color: rgb(106, 148, 66);">
                    <span class="leaf_icon"><i class="fa-solid fa-business-time fa-2x"></i></span>
                    <div class="leaf_con align-items-center">
                        <h5 class="tree_features_t">Enterpreneurship</h5>
                    </div>
                    <span class="tree_curv" style="background-color: rgb(33, 0, 247);"></span>
                </li>
            </ul>
            {{-- <div class="centered">
            <img class="tree_features_parent" src="images/icons/archive2.svg" alt="Image Title">
        </div> --}}
        </div>
    </section>

    {{-- end membership --}}



    {{-- galeri --}}
    <!-- Isotope Filter 1 four columns full without padding -->
    <section class="content_section border_b_n">
        <div class="row_spacer_t clearfix row_spacer no_padding">

            <div class="content">
                <div class="main_title centered upper">
                    <h2><span class="line"><i class="ico-wallet-travel"></i></span>Our Gallery</h2>
                </div>
            </div>

            <!-- Filter Content -->
            <div
                class="hm_filter_wrapper four_blocks project_text_nav full_portos no_sapce_portos nav_in_center upper_title porto_hidden_title">

                <div class="hm_filter_wrapper_con">

                    @foreach ($subgalleries as $item)
                        <div class="filter_item_block {{ $item->kategori }}">
                            <div class="porto_block">
                                <div class="porto_type">
                                    <a data-rel="magnific-popup"
                                        href="{{ asset('storage/gallery') }}/{{ $item->nama_file }}">
                                        <img src="{{ asset('storage/gallery') }}/{{ $item->nama_file }}"
                                            alt="{{ $item->nama }}">
                                    </a>
                                    <div class="porto_nav">
                                        <a href="#" class="icon_expand"><span><i class="ico-maximize"></i></span></a>

                                    </div>
                                </div>
                                <div class="porto_desc">
                                    <h6 class="name">{{ $item->nama }}</h6>
                                    <div class="porto_meta clearfix">
                                        <span
                                            class="porto_date">{{ date('l, d F Y', strtotime($item->tgl_upload)) }}</span>

                                    </div>
                                </div>
                            </div>
                        </div><!-- Item -->
                    @endforeach

                </div>
            </div>
            <!-- End Filter Content -->

            <div class="centered">
                <a class="btn_c" href="{{ route('our-gallery') }}">
                    <span class="btn_c_ic_a"><i class="ico-refresh4"></i></span>
                    <span class="btn_c_t">Load More</span>
                    <span class="btn_c_ic_b"><i class="ico-refresh4"></i></span>
                </a>
            </div>
        </div>


    </section>
    <!-- End Isotope Filter 1 four columns full without padding -->
    {{-- end galeri --}}




    <!-- testimoni -->
    <section class="content_section bg_color11">
        <div class="content row_spacer clearfix">
            <div class="main_title centered upper">
                <h2><span class="line"></span>Testimonials</h2>
            </div>
            <div class="normal_text_slider client_say_slider">
                <div class="c_say">
                    <div class="centered">
                        <span class="client_img">
                            <img src="{{ asset('assets/user') }}/images/foto/team2.png" height="100">
                        </span>
                    </div>
                    <span class="client_details">
                        <span class="name">Indah Septika Dwirahayu Bu'ulolo</span>

                    </span>
                    <span class="desc" style="color: #3d3d3d">
                        Ruang Internasional adalah wadah yang baik bagi para pemuda dari kalangan manapun untuk menggali
                        potensi diri dengan konsep pemberdayaan. Ruang Internasional menampung setiap aspirasi pemuda dalam
                        kemasan kegiatan pemuda yang digarap aktif dengan perkembangan zaman.</span>
                </div>

            </div>
        </div>
    </section>
    <!-- End testimoni -->


    <!-- Our Blog Grids -->
    <section class="content_section bg_gray border_b_n">
        <div class="content row_spacer no_padding">
            <div class="main_title centered upper">
                <h2><span class="line"><i class="ico-pencil2"></i></span>From The Blog</h2>
            </div>

            <!-- Filter Content -->
            <div class="hm_filter_wrapper masonry_posts three_blocks">
                <ul class="hm_filter_wrapper_con">

                    @foreach ($posts as $item)
                        <li class="filter_item_block animated" data-animation-delay="300" data-animation="fadeInUp">
                            <div class="blog_grid_block">
                                <div class="blog_grid_desc">
                                    <h6 class="title"><a href="#">{{ $item->title }}</a></h6>
                                </div>
                                <div class="feature_inner">
                                    <div class="feature_inner_corners">
                                        <div class="feature_inner_btns">
                                            <a href="#" class="expand_image"><i class="ico-maximize"></i></a>
                                            <a href="#" class="icon_link"><i class="ico-link3"></i></a>
                                        </div>
                                        <a href="{{ asset('storage/post') }}/{{ $item->gambar }}"
                                            class="feature_inner_ling" data-rel="magnific-popup">
                                            <img src="{{ asset('storage/post') }}/{{ $item->gambar }}"
                                                alt="Post Title">
                                        </a>
                                    </div>
                                </div>
                                <div class="blog_grid_con">
                                    <span class="meta">
                                        <span class="meta_part">
                                            <i class="ico-clock7"></i>
                                            <span>{{ date('l, d F Y', strtotime($item->created_at)) }}</span>
                                        </span>
                                        <span class="meta_part">
                                            <i class="ico-folder-open-o"></i>
                                            <span>{{ $item->category->category }}
                                            </span>
                                        </span>
                                        <span class="meta_part">
                                            <i class="ico-user5"></i>
                                            <span>{{ $item->penulis }}</span>
                                        </span>
                                    </span>
                                    <p class="desc">{{ Str::limit(strip_tags($item->body), 40, '...') }}</p>
                                </div>
                            </div>
                        </li><!-- Item -->
                    @endforeach
                </ul>
            </div>
            <!-- End Filter Content -->
            <div class="centered">
                <a class="btn_c" href="{{ route('post') }}">
                    <span class="btn_c_ic_a"><i class="ico-keyboard-arrow-right"></i></span>
                    <span class="btn_c_t">See All Posts</span>
                    <span class="btn_c_ic_b"><i class="ico-keyboard-arrow-right"></i></span>
                </a>
            </div>
        </div>
    </section>
    <!-- End Our Blog Grids -->

    <section class="content_section white_section bg_color2 bg_gray border_b_n row_spacer">
        <div class="main_title centered upper">
            <h2><span class="line"></span>Global Reach</h2>
        </div>
        <div class="content">
            <div class="counter_a clearfix row_spacer">
                <div class="col-md-3">
                    <div class="counter animated fadeInDown visible" data-animation="fadeInDown"
                        data-animation-delay="300">
                        <span class="icon"><i class="fa-solid fa-globe"></i></span>
                        <span class="value" data-speed="4000" data-from="0" data-to="2">2</span>
                        <span class="title">Countries Representative</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="counter animated fadeInDown visible" data-animation="fadeInDown"
                        data-animation-delay="600">
                        <span class="icon"><i class="fa-solid fa-building-user"></i></span>
                        <span class="value" data-speed="4000" data-from="0" data-to="6">6</span>
                        <span class="title">Provincial Representative</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="counter animated fadeInDown visible" data-animation="fadeInDown"
                        data-animation-delay="900">
                        <span class="icon"><i class="fa-solid fa-city"></i></span>
                        <span class="value" data-speed="4000" data-from="0" data-to="20">20++</span>
                        <span class="title">Provincial Bases</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="counter animated fadeInDown visible" data-animation="fadeInDown"
                        data-animation-delay="1200">
                        <span class="icon"><i class="fa-solid fa-dove"></i></span>
                        <span class="value" data-speed="4000" data-from="0" data-to="30">30++</span>
                        <span class="title">Country Relations</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="counter_a clearfix">
                <div class="col-md-3">
                    <div class="counter animated fadeInDown visible" data-animation="fadeInDown"
                        data-animation-delay="300">
                        <span class="icon"><i class="fa-solid fa-handshake"></i></span>
                        <span class="value" data-speed="4000" data-from="0" data-to="90">90++</span>
                        <span class="title">Partners</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="counter animated fadeInDown visible" data-animation="fadeInDown"
                        data-animation-delay="600">
                        <span class="icon"><i class="fa-solid fa-calendar-check"></i></span>
                        <span class="value" data-speed="4000" data-from="0" data-to="180">180++</span>
                        <span class="title">Events</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="counter animated fadeInDown visible" data-animation="fadeInDown"
                        data-animation-delay="900">
                        <span class="icon"><i class="fa-solid fa-child-reaching"></i></span>
                        <span class="value" data-speed="4000" data-from="0" data-to="300">300++</span>
                        <span class="title">Youths Empowerment</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="counter animated fadeInDown visible" data-animation="fadeInDown"
                        data-animation-delay="1200">
                        <span class="icon"><i class="fa-solid fa-user-group"></i></span>
                        <span class="value" data-speed="4000" data-from="0" data-to="4000">4000++</span>
                        <span class="title">Participants</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- team --}}
    <section class="content_section border_b_n">
        <div class="content row_spacer no_padding">
            <div class="main_title centered upper">
                <h2><span class="line"><i class="ico-user5"></i></span>Team</h2>
            </div>
            <div class="rows_container clearfix">

                @foreach ($teams as $item)
                    <div class="col-md-3">
                        <div class="team_block ">
                            <div class="f1_card centered bg_color11" style="padding: 5px 0px">

                                <span class="team_img">
                                    {{-- <img class="img" src="{{ asset('assets/user') }}/images/logo/team1.png" alt="team1"> --}}
                                    <img alt="Person Name" src="{{ asset('storage/teams') }}/{{ $item->gambar }}">
                                </span>
                                <span class="person_name">{{ $item->nama }}</span>
                                <span class="person_jop">{{ $item->jabatan }}</span>


                            </div>
                        </div>
                    </div><!-- Col -->
                @endforeach


            </div>
            <div class="centered">
                <a class="btn_c" href="{{ route('team') }}">
                    <span class="btn_c_ic_a"><i class="ico-refresh4"></i></span>
                    <span class="btn_c_t">Load More</span>
                    <span class="btn_c_ic_b"><i class="ico-refresh4"></i></span>
                </a>
            </div>
        </div>
    </section>
    {{-- end team --}}

    {{-- our partner --}}
    <section class="content_section bg_gray border_t_n">
        <div class="content row_spacer">
            <div class="main_title centered upper">
                <h2><span class="line"></span>Our Partner</h2>
            </div>

            <div class="rows_container clearfix">
                <div class="col-md-3">
                    <!-- Single Image -->
                    <div class="centered">
                        <a class="magnific-popup img_popup">
                            <img src="{{ asset('assets/user') }}/images/logo/our.png" height="90">

                        </a>
                    </div>
                    <!-- End Single Image -->
                </div>
                <div class="col-md-3">
                    <!-- Single Image -->
                    <div class="centered">
                        <a class="magnific-popup img_popup">
                            <img src="{{ asset('assets/user') }}/images/foto/partner2.png" height="90">

                        </a>
                    </div>
                    <!-- End Single Image -->
                </div>
                <div class="col-md-3">
                    <!-- Single Image -->
                    <div class="centered">
                        <a class="magnific-popup img_popup">
                            <img src="{{ asset('assets/user') }}/images/foto/partner3.jpg" height="90">

                        </a>
                    </div>
                    <!-- End Single Image -->
                </div>
                <div class="col-md-3">
                    <!-- Single Image -->
                    <div class="centered">
                        <a class="magnific-popup img_popup">
                            <img src="{{ asset('assets/user') }}/images/foto/partner4.png" height="90">

                        </a>
                    </div>
                    <!-- End Single Image -->
                </div>
            </div>
        </div>
    </section>
    {{-- end our partner --}}

    {{-- video --}}

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
                                <span class="description1 centered">Talkshow by Ruang Internasional</span>
                                <a class="btn_a popup-vimeo" href="https://www.youtube.com/watch?v=FC1MUia8Oak">
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
    {{-- end video --}}

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


                    <form class="hm_contact_form" id="contact-us-form" name="contact-us-form"
                        action="{{ route('contact.store') }}" method="post">
                        @csrf
                        <div class="form_row clearfix">
                            <label for="contact-us-name">
                                <span class="hm_field_name">Name</span>
                                <span class="hm_requires_star">*</span>
                            </label>
                            <input class="hm_input_text" type="text" name="nama" required>

                        </div>
                        <div class="form_row clearfix">
                            <label for="contact-us-mail">
                                <span class="hm_field_name">Email</span>
                                <span class="hm_requires_star">*</span>
                            </label>
                            <input class="hm_input_text" type="email" name="email" required>

                        </div>
                        <div class="form_row clearfix">
                            <label for="contact-us-subject">
                                <span class="hm_field_name">Subject</span>
                            </label>
                            <input class="hm_input_text" type="text" name="subjek" required>

                        </div>
                        <div class="form_row clearfix">
                            <label for="contact-us-message">
                                <span class="hm_field_name">Message</span>
                                <span class="hm_requires_star">*</span>
                            </label>
                            <textarea class="form_fill_fields hm_textarea" name="pesan" id="contact-us-message" required></textarea>

                        </div>
                        <div class="form_row clearfix">
                            <button type="submit" class="send_button full_button">
                                <i class="ico-check3"></i>
                                <span>Send Your Message</span>
                            </button>
                        </div>
                        <div class="form_row clearfix">
                            <div id="form-messages">
                                @if (session()->has('success'))
                                    <div class="alert alert-success mt-2" role="alert">
                                        <span class="alert-text">{{ session()->get('success') }}</span>
                                    </div>
                                @elseif(session()->has('failed'))
                                    <div class="alert alert-danger mt-2" role="alert">
                                        <span class="alert-text">{{ session()->get('failed') }}</span>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </form>
                </div><!-- Grid -->

                <div class="col-md-6">
                    <h2 class="title1 upper">Locate Us on Map</h2>
                    <span class="spacer20"></span>

                    <div class="bordered_content with_text bordered">
                        <div class="google_map" data-lat="106.8750415" data-long="-6.2500684"
                            data-text="Your location description 3">
                        </div>
                    </div>


                </div><!-- Grid -->
            </div>
        </div>
    </section>
    <!-- End Contact Us -->
@endsection
