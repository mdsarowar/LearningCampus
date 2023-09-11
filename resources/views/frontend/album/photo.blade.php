@extends('frontend.master')
@section('body')

    <!--====== GALLERY PART START ======-->


    <section id="gallery-page" class="pt-90 pb-120 gray-bg">
        <div class="container">

            <div class="gallery-menu" id="gallery-menu">


                <div class="row">
                    @foreach($gallerys as $photo)
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <img src="{{asset($photo->photo)}}" alt="">
                                </div>
                            </div>
                        </div>
                    @endforeach


{{--                    <div class="col-lg-4 col-md-6 col-sm-12">--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-body">--}}
{{--                                <img src="images/event/e-2.jpg" alt="">--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}


{{--                    <div class="col-lg-4 col-md-6 col-sm-12">--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-body">--}}
{{--                                <img src="images/event/e-4.jpg" alt="">--}}

{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}

                </div>


                <div class="row">
{{--                    <div class="col-lg-4 col-md-6 col-sm-12">--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-body">--}}
{{--                                <img src="images/event/singel-event/coundown.jpg" alt="">--}}
{{--                            </div>--}}

{{--                        </div>--}}

{{--                    </div>--}}
{{--                    <div class="col-lg-4 col-md-6 col-sm-12">--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-body">--}}
{{--                                <img src="images/event/singel-event/se-1.jpg" alt="">--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 col-md-6 col-sm-12">--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-body">--}}
{{--                                <img src="images/event/e-1.jpg" alt="">--}}

{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}

                </div>
            </div>


        </div>
{{--        </div>--}}
    </section>


    <!--====== GALLERY PART ENDS ======-->



@endsection
