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
                        <p><span class="line"></span> Recover Password With</p>

                        <form action="{{ route('user.check') }}" method="POST">
                            @csrf
                            <div class="row align-items-end">
                                <div class="col-8">
                                    <label for="phoneNumber">Phone Number <span>*</span></label><br>
                                    <input type="number" style="border-color: rgb(194, 194, 194); width:100%"
                                        placeholder="01XXXXXXXXX" name="phoneNumber" id="phoneNumber" required />
                                </div>
                                <div class="col-4">
                                    <button type="submit" class="btn" id="sign_up_btn"
                                        style="text-align: center; padding:11px">Send OTP</button>
                                </div>
                            </div>
                        </form>

                        @if (session('is_exists') && session('is_exists') === 'false')
                            <div>
                                <p style="font-size: 1rem">User not found with this number</p>
                            </div>
                        @endif


                        <div id="searchLoader" style="text-align: center; display:none">
                            <img src="{{ asset('assets/img/dual_ball_loader.gif') }}" alt="" width="80">
                        </div>

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
