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
                            <h2 class="text-white mb-0">Add Class Work</h2>
                        </header>
                        <div class="card-body">
                            <form action="{{ route('class.work.post') }}" method="POST" enctype="multipart/form-data"
                                class="es-form es-add-form">
                                <div class="row">

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="subject">Class <span>*</span></label>
                                        <select name="class" id="subject" class="es-add-select"
                                            style="display: none;">
                                            <option data-display="Select">Select Class</option>
                                            <option value="">Select Class</option>
                                            <option value="" class="bold_text">Bangla Medium</option>
                                            <option value="">Play</option>
                                            <option value="">Nursary</option>
                                            <option value="">KG</option>
                                            <option value="">One</option>
                                            <option value="">Two</option>
                                            <option value="">Three</option>
                                            <option value="">Four</option>
                                            <option value="">Five</option>
                                            <option value="">Six</option>
                                            <option value="">Seven</option>
                                            <option value="">Eight</option>
                                            <option value="">Nine</option>
                                            <option value="">Ten</option>
                                            <option value="" class="bold_text">English Medium</option>
                                            <option value="">Play</option>
                                            <option value="">Nursary</option>
                                            <option value="">KG</option>
                                            <option value="">One</option>
                                            <option value="">Two</option>
                                            <option value="">Three</option>
                                            <option value="">Four</option>
                                            <option value="">Five</option>
                                            <option value="">Six</option>
                                            <option value="">Seven</option>
                                            <option value="">Eight</option>
                                            <option value="">Nine</option>
                                            <option value="">Ten</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="day">Shift <span>*</span> </label>
                                        <select name="shift" id="day" class="es-add-select"
                                            style="display: none;">
                                            <option value="">Select Shift</option>

                                        </select>
                                    </div>

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="day">Section <span>*</span></label>
                                        <select name="section" id="day" class="es-add-select"
                                            style="display: none;">
                                            <option value="">Select Section</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="day">Subject <span>*</span></label>
                                        <select name="subject" id="day" class="es-add-select"
                                            style="display: none;">
                                            <option value="">Select Subject</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="day">Teacher <span>*</span></label>
                                        <select name="teacher" id="day" class="es-add-select"
                                            style="display: none;">
                                            <option value="">Select Teacher</option>
                                            <option value="">000025321 - Akram</option>
                                            <option value="">000025321 - Akram</option>
                                            <option value="">000025321 - Akram</option>
                                            <option value="">000025321 - Akram</option>
                                            <option value="">000025321 - Akram</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="day">Class Work Title <span>*</span></label>
                                        <input type="text" name="class_work_title">
                                    </div>

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="day">Video URL</label>
                                        <input type="text" name="video_url">
                                    </div>

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="day">Attachment</label>
                                        <input type="file" name="attachment">
                                        <label for=""><span>Attachment file type (pdf,png,jpg,jpeg,gif,bmp)
                                                supported, maximum 10MB</span></label>
                                    </div>


                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="day"> Class Work Details<span>*</span></label>
                                        <textarea id="content" name="class_work_detail"></textarea>
                                    </div>

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="day">Assign Date<span>*</span></label>
                                        <input type="date" name="assign_date">
                                    </div>

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="day">Due Date<span>*</span></label>
                                        <input type="date" name="due_date">
                                    </div>

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="day">Status </label>
                                        <select name="status" id="day" class="es-add-select"
                                            style="display: none;">
                                            <option value="">Active</option>
                                            <option value="">Deactive</option>
                                        </select>
                                    </div>

                                </div>
                                <br>
                                <br>
                                <p>
                                    <a href="" type="submit"
                                        class="btn bg-gradient border-0 text-white">Create</a>
                                    <a href="" class="btn  border-0 text-white">Cancel</a>
                                </p>

                            </form>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </main>

    <!-- Global Vendor -->

    @include('layouts.inc.footer')

    <script src="assets/js/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#content'), {
                // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
            })
            .then(editor => {
                window.editor = editor;
            })
            .catch(err => {
                console.error(err.stack);
            });
    </script>

</body>

</html>
