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
                        <h1>Sign Up</h1>
                        <p><span class="line"></span> Sign Up With</p>

                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        @php
                            $captchaCode = mt_rand(100000, 999999);
                            session(['captchaCode' => $captchaCode]);
                        @endphp

                        <form action="{{ route('register') }}" method="POST">
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
                                <label for="">Name <span>*</span></label><br>
                                <input type="text" style="border-color: rgb(194, 194, 194)" placeholder="Name" name="name" id="" required>
                            </div>
                            <div>
                                <label for="">Email <span>*</span></label><br>
                                <input type="email" style="border-color: rgb(194, 194, 194)" placeholder="Email" name="email" id="" required>
                            </div>
                            <div>
                                <label for="">Phone Number <span>*</span></label><br>
                                <input type="number" style="border-color: rgb(194, 194, 194)" placeholder="01XXXXXXXX" name="phoneNumber" id="" required>
                            </div>
                            <div>
                                <label for="">Password <span>*</span></label><br>
                                <input type="password" style="border-color: rgb(194, 194, 194)" placeholder="Password" name="password" id="" required>
                            </div>
                            <div>
                                <label for="">Confirm Password<span>*</span></label><br>
                                <input type="password" style="border-color: rgb(194, 194, 194)" placeholder="Password" name="password_confirmation"
                                    id="" required>
                            </div>
                            <div>
                                <label for="">Verification Code <span>*
                                        {{ implode(' ', str_split($captchaCode)) }}</span></label><br>
                                <input type="number" style="border-color: rgb(194, 194, 194)" placeholder="Please enter the numbe display above"
                                    name="captcha_code" required><br><br>
                                <br>
                            </div>
                            <div>
                                <x-input-error :messages="$errors->get('password')" class="mt-1" />
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1" />
                                <x-input-error :messages="$errors->get('captcha')" class="mt-1" />
                            </div>
                            <input type="submit" value="Sign Up" id="sign_up_btn">
                        </form>

                        <div>
                            <p style="font-size: 1rem; color: black;" class="mt-2">Already have an account?
                                <a href="{{ route('login') }}" style="border:1px solid #686868; border-radius:5px; color:#ffffff; background:#000000"
                                    class="px-2 py-1 ml-2">Login Here...</a>
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="signup_right">
                        <img src="assets/img/Sign_up.png" alt="">
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
