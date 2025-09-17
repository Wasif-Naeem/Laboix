@extends('mainhead&foot.head&footmain')
@section('main')

    <div class="text-center py-3">
        <h1>Book Hospital</h1>
    </div>
    @if (!Auth::id())
        <div class="card my-2 d-flex flex-col align-items-center p-4">
            <h2 class="text-center ">Need Register To Book Appoinment</h1>
                <p>Click Here To Register</p>
                <a href="/register" class="btn btn-success">Register</a>
        </div>
    
    @elseif ($hosdata->count()<1)

        <div class="card">
            <h2>No Hospitals Available For Appoinment</h2>
        </div>
        @else
        <div class="card">           
               <table class="table table-striped table-hover my-3 text-center">
  <thead>
    <tr>
      <th scope="col">Hospital Name</th>
      <th scope="col">Hospital Email</th>
      <th scope="col">Appoinment</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($hosdata as $apphosdata)
        
    
    <tr >
      <td >{{$apphosdata->name}}</td>
      <td >{{$apphosdata->email}}</td>
      <td ><a href="/bookappoinment/{{$apphosdata->id}}" class="btn btn-success">Book Appoinment</a></td>
    </tr>
   @endforeach
   
  </tbody>
</table>
</div>
@endif
@endsection