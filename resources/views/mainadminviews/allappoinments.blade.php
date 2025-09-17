@extends('adminsheadfoot.mainadminheadfoot')
@section('mainadmincontent')
    <div class="pc-container">
        <div class="pc-content"><!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-sm-auto">
                            <div class="page-header-title">
                                <h5 class="mb-0">All Appoinments</h5>
                            </div>
                        </div>
                        <div class="col-sm-auto">
                            <ul class="breadcrumb">
                               
                                <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
                                <li class="breadcrumb-item" aria-current="page">All Appoinments</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- [ breadcrumb ] end --><!-- [ Main Content ] start -->
            <div class="row"><!-- [ Row 1 ] start -->
                
                
               
                
                
                <!-- customer-section start -->
                <div class="col-xl-12 col-md-12">
                    
                    <div class="card table-card">
                        
                        <div class="card-header" >
                            
                            <h5>All Appoinments</h5>
                             @if (Session('success'))
                <div class="alert alert-primary mt-2" role="alert">{{session('success')}}</div>
            @endif
                            
                        </div>
                         
                                                
                        <div class="pro-scroll" style="height: auto; position: relative">
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover m-b-0">
                                        <thead>
                                            <tr>
                                                <th>Appoinment No</th>
                                                
                                                <th>User id</th>
                                                
                                                <th>hospital id</th>
                                                
                                                <th>vaccine id</th>
                                                
                                                <th>User Name</th>
                                        
                                                <th>hospital Name</th>
                                                
                                                <th>vaccine Name</th>

                                                
                                                <th>child Name</th>
                                                
                                                <th>child Dob</th>

                                                
                                                <th>parent email</th>
                                                
                                                <th>action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                                
                                           @foreach ($appoinments as $appoinment)
                                               
                                          
                                            
                                            <tr>
                                                <td>{{$appoinment->id}}</td>
                                                
                                                <td>{{$appoinment->User_id}}</td>
                                                <td>{{$appoinment->hospital_id}}</td>
                                                <td>{{$appoinment->vaccine_id}}</td>
                                                <td>{{$appoinment->User_name}}</td>
                                                <td>{{$appoinment->hospital_name}}</td>
                                                <td>{{$appoinment->vaccine_name}}</td>
                                                <td>{{$appoinment->child_name}}</td>
                                                <td>{{$appoinment->child_dob}}</td>
                                                <td>{{$appoinment->parent_email}}</td>
                                                
                                                <td><a  href=""><i class="feather  icon-trash-2 f-16 text-danger"></i></a><a href="/approved/{{$appoinment->id}}" class="ms-3"><i class="icon feather icon-check f-16 text-success"></i></a></td>
                                            </tr>
                                             @endforeach
                                            
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