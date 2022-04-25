@extends('layouts.main-user')

@section('slider')
    <section class="content_section page_title title_banner white_section t_b_color3">
        <div class="content clearfix">
            <h1 class="">About Me</h1>

        </div>
    </section>
@endsection

@section('content-user')
    {{-- team --}}
    <section class="content_section">
        <div class="content row_spacer no_padding">

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
        </div>
    </section>
    {{-- end team --}}
@endsection
