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
            <div class="session_view_link ml-3 mt-4 mb-5">
                <a href="{{ route('add_branch') }}" class="btn btn-primary"><i
                        class="fa-solid fa-plus"></i></a>
                <a href="{{ route('view_branch') }}?id={{ $branch_details[0]['id'] }}"
                    class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
            </div>
            <form action="/update-branch" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $branch_details[0]['id'] }}">
                <input type="hidden" name="current_short_name" value="{{ $branch_details[0]['short_name'] }}">
                <input type="hidden" name="current_branch_name" value="{{ $branch_details[0]['branch_name'] }}">
                <input type="hidden" name="current_address" value="{{ $branch_details[0]['address'] }}">
                <input type="hidden" name="current_city" value="{{ $branch_details[0]['city'] }}">
                <input type="hidden" name="current_zip_code" value="{{ $branch_details[0]['zip_code'] }}">
                <input type="hidden" name="current_phone" value="{{ $branch_details[0]['phone'] }}">
                <input type="hidden" name="current_fax" value="{{ $branch_details[0]['fax'] }}">
                <input type="hidden" name="current_email" value="{{ $branch_details[0]['email'] }}">
                <input type="hidden" name="current_signature" value="{{ $branch_details[0]['signature'] }}">
                <input type="hidden" name="current_holiday" value="{{ $branch_details[0]['holiday'] }}">
                <input type="hidden" name="current_map_iframe" value="{{ $branch_details[0]['map_iframe'] }}">
                <input type="hidden" name="current_status" value="{{ $branch_details[0]['status'] }}">
                <div class="branch_edit">

                    <div class="row">

                        <div class="col-md-10 mb-3">
                            <label for="">Short Name <span>*</span></label>
                            <input type="text" placeholder="Education" name="short_name" value="{{ $branch_details[0]['short_name'] }}" id="short_name" required>
                            @error('short_name')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Branch Name <span>*</span></label>
                            <input type="text" placeholder="Branch Name" name="branch_name" value="{{ $branch_details[0]['branch_name'] }}" id="branch_name" required>
                            @error('branch_name')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Address <span>*</span></label>
                            <textarea name="address" placeholder="Address" id="address" cols="30" rows="10" required>{{ $branch_details[0]['address'] }}</textarea>
                            @error('address')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">City <span>*</span></label>
                            <input type="text" placeholder="City" id="city" name="city" value="{{ $branch_details[0]['city'] }}" required>
                            @error('City')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Zip Code <span>*</span></label>
                            <input type="text" placeholder="Zip Code" name="zip_code" value="{{ $branch_details[0]['zip_code'] }}" id="zip_code" required>
                            @error('zip_code')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Phone/Mobile <span>*</span></label>
                            <input type="text" placeholder="Phone/Mobile" name="phone" value="{{ $branch_details[0]['phone'] }}" id="phone" required>
                            @error('phone')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="col-md-10 mb-3">
                            <label for="">Fax </label>
                            <input type="text" placeholder="Fax" name="fax" value="{{ $branch_details[0]['fax'] }}" id="fax">
                        </div>


                        <div class="col-md-10 mb-3">
                            <label for="">Email <span>*</span></label>
                            <input type="text" placeholder="Email" name="email" id="email" value="{{ $branch_details[0]['email'] }}" required>
                            @error('email')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="col-md-10 mb-3">
                            <label for="">Authority Signature</label>
                            <input type="file" name="signature" id="file">
                            @if ($branch_details[0]['signature'])
                                <img src="{{ asset('assets/branch/'.$branch_details[0]['signature']) }}" style="width: 80px; height: 80px;">
                            @endif
                            <label for="file" id="fileCustom" class="syllabusFile"><i class="fa-solid fa-camera"></i> Choose Photo</label>
                            <img id="preview" src="#" alt="Avatar" class="mt-3" style="display:none; width: 100%; height: 300px;"/>
                           
                        </div>
                        
                        <div class="col-md-10 mb-3">
                            <label for="">Weekly Holiday <span>*</span></label>
                            <input type="text" placeholder="Friday , Sunday , Monday" name="holiday" value="{{ $branch_details[0]['holiday'] }}" id="holiday" required>
                            @error('holiday')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Map IFrame</label>
                            <textarea name="map_iframe" id="" cols="30" rows="10">{{ $branch_details[0]['map_iframe'] }}</textarea>
                        </div>

                        <div class="col-md-10 mb-3">
                            <label for="">Status <span>*</span></label>
                            <select name="status" id="status" required>
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
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

    <!-- Global Vendor -->
    <script>
        selectImage.onchange = evt => {
            preview = document.getElementById('preview');
            preview.style.display = 'block';
            const [file] = selectImage.files
            if (file) {
                preview.src = URL.createObjectURL(file)
            }
        }
    </script>

    @include('layouts.inc.footer')
</body>

</html>
