<div class="container">
    <div class="row">
        <div class="col-lg-10 col-md-10 col-sm-9 col-8">
            <nav class="navbar navbar-expand-lg">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="collapse navbar-collapse sub-menu-bar w-100" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto ">
                        <li class="nav-item">
                            <a class="active" href="{{route('home_index')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('about')}}">About Us</a>

                        </li>
                        <li class="nav-item">
                            <a href="{{route('front_breaking_news')}}">Breaking News</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('front_content')}}">Digital Content</a>

                        </li>
                        <li class="nav-item">
                            <a href="{{asset('/')}}frontend/assets/#">Result</a>
                            <ul class="sub-menu">
                                <li><a href="{{asset('/')}}frontend/assets/boardresult.html">Board Result</a></li>
                                <li><a href="{{asset('/')}}frontend/assets/academicresult.html">Academic Result</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#">Albums</a>
                            <ul class="sub-menu">
                                @foreach($albums as $album)
                                    @if($album->type == 'event')
                                        <li><a href="{{route('album_event',$album->id)}}">Events</a></li>
                                    @endif
                                    @if($album->type == 'photo')
                                            <li><a href="{{route('album_photo',$album->id)}}">Gellery</a></li>
                                    @endif
                                    @if($album->type == 'video')
                                            <li><a href="{{route('album_video',$album->id)}}">Videos</a></li>
                                    @endif

                                @endforeach

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{asset('/')}}frontend/assets/#">Academic</a>
                            <ul class="sub-menu">
                                <li><a href="{{asset('/')}}frontend/assets/calender.html">Academic Celender</a></li>
                                <li><a href="{{asset('/')}}frontend/assets/director.html">Board Of Director</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('notice')}}">Notice</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('contact')}}">Contact us</a>
                        </li>
                    </ul>
                </div>
            </nav> <!-- nav -->
        </div>

    </div> <!-- row -->
</div> <!-- container -->
