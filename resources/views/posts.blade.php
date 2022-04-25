@extends('layouts.main-user')

@section('slider')
    <section class="content_section page_title title_banner white_section t_b_color3 ">
        <div class="content clearfix">
            <h1 class="">Blogs</h1>

        </div>
    </section>
@endsection

@section('content-user')
    <!-- Our Blog Grids -->
    <section class="content_section border_t_n">
        <div class="content row_spacer no_padding">
            <div class="main_title centered upper">
                <h2><span class="line"><i class="ico-pencil2"></i></span>All Blog</h2>
            </div>

            <!-- All Content -->
            <div class="content_spacer clearfix">
                <div class="content_block col-md-9 f_left">
                    <!-- Filter Content -->
                    <div class="hm_filter_wrapper masonry_posts two_blocks colored_masonry">
                        <ul class="hm_filter_wrapper_con">

                            @forelse($posts as $row)
                                <li class="filter_item_block animated" data-animation-delay="300" data-animation="fadeInUp">
                                    <div class="blog_grid_block" data-bg="#0BACB8">
                                        <div class="blog_grid_desc">
                                            <h6 class="title"><a
                                                    href="{{ route('post.detail', ['slug' => $row->slug]) }}">{{ $row->title }}</a>
                                            </h6>
                                        </div>
                                        <div class="feature_inner">
                                            <div class="feature_inner_corners">
                                                <div class="feature_inner_btns">
                                                    <a href="{{ route('post.detail', ['slug' => $row->slug]) }}"
                                                        class="icon_link"><i class="ico-link3"></i></a>
                                                </div>
                                                <div class="porto_galla">
                                                    <a href="{{ asset('storage/post') }}/{{ $row->gambar }}"
                                                        class="feature_inner_ling">
                                                        <img src="{{ asset('storage/post') }}/{{ $row->gambar }}"
                                                            alt="{{ $row->title }}" alt="Post Title">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blog_grid_con">
                                            <span class="meta">
                                                <span class="meta_part">
                                                    <i class="ico-clock7"></i>
                                                    <span>{{ date('d, F Y', strtotime($row->updated_at)) }}</span>
                                                </span>
                                                <span class="meta_part">
                                                    <i class="ico-folder-open-o"></i>
                                                    <span>
                                                        <a
                                                            href="{{ route('post', ['category' => $row->category->slug]) }}">{{ $row->category->category }}</a>
                                                    </span>
                                                </span>
                                                <span class="meta_part">
                                                    <i class="ico-user5"></i>
                                                    <span>{{ $row->penulis }}</span>
                                                </span>
                                            </span>
                                            <p class="desc">{{ Str::limit(strip_tags($row->body), 80, '...') }}
                                            </p>
                                        </div>
                                    </div>
                                </li><!-- Item -->
                            @empty
                                <div class="main_desc centered">
                                    <p><b>Ooopps.!</b> Blog Not Found</p>
                                </div>
                                <div class="page404">
                                    <span>404<span class="face404"></span></span>
                                </div>
                            @endforelse
                        </ul>
                    </div>
                    <!-- End Filter Content -->

                    <div class="content">
                        <!-- Pagination -->
                        {{ $posts->links() }}
                        <!-- End Pagination -->
                    </div>
                </div>
                <!-- End Content Block -->

                <!-- sidebar -->
                <aside id="sidebar" class="col-md-3 right_sidebar">

                    <!-- Products Slider -->
                    <div class="widget_block">
                        <h6 class="widget_title">Search</h6>
                        <div class="search_block">
                            <form action="{{ route('post.search') }}" method="post" class="widget_search">
                                @csrf
                                @if (request('category'))
                                    <input type="hidden" name="category" value="{{ request('category') }}">
                                @endif
                                <input type="search" placeholder="Start Searching..." id="search" name="search"
                                    class="serch_input" value="{{ request('search') }}">
                                <button class="search_btn" id="searchsubmit" type="submit">
                                    <i class="ico-search2"></i>
                                </button>
                                <div class="clear"></div>
                            </form>
                        </div>

                    </div>
                    <!-- End Products Slider -->

                    <!-- Popular Posts -->
                    {{-- <div class="widget_block">
                        <h6 class="widget_title">Popular Posts</h6>
                        <div class="posts_widget">
                            <ul class="posts_widget_list2">
                                <li class="clearfix">
                                    <a href="#">
                                        <img alt="" title="" src="images/blog/thumb1.jpg">
                                        <span>Barbour Jacket</span>
                                    </a>
                                    <span class="post_date">2015/01/23</span>
                                </li>
                                <li class="clearfix">
                                    <a href="#">
                                        <img alt="" title="" src="images/blog/thumb2.jpg">
                                        <span>Visvim Gornergrat</span>
                                    </a>
                                    <span class="post_date">2015/01/23</span>
                                </li>
                                <li class="clearfix">
                                    <a href="#">
                                        <img alt="" title="" src="images/blog/thumb3.jpg">
                                        <span>Nanamica Graphic Tee</span>
                                    </a>
                                    <span class="post_date">2015/01/23</span>
                                </li>
                                <li class="clearfix">
                                    <a href="#">
                                        <img alt="" title="" src="images/blog/thumb4.jpg">
                                        <span>Adidas Hoodie</span>
                                    </a>
                                    <span class="post_date">2015/02/12</span>
                                </li>
                                <li class="clearfix">
                                    <a href="#">
                                        <img alt="" title="" src="images/blog/thumb1.jpg">
                                        <span>Nanamica Briefcase</span>
                                    </a>
                                    <span class="post_date">2015/02/14</span>
                                </li>
                            </ul>
                        </div>
                    </div> --}}
                    <!-- Popular Posts -->



                    <!-- Categories List -->
                    <div class="widget_block">
                        <h6 class="widget_title">Categories</h6>
                        <!-- My Accordion -->
                        <div class="enar_accordion plus_minus" data-type="toggle">
                            <!-- accordion - toggle -->
                            <div class="enar_occ_container" data-expanded="true">
                                <span class="enar_occ_title">List Category</span>
                                <div class="enar_occ_content">
                                    <div class="acc_content">
                                        <ul class="cat_list_widget no_numbers">
                                            <li>
                                                <a href="{{ route('post') }}">All</a>
                                            </li>
                                            @foreach ($categories as $item)
                                                <li
                                                    class="{{ request('category') == $item->slug ? 'active-link' : '' }}">
                                                    <a
                                                        href="{{ route('post', ['category' => $item->slug]) }}">{{ $item->category }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- End My Accordion -->
                    </div>
                    <!-- Categories List -->



                </aside>
                <!-- End sidebar -->
            </div>
            <!-- End All Content -->

        </div>
    </section>
    <!-- End Our Blog Grids -->
@endsection
