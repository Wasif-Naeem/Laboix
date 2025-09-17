@extends('mainhead&foot.head&footmain')
@section('main')
    <div class="text-center py-3">
        <h1>Book Hospital</h1>
    </div>
    @if (!Auth::id())
        <div class="card my-2 d-flex flex-col align-items-center p-4">
            <h2 class="text-center ">Need Register To See Reports</h1>
                <p>Click Here To Register</p>
                <a href="/register" class="btn btn-success">Register</a>
        </div>
    
    @elseif ($appoinmentreports->count()<1)

        <div class="card">
            <h2 class="text-center">No Reports Available</h2>
        </div>
        @else
        <div class="card">           
               <table class="table table-striped table-hover my-3 text-center">
  <thead>
    <tr>
      <th scope="col">Appoinment No</th>
      <th scope="col">Hospital Name</th>
      <th scope="col">Vaccine Name</th>
      <th scope="col">Report</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($appoinmentreports as $appoinmentreport)
        
    
    <tr >
      <td >{{$appoinmentreport->appoinment_id}}</td>
      <td >{{$appoinmentreport->hospital_name}}</td>
      <td >{{$appoinmentreport->Vaccine_name}}</td>
      <td ><a href="/viewreport/{{$appoinmentreport->id}}" class="btn btn-success">View Report</a></td>
    </tr>
   @endforeach
   
  </tbody>
</table>
</div>
@endif
@endsection