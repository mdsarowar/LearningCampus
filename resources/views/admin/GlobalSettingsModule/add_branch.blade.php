<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->


<head>
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
                <h2 class="text-white mb-0">Branch Details Add</h2>
            </header>
            {{-- form submission message start --}}
            @if (session('error'))
                <div class="alert alert-danger col-8 m-auto">
                    {{ session('error') }}
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success col-8 m-auto">
                    {{ session('success') }}
                </div>
            @endif
            {{-- form submission message end --}}
            <form action="{{ route('insert_branch') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="branch_edit">

                    <div class="row">

                        <div class="col-md-10 mb-3">
                            <label for="">Short Name <span>*</span></label>
                            <input type="text" placeholder="Education" name="short_name" id="short_name" required>
                            @error('short_name')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Branch Name <span>*</span></label>
                            <input type="text" placeholder="Branch Name" name="branch_name" id="branch_name" required>
                            @error('branch_name')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Address <span>*</span></label>
                            <textarea name="address" placeholder="Address" id="address" cols="30" rows="10" required></textarea>
                            @error('address')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">City <span>*</span></label>
                            <input type="text" placeholder="City" id="city" name="city" required>
                            @error('City')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Zip Code <span>*</span></label>
                            <input type="text" placeholder="Zip Code" name="zip_code" id="zip_code" required>
                            @error('zip_code')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Phone/Mobile <span>*</span></label>
                            <input type="text" placeholder="Phone/Mobile" name="phone" id="phone" required>
                            @error('phone')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="col-md-10 mb-3">
                            <label for="">Fax </label>
                            <input type="text" placeholder="Fax" name="fax" id="fax">
                        </div>


                        <div class="col-md-10 mb-3">
                            <label for="">Email <span>*</span></label>
                            <input type="text" placeholder="Email" name="email" id="email" required>
                            @error('email')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="signature">Authority Signature</label>
                            <input type="file" name="signature" id="file" onchange="loadFile(event)">
                            <label for="file" id="fileCustom" class="syllabusFile"><i class="fa-solid fa-camera"></i> Choose Photo</label><br>
                            <img id="signature"  width="80px" height="80px"/>
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Weekly Holiday <span>*</span></label>
                            <input type="text" placeholder="Friday , Sunday , Monday" name="holiday" id="holiday" required>
                            @error('holiday')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Map IFrame</label>
                            <textarea name="map_iframe" id="" cols="30" rows="10"></textarea>
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Status <span>*</span></label>
                            <select name="status" id="status" required>
                                <option value="">Select Status</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>

                        <div class="col-md-10 mt-4 mb-3">
                            <p>
                                <button type="submit"
                                    class="btn bg-gradient border-0 text-white">Submit</button>
                                <a href="" class="btn  border-0 text-white">Cancel</a>
                            </p>
                        </div>
                    </div>

                </div>
            </form>
        </div>    
    </section>
    
        </div>
    </div>

       
    </main>

    <script>
        var loadFile = function(event){
            var signature = document.getElementById('signature');
            signature.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>

    @include('layouts.inc.footer')
</body>

</html>
