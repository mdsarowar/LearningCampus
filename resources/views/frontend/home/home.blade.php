@extends('frontend.master')
@section('body')


    <!--====== SLIDER PART START ======-->

    <section id="slider-part" class="slider-active">
        @foreach($slide_images as $slide)
            <div class="single-slider bg_cover pt-140" style="background-image: url({{asset($slide->image)}})" data-overlay="4">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-9">
                            <div class="slider-cont">
                                <h1 data-animation="bounceInLeft" data-delay="1s">Choose the right theme for education</h1>
                                <p data-animation="fadeInUp" data-delay="1.3s">Donec vitae sapien ut libearo venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt  Sed fringilla mauri amet nibh.</p>
                                <ul>
                                    <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="#">Read More</a></li>
                                    <li><a data-animation="fadeInUp" data-delay="1.9s" class="main-btn main-btn-2" href="#">Get Started</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- single slider -->

        @endforeach
{{--      --}}
{{--        <div class="single-slider bg_cover pt-150" style="background-image: url(images/slider/s-2.jpg)" data-overlay="4">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-xl-7 col-lg-9">--}}
{{--                        <div class="slider-cont">--}}
{{--                            <h1 data-animation="bounceInLeft" data-delay="1s">Choose the right theme for education</h1>--}}
{{--                            <p data-animation="fadeInUp" data-delay="1.3s">Donec vitae sapien ut libearo venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt  Sed fringilla mauri amet nibh.</p>--}}
{{--                            <ul>--}}
{{--                                <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="#">Read More</a></li>--}}
{{--                                <li><a data-animation="fadeInUp" data-delay="1.9s" class="main-btn main-btn-2" href="#">Get Started</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div> <!-- row -->--}}
{{--            </div> <!-- container -->--}}
{{--        </div> <!-- single slider -->--}}

{{--        <div class="single-slider bg_cover pt-150" style="background-image: url(images/slider/s-1.jpg)" data-overlay="4">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-xl-7 col-lg-9">--}}
{{--                        <div class="slider-cont">--}}
{{--                            <h1 data-animation="bounceInLeft" data-delay="1s">Choose the right theme for education</h1>--}}
{{--                            <p data-animation="fadeInUp" data-delay="1.3s">Donec vitae sapien ut libearo venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt  Sed fringilla mauri amet nibh.</p>--}}
{{--                            <ul>--}}
{{--                                <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="#">Read More</a></li>--}}
{{--                                <li><a data-animation="fadeInUp" data-delay="1.9s" class="main-btn main-btn-2" href="#">Get Started</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div> <!-- row -->--}}
{{--            </div> <!-- container -->--}}
{{--        </div> <!-- single slider -->--}}
{{--        <div class="single-slider bg_cover pt-150" style="background-image: url(images/slider/s-4.jpg)" data-overlay="4">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-xl-7 col-lg-9">--}}
{{--                        <div class="slider-cont">--}}
{{--                            <h1 data-animation="bounceInLeft" data-delay="1s">Choose the right theme for education</h1>--}}
{{--                            <p data-animation="fadeInUp" data-delay="1.3s">Donec vitae sapien ut libearo venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt  Sed fringilla mauri amet nibh.</p>--}}
{{--                            <ul>--}}
{{--                                <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="#">Read More</a></li>--}}
{{--                                <li><a data-animation="fadeInUp" data-delay="1.9s" class="main-btn main-btn-2" href="#">Get Started</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div> <!-- row -->--}}
{{--            </div> <!-- container -->--}}
{{--        </div> <!-- single slider -->--}}
    </section>

    <!--====== SLIDER PART ENDS ======-->


    <!--====== CATEGORY PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section id="about-part" class="pt-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title mt-50">
                        <h5>About us</h5>
                        <h2>Welcome to Educare </h2>
                    </div> <!-- section title -->
                    <div class="about-cont">
                        <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt  mauris. <br> <br> auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt  mauris</p>
                        <a href="#" class="main-btn mt-55">Learn More</a>
                    </div>
                </div> <!-- about cont -->

            </div>
        </div> <!-- row -->
        </div> <!-- container -->
        <div class="about-bg">
            <img src="{{asset('/')}}frontend/assets/images/about/about-us-1.jpg" alt="About">
        </div>
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== APPLY PART START ======-->

    <section id="apply-aprt" class="pb-120">
        <div class="container">
            <div class="apply">
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <div class="apply-cont apply-color-1">
                            <h3>Apply for new admission 2023</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum expedita, itaque molestiae beatae quas, voluptas cupiditate recusandae labore consequuntur amet odio quam necessitatibus magni fugit architecto aperiam porro. Molestiae, dolorum. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque et delectus cupiditate dolores blanditiis quisquam, nihil eveniet voluptatum veritatis, inventore qui minus veniam quo voluptatibus eius! Repudiandae cumque fugit ipsa!</p>
                            <a href="Admission Form/students-add.html" class="main-btn">Apply Now</a>
                        </div> <!-- apply cont -->
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== APPLY PART ENDS ======-->

    <!--====== BREAKING NEW PART START ======-->

    <section id="course-part" class="pt-115 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-45">
                        <h5>Featured News</h5>
                        <h2>Latest News</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row course-slied mt-30">
                <div class="col-lg-4">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="{{asset('/')}}frontend/assets/images/course/breaking news.jpg" alt="Course">
                            </div>
                        </div>
                        <div class="cont">
                            <a href="#"><h4>Learn basis javascirpt from start for beginner</h4></a>
                            <div class="course-teacher">
                                <div class="thum">
                                    <a href="#"><img src="{{asset('/')}}frontend/assets/images/course/teacher/t-1.jpg" alt="teacher"></a>
                                </div>
                                <div class="name">
                                    <a href="#"><h6>Mark anthem</h6></a>
                                </div>

                            </div>
                        </div>
                    </div> <!-- singel course -->
                </div>
                <div class="col-lg-4">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="{{asset('/')}}frontend/assets/images/course/breaking news.jpg" alt="Course">
                            </div>

                        </div>
                        <div class="cont">


                            <a href="#"><h4>Learn basis javascirpt from start for beginner</h4></a>
                            <div class="course-teacher">
                                <div class="thum">
                                    <a href="#"><img src="{{asset('/')}}frontend/assets/images/course/teacher/t-2.jpg" alt="teacher"></a>
                                </div>
                                <div class="name">
                                    <a href="#"><h6>Mark anthem</h6></a>
                                </div>

                            </div>
                        </div>
                    </div> <!-- singel course -->
                </div>
                <div class="col-lg-4">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="{{asset('/')}}frontend/assets/images/course/breaking news.jpg" alt="Course">
                            </div>

                        </div>
                        <div class="cont">

                            <a href="courses-singel.html"><h4>Learn basis javascirpt from start for beginner</h4></a>
                            <div class="course-teacher">
                                <div class="thum">
                                    <a href="#"><img src="{{asset('/')}}frontend/assets/images/course/teacher/t-3.jpg" alt="teacher"></a>
                                </div>
                                <div class="name">
                                    <a href="#"><h6>Mark anthem</h6></a>
                                </div>

                            </div>
                        </div>
                    </div> <!-- singel course -->
                </div>
                <div class="col-lg-4">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="{{asset('/')}}frontend/assets/images/course/breaking news.jpg" alt="Course">
                            </div>

                        </div>
                        <div class="cont">


                            <a href="courses-singel.html"><h4>Learn basis javascirpt from start for beginner</h4></a>
                            <div class="course-teacher">
                                <div class="thum">
                                    <a href="#"><img src="{{asset('/')}}frontend/assets/images/course/teacher/t-4.jpg" alt="teacher"></a>
                                </div>
                                <div class="name">
                                    <a href="#"><h6>Mark anthem</h6></a>
                                </div>

                            </div>
                        </div>
                    </div> <!-- singel course -->
                </div>
                <div class="col-lg-4">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="{{asset('/')}}frontend/assets/images/course/breaking news.jpg" alt="Course">
                            </div>

                        </div>
                        <div class="cont">

                            <a href="courses-singel.html"><h4>Learn basis javascirpt from start for beginner</h4></a>
                            <div class="course-teacher">
                                <div class="thum">
                                    <a href="#"><img src="{{asset('/')}}frontend/assets/images/course/teacher/t-5.jpg" alt="teacher"></a>
                                </div>
                                <div class="name">
                                    <a href="#"><h6>Mark anthem</h6></a>
                                </div>

                            </div>
                        </div>
                    </div> <!-- singel course -->
                </div>
            </div> <!-- course slied -->
        </div> <!-- container -->
    </section>

    <!--====== COURSE PART ENDS ======-->

    <!--====== VIDEO FEATURE PART START ======-->

    <section id="video-feature" class="bg_cover pt-60 pb-110" style="background-image: url(images/bg-1.png)">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-last order-lg-first">
                </div>
                <div class="col-lg-5 offset-lg-1 order-first order-lg-last">
                    <div class="feature pt-50">
                        <div class="feature-title">
                            <h3>Our Facilities</h3>
                        </div>
                        <ul>
                            <li>
                                <div class="singel-feature">
                                    <div class="icon">
                                        <img src="{{asset('/')}}frontend/assets/images/all-icon/f-1.png" alt="icon">
                                    </div>
                                    <div class="cont">
                                        <h4>Global Certificate</h4>
                                        <p>Gravida nibh vel velit auctor aliquetn auci elit cons solliazcitudirem sem quibibendum sem nibhutis.</p>
                                    </div>
                                </div> <!-- singel feature -->
                            </li>
                            <li>
                                <div class="singel-feature">
                                    <div class="icon">
                                        <img src="{{asset('/')}}frontend/assets/images/all-icon/f-2.png" alt="icon">
                                    </div>
                                    <div class="cont">
                                        <h4>Alumni Support</h4>
                                        <p>Gravida nibh vel velit auctor aliquetn auci elit cons solliazcitudirem sem quibibendum sem nibhutis.</p>
                                    </div>
                                </div> <!-- singel feature -->
                            </li>
                            <li>
                                <div class="singel-feature">
                                    <div class="icon">
                                        <img src="{{asset('/')}}frontend/assets/images/all-icon/f-3.png" alt="icon">
                                    </div>
                                    <div class="cont">
                                        <h4>Books & Library</h4>
                                        <p>Gravida nibh vel velit auctor aliquetn auci elit cons solliazcitudirem sem quibibendum sem nibhutis.</p>
                                    </div>
                                </div> <!-- singel feature -->
                            </li>
                        </ul>
                    </div> <!-- feature -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="feature-bg"></div> <!-- feature bg -->
    </section>

    <!--====== VIDEO FEATURE PART ENDS ======-->

    <!--====== TEACHERS PART START ======-->

    <section id="teachers-part" class="pt-70 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title mt-50">
                        <h5>Featured Teachers</h5>
                        <h2>Meet Our teachers</h2>
                    </div> <!-- section title -->
                    <div class="teachers-cont">
                        <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt  mauris. <br> <br> auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt  mauris</p>
                        <a href="#" class="main-btn mt-55">Career with us</a>
                    </div> <!-- teachers cont -->
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="teachers mt-20">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="singel-teachers mt-30 text-center">
                                    <div class="image">
                                        <img src="{{asset('/')}}frontend/assets/images/teachers/t-1.jpg" alt="Teachers">
                                    </div>
                                    <div class="cont">
                                        <a href="teachers-singel.html"><h6>Mark alen</h6></a>
                                        <span>Lecturer</span>
                                    </div>
                                </div> <!-- singel teachers -->
                            </div>
                            <div class="col-sm-6">
                                <div class="singel-teachers mt-30 text-center">
                                    <div class="image">
                                        <img src="{{asset('/')}}frontend/assets/images/teachers/t-2.jpg" alt="Teachers">
                                    </div>
                                    <div class="cont">
                                        <a href="teachers-singel.html"><h6>David card</h6></a>
                                        <span>Lecturer</span>
                                    </div>
                                </div> <!-- singel teachers -->
                            </div>
                            <div class="col-sm-6">
                                <div class="singel-teachers mt-30 text-center">
                                    <div class="image">
                                        <img src="{{asset('/')}}frontend/assets/images/teachers/t-3.jpg" alt="Teachers">
                                    </div>
                                    <div class="cont">
                                        <a href="teachers-singel.html"><h6>Rebeka alig</h6></a>
                                        <span>Leacturer</span>
                                    </div>
                                </div> <!-- singel teachers -->
                            </div>
                            <div class="col-sm-6">
                                <div class="singel-teachers mt-30 text-center">
                                    <div class="image">
                                        <img src="{{asset('/')}}frontend/assets/images/teachers/t-4.jpg" alt="Teachers">
                                    </div>
                                    <div class="cont">
                                        <a href="teachers-singel.html"><h6>Hanna bein</h6></a>
                                        <span>Asst.Head</span>
                                    </div>
                                </div> <!-- singel teachers -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- teachers -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== TEACHERS PART ENDS ======-->

    <!--====== TEASTIMONIAL PART START ======-->

    <section id="testimonial" class="bg_cover pt-115 pb-115" data-overlay="8" style="background-image: url(images/bg-2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-40">
                        <h5>Testimonial</h5>
                        <h2>What they say</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row testimonial-slied mt-40">
                <div class="col-lg-6">
                    <div class="singel-testimonial">
                        <div class="testimonial-thum">
                            <img src="{{asset('/')}}frontend/assets/images/testimonial/t-1.jpg" alt="Testimonial">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p>Aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet sem nibh id elit sollicitudirem </p>
                            <h6>Rubina Helen</h6>
                            <span>Principal</span>
                        </div>
                    </div> <!-- singel testimonial -->
                </div>
                <div class="col-lg-6">
                    <div class="singel-testimonial">
                        <div class="testimonial-thum">
                            <img src="{{asset('/')}}frontend/assets/images/testimonial/t-2.jpg" alt="Testimonial">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p>Aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet sem nibh id elit sollicitudirem </p>
                            <h6>Rubina Helen</h6>
                            <span>Vice Principal </span>
                        </div>
                    </div> <!-- singel testimonial -->
                </div>
                <div class="col-lg-6">
                    <div class="singel-testimonial">
                        <div class="testimonial-thum">
                            <img src="{{asset('/')}}frontend/assets/images/testimonial/t-3.jpg" alt="Testimonial">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p>Aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet sem nibh id elit sollicitudirem </p>
                            <h6>Rubina Helen</h6>
                            <span>Asst,Teacher</span>
                        </div>
                    </div> <!-- singel testimonial -->
                </div>
            </div> <!-- testimonial slied -->
        </div> <!-- container -->
    </section>

    <!--====== TEASTIMONIAL PART ENDS ======-->

    <!--====== PUBLICATION PART START ======-->

    <section id="publication-part" class="pt-115 pb-120 gray-bg">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-6 col-md-8 col-sm-7">
                    <div class="section-title pb-60">
                        <h5>Publications</h5>
                        <h2>From Store </h2>
                    </div> <!-- section title -->
                </div>
                <div class="col-lg-6 col-md-4 col-sm-5">
                    <div class="products-btn text-right pb-60">
                        <a href="#" class="main-btn">All Products</a>
                    </div> <!-- products btn -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="singel-publication mt-30">
                        <div class="image">
                            <img src="{{asset('/')}}frontend/assets/images/publication/p-1.jpg" alt="Publication">
                            <div class="add-cart">
                                <ul>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="cont">
                            <div class="name">
                                <a href="shop-singel.html"><h6>Set for life </h6></a>
                                <span>By Scott Trench</span>
                            </div>
                            <div class="button text-right">
                                <a href="#" class="main-btn">Buy Now (150 tk)</a>
                            </div>
                        </div>
                    </div> <!-- singel publication -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="singel-publication mt-30">
                        <div class="image">
                            <img src="{{asset('/')}}frontend/assets/images/publication/p-2.jpg" alt="Publication">
                            <div class="add-cart">
                                <ul>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="cont">
                            <div class="name">
                                <a href="shop-singel.html"><h6>A Daughters </h6></a>
                                <span>By Scott Trench</span>
                            </div>
                            <div class="button text-right">
                                <a href="#" class="main-btn">Buy Now (100 tk)</a>
                            </div>
                        </div>
                    </div> <!-- singel publication -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="singel-publication mt-30">
                        <div class="image">
                            <img src="{{asset('/')}}frontend/assets/images/publication/p-3.jpg" alt="Publication">
                            <div class="add-cart">
                                <ul>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="cont">
                            <div class="name">
                                <a href="shop-singel.html"><h6>A Magnet </h6></a>
                                <span>By Scott Trench</span>
                            </div>
                            <div class="button text-right">
                                <a href="#" class="main-btn">Buy Now (220 tk)</a>
                            </div>
                        </div>
                    </div> <!-- singel publication -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="singel-publication mt-30">
                        <div class="image">
                            <img src="{{asset('/')}}frontend/assets/images/publication/p-4.jpg" alt="Publication">
                            <div class="add-cart">
                                <ul>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="cont">
                            <div class="name">
                                <a href="shop-singel.html"><h6>Pices of light</h6></a>
                                <span>By Scott Trench</span>
                            </div>
                            <div class="button text-right">
                                <a href="#" class="main-btn">Buy Now (275 tk)</a>
                            </div>
                        </div>
                    </div> <!-- singel publication -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->

        <!--====== PUBLICATION PART ENDS ======-->

        <div class="popup">
            <div class="popup__content">
                <div class="popup__body">
                    <button class="popup__close" type="button" ></button>
                    <div class="popup__text">

                        <div class="mb-4">
                            <a href="index.html" >  <button class="popup__close" type="button" ></button></a>
                            <h3 style="text-align: center; margin-bottom: 60px;"><strong > Teacher Login</strong></h3>

                            <form action="#" method="post">
                                <div class="form-group first" >
                                    <select name="Branch" id="branch">
                                        <option value="Abc_Branch-1">Select Your Branch</option>
                                        <option value="Abc_Branch-2">Abc Branch-1</option>
                                        <option value="Abc_Branch-3">Abc Branch-2</option>
                                        <option value="Abc_Branch-4">Abc Branch-3</option>
                                        <option value="Abc_Branch-5">Abc Branch-4</option>
                                    </select>
                                </div>
                                <div class="form-group first" style="margin-top: 10px;">
                                    <input type="text" class="form-control" id="username" placeholder="Username">
                                </div>
                                <div class="form-group last mb-4 " style="margin-top: 10px;">
                                    <input type="password" class="form-control" id="password" placeholder="Password">
                                </div>



                                <input type="submit" value="Log In" class="btn btn-pill text-white btn-block" style="background: #021d3a;">
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>

        <div class="popu">
            <div class="popu__content">
                <div class="popu__body">
                    <button class="popu__close" type="button" ></button>
                    <div class="popu__text">

                        <div class="mb-4">
                            <a href="index.html" >  <button class="popu__close" type="button" ></button></a>
                            <h3 style="text-align: center; margin-bottom: 60px;"><strong > Student Login</strong></h3>

                            <form action="#" method="post">
                                <div class="form-group first" >
                                    <select name="Branch" id="branch">
                                        <option value="Abc_Branch-1">Select Your Branch</option>
                                        <option value="Abc_Branch-2">Abc Branch-1</option>
                                        <option value="Abc_Branch-3">Abc Branch-2</option>
                                        <option value="Abc_Branch-4">Abc Branch-3</option>
                                        <option value="Abc_Branch-5">Abc Branch-4</option>
                                    </select>
                                </div>
                                <div class="form-group first" style="margin-top: 10px;">
                                    <input type="text" class="form-control" id="username" placeholder="Username">
                                </div>
                                <div class="form-group last mb-4 " style="margin-top: 10px;">
                                    <input type="password" class="form-control" id="password" placeholder="Password">
                                </div>



                                <input type="submit" value="Log In" class="btn btn-pill text-white btn-block" style="background: #021d3a;">
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>

@endsection
