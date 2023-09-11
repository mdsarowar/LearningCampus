<div class="header-top d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="header-contact text-lg-left text-center">
                    <ul>
                        <li><img src="{{asset('/')}}frontend/assets/images/all-icon/map.png" alt="icon"><span>Sector 07, House #11, Uttara, Dhaka 1230.</span></li>
                        <li><img src="{{asset('/')}}frontend/assets/images/all-icon/email.png" alt="icon"><span>info@educare.com</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="header-opening-time text-lg-right text-center">
                    <p>Opening Hours : Saturay to Thursday- 8 Am to 3 Pm</p>
                </div>
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</div> <!-- header top -->

<div class="header-logo-support pt-30 pb-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="logo">
                    <a href="{{route('home_index')}}">
                        <img src="{{asset('/')}}frontend/assets/images/Educare logo.png" alt="Logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-8 col-md-8">
                <div class="support-button float-right d-none d-md-block">
                    <div class="support float-left">
                        <div class="icon">
                            <img src="{{asset('/')}}frontend/assets/images/all-icon/support.png" alt="icon">
                        </div>
                        <div class="cont">
                            <p>Need Help? call us free</p>
                            <span>+880 1986-306582</span>
                        </div>
                    </div>
                    <div class="button float-left">
                        <a href="{{route('student.admission')}}" class="main-btn">Apply Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-8">
                <div class="float-right d-none d-md-block top-login-button">
                    <div class="support float-left">
                        <div class="login-btn" style="text-align: center; justify-content: center;">
                            <a href="/login" class="main-btn" style="padding: 0 30px">Login</a>
                            <a href="/student-login" class="main-btn" style="margin-left: 10px">Student Login</a>
                            {{-- <a href="/login" class="popup-trigge">Student Login / Guardian Login</a> --}}
                        </div>
                        <!--<div class="login-btn" style="text-align: center; justify-content: center;">-->
                        <!--    <a href="/student-login" class="main-btn" >Student Login</a>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</div>
