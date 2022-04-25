@extends('layouts.main-user')

@section('slider')
    <section class="content_section page_title title_banner white_section t_b_color3">
        <div class="content clearfix">
            <h1 class="">Blogs</h1>

        </div>
    </section>
@endsection

@section('content-user')
    <!-- Our Blog Grids -->
    <section class="content_section">
        <div class="content">
            <div class="internal_post_con clearfix">
                <!-- All Content -->
                <div class="content_block col-md-9 f_left">
                    <div class="hm_blog_full_list hm_blog_list clearfix">

                        <!-- Post Container -->
                        <div id="post-1"
                            class="post-1 post type-post status-publish format-gallery has-post-thumbnail category-media tag-photos clearfix">
                            <div class="post_title_con">
                                <h6 class="title"><a href="#">{{ $post->title }}</a></h6>
                                <span class="meta">
                                    <span class="meta_part">
                                        <i class="ico-clock7"></i>
                                        <span>{{ date('d, F Y', strtotime($post->updated_at)) }}</span>
                                    </span>
                                    <span class="meta_part">
                                        <a href="#">
                                            <i class="ico-comment-o"></i>
                                            <span>34 Comments</span>
                                        </a>
                                    </span>
                                    <span class="meta_part">
                                        <i class="ico-folder-open-o"></i>
                                        <span>
                                            <a
                                                href="{{ route('post', ['category' => $post->category->slug]) }}">{{ $post->category->category }}</a>
                                        </span>
                                    </span>
                                    <span class="meta_part">
                                        <i class="ico-user5"></i>
                                        <span>{{ $post->penulis }}</span>
                                    </span>
                                    <span class="meta_part">
                                        <i class="ico-user5"></i>
                                        <span>{{ $post->sumber }}</span>
                                    </span>
                                </span>
                            </div>

                            <div class="post_format_con">
                                <span>
                                    <a href="{{ asset('storage/post') }}/{{ $post->gambar }}">
                                        <i class="ico-image4"></i>
                                    </a>
                                </span>
                            </div>
                            <div class="feature_inner">
                                <div class="feature_inner_corners">
                                    <a href="{{ asset('storage/post') }}/{{ $post->gambar }}" class="feature_inner_ling"
                                        data-rel="magnific-popup">
                                        <img src="{{ asset('storage/post') }}/{{ $post->gambar }}" alt="Post Title">
                                    </a>
                                </div>
                            </div>
                            <div class="blog_grid_con">

                                <p>{!! $post->body !!}</p>
                            </div>

                            <!-- Next / Prev and Social Share-->
                            <div class="post_next_prev_con clearfix">
                                <!-- Next and Prev Post-->
                                <div class="post_next_prev clearfix">
                                    <a href="{{ route('post') }}"><i class="ico-arrow-back"></i><span
                                            class="t">Kembali</span></a>
                                    <!--<a href="#" class="th_icon" title="All Posts"><i class="ico-apps"></i></a> -->
                                    {{-- <a href="#"><span class="t">Next</span><i
                                            class="ico-arrow-forward"></i></a> --}}
                                </div>
                                <!-- End Next and Prev Post-->

                                <!-- Social Share-->
                                {{-- <div class="single_pro_row">
									<div id="share_on_socials">
										<!-- <h6>Share:</h6> -->
										<a class="facebook" href="http://www.facebook.com/sharer.php?s=100&amp;p[url]=http://www.yourlink.com&amp;p[title]=your-post-title&amp;p[summary]=your-content-here&amp;p[images[0]=http://www.yourlink.com/image.jpg" target="_blank"><i class="ico-facebook4"></i></a>
										<a class="twitter" href="http://twitter.com/home?status=your-post-title+http://www.yourlink.com" target="_blank"><i class="ico-twitter4"></i></a>
										<a class="googleplus" href="https://plus.google.com/share?url=http://www.yourlink.com" target="_blank"><i class="ico-google-plus"></i></a>
										<a class="pinterest" href="http://pinterest.com/pin/create/bookmarklet/?media=http://www.yourlink.com/image.jpg&amp;url=http://www.yourlink.com&amp;is_video=false&amp;description=your-post-title" target="_blank"><i class="ico-pinterest-p"></i></a>

										<a class="linkedin" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://www.yourlink.com&amp;title=your-post-title&amp;source=http://www.yourlink.com" target="_blank"><i class="ico-linkedin3"></i></a>

									</div>
								</div> --}}
                                <!-- End Social Share-->
                            </div>
                            <!-- End Next / Prev and Social Share-->

                        </div>
                        <!-- End Post Container -->


                    </div>
                    <!-- End blog List -->
                </div>
                <!-- End All Content -->

                <!-- sidebar -->
                <aside id="sidebar" class="col-md-3 right_sidebar">


                    <!-- Categories -->
                    <div class="widget_block">
                        <h6 class="widget_title">Categories</h6>
                        <ul class="cat_list_widget">
                            <li>
                                <a href="{{ route('post') }}">All</a>
                            </li>
                            @foreach ($categories as $item)
                                <li class="{{ request('category') == $item->slug ? 'active-link' : '' }}>
                                <a href="
                                    {{ route('post', ['category' => $item->slug]) }}">{{ $item->category }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- End Categories -->


                    <!-- Tabs -->
                    <div class="widget_block">
                        <div class="hm-tabs tabs1">
                            <nav>
                                <ul class="tabs-navi">
                                    <li><a data-content="new" class="selected" href="#"><span></span>Recent</a></li>
                                </ul>
                            </nav>

                            <li data-content="new">
                                <ul class="posts_widget_list2">
                                    @foreach ($recents as $item)
                                        <li class="clearfix">
                                            <a href="#">
                                                <img alt="{{ $item->title }}" title="{{ $item->title }}"
                                                    src="{{ asset('storage/post') }}/{{ $item->gambar }}">
                                                <span>{{ $item->title }}</span>
                                            </a>
                                            <span
                                                class="post_date">{{ date('d, F Y', strtotime($item->updated_at)) }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Tabs -->


                </aside>
                <!-- End sidebar -->

            </div>
            <!-- End Internal Post Con -->
        </div>
    </section>
    <!-- End Our Blog Grids -->
@endsection
