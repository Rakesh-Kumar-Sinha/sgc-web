@extends('frontend.layouts.main')
@section('main-content')
    <div class="main clearfix position-relative">
        <div class="main_1 clearfix">
            <section id="center" class="center_home">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ url('frontend/') }}/img/slider1.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-md-block">
                                <h5 class="text-uppercase text-white space_3 h_line">Welcome to SG College
                                </h5>
                                <h1 class="text-uppercase text-white space_3 mt-4">Inspiring Success,<br> Every Step of the
                                    Way</h1>
                                <p class="text-light mt-4 mb-4">At SG College, we empower students to realize their
                                    dreams through <br> a blend of academic excellence, practical learning, and holistic
                                    development.</p>
                                <ul class="mb-0">
                                    <li class="d-inline-block"><a class="button" href="#">Discover More <i
                                                class="fa fa-long-arrow-right ms-1"></i> </a></li>
                                    <li class="d-inline-block ms-2"><a class="button_1" href="{{url('contact')}}">Contact Us <i
                                                class="fa fa-long-arrow-right ms-1"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ url('frontend/') }}/img/slider2.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-md-block">
                                <h5 class="text-uppercase text-white space_3 h_line">Education That Transforms</h5>
                                <h1 class="text-uppercase text-white space_3 mt-4">Your Pathway to a <br> Brighter Future

                                </h1>
                                <p class="text-light mt-4 mb-4">Education is the most valuable asset in life. Here, we
                                    foster growth,<br> curiosity, and resilience, setting you on the road to lifelong
                                    achievement.</p>
                                <ul class="mb-0">
                                    <li class="d-inline-block"><a class="button" href="#">Discover More <i
                                                class="fa fa-long-arrow-right ms-1"></i> </a></li>
                                    <li class="d-inline-block ms-2"><a class="button_1" href="{{url('contact')}}">Contact Us <i
                                                class="fa fa-long-arrow-right ms-1"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ url('frontend/') }}/img/slider3.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-md-block">
                                <h5 class="text-uppercase text-white space_3 h_line">Unlock Your Potential</h5>
                                <h1 class="text-uppercase text-white space_3 mt-4">Discover, Learn, <br> and Excel</h1>
                                <p class="text-light mt-4 mb-4">Join a community that values innovation, knowledge, and
                                    skill. <br> At SG College, every challenge is an opportunity, <br> and every lesson is a
                                    step
                                    closer to success.
                                </p>
                                <ul class="mb-0">
                                    <li class="d-inline-block"><a class="button" href="#">Discover More <i
                                                class="fa fa-long-arrow-right ms-1"></i> </a></li>
                                    <li class="d-inline-block ms-2"><a class="button_1" href="{{url('contact')}}">Contact Us <i
                                                class="fa fa-long-arrow-right ms-1"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </section>
        </div>
        <div class="main_2 clearfix position-absolute w-100 bottom-0">
            <section id="spec">
                <div class="container-xl">
                    <div class="row spec_1">
                        <div class="col-md-4">
                            <div class="spec_1i row pt-4 pb-4 px-3 mx-0">
                                <div class="col-md-2">
                                    <div class="spec_1il">
                                        <span class="fs-2 lh-1 text-white"><i class="fa fa-building-o"></i></span>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="spec_1ir">
                                        <h5 class="text-white">Comprehensive Education Services</h5>
                                        <p class="text-light">Empowering students with a holistic approach to learning and
                                            personal growth, designed to nurture skills for real-world success.</p>
                                        <h6 class="mb-0"><a class="text-light" href="#">Read More <i
                                                    class="fa fa-long-arrow-right ms-1"></i></a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="spec_1i spec_1io row pt-4 pb-4 px-3 mx-0">
                                <div class="col-md-2">
                                    <div class="spec_1il">
                                        <span class="fs-2 lh-1 text-white"><i class="fa fa-globe"></i></span>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="spec_1ir">
                                        <h5 class="text-white">Global Connections and International Hubs</h5>
                                        <p class="text-light">Building pathways across borders, fostering a global
                                            perspective and cultural exchange to enhance student experiences.</p>
                                        <h6 class="mb-0"><a class="text-light" href="#">Read More <i
                                                    class="fa fa-long-arrow-right ms-1"></i></a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="spec_1i row pt-4 pb-4 px-3 mx-0">
                                <div class="col-md-2">
                                    <div class="spec_1il">
                                        <span class="fs-2 lh-1 text-white"><i class="fa fa-user-plus"></i></span>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="spec_1ir">
                                        <h5 class="text-white">Bachelor’s and Master’s <br>Programs</h5>
                                        <p class="text-light">Offering a diverse range of undergraduate and graduate
                                            programs to build strong academic foundations and advanced expertise.</p>
                                        <h6 class="mb-0"><a class="text-light" href="#">Read More <i
                                                    class="fa fa-long-arrow-right ms-1"></i></a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <section id="about_h" class="p_3 bg_light">
        <div class="container-xl">
            <div class="row about_h1">
                <div class="col-md-6">
                    <div class="about_h1l">
                        <div class="about_h1li row">
                            <div class="col-md-6 col-sm-6">
                                <div class="about_h1lil">
                                    <img src="{{ url('frontend/') }}/img/abt-clg-1.jpg" alt="abc"
                                        class="w-100 rounded_30">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="about_h1lil about_h1lilo">
                                    <img src="{{ url('frontend/') }}/img/abt-clg-2.jpg" alt="abc"
                                        class="w-100 rounded_30">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about_h1r">
                        <h6 class="col_oran fw-bold fs-3"><i class="fa fa-graduation-cap me-1"></i> About Our College
                        </h6>
                        <h1 class="font_50 mt-3">A Few Words About <br> the Sarswati Group Of Colleges</h1>
                        <p class="col_blue fs-5">Our community is driven to shape the future of education. As a leading
                            institution where a distinguished design ethos meets premier academic programs, we’re committed
                            to creating a learning experience that’s both impactful and forward-thinking.</p>
                        <p>We are proud to deliver top-tier support in academic and career services, including assistance
                            with internships, career placement, and skills development. By fostering innovation and
                            excellence, we help our students prepare for a dynamic, global workforce.</p>
                        <div class="about_h1ri row">
                            <div class="col-md-6 col-sm-6">
                                <div class="about_h1ril row">
                                    <div class="col-md-3">
                                        <div class="about_h1rill">
                                            <span
                                                class="d-inline-block text-center rounded-circle bg_oran text-white fs-5">01</span>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="about_h1rilr">
                                            <h5>Engineering Excellence</h5>
                                            <p>Empowering future engineers with cutting-edge knowledge, innovation, and
                                                hands-on experience.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="about_h1ril row">
                                    <div class="col-md-3">
                                        <div class="about_h1rill">
                                            <span
                                                class="d-inline-block text-center rounded-circle bg_oran text-white fs-5">02</span>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="about_h1rilr">
                                            <h5>Management Programs</h5>
                                            <p>Developing tomorrow’s leaders with a blend of strategic thinking, practical
                                                skills, and global perspectives.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h6 class="mb-0"><a class="button_1" href="#">Read More <i
                                    class="fa fa-long-arrow-right ms-1"></i> </a></h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="why-choose-us" class="p_3">
        <div class="container-xl">
            <div class="row course_h1 text-center mb-4">
                <div class="col-md-12">
                    <h6 class="col_oran fw-bold fs-1"><i class="fa fa-graduation-cap me-1"></i></h6>
                    <h6 class="font_50 text-bold mb-0">Why Choose Professional and higher <br> education college of
                        Education</h6>
                </div>
            </div>
            <div class="row course_h2 px-4">
                <h4><i class="fa fa-graduation-cap me-1"></i> Continuous Professional Development</h4>
                <p>As education evolves, the job role of educator also upgrades it is which requires recurrently
                    upskilling and refining of teaching methods. Teacher Training is Necessary for Professional
                    Growth and Development that keeps them updated with the newest trends in education.</p>

                <h4><i class="fa fa-graduation-cap me-1"></i> Boosting Confidence and Motivation</h4>
                <p>When teachers acquire new skills through training, they often experience a significant boost in
                    confidence. This increased enables them to take on new challenges in the classroom with a
                    positive attitude. Furthermore, confident and motivated teachers are enthusiastic about creating a
                    supportive learning environment, leading to improved educational results for young students.</p>
                <h4><i class="fa fa-graduation-cap me-1"> </i>Creating Long-term effects on students</h4>
                <p>The professional growth of teachers also benefits students’ progress. A self-assured educator
                    will positively inspire students, they serve as role models to them. <br>
                    Students build confidence from a very young age because highly qualified educators positively
                    influence the entire classroom dynamic.</p>
                <h4><i class="fa fa-graduation-cap me-1"></i> Better Student Management Skills</h4>
                <p>Teacher Training Programs also focus on equipping teachers with effective classroom
                    management techniques. Better management leads to the positive upholding of a classroom
                    environment where all students are supported and flourish to the fullest. It also ensures fewer
                    commotions and a smoother teaching experience inclusive.</p>
            </div>
        </div>
    </section>

    <section id="labs_h" class="p_3 carousel_p">
        <div class="container-xl">
            <div class="row course_h1 text-center mb-4">
                <div class="col-md-12">
                    <h6 class="col_oran fw-bold fs-1"><i class="fa fa-graduation-cap me-1"></i>Labs </h6>
                </div>
            </div>
            <div class="row course_h2">
                <div class="row">
                    @foreach ($labs_list as $lab)
                        <div class="col-md-4">
                            <div class="course_h2im clearfix">
                                <div class="course_h2im1 clearfix position-relative">
                                    <div class="course_h2im1i clearfix">
                                        <div class="grid clearfix">
                                            <figure class="effect-jazz mb-0">
                                                <a href="#"><img src="{{ url('storage/' . $lab->banner_image) }}"
                                                        class="w-100" alt="abc"></a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="course_h2im1i1 clearfix text-end position-absolute w-100">
                                        <span class="d-inline-block bg_oran text-white p-2 rounded-3 px-3"><i
                                                class="fa fa-graduation-cap"></i>Lab</span>
                                    </div>
                                </div>
                                <div class="course_h2im2 clearfix bg_light border_1 border-top-0 p-4">
                                    <h3><a href="#">{{ $lab->title }}</a></h3>
                                    <p>{{ $lab->short_description }}</p>
                                    <h6 class="mb-0 fw-bold"><a class="col_oran" href="#">Read More <i
                                                class="fa fa-long-arrow-right ms-1"></i></a></h6>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>

    <section id="happenings_h" class="p_3 carousel_p">
        <div class="container-xl">
            <div class="row course_h1 text-center mb-4">
                <div class="col-md-12">
                    <h6 class="col_oran fw-bold fs-1"><i class="fa fa-graduation-cap me-1"></i>Happenings </h6>
                </div>
            </div>
            <div class="row course_h2">
                <div class="row">
                    @foreach ($happenings_list as $happening)
                        <div class="col-md-4">
                            <div class="course_h2im clearfix">
                                <div class="course_h2im1 clearfix position-relative">
                                    <div class="course_h2im1i clearfix">
                                        <div class="grid clearfix">
                                            <figure class="effect-jazz mb-0">
                                                <a href="#"><img src="{{ url('' . $happening->banner_image) }}"
                                                        class="w-100" alt="abc"></a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="course_h2im1i1 clearfix text-end position-absolute w-100">
                                        <span class="d-inline-block bg_oran text-white p-2 rounded-3 px-3"><i
                                                class="fa fa-graduation-cap"></i>Happenings</span>
                                    </div>
                                </div>
                                <div class="course_h2im2 clearfix bg_light border_1 border-top-0 p-4">
                                    <h3><a href="#">{{ $happening->title }}</a></h3>
                                    <p>{{ $happening->short_description }}</p>
                                    <h6 class="mb-0 fw-bold"><a class="col_oran" href="#">Read More <i
                                                class="fa fa-long-arrow-right ms-1"></i></a></h6>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>

   
    
@endsection
