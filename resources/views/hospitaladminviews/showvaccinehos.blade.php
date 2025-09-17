@extends('adminsheadfoot.adminhead&oot')
@section('admincontent')
    <div class="pc-container">
        <div class="pc-content"><!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-sm-auto">
                            <div class="page-header-title">
                                <h5 class="mb-0">View Vaccines</h5>
                            </div>
                        </div>
                        <div class="col-sm-auto">
                            <ul class="breadcrumb">
                               
                                <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
                                <li class="breadcrumb-item" aria-current="page">View Vaccines</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- [ breadcrumb ] end --><!-- [ Main Content ] start -->
            <div class="row"><!-- [ Row 1 ] start -->
                
                
               
                
                
                <!-- customer-section start -->
                <div class="col-xl-12 col-md-12">
                    
                    <div class="card table-card">
                        
                        <div class="card-header" style="display: flex; width: 100%; align-items:center; justify-content: space-between">
                            
                            <h5>All Vaccines</h5>
                            @if ($vaccines->count() > 0)
                            <a href="/addvaccine" class="btn btn-success" >Add Vaccines</a>
                            @endif
                        </div>
                         @if ($vaccines->count() < 1)
                                            <div style=" font-size: 1.5rem;display: flex; align-items: center; justify-content: center; width: 100%;padding-top: 50px;padding-bottom: 50px;flex-direction: column">
                                                <h1 >No Vaccines Available</h1>
                                                <a href="/addvaccine" class="btn btn-success" style="margin-top: 30px">Add Vaccines</a>
                                            </div>
                                                @else
                        <div class="pro-scroll" style="height: auto; position: relative">
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover m-b-0">
                                        <thead>
                                            <tr>
                                                <th>Vaccine Name</th>
                                                
                                                <th>Status</th>
                                                
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                            
                                            @foreach ($vaccines as $vaccine)
                                                
                                           
                                            
                                            <tr>
                                                <td>{{$vaccine->vaccine_name}}</td>
                                                
                                                <td>
                                                  
                                                    <div><label @if ($vaccine->vaccine_status == 'Not Available')
                                                     class="badge bg-light-danger"
                                                     @else
                                                     class="badge bg-light-success"
                                                      @endif>{{$vaccine->vaccine_status}}</label></div>
                                                   
                                                </td>
                                                
                                                <td><a href="/editvaccines/{{$vaccine->id}}"><i class="icon feather icon-edit f-16 text-success"></i></a><a class="ms-3" href="/dropvaccines/{{$vaccine->id}}"><i class="feather icon-trash-2 f-16 text-danger"></i></a></td>
                                            </tr>
                                            
                                            
                                            @endforeach
                                            
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               <!-- customer-section end -->
            </div><!-- [ Main Content ] end -->
        </div>
    </div>
@endsection