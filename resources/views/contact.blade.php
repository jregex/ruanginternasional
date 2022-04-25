@extends('layouts.main-user')

@section('slider')
    <section class="content_section page_title title_banner white_section t_b_color3">
        <div class="content clearfix">
            <h1 class="">Contact Us</h1>

        </div>
    </section>
@endsection

@section('content-user')
    <!-- Contact Us -->
    <section class="content_section">

        <div class="content row_spacer no_padding">
            <div class="rows_container clearfix">
                <div class="col-md-6">
                    <h2 class="title1 upper">Get On Touch</h2>
                    <span class="spacer20"></span>

                    <form class="hm_contact_form" action="{{ route('contact.store') }}" method="post">
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
                        <div class="google_map" data-lat="-12.043333" data-long="-77.028333"
                            data-text="Your location description 3">
                        </div>
                    </div>


                </div><!-- Grid -->
            </div>
        </div>
    </section>
    <!-- End Contact Us -->
@endsection
