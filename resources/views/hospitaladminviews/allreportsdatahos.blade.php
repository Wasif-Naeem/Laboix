@extends('adminsheadfoot.adminhead&oot')
@section('admincontent')
    <div class="pc-container">
        <div class="pc-content"><!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-sm-auto">
                            <div class="page-header-title">
                                <h5 class="mb-0">View All Hospitals</h5>
                            </div>
                        </div>
                        <div class="col-sm-auto">
                            <ul class="breadcrumb">

                                <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
                                <li class="breadcrumb-item" aria-current="page">All Hospitals</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- [ breadcrumb ] end --><!-- [ Main Content ] start -->
            <div class="row"><!-- [ Row 1 ] start -->





                <!-- customer-section start -->
                <div class="col-xl-12 col-md-12">
                    <div class="card table-card">
                        <div class="card-header">
                            <h5>All Hospitals</h5>
                            @if (Session('success'))
                                <div class="alert alert-primary" style="margin-top: 10px" role="alert">
                                    {{ session('success') }}</div>
                                @endif
                        </div>
                        @if ($appoinmentreports->count() < 1)
                            <div
                                style=" font-size: 1.5rem;display: flex; align-items: center; justify-content: center; width: 100%;padding-top: 50px;padding-bottom: 50px;flex-direction: column">
                                <h1>No Reports Available</h1>
                            </div>
                        @else
                            <div class="pro-scroll" style="height: auto; position: relative">
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover m-b-0">
                                            <thead>
                                                <tr>
                                                    <th>Appoinment No</th>
                                                    <th>Child Name</th>
                                                    <th>Parent Email</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($appoinmentreports as $appoinmentreport)
                                                    <tr>
                                                        <td>{{ $appoinmentreport->appoinment_id }}</td>
                                                        <td>{{ $appoinmentreport->child_name }}</td>
                                                        <td>{{ $appoinmentreport->parent_email }}</td>
                                                        <td><a href="/viewreporthos/{{ $appoinmentreport->id }}"
                                                                class="btn btn-success">View Report</a></td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                        @endif
                    </div>
                </div>
            </div>
            <!-- customer-section end -->
        </div><!-- [ Main Content ] end -->
    </div>
    </div>

@endsection
