@php
    if (!session('otp_verified')) {
        echo '
            <script>
                window.location.href = "login"
            </script>
        ';
    }
    if (session('updated') && session('updated') === 'true') {
        echo '
            <script>
                setTimeout(() => {
                    window.location.href = "login"
                }, 2000);
            </script>
        ';
    }
@endphp

<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->

<head>
    <title>Password Reset</title>
    @include('layouts.inc.head')
</head>
<!-- End Head -->

<body>


    <div class="signup_main">
        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <div class="signup_left">
                        <h1>Recover Password</h1>
                        <p><span class="line"></span> Enter New Password</p>

                        <div>
                            <form action="{{ route('reset.password.submit') }}" method="POST">
                                @csrf
                                <div class="">
                                    <label for="">Password <span>*</span></label><br>
                                    <input type="password" style="border-color: rgb(194, 194, 194); width:100%"
                                        name="password" id="password" required />
                                </div>
                                <div class="">
                                    <label for="">Confirm Password <span>*</span></label><br>
                                    <input type="password" style="border-color: rgb(194, 194, 194); width:100%"
                                        name="confirm_password" id="confirm_password" required />
                                </div>

                                <input type="hidden" value="{{ session('phoneNumber') }}" id="phoneNumber"
                                    name="phoneNumber">
                                <div class="mt-3 text-right">
                                    <button type="submit" class="btn change_password_btn" id="sign_up_btn"
                                        style="text-align: center; padding:8px 25px">Change Password</button>
                                </div>
                            </form>
                        </div>

                        @if (session('updated') && session('updated') === 'false')
                            <div>
                                <p style="font-size: 1rem">Password not matched!</p>
                            </div>
                        @endif

                        <div id="searchLoader" style="text-align: center; display:none">
                            <img src="{{ asset('assets/img/dual_ball_loader.gif') }}" alt="" width="80">
                        </div>
                        <div id="responseMSG" style="display:none; color: red;font-size: 20px;font-weight: bold;"></div>

                        <div class="mt-4">
                            <p style="font-size: 1rem; color: black;" class="mt-2">Login to your dashboard...
                                <a href="{{ route('login') }}"
                                    style="border:1px solid #686868; border-radius:5px; color:#ffffff; background:#000000"
                                    class="px-3 py-1 ml-2">Login</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="signup_right">
                        @if (session('updated') && session('updated') === 'true')
                            <div style="position: absolute;transform: translate(15%,120%);" id="valid_otp_msg">
                                <h2 style="font-size: 40px;font-weight: bold; color:#00b542;">Password Updated
                                    Successfully!
                                </h2>
                                <p style="font-size: 22px;font-weight: bold;margin-top: -5px;">Please wait while
                                    redirecting...
                                </p>
                            </div>
                        @endif
                        <img src="assets/img/Sign_up.png" alt="">
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Global Vendor -->
    @include('layouts.inc.footer')

</body>

</html>
