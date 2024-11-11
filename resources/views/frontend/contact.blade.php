
@extends('frontend.layouts.main')
@section('main-content')
<section id="center" class="p_3 center_o bg_blue">
    <div class="container-xl">
        <div class="row center_o1 text-center">
            <div class="col-md-12">
                <h1 class="font_60 text-white">Contact Us</h1>
                <h6 class="text-dark mb-0 d-inline-block bg_oran p-3 px-4 rounded_30 text-white"><a class="text-white"
                        href="{{url('home')}}">Home</a> <span class="mx-2 text-white-50">|</span> Contact Us</h6>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="p_3">
    <div class="container-xl">
        <div class="row course_h1 text-center mb-4">
            <div class="col-md-12">
                <h6 class="col_oran fw-bold"><i class="fa fa-graduation-cap me-1"></i> Contact Info</h6>
                <h1 class="font_50 mb-0">Get In Touch</h1>
            </div>
        </div>
        <div class="contact_1 row">
            <div class="col-md-4">
                <div class="contact_1i bg_light p-4 pt-5 pb-5 rounded-3 text-center">
                    <span class="d-inline-block text-center  rounded-circle font_60"><i
                            class="fa fa-phone"></i></span>
                    <h4 class="mt-4"><a href="#">+91 9041002246</a></h4>
                    <h6 class="mt-3 mb-0">Phone Support</h6>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact_1i contact_1io bg_light p-4 pt-5 pb-5 rounded-3 text-center">
                    <span class="d-inline-block text-center  rounded-circle font_60"><i
                            class="fa fa-envelope"></i></span>
                    <h4 class="mt-4"><a href="#">info@sgcollege.edu.in</a></h4>
                    <h6 class="mt-3 mb-0">Email Address</h6>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact_1i bg_light p-4 pt-5 pb-5 rounded-3 text-center">
                    <span class="d-inline-block text-center rounded-circle font_60"><i
                            class="fa fa-map-marker"></i></span>
                    <h4 class="mt-4">GHARUAN, MOHALI , Punjab</h4>
                    <h6 class="mt-3 mb-0">Address</h6>
                </div>
            </div>
        </div>
        <div class="row contact_2 mt-4">
            <div class="col-md-12">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3427.8393652348136!2d76.55422957496137!3d30.77908758339196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ffb656b06adab%3A0x1c37a063eeab555a!2sSaraswati%20Group%20of%20Colleges%2C%20Mohali!5e0!3m2!1sen!2sin!4v1731341050718!5m2!1sen!2sin"
                    height="450" style="border:0; width:100%;" allowfullscreen=""></iframe>
            </div>
        </div>
        <div class="row contact_3 mt-3 text-center">
            <div class="col-md-12">
                <h1 class="mb-0 font_50">Get In Touch</h1>
            </div>
        </div>
        <div class="row contact_4 mt-4 text-center">
            <div class="contact_4i row">
                <div class="col-md-4">
                    <div class="contact_4il">
                        <div class="input-group p-3 bg_light">
                            <input type="text" class="form-control border-0 rounded-0 bg-transparent"
                                placeholder="Full Name">
                            <span class="input-group-btn">
                                <button class="btn btn-primary bg-white border-0 rounded-0 bg-transparent"
                                    type="button">
                                    <i class="fa fa-user col_oran"></i> </button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact_4il">
                        <div class="input-group p-3 bg_light">
                            <input type="text" class="form-control border-0 rounded-0 bg-transparent"
                                placeholder="Email">
                            <span class="input-group-btn">
                                <button class="btn btn-primary bg-white border-0 rounded-0 bg-transparent"
                                    type="button">
                                    <i class="fa fa-envelope col_oran"></i> </button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact_4il">
                        <div class="input-group p-3 bg_light">
                            <input type="text" class="form-control border-0 rounded-0 bg-transparent"
                                placeholder="Phone">
                            <span class="input-group-btn">
                                <button class="btn btn-primary bg-white border-0 rounded-0 bg-transparent"
                                    type="button">
                                    <i class="fa fa-phone col_oran"></i> </button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact_4i row">
                <div class="col-md-12">
                    <div class="contact_4il">
                        <textarea class="form-control mt-4 form_text border-0 bg_light"></textarea>
                        <h6 class="mb-0 mt-4"><a class="button" href="#">Submit Request <i
                                    class="fa fa-long-arrow-right ms-1"></i></a></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection