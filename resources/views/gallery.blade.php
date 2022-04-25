@extends('layouts.main-user')

@section('slider')
    <section class="content_section page_title title_banner white_section t_b_color3">
        <div class="content clearfix">
            <h1 class="">Gallery</h1>

        </div>
    </section>
@endsection

@section('content-user')
    {{-- galeri --}}
    <!-- Isotope Filter 1 four columns full without padding -->
    <section class="content_section border_b_n">
        <div class="row_spacer_t clearfix row_spacer no_padding">

            <!-- Filter Content -->
            <div
                class="hm_filter_wrapper four_blocks project_text_nav full_portos no_sapce_portos nav_in_center upper_title porto_hidden_title">
                <div id="options" class="sort_options clearfix">
                    <ul data-option-key="filter" class="option-set clearfix" id="filter-by">
                        <li><a data-option-value="*" class="selected" href="#"><span>all</span><span
                                    class="num"></span></a></li>
                        @foreach ($galleries as $item)
                            <li><a data-option-value=".{{ $item->kategori }}" class=""
                                    href="#"><span>{{ $item->kategori }}</span><span class="num"></span></a>
                            </li>
                        @endforeach
                    </ul>
                </div>

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

        </div>
    </section>
    <!-- End Isotope Filter 1 four columns full without padding -->
    {{-- end galeri --}}
@endsection
