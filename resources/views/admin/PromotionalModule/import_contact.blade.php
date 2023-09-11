<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->

<head>
    <title>Learning Campus | Import SMS Contact</title>
    @include('layouts.inc.head')

    <style>
        #fileDiv {
            padding: 10px;
            border: ;
            border-radius: 10px;
            background-color: #ededed;
            display: none;
            width: 60%;
            margin: 8px auto;
            margin-left: 32%;
        }

        #fileDiv.show {
            display: block;
        }
    </style>
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
                            <h2 class="text-white mb-0">Import SMS Contact</h2>
                        </header>

                        {{-- form submission message start --}}
                        @if (session('error'))
                            <div class="alert alert-danger col-8 m-auto text-center">
                                {{ session('error') }}
                            </div>
                        @endif

                        @if (session('success'))
                            <div class="alert alert-success col-8 m-auto text-center">
                                {{ session('success') }}
                            </div>
                        @endif
                        {{-- form submission message end --}}

                        <form action="/import-contacts-submit" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="branch_edit">
                                <div class="row">
                                    <div class="col-md-10 mb-3">
                                        <label for="">Group Name <span>*</span></label>
                                        <select name="sms_group" id="" required>
                                            <option value="">Select Group</option>
                                            @foreach ($groupList as $group)
                                                <option value="{{ $group['id'] }}">
                                                    {{ $group['group_name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Import <span>* </span>(.txt) </label>
                                        <input type="file" name="contactsFile" id="file" accept=".txt" required>
                                        <label for="file" id="fileCustom" class="syllabusFile"><i
                                                class="fa-regular fa-file-lines"></i> Choose txt file</label>
                                        <div id="fileDiv"></div>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Status <span>*</span></label>
                                        <select name="status" id="" required>
                                            <option value="">Select Status</option>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>

                                    <div class="col-md-10 mt-4 mb-3">
                                        <p>
                                            <button type="submit"
                                                class="btn bg-gradient border-0 text-white">Import</button>
                                            <button type="clear"
                                                class="btn  cancel_btn border-0 text-white">Cancel</button>
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
        const fileInput = document.getElementById("file");
        const fileDiv = document.getElementById("fileDiv");

        fileInput.addEventListener("change", function() {
            const selectedFile = fileInput.files[0];
            if (selectedFile) {
                const newDiv = document.createElement("div");
                newDiv.innerHTML = "<b>File: </b>" + selectedFile.name;
                fileDiv.appendChild(newDiv);
                fileDiv.classList.add("show");
            }
        });
    </script>

    @include('layouts.inc.footer')
</body>

</html>
