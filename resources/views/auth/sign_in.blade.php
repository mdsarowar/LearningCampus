<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->

<head>
    <title>Learning Campus</title>
    @include('layouts.inc.head')
</head>
<!-- End Head -->

<body>


    <div class="signup_main">
        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <div class="signup_left">
                        <h1>Sign In</h1>
                        <p><span class="line"></span> Sign In With</p>

                        @php
                            $captchaCode = mt_rand(100000, 999999);
                            session(['captchaCode' => $captchaCode]);
                        @endphp


                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div>
                                <label for="">Branch <span>*</span></label><br>
                                <select name="branch_id" id="">
                                    <option value="">Select Branch</option>
                                    @foreach ($branchDetails as $branch)
                                        <option value="{{ $branch['id'] }}">{{ $branch['branch_name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="">Email <span>*</span></label><br>
                                <input type="email" style="border-color: rgb(194, 194, 194)" placeholder="Email"
                                    name="email" id="" required>
                            </div>
                            <div>
                                <label for="">Password <span>*</span></label><br>
                                <input type="password" style="border-color: rgb(194, 194, 194)" placeholder="Password"
                                    name="password" id="" required>
                            </div>
                            <div>
                                <label for="">Verification Code <span>*
                                        {{ implode(' ', str_split($captchaCode)) }}</span></label><br>
                                <input type="number" style="border-color: rgb(194, 194, 194)"
                                    placeholder="Please enter the numbe display above" name="captcha_code"
                                    required><br><br>
                                <br>
                            </div>
                            <div>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                <x-input-error :messages="$errors->get('captcha')" class="mt-2" />
                            </div>
                            <input type="submit" value="Sign In" id="sign_up_btn">
                        </form>

                        {{-- <div class="col-8 mt-3 ml-3">
                            <div style="width: 100%; text-align:right;">
                                <a href="{{ route('password.request') }}"
                                    style="border:1px solid #686868; padding:5px 8px; border-radius:5px; color:#ffffff; background:#000000; font-weight:bold; font-size:1rem"
                                    class="ml-2">Recover Password</a>
                            </div>
                        </div> --}}

                        <div class="col-8 mt-3 ml-2 row">
                            <div>
                                <a href="{{ route('student.login') }}"
                                    style="border:1px solid #686868; padding:5px 8px; border-radius:5px; color:#ffffff; background:#000000; font-weight:bold; font-size:1rem"
                                    class="">Student Login</a>
                            </div>
                            <div class="ml-4">
                                <a href="{{ route('password.request') }}"
                                    style="border:1px solid #686868; padding:5px 8px; border-radius:5px; color:#ffffff; background:#000000; font-weight:bold; font-size:1rem"
                                    class="">Recover Password</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-6">
                    @if (session('registerd'))
                        <div style="position: absolute;transform: translate(15%,120%);">
                            <h2 style="font-size: 40px;font-weight: bold; color:#00b542">Registration Successful</h2>
                            <p style="font-size: 22px;font-weight: bold;margin-top: -5px;">Please Login to your account
                            </p>
                        </div>
                    @endif
                    <div class="signup_right">
                        <img src="assets/img/Sign_in.png" alt="">
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Global Vendor -->
    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/bootstrap.min.js"></script>
</body>

</html>
