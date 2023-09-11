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
                            <h2 class="text-white mb-0">Add Exam Terms</h2>
                        </header>
                        <div class="session_add">
                            <div class="newrow">
                                
                                <form action="{{ route('exam.terms.post') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                
                                    <div class="col-md-10 mb-3">
                                        <label for="">Session <span>*</span></label>
                                        <input type="text" placeholder=""  name="session" id="">
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Term Name <span>*</span></label>
                                        <input type="text" placeholder=""  name="term_name" id="">
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Marks For Final(%) <span>*</span></label>
                                        <input type="number" placeholder=""  name="marks_final" id="">
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Related to Final Term ? <span>*</span></label>
                                        <select name="relate_final_term" id="">
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Final Term ? <span>*</span></label>
                                        <select name="final_term" id="">
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Exam Routine With Instruction ? <span>*</span></label>
                                        <select name="exam_ins" id="">
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Admit Card Instruction <span></span></label>
                                    <textarea name="" id="content" cols="30" rows="10"></textarea>
                                    </div>

                                    <div class="col-md-10 mb-3">
                                        <label for="">Website Result Publish ? <span>*</span></label>
                                        <select name="web_result_publish" id="">
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>

                                    <div class="col-md-10 mt-4 mb-3">
                                        <p>
                                        <button type="submit" class="btn bg-gradient border-0 text-white">Create</button>             
                                        </p>
                                    </div>
                                </form>
                            </div>
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
		.create( document.querySelector( '#content' ), {
			// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
		} )
		.then( editor => {
			window.editor = editor;
		} )
		.catch( err => {
			console.error( err.stack );
		} );

</script>

<script>
  
	ClassicEditor
		.create( document.querySelector( '#contents' ), {
			// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
		} )
		.then( editor => {
			window.editor = editor;
		} )
		.catch( err => {
			console.error( err.stack );
		} );

</script>
</body>

</html>