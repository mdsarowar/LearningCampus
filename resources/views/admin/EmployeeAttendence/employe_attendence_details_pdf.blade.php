<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<div class="attendence_summary">
    <div class="attendence_summary_top text-center">
        <h1>Learning Campus (Main Branch)</h1>
        <a href="#">www.LearningCampus.com</a>
        <p>Mirpur-3, Dhaka</p>
        <h3>Attendance Details for the Month of April 2022</h3>
        <p>ID : 20200001, Afzal (Bangla Lecturer)</p>
        <h3>
            <span class="text-primary">Weekend : 3</span>,
            <span class="text-info">Holidays : 0</span>,
            <span class="text-danger">Leave : 18</span>,
            <span class="text-primary">Attend : 0</span>,
            <span class="text-secondary">Absent : 0</span>,
            <span class="text-primary">Green : 0</span>,
            <span class="text-warning"> Orange : 0</span>,
            <span class="text-danger"> Red : 0</span>
        </h3>
    </div>

    <div class="attendence_summary_mid table-responsive">
        
           <!---- student table  ----->
           <table class="table table-bordered mt-3 text-center table-striped">
            <thead class="table-bordered">
                <tr>
                    <th scope="col">SL</th>
                    <th scope="col">Date</th>
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
                    <td>{{$employee->attendence_date}}</td>
                     
                        @if ($employee->attendences_status == 1 )
                            <td style="color: green; font-size: 50px;" > <i class="fa-solid fa-check"></i> </td>
                        @else
                        <td style="color: rgb(255, 1, 1); font-size: 50px;" >  <i class="fa-solid fa-xmark"></i> </td>
                        @endif
                    
                     <td></td>
                     <td></td>
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


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
