@extends('frontend.master')
@section('body')
    @foreach($contents as $content)

        <div id="digitalpart" class="pt-65">
            <div class="container">
                <div class="digital">
                    <div class="row no-gutters">
                        <div class="col-lg-6">
                            <div class="digital-cont digital-color-1">
                                <div class="icon">
                                    <i class="fa fa-file-pdf"></i>
                                </div>

                                <div class="icn row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <i class="fa fa-desktop" style="font-size: 25px;" aria-hidden="true"><span><h3 style="margin-left: 5px;">All Books PDF</h3></span></i>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6" style="text-align: right;">
                                        <a href="#" class="main-btn">View all</a>
                                    </div>

                                </div>

                                <p>{{$content->content}}</p>

                            </div> <!-- apply cont -->
                        </div>
                    </div>
                </div> <!-- row -->


            </div>

        </div>
    @endforeach


{{--    <div id="digitalpart" class="pt-65">--}}
{{--        <div class="container">--}}
{{--            <div class="digital">--}}
{{--                <div class="row no-gutters">--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <div class="digital-cont digital-color-1">--}}
{{--                            <div class="icn row">--}}
{{--                                <div class="col-lg-6 col-md-6 col-sm-6">--}}
{{--                                    <i class="fa fa-desktop" style="font-size: 25px;" aria-hidden="true"><span><h3 style="margin-left: 5px;">Multimedia Lab</h3></span></i>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-6 col-md-6 col-sm-6" style="text-align: right;">--}}
{{--                                    <a href="#" class="main-btn">View all</a>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum expedita, itaque molestiae beatae quas, voluptas cupiditate recusandae labore consequuntur amet odio quam necessitatibus magni fugit architecto aperiam porro. Molestiae, dolorum. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque et delectus cupiditate dolores blanditiis quisquam, nihil eveniet voluptatum veritatis, inventore qui minus veniam quo voluptatibus eius! Repudiandae cumque fugit ipsa!</p>--}}

{{--                        </div> <!-- apply cont -->--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div> <!-- row -->--}}


{{--        </div>--}}

{{--    </div>--}}


{{--    <div id="digitalpart" class="pt-65">--}}
{{--        <div class="container">--}}
{{--            <div class="digital">--}}
{{--                <div class="row no-gutters">--}}
{{--                    <div class="col-lg-6 col-md-6 col-sm-6">--}}
{{--                        <div class="digital-cont digital-color-1">--}}
{{--                            <div class="icn row">--}}
{{--                                <div class="col-lg-6 col-md-6 col-sm-6">--}}
{{--                                    <i class="fa fa-desktop" style="font-size: 25px;" aria-hidden="true"><span><h3 style="margin-left: 5px;">Computer Lab</h3></span></i>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-6 col-md-6 col-sm-6" style="text-align: right;">--}}
{{--                                    <a href="#" class="main-btn">View all</a>--}}
{{--                                </div>--}}

{{--                            </div>--}}

{{--                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum expedita, itaque molestiae beatae quas, voluptas cupiditate recusandae labore consequuntur amet odio quam necessitatibus magni fugit architecto aperiam porro. Molestiae, dolorum. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque et delectus cupiditate dolores blanditiis quisquam, nihil eveniet voluptatum veritatis, inventore qui minus veniam quo voluptatibus eius! Repudiandae cumque fugit ipsa!</p>--}}

{{--                        </div> <!-- apply cont -->--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div> <!-- row -->--}}


{{--        </div>--}}

{{--    </div>--}}


{{--    <div id="digitalpart" class="pt-65">--}}
{{--        <div class="container">--}}
{{--            <div class="digital">--}}
{{--                <div class="row no-gutters">--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <div class="digital-cont digital-color-1">--}}
{{--                            <div class="icn row">--}}
{{--                                <div class="col-lg-6 col-md-6 col-sm-6">--}}
{{--                                    <i class="fa fa-desktop" style="font-size: 25px;" aria-hidden="true"><span><h3 style="margin-left: 5px;">Digital Lab</h3></span></i>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-6 col-md-6 col-sm-6" style="text-align: right;">--}}
{{--                                    <a href="#" class="main-btn">View all</a>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum expedita, itaque molestiae beatae quas, voluptas cupiditate recusandae labore consequuntur amet odio quam necessitatibus magni fugit architecto aperiam porro. Molestiae, dolorum. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque et delectus cupiditate dolores blanditiis quisquam, nihil eveniet voluptatum veritatis, inventore qui minus veniam quo voluptatibus eius! Repudiandae cumque fugit ipsa!</p>--}}

{{--                        </div> <!-- apply cont -->--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div> <!-- row -->--}}


{{--        </div>--}}

{{--    </div>--}}


{{--    <div id="digitalpart" class="pt-65">--}}
{{--        <div class="container">--}}
{{--            <div class="digital">--}}
{{--                <div class="row no-gutters">--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <div class="digital-cont digital-color-1">--}}
{{--                            <div class="icn row">--}}
{{--                                <div class="col-lg-6 col-md-6 col-sm-6">--}}
{{--                                    <i class="fa fa-desktop" style="font-size: 25px;" aria-hidden="true"><span><h3 style="margin-left: 5px;">Library</h3></span></i>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-6 col-md-6 col-sm-6" style="text-align: right;">--}}
{{--                                    <a href="#" class="main-btn">View all</a>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum expedita, itaque molestiae beatae quas, voluptas cupiditate recusandae labore consequuntur amet odio quam necessitatibus magni fugit architecto aperiam porro. Molestiae, dolorum. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque et delectus cupiditate dolores blanditiis quisquam, nihil eveniet voluptatum veritatis, inventore qui minus veniam quo voluptatibus eius! Repudiandae cumque fugit ipsa!</p>--}}

{{--                        </div> <!-- apply cont -->--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div> <!-- row -->--}}


{{--        </div>--}}

{{--    </div>--}}

@endsection
