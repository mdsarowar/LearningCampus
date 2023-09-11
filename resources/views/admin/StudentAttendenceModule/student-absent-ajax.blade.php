<!---- student table  ----->
<table class="table table-bordered mt-3 text-center">
    <thead class="table-bordered">
        <tr>
            <th scope="col"><input type="checkbox"  onclick="toggle(this);"></th>
            <th scope="col">ID</th>
            <th scope="col">Roll</th>
            <th scope="col">Shift</th>
            <th scope="col">Section</th>
            <th scope="col">Name</th>
            <th scope="col">Number</th>

            <th scope="col"><a class="btn btn-secondary" href="{{route("send.sms.proses")}}">Send SMS</a></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
         <tr>

            <td><input type="checkbox" name="check" id="check" ></td>
            <td>{{$student->student_id}}</td>
            <td>{{$student->roll}}</td>
            <td>{{$student->shift}}</td>
            <td>{{$student->section}}</td>
            <td>
                <img src="assets/img/student.png" class="curentStuImage" alt="">
                <br><a href="#">{{$student->name}}</a>
             </td>
             <td>{{$student->guardian_mobil}}</td>
             <td>
                 <button class="btn btn-primary">Send SMS</button>
            </td>
         </tr>
         @endforeach
         
    </tbody>
</table>
<!---- /student table ----->