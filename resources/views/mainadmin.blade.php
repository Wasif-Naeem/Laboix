@extends('adminsheadfoot.mainadminheadfoot')
@section('mainadmincontent')
    
<!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pc-content"><!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-sm-auto">
                            <div class="page-header-title">
                                <h5 class="mb-0">Home</h5>
                            </div>
                        </div>
                        <div class="col-sm-auto">
                            <ul class="breadcrumb">
                                
                                       
                                <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
                                <li class="breadcrumb-item" aria-current="page">Home</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- [ breadcrumb ] end --><!-- [ Main Content ] start -->
            <div class="row">


                 <div class="col-md-12 col-xl-4">
                    <div class="card balance-card card-border-primary">
                        <div class="card-header">
                            <h5>Vaccinated</h5>
                        </div>
                        <div class="card-body">
                            <h2>22</h2>
                            <p class="text-muted f-15">Sucessfully Vaccinated Childs</p>
                            <a class="btn btn-primary m-t-15 m-b-20 text-white">See List</a>
                           
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xl-4">
                    <div class="card balance-card card-border-warning">
                        <div class="card-header">
                            <h5>Pending (Appoinments)</h5>
                        </div>
                        <div class="card-body">
                            <h2>95</h2>
                            <p class="text-muted f-15">Pending appoinment request of childs</p>
                            <a class="btn btn-warning m-t-15 m-b-20 text-white" href="/allrequest">Check Requests</a>
                            
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xl-4">
                    <div class="card balance-card card-border-danger">
                        <div class="card-header">
                            <h5>Not Vaccinated</h5>
                        </div>
                        <div class="card-body">
                            <h2>10</h2>
                            <p class="text-muted f-15">Not Vaccinated Childs</p>
                            <a class="btn btn-danger m-t-15 m-b-20 text-white">See List</a>
                            
                        </div>
                    </div>
                </div>



                <div class="col-md-12 col-xl-12">
                    <div class="card balance-card card-border-primary">
                        <div class="card-header">
                            <h5>Available Vaccines</h5>
                        </div>
                        <div class="card-body">
                            <h2>2</h2>
                            <p class="text-muted f-15">Available Vaccine At Hospitals</p>
                            <a class="btn btn-warning m-t-15 m-b-20 text-white" href="/allvaccines">See List</a>
                            <a class="btn btn-primary ml-10 m-t-15 m-b-20 text-white" href="/addvaccine">Add Vaccines</a>
                           
                           
                        </div>
                    </div>
                </div>
                


               
                </div><!-- [ Application list ] end -->
            </div><!-- [ Main Content ] end -->
        </div>
    </div><!-- [ Main Content ] end -->
@endsection