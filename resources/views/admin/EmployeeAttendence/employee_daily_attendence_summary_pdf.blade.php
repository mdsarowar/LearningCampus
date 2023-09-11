<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<div class="attendence_summary">

    <div class="attendence_summary_top text-center">
        <h1>Learning Campus (Main Branch)</h1>
        <a href="#">www.LearningCampus.com</a>
        <p>Mirpur-3, Dhaka</p>
        <h3>Daily Attendance Summary (March 31 2022)</h3>
    </div>

    <div class="attendence_summary_mid table-responsive">
           <!---- student table  ----->
           <table class="table table-bordered mt-3 text-center">
            <thead class="teble table-bordered">
                <tr>
                    <th scope="col">SL</th>
                    <th scope="col">Name/ID</th>
                    <th scope="col">Designation</th>
                    <th scope="col"><span style="color: green;">Attend</span>  / <span style="color: red;">Absent</span></th>
                    <th scope="col"><span style="color: green;">IN</span></th>
                    <th scope="col"><span style="color: red;">OUT</span></th>
                    <th scope="col">Middle Punches</th>
                    <th scope="col" ><span style="background-color: green;color: white;padding: 8px 14px;font-weight: 600;">G</span></th>
                    <th scope="col"><span style="background-color: yellow;color: white;padding: 8px 14px;font-weight: 600;">Y</span></th>
                    <th scope="col"><span style="background-color: red;color: white;padding: 8px 14px;font-weight: 600;">R</span></th>
                </tr>
            </thead>
            <tbody>
                
                 
                 @foreach ($employees as $employee)
                     
                 <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <img src="assets/img/student.png" class="curentStuImage" alt="">
                        <br><a href="#">{{$employee->employee_name}}</a>
                     </td>
                     <td>{{$employee->designation}}</td>
                     @if ($employee->attendences_status == 1 )
                            <td style="color: green; font-size: 70px;" > <i class="fa-solid fa-check"></i> </td>
                        @else
                        <td style="color: rgb(255, 1, 1); font-size: 70px;" > <i class="fa-solid fa-xmark"></i></td>
                        @endif
                     <td>{{$employee->in_time}}</td>
                     <td>{{$employee->out_time}}</td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                 </tr>
                 
                 @endforeach
                 


            </tbody>
        </table>
    <!---- /student table ----->
    </div>
</div>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
