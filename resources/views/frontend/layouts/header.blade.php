<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>College</title>
    <link href="{{ url('frontend/') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('frontend/') }}/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ url('frontend/') }}/css/global.css" rel="stylesheet">
    <link href="{{ url('frontend/') }}/css/index.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">
    <script src="{{ url('frontend/') }}/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <section id="top">
        <div class="container-fluid p-0">
            <div class="row top_1 m-0">
                <div class="col-md-4">
                    <div class="top_1l clearfix pt-4 pb-4">
                        <ul class=" mb-0">
                            <li class="d-inline-block me-3 text-white">Follow Us</li>
                            <li class="d-inline-block me-3"><a class="text-white" href="#"><i
                                        class="fa fa-facebook fs-5"></i></a></li>
                            <li class="d-inline-block me-3"><a class="text-white" href="#"><i
                                        class="fa fa-twitter fs-5"></i></a></li>
                            <li class="d-inline-block me-3"><a class="text-white" href="#"><i
                                        class="fa fa-instagram fs-5"></i></a></li>
                            <li class="d-inline-block"><a class="text-white" href="#"><i
                                        class="fa fa-dribbble fs-5"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="top_1r px-5">
                        <div class="top_1ri row">
                            <div class="col-md-4">
                                <div class="top_1ril">
                                    <span class="col_oran fs-2 float-start lh-1 me-3"><i class="fa fa-phone"></i></span>
                                    <h6 class="text-white lh-base">Call Now !<br>
                                        <a class="text-white fw-bold" href="#">+91 9041002246</a>
                                    </h6>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="top_1ril">
                                    <span class="col_oran fs-2 float-start lh-1 me-3"><i
                                            class="fa fa-envelope"></i></span>
                                    <h6 class="text-white lh-base">Email Now<br>
                                        <a class="text-white fw-bold" href="#">info@sgcollege.edu.in</a>
                                    </h6>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="top_1ril">
                                    <span class="col_oran fs-2 float-start lh-1 me-2"><i
                                            class="fa fa-map-marker"></i></span>
                                    <h6 class="text-white lh-base">Address<br>
                                        <a class="text-white fw-bold" href="#">Gharuan, Mohali , Punjab</a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="header">
        <nav class="navbar navbar-expand-md navbar-light shadow_box bg-white p-0" id="navbar_sticky">
            <div class="container-xl">
                <a class="navbar-brand p-0  fw-bold text-uppercase" href="index.html"><img
                        src="https://sgcollege.edu.in/wp-content/uploads/2024/03/weblogo1.jpg" alt="" style="width: 180px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-0 ms-auto">

                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" aria-current="page" href="home">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                About
                            </a>
                            <ul class="dropdown-menu drop_1" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href=""><i
                                            class="fa fa-chevron-right font_8 me-1 align-middle"></i>About College</a>
                                </li>
                                <li><a class="dropdown-item border-0" href=""><i
                                            class="fa fa-chevron-right font_8 me-1 align-middle"></i>Vision Mission</a>
                                </li>
                                <li><a class="dropdown-item border-0" href=""><i
                                            class="fa fa-chevron-right font_8 me-1 align-middle"></i>Recognition</a>
                                </li>
                                <li><a class="dropdown-item border-0" href=""><i
                                            class="fa fa-chevron-right font_8 me-1 align-middle"></i>Council Website
                                        Link</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Programs
                            </a>
                            <ul class="dropdown-menu drop_1" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href=""><i
                                            class="fa fa-chevron-right font_8 me-1 align-middle"></i> Elementary
                                        Teacher Training</a></li>
                                <li><a class="dropdown-item border-0" href=""><i
                                            class="fa fa-chevron-right font_8 me-1 align-middle"></i>About
                                        Programme</a>
                                </li>
                                <li><a class="dropdown-item border-0" href=""><i
                                            class="fa fa-chevron-right font_8 me-1 align-middle"></i>Principal
                                        Message</a>
                                </li>
                                <li><a class="dropdown-item border-0" href=""><i
                                            class="fa fa-chevron-right font_8 me-1 align-middle"></i>PEligibility &
                                        Admission</a>
                                </li>
                                <li><a class="dropdown-item border-0" href=""><i
                                            class="fa fa-chevron-right font_8 me-1 align-middle"></i>Programme
                                        Curriculum</a>
                                </li>
                                <li><a class="dropdown-item border-0" href=""><i
                                            class="fa fa-chevron-right font_8 me-1 align-middle"></i>Specific
                                        Outcomes</a>
                                </li>
                                <li><a class="dropdown-item border-0" href=""><i
                                            class="fa fa-chevron-right font_8 me-1 align-middle"></i>Learning
                                        Outcomes</a>
                                </li>
                                <li><a class="dropdown-item border-0" href=""><i
                                            class="fa fa-chevron-right font_8 me-1 align-middle"></i>Career
                                        Prospects</a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Academics
                            </a>
                            <ul class="dropdown-menu drop_1" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href=""><i
                                            class="fa fa-chevron-right font_8 me-1 align-middle"></i>Academics
                                        Overview</a></li>
                                <li><a class="dropdown-item" href=""><i
                                            class="fa fa-chevron-right font_8 me-1 align-middle"></i>Academic
                                        Calendar</a></li>
                                <li><a class="dropdown-item" href=""><i
                                            class="fa fa-chevron-right font_8 me-1 align-middle"></i>List of
                                        Holidays</a></li>
                                <li><a class="dropdown-item" href=""><i
                                            class="fa fa-chevron-right font_8 me-1 align-middle"></i>Teching
                                        Practices</a></li>

                            </ul>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Facilities
                            </a>
                            <ul class="dropdown-menu drop_1" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href=""><i
                                            class="fa fa-chevron-right font_8 me-1 align-middle"></i>Library</a></li>
                                <li><a class="dropdown-item" href="#"><i
                                            class="fa fa-chevron-right font_8 me-1 align-middle"></i>Labs</a></li>
                                <li><a class="dropdown-item" href="#"><i
                                            class="fa fa-chevron-right font_8 me-1 align-middle"></i>Event Hall</a>
                                </li>
                                <li><a class="dropdown-item" href="#"><i
                                            class="fa fa-chevron-right font_8 me-1 align-middle"></i>Seminar Hall</a>
                                </li>

                                <li><a class="dropdown-item" href="#"><i
                                            class="fa fa-chevron-right font_8 me-1 align-middle"></i>Basketball Ground</a>
                                </li>
                                <li><a class="dropdown-item" href="#"><i
                                            class="fa fa-chevron-right font_8 me-1 align-middle"></i>Classrooms</a>
                                </li>
                                <li><a class="dropdown-item" href="#"><i
                                            class="fa fa-chevron-right font_8 me-1 align-middle"></i>Hostels</a>
                                </li>
                                <li><a class="dropdown-item" href="#"><i
                                            class="fa fa-chevron-right font_8 me-1 align-middle"></i>Banking</a>
                                </li>
                                <li><a class="dropdown-item" href="#"><i
                                            class="fa fa-chevron-right font_8 me-1 align-middle"></i>Seminar Hall</a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" aria-current="page" href="{{url('contact')}}">Contact Us</a>
                        </li>





                        <li class="nav-item ">
                            <a class="nav-link button rounded-5 px-4    " aria-current="page" href="#">Apply Now</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </section>
