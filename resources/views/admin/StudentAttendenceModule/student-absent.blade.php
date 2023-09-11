<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->

<head>
    <title>Learning Campus | General Routine</title>
    @include('layouts.inc.head')
</head>
<!-- End Head -->

<body>

    <!----- preloader ----->
    @include('layouts.inc.preloader')
    <!----- /preloader ----->



    <!-- Header (Topbar) -->
    <header class="u-header">
        @include('layouts.inc.header')
    </header>
    <!-- End Header (Topbar) -->
    <main class="u-main" role="main">
        <!-- Sidebar -->
        <aside id="sidebar" class="u-sidebar">
            @include('layouts.inc.sidebar')
        </aside>
        <!-- End Sidebar -->

        <div class="u-content">
            <div class="u-body">

                <section class="es-form-area">
                    <div class="card">
                        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                            <h2 class="text-white mb-0"> Today Students Absent
                                <p>({{ date('D d M, Y') }})</p>
                            </h2>
                        </header>

                        <div class="academic_info">

                            <div class="container">

                                <p class="total_count"><i class="fa-solid fa-users"></i> Total Absent
                                    {{ $total }}</p>

                                <div class="row mt-3 mb-4">

                                    <div class="col-md-4">
                                        <div class="absentClassLeft">

                                            <ul>
                                                <li onclick="geteData('Play')">
                                                    <a href="javascript:void(0)">
                                                        <span>Play(Bangla Medium)</span>
                                                    </a>
                                                </li>
                                                <li onclick="geteData('Nursary')"><a href="javascript:void(0)">
                                                        <span>Nursary(Bangla Medium)</span>
                                                    </a>
                                                </li>
                                                <li onclick="geteData('KG')">
                                                    <a href="javascript:void(0)">
                                                        <span>KG(Bangla Medium)</span>
                                                    </a>
                                                </li>
                                                <li onclick="geteData('One')"><a href="javascript:void(0)">
                                                        <span>One(Bangla Medium)</span>
                                                    </a>
                                                </li>
                                                <li onclick="geteData('Two')">
                                                    <a href="javascript:void(0)">
                                                        <span>Two(Bangla Medium)</span>
                                                    </a>
                                                </li>
                                                <li onclick="geteData('Three')"><a href="javascript:void(0)">
                                                        <span>Three(Bangla Medium)</span>
                                                    </a>
                                                </li>
                                                <li onclick="geteData('Four')">
                                                    <a href="javascript:void(0)">
                                                        <span>Four(Bangla Medium)</span>
                                                    </a>
                                                </li>
                                                <li onclick="geteData('Five')"><a href="javascript:void(0)">
                                                        <span>Five(Bangla Medium)</span>
                                                    </a>
                                                </li>
                                                <li onclick="geteData('Six')">
                                                    <a href="javascript:void(0)">
                                                        <span>Six(Bangla Medium)</span>
                                                    </a>
                                                </li>
                                                <li onclick="geteData('Seven')"><a href="javascript:void(0)">
                                                        <span>Seven(Bangla Medium)</span>
                                                    </a>
                                                </li>
                                                <li onclick="geteData('Eight')">
                                                    <a href="javascript:void(0)">
                                                        <span>Eight(Bangla Medium)</span>
                                                    </a>
                                                </li>
                                                <li onclick="geteData('Nine')"><a href="javascript:void(0)">
                                                        <span>Nine(Bangla Medium)</span>
                                                    </a>
                                                </li>
                                                <li onclick="geteData('Ten')">
                                                    <a href="javascript:void(0)">
                                                        <span>Ten(Bangla Medium)</span>
                                                    </a>
                                                </li>
                                                <li onclick="geteData('Eleven')"><a href="javascript:void(0)">
                                                        <span>Eleven(Bangla Medium)</span>
                                                    </a>
                                                </li>
                                                <li onclick="geteData('Tweleve')">
                                                    <a href="javascript:void(0)">
                                                        <span>Tweleve(Bangla Medium)</span>
                                                    </a>
                                                </li>
                                                <ul>
                                                    <li onclick="geteData('PlayEn')">
                                                        <a href="javascript:void(0)">
                                                            <span>Play(English Medium)</span>
                                                        </a>
                                                    </li>
                                                    <li onclick="geteData('NursaryEn')">
                                                        <a href="javascript:void(0)">
                                                            <span>Nursary(English Medium)</span>
                                                        </a>
                                                    </li>
                                                    <li onclick="geteData('KGEn')">
                                                        <a href="javascript:void(0)">
                                                            <span>KG(English Medium)</span </a>
                                                    </li>
                                                    <li onclick="geteData('OneEn')"><a href="javascript:void(0)">
                                                            <span>One(English Medium)</span>
                                                        </a>
                                                    </li>
                                                    <li onclick="geteData('TwoEn')">
                                                        <a href="javascript:void(0)">
                                                            <span>Two(English Medium)</span>
                                                        </a>
                                                    </li>
                                                    <li onclick="geteData('ThreeEn')"><a href="javascript:void(0)">
                                                            <span>Three(English Medium)</span>
                                                        </a>
                                                    </li>
                                                    <li onclick="geteData('FourEn')">
                                                        <a href="javascript:void(0)">
                                                            <span>Four(English Medium)</span>
                                                        </a>
                                                    </li>
                                                    <li onclick="geteData('FiveEn')"><a href="javascript:void(0)">
                                                            <span>Five(English Medium)</span>
                                                        </a>
                                                    </li>
                                                    <li onclick="geteData('SixEn')">
                                                        <a href="javascript:void(0)">
                                                            <span>Six(English Medium)</span>
                                                        </a>
                                                    </li>
                                                    <li onclick="geteData('SevenEn')"><a href="javascript:void(0)">
                                                            <span>Seven(English Medium)</span>
                                                        </a>
                                                    </li>
                                                    <li onclick="geteData('EightEn')">
                                                        <a href="javascript:void(0)">
                                                            <span>Eight(English Medium)</span>
                                                        </a>
                                                    </li>
                                                    <li onclick="geteData('NineEn')"><a href="javascript:void(0)">
                                                            <span>Nine(English Medium)</span>
                                                        </a>
                                                    </li>
                                                    <li onclick="geteData('TenEn')">
                                                        <a href="javascript:void(0)">
                                                            <span>Ten(English Medium)</span>
                                                        </a>
                                                    </li>
                                                    <li onclick="geteData('ElevenEn')"><a href="javascript:void(0)">
                                                            <span>Eleven(English Medium)</span>
                                                        </a>
                                                    </li>
                                                    <li onclick="geteData('TweleveEn')">
                                                        <a href="javascript:void(0)">
                                                            <span>Tweleve(English Medium)</span>
                                                        </a>
                                                    </li>


                                                </ul>
                                        </div>
                                    </div>


                                    <div class="col-md-8">
                                        <div class="absentStudentRight table-responsive" id="data-wrapper">

                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>

    </main>

    @include('layouts.inc.footer')
</body>

</html>
