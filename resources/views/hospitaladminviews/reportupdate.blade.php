@extends('adminsheadfoot.adminhead&oot')
@section('admincontent')
<div class="pc-container">
  <div class="pc-content"><!-- [ breadcrumb ] start -->
    <div class="page-header">
      <div class="page-block">
        <div class="row align-items-center justify-content-between">
          <div class="col-sm-auto">
            <div class="page-header-title">
              <h5 class="mb-0">Create Report</h5>
            </div>
          </div>
          <div class="col-sm-auto">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="https://html.phoenixcoded.net/flatable/navigation/index.html"><i
                    class="ph-duotone ph-house"></i></a></li>
              <li class="breadcrumb-item"><a href="/appoinment/{{Auth::user()->id}}">Appoinments</a></li>
              <li class="breadcrumb-item" aria-current="page">Report</li>
            </ul>
          </div>
        </div>
      </div>
    </div><!-- [ breadcrumb ] end -->
    <!-- [ Main Content ] start -->
    <div class="row"><!-- [ sample-page ] start -->
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
            <div class="row justify-content-between align-items-center mb-3 g-3">
              
              <div class="col-sm-auto">
                <div class="input-group">
                  <h3>Create Report For "{{$appoinmentreport->child_name}}"</h3>
                </div>
              </div>
            </div>
            <div class="card shadow-none card-border-none bg-body mb-0">
              <div class="card-body">
                <div class="card mb-0">
                  <div class="card-body">
                    <div class="row g-3">
                      <div class="col-sm-6 col-xl-3">


                        <form action="/reportsend" method="POST">

                          @csrf

                        <div class="mb-0"><label class="form-label">Appoinment Number</label> <input style="cursor:not-allowed" readonly type="number" value="{{$appoinmentreport->id}}" name="appionmentnum"
                            class="form-control" ></div>
                      </div>
                      <div class="col-sm-6 col-xl-3">
                        <div class="mb-0"><label class="form-label">Child Name</label> <input style="cursor:not-allowed" readonly type="text" value="{{$appoinmentreport->child_name}}" name="childname"
                            class="form-control"></div>
                      </div>
                       <div class="col-sm-6 col-xl-3">
                        <div class="mb-0"><label class="form-label">Parent Email</label> <input style="cursor:not-allowed" readonly type="email" value="{{$appoinmentreport->parent_email}}" name="parentemail"
                            class="form-control"></div>
                      </div>
                       <div class="col-sm-6 col-xl-3">
                        <div class="mb-0"><label class="form-label">Child DOB</label> <input style="cursor:not-allowed" readonly type="text"  value="{{$appoinmentreport->child_dob}}" name="childdob"
                            class="form-control"></div>
                      </div>
                       <div class="col-sm-6 col-xl-3">
                        <div class="mb-0"><label class="form-label">Vaccine id</label> <input style="cursor:not-allowed" readonly type="text"  value="{{$appoinmentreport->vaccine_id}}" name="vaccid"
                            class="form-control"></div>
                      </div>
                      <div class="col-sm-6 col-xl-3">
                        <div class="mb-0"><label class="form-label">Vaccine Name</label> <input style="cursor:not-allowed" readonly type="text"  value="{{$appoinmentreport->vaccine_name}}" name="vaccname"
                            class="form-control"></div>
                      </div>

                      <div class="col-sm-6 col-xl-3">
                        <div class="mb-0"><label class="form-label">hospital id</label> <input style="cursor:not-allowed" readonly type="text"  value="{{$appoinmentreport->hospital_id}}" name="hosid"
                            class="form-control"></div>
                      </div>

                      <div class="col-sm-6 col-xl-3">
                        <div class="mb-0"><label class="form-label">hospital Name</label> <input style="cursor:not-allowed" readonly type="text"  value="{{$appoinmentreport->hospital_name}}" name="hosname"
                            class="form-control"></div>
                      </div>

                      <div class="col-sm-6 col-xl-3">
                        <div class="mb-0"><label class="form-label">hospital Email</label> <input style="cursor:not-allowed" readonly type="text"  value="{{$appoinmentreport->hospital_email}}" name="hosemail"
                            class="form-control"></div>
                      </div>

                      <div class="col-sm-6 col-xl-3">
                        <div class="mb-0"><label class="form-label">Parent id</label> <input style="cursor:not-allowed" readonly type="text"  value="{{$appoinmentreport->User_id}}" name="parentid"
                            class="form-control"></div>
                      </div>
                      <div class="col-sm-6 col-xl-3">
                        <div class="mb-0"><label class="form-label">Parent Name</label> <input style="cursor:not-allowed" readonly type="text"  value="{{$appoinmentreport->User_name}}" name="parentname"
                            class="form-control"></div>
                      </div>
                      <div class="col-sm-6 col-xl-3">
                        <div class="mb-0"><label class="form-label">Vacination Status</label> <select class="form-select"
                            id="exampleFormControlSelect1" name="vaccstatus">
                            <option value="Positive">Positive</option>
                            <option value="negative">negative</option>
  
                          </select></div>
                      </div>
            
                      
                      <div class="col-12">
                        <div class="row align-items-center justify-content-between g-3">
                          
                          <div class="col-sm-12 btn-page ">
                             <button type="submit" class="btn btn-success">Send Report</button>
                             <a href="/viewreports/{{Auth::user()->id}}" class="btn btn-outline-secondary">View Reports</a>
                            </div>
                        </div>
                      </div>
                    </div>


                    </form>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- [ sample-page ] end -->
    </div><!-- [ Main Content ] end -->
  </div>
</div>
@endsection