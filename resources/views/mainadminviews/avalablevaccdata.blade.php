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
                                <li class="breadcrumb-item"><a
                                        href="https://html.phoenixcoded.net/flatable/navigation/index.html"><i
                                            class="ph-duotone ph-house"></i></a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
                                <li class="breadcrumb-item" aria-current="page">Home</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- [ breadcrumb ] end --><!-- [ Main Content ] start -->
            <div class="row">
               <!-- [ Application list ] start -->
                <div class="col-xl-12 col-md-12">
                    <div class="card Application-list table-card">
                        <div class="card-header">
                            <h5>Vaccine list</h5>
                        </div>
                          @if ($allvaccines->count() < 1)
                                            <div style=" font-size: 1.5rem;display: flex; align-items: center; justify-content: center; width: 100%;padding-top: 50px;padding-bottom: 50px;flex-direction: column">
                                                <h1 >No Vaccines Available</h1>
                                                
                                            </div>
                                                @else
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <div class="app-scroll" style="height: auto; position: relative">
                                    <table class="table table-hover m-0">
                                        <thead>
                                            <tr>
                                                
                                                <th>Vaccine id</th>
                                                <th>Hospital id</th>
                                                <th>Hospital Name</th>
                                                <th>Vaccine Name</th>
                                                <th>Vaccine Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($allvaccines as $allvaccine)
                                                
                                            
                                            <tr>
                                                
                                                <td>
                                                    <h6 class="mb-1">{{$allvaccine->id}}</h6>
                                                    
                                                </td>
                                                <td>
                                                    <p class="mb-1">{{$allvaccine->hospital_id}}</p>
                                                </td>
                                                <td>{{$allvaccine->hospital_name}}</td>
                                                <td>{{$allvaccine->vaccine_name}}</td>
                                                <td><a @if ($allvaccine->vaccine_status == 'Not Available')
                                                     class="badge bg-light-danger"
                                                     @else
                                                     class="badge bg-light-success"
                                                      @endif
                                                        >{{$allvaccine->vaccine_status}}</a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div><!-- [ Application list ] end -->
            </div><!-- [ Main Content ] end -->
        </div>
    </div><!-- [ Main Content ] end -->
@endsection