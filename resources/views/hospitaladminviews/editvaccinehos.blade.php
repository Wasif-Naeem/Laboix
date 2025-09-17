@extends('adminsheadfoot.adminhead&oot')
@section('admincontent')
    
<section class="pc-container">
    <div class="pc-content"><!-- [ breadcrumb ] start -->
      <div class="page-header">
        <div class="page-block">
          <div class="row align-items-center justify-content-between">
            <div class="col-sm-auto">
              <div class="page-header-title">
                <h5 class="mb-0">Edit Vaccine</h5>
              </div>
            </div>
            <div class="col-sm-auto">
              <ul class="breadcrumb">
                
                <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item" aria-current="page">Edit Vaccine</li>
              </ul>
            </div>
          </div>
        </div>
      </div><!-- [ breadcrumb ] end --><!-- [ Main Content ] start -->
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h5>Edit Vaccine</h5>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <form action="/updatevaccine/{{$vaccines->id}}" method="POST" id="vaccinefrom">
                    @if (Session('success'))
                <div class="alert alert-primary" role="alert">{{session('success')}}</div>
            @endif
                    
                    @csrf
                    <div class="mb-3"><label class="form-label" for="exampleInputEmail1" >Vaccine Name</label> <input
                        type="vaccinename" class="form-control" id="Vaccine Name" name="vaccinename"
                        placeholder="Enter Vaccine Name"  value='{{$vaccines->vaccine_name}}' required></div>
                        <div class="mb-3"><label class="form-label" for="exampleFormControlSelect1">Vaccine Status</label>
                      <select class="form-select" name="vaccinestatus" id="vaccinestatus" form="vaccinefrom"  required>
                        <option value="Available">Available</option>
                        <option value="Not Available">Not Available</option>
                      </select></div>
                    <button type="submit"
                      class="btn btn-primary mb-4">Update</button> <a href="/seevaccines/{{Auth::user()->id}}" class="btn btn-warning mb-4">View Vaccines</a>
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