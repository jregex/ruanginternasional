@extends('layouts.main-user')

@section('slider')
    <section class="content_section page_title title_banner white_section t_b_color3">
        <div class="content clearfix">
            <h1 class="">About Us</h1>

        </div>
    </section>
@endsection

@section('content-user')
    <!-- Features Slider 1-->
    {{-- about us --}}
    <section class="content_section">

        <div class="content row_spacer no_padding">


            <span class="title1 title_color1 centered">Ruang Internasional, founded on December 19, 2019, is the # 1
                Anti-Mainstream Youth
                Organization in Indonesia, which was born from the anxiety of some Indonesian youths about efforts to
                humanize and empower youth to become critical, creative, and active individuals in applying and developing
                their abilities to be able to participate and contribute in the midst of a global society both directly and
                through other contemporary platforms as a form of youth response to developments in science and
                technology.</span>



        </div>

    </section>
    <!-- End Features Slider 1 -->
    {{-- about us --}}



    <!-- Section -->
    <section class="content_section bg_gray border_b_n border_t_n row_spacer">
        <div class="content no_padding">
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
                    <img class="img" src="{{ asset('assets/user') }}/images/logo/gambar1.jpg" alt="gambar1">
                    <!-- <div class="main_title side_line upper small">
                                                                                                              <h2><span class="line"></span>My Skills</h2>
                                                                                                             </div> -->
                    {{-- <h2 class="title1 upper">My Skills</h2>

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
					</div> --}}
                </div><!-- Grid 6 -->

            </div>
        </div>
    </section>
    <!-- End Section -->

    <!-- Our Team 2 -->
    <section class="content_section">
        <div class="content row_spacer no_padding">
            <div class="rows_container clearfix">
                <div class="col-md-6">
                    <span class="spacer30"></span>
                    <img class="img" src="{{ asset('assets/user') }}/images/logo/gambar2.png" alt="gambar2">
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
                        speaking, leadership, entrepreneur, social entreprise, volunteering, and global youth relationships.
                    </p>
                    <p>The continuation of this program is to open a forum for the youth organization of Ruang Internasional
                        in Cambodia with a separate structure and stand independently by adopting the model and concept of
                        the organization that is owned by Ruang Internasional Indonesia. It is hoped that with the expansion
                        of Ruang Internasional branch in other countries, it will open up more forums and opportunities for
                        youth to develop and advance with all the abilities and talents they have, especially for the
                        advancement of Indonesian and Cambodian youth.
                    </p>
                </div>

            </div>
        </div>
    </section>
    <!-- End Our Team 2 -->
@endsection
