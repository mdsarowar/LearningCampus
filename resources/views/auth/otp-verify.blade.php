@php
    if (!session('user_check')) {
        echo '
            <script>
                window.location.href = "login"
            </script>
        ';
    }
    if (session('is_verified') && session('is_verified') === 'true') {
        echo '
            <script>
                setTimeout(() => {
                    window.location.href = "reset-password"
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
                        <h1>OTP Validation</h1>
                        <p><span class="line"></span> Validate OTP With</p>

                        <form action="{{ route('otp.validation') }}" method="POST">
                            @csrf
                            <div class="row align-items-end">
                                <div class="col-8">
                                    <label for="otp">Enter OTP <span>*</span></label><br>
                                    <input type="number" style="border-color: rgb(194, 194, 194); width:100%"
                                        placeholder="XXXXXX" name="otp" id="otp" required />
                                </div>
                                <div class="col-4">
                                    <button type="submit" class="btn otp_validation_btn" id="sign_up_btn"
                                        style="text-align: center; padding:11px">Verify OTP</button>
                                </div>
                            </div>
                        </form>

                        @if (session('is_verified') && session('is_verified') === 'false')
                            <div>
                                <p style="font-size: 1rem">OTP not matched!</p>
                            </div>
                        @endif

                        <div id="searchLoader" style="text-align: center; display:none">
                            <img src="{{ asset('assets/img/dual_ball_loader.gif') }}" alt="" width="80">
                        </div>

                        @if (session('is_exists') && session('is_exists') === 'true')
                            <div style="display:; color: rgb(124, 0, 155);font-size: 20px;font-weight: bold;">
                                OTP has sent to this number
                            </div>
                        @endif

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
                        @if (session('is_verified') && session('is_verified') === 'true')
                            <div style="position: absolute;transform: translate(15%,120%);" id="valid_otp_msg">
                                <h2 style="font-size: 40px;font-weight: bold; color:#00b542;">Verification Successful
                                </h2>
                                <p style="font-size: 22px;font-weight: bold;margin-top: -5px;">Please wait while
                                    redirecting...
                                </p>
                            </div>
                        @endif
                        <img src="assets/img/Sign_in.png" alt="">
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Global Vendor -->
    @include('layouts.inc.footer')

    <script>
        $('#sign_up_btn').click(function() {
            $('#searchLoader').show();
        });
    </script>
</body>

</html>
