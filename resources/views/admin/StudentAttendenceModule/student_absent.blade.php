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
                    <h2 class="text-white mb-0"> Today Students Absent 
                        <p>({{date('D d M, Y')}})</p>
                    </h2>
                </header>
                <p class="text-center text-success text-bold h1">{{Session::get('message')}}</p>
<div class="academic_info">

<div class="container">
   
  <p class="total_count"><i class="fa-solid fa-users"></i> Total Absent {{$total}}</p>

    <div class="row mt-3 mb-4">
        
        <div class="col-md-4">
            <div class="absentClassLeft">
                
                 <ul>
                    @foreach ($classesList as $class)
                      
                    <li onclick="geteData('{{ $class['class_type'] . '_' . $class['class_name'] }}')">
                         <a href="javascript:void(0)">
                         <span>{{ $class['class_name']. " "."(" .$class['class_type'].")"}}</span>
                         </a>
                    </li>
                       
                    @endforeach
                    
                     
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

<!-- Global Vendor -->

<script>
     function geteData(value)
     {
         console.log(value)
         const url = 'details-daily-attendence?class='+value;
         var xmlHttp = new XMLHttpRequest();
             xmlHttp.open( "GET", url, false );
             xmlHttp.send();
          
             // var data = JSON.parse(xmlHttp.responseText);
             const myElement = document.getElementById("data-wrapper");
             myElement.innerHTML = xmlHttp.responseText;
     }
     // Listen for click on toggle checkbox
     function toggle(source) {
     var checkboxes = document.querySelectorAll('input[type="checkbox"]');
      for (var i = 0; i < checkboxes.length; i++) {
     if (checkboxes[i] != source)
         checkboxes[i].checked = source.checked;
 }
}
 
 </script>

@include('layouts.inc.footer')
<script>
    $().button('toggle')
</script>
<script>
     // const phoneNumber = "" ;
     //  const sms_body = "";
     sendSMS(phoneNumber,sms_body);
</script>
</body>
</html>