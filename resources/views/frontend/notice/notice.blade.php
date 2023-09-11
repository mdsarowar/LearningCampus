@extends('frontend.master')
@section('body')

    <section id="fesilities1-part" class="pt-65">
        <div class="container">
            <div class="section-title mt-50">
                <h5>Notice</h5>
            </div> <!-- section title -->

            <div class="search">
                <form action="">
                    <input type="text" placeholder="search notice by title">
                    <button type="submit">Search</button>
                </form>
            </div>


            <table class="notice"style="
            border-collapse: collapse;
            width: 100%; margin: 10px;
            margin-bottom:50px;" >

                <tr >
                    <th>Sl.</th>
                    <th>Title</th>
                    <th>Notice</th>
                    <th>Publish Date</th>

                </tr>
                @foreach($notices as $notice)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$notice->title}}</td>
                        <td>{{$notice->file}}</td>
                        <td>{{$notice->updated_at}}</td>
                    </tr>
                @endforeach


{{--                <tr>--}}
{{--                    <td>102</td>--}}
{{--                    <td>Semester Result</td>--}}
{{--                    <td>file</td>--}}
{{--                    <td>Jul 31, 2022, 12:47:34 PM</td>--}}

{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <td>103</td>--}}
{{--                    <td>Annual Exam will be </td>--}}
{{--                    <td>No file</td>--}}
{{--                    <td>Jul 31, 2022, 12:47:34 PM</td>--}}

{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <td>104</td>--}}
{{--                    <td>Educatinal</td>--}}
{{--                    <td>No. File</td>--}}
{{--                    <td>Feb 24, 2021, 4:53:05 PM</td>--}}

{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <td>105</td>--}}
{{--                    <td>Hsc exam will be held on</td>--}}
{{--                    <td>No.file</td>--}}
{{--                    <td>Feb 24, 2021, 4:53:05 P</td>--}}

{{--                </tr>--}}

            </table>



        </div>
    </section>

@endsection

