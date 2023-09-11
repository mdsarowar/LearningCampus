@extends('frontend.master')
@section('body')


    <section id="news-page" class="pt-70 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title mt-50">
                        <h5>NEWS</h5>
                    </div> <!-- section title -->

                    <div class="news" id="news">
                        @foreach($breakings as $breaking)
                            <div class="list">
                                <div class="list-head col-lg-12">
                                    <h2>{{$loop->iteration}}. {{$breaking->title}}</h2>
                                </div>
                                <div class="list-desc col-lg-12 col-md-12">
                                    <img src="{{asset($breaking->image)}}" alt="pic2" >
                                    <p>{{$breaking->news}}
                                    </p>
                                </div>
                                </br>
                            </div>
                        @endforeach



{{--                        <div class="list">--}}
{{--                            <div class="list-head col-lg-12">--}}
{{--                                <h2>2. Breaking News</h2>--}}
{{--                            </div>--}}
{{--                            <div class="list-desc col-lg-12 col-md-12">--}}
{{--                                <img src="images/news/ns-2.jpg" alt="pic1" >--}}
{{--                                <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt  mauris auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt  mauris--}}

{{--                                </p>--}}
{{--                            </div>--}}
{{--                            </br>--}}
{{--                        </div>--}}



{{--                        <div class="list">--}}
{{--                            <div class="list-head col-lg-12">--}}
{{--                                <h2>3. Breaking News</h2>--}}
{{--                            </div>--}}
{{--                            <div class="list-desc col-lg-12 col-md-12">--}}
{{--                                <img src="images/news/ns-2.jpg" alt="pic1" >--}}
{{--                                <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt  mauris auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt  mauris--}}

{{--                                </p>--}}
{{--                            </div>--}}
{{--                            </br>--}}
{{--                        </div>--}}

{{--                        <div class="list">--}}
{{--                            <div class="list-head col-lg-12">--}}
{{--                                <h2>4. Breaking News</h2>--}}
{{--                            </div>--}}
{{--                            <div class="list-desc col-lg-12 col-md-12">--}}
{{--                                <img src="images/news/ns-3.jpg" alt="pic1" >--}}
{{--                                <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt  mauris auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt  mauris--}}

{{--                                </p>--}}
{{--                            </div>--}}
{{--                            </br>--}}
{{--                        </div>--}}


                    </div>
                </div>


            </div> <!-- row -->

        </div> <!-- container -->
    </section>


@endsection
