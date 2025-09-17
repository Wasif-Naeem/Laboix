@extends('mainhead&foot.head&footmain')
@section('main')
      <div class="container-fluid py-4">
        <div class="card shadow">
            <div class="card-body p-4">
                <div class="row g-4">
                    <!-- Header Section -->
                    <div class="col-12">
                        <div class="row align-items-center g-3">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center mb-2">
                                    <img src="{{asset('assets/images/logo-dark.png')}}" class=" invoice-logo" style="width: 30%" alt="Company Logo">
                                    <span class="badge bg-success rounded-pill ms-2">Report</span>
                                </div>
                                <p class="mb-0 fw-bold">Report No : {{$details->id}}</p>
                            </div>
                            <div class="col-sm-6 text-sm-end">
                                <h6 class="mb-2">Date: <span class="text-muted fw-normal">{{$details->report_date}}</span></h6>
                                <h6 class="mb-0">Time: <span class="text-muted fw-normal">{{$details->report_time}}</span></h6>
                            </div>
                        </div>
                    </div>

                    <!-- From Section -->
                    <div class="col-sm-12">
                        <div class="border rounded p-3 h-100">
                            <h6 class="mb-2 text-primary">From:</h6>
                            <h5 class="mb-2">{{$details->hospital_name}}</h5>
                
                            <p class="mb-0">{{$details->hospital_Email}} <br> Vaccine: {{$details->Vaccine_name}}</p>
                        </div>
                    </div>

                    
                   

                    <!-- Items Table -->
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="table-dark">
                                    <tr>
                                        
                                        <th scope="col">Child Name</th>
                                        <th scope="col">Parent Name</th>
                                        <th scope="col" >Parent Email</th>
                                        <th scope="col">Child Dob</th>
                                        <th scope="col" >Vaccine Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr >
                                        
                                        <td>{{$details->child_name}}</td>
                                        <td>{{$details->user_name}}</td>
                                        <td >{{$details->parent_email}}</td>
                                        <td >{{$details->child_dob}}</td>
                                        <td >{{$details->Vaccine_name}}</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                        
                    </div>

                    <!-- Totals Section -->
                    <div class="col-12">
                        <div class="invoice-total ms-auto">
                            <div class="row g-2">
                                <div class="col-6">
                                    <p class="text-muted mb-1 text-start">Vaccination Status:</p>
                                </div>
                                <div class="col-6">
                                    <p class="mb-1 text-end text-success">Vaccinated</p>
                                </div>
                              
                                <div class="col-6">
                                    <p class="fw-bold mb-1 text-start fs-5">Results:</p>
                                </div>
                                <div class="col-6">
                                    <p class="fw-bold mb-1 text-end fs-5 text-primary">{{$details->Vaccination_Status}}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Note Section -->
                    <div class="col-12">
                        <div class="bg-light p-3 rounded">
                            <label class="form-label fw-bold">Note:</label>
                            <p class="mb-0">It is computer generated report not an original but still verify from department. We hope you will keep us in mind for future Vaccinations. Thank You!</p>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="col-12 text-end d-print-none">
                        
                        <button class="btn btn-primary" onclick="window.print()">Download PDF</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection