@extends('mainhead&foot.head&footmain')
@section('main')
    <main>

        <h1 class="text-center">Book Appoinment</h1>
        <div class="row m-md-5">
            <div class="col-xl-12">
                <div class="card col-xl-12 w-100">
            <div class="card-header">
              <h5>Appoinment Form</h5>
              @if (Session('success'))
                <div class="alert alert-primary" role="alert">{{session('success')}}</div>
            @endif
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <form id="vaccinedatahos" method="POST" action="/appoinment/booking">

                    @csrf
                     

                    <div class="mb-3"><label class="form-label" for="exampleFormControlSelect1">Select Vaccine</label>
                      <select class="form-select" form="vaccinedatahos" name="vacc_id">
                        @if ($hospitalvaccine->count() <1)
                            <option>No Vaccine Available</option>
                        @else
                        @foreach ($hospitalvaccine as $availvaccine)
                        
                        <option value="{{$availvaccine->id}}">{{$availvaccine->vaccine_name}}</option>

                        @endforeach
                        @endif
                      </select></div>

                      <div class="mb-3"><label class="form-label">Child Name</label> <input type="text" class="form-control" name="childname" placeholder="Enter Child Name" required></div>
                   
                    
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary mb-4">Book Appoinment</button>
                        <a href="">View Reports</a>
                      </div>
                  
                </div>
                <div class="col-md-6">
                   <div class="mb-3"><label class="form-label" for="exampleInputEmail1">Parent Email</label> <input type="email" class="form-control" id="exampleInputEmail1"  name="parentemail" required aria-describedby="emailHelp" placeholder="Enter email"> </div>
                   <div class="mb-3"><label class="form-label" for="">Child Date of birth</label> <input type="date" class="form-control" name="childob" required form="vaccinedatahos"></div>
                
                  </form>
                </div>
              </div>
            </div>
          </div>
            </div>
        </div>

    </main>
@endsection