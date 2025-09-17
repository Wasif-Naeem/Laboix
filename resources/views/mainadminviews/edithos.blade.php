@extends('adminsheadfoot.mainadminheadfoot')
@section('mainadmincontent')
    <section class="pc-container">
    <div class="pc-content"><!-- [ breadcrumb ] start -->
      <div class="page-header">
        <div class="page-block">
          <div class="row align-items-center justify-content-between">
            <div class="col-sm-auto">
              <div class="page-header-title">
                <h5 class="mb-0">Edit Hospital</h5>
              </div>
            </div>
            <div class="col-sm-auto">
              <ul class="breadcrumb">
                
                <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item" aria-current="page">Edit Hospital</li>
              </ul>
            </div>
          </div>
        </div>
      </div><!-- [ breadcrumb ] end --><!-- [ Main Content ] start -->
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h5>Edit hospital</h5>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <form action="/updatehos/{{$edithos->id}}" method="POST" >
                    @if (Session('success'))
                <div class="alert alert-primary" role="alert">{{session('success')}}</div>
            @endif
                    
                    @csrf
                    <div class="mb-3"><label class="form-label" for="exampleInputEmail1" >Hospital Name</label> <input
                        type="vaccinename" class="form-control" id="Vaccine Name" name="hosname"
                        placeholder="Enter Vaccine Name"  value='{{$edithos->name}}' required></div>
                        
                    <div class="mb-3"><label class="form-label" for="exampleInputEmail1" >Hospital Email</label> <input
                        type="email" class="form-control" id="Vaccine Name" name="hosemail"
                        placeholder="Enter Vaccine Name"  value='{{$edithos->email}}' required></div>
                    <button type="submit"
                      class="btn btn-primary mb-4">Update</button> <a href="/allhospitals" class="btn btn-warning mb-4">View Hospitals</a>
                  </form>
                </div>
               
                </div>
              </div>
            </div>
          </div>
         




          
         
          
          
      </div>
    </div><!-- [ Main Content ] end -->
  </section>
@endsection