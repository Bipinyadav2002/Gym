@extends('admin.layout.master-layout')
@section('title', 'Gym Dashboard')

@section('content')
    <div class="content">

        <div class="container-fluid">

            <!-- Page Title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex justify-content-between align-items-center">
                        <h4 class="page-title">🏋️‍♂️ Gym Dashboard</h4>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Overview</li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- Stats Widgets -->
            <div class="row">
                <div class="col-xxl-3 col-sm-6">
                    <div class="card widget-flat text-bg-pink">
                        <div class="card-body">
                            <div class="float-end">
                                <i class="ri-eye-line widget-icon"></i>
                            </div>
                            <h6 class="text-uppercase mt-0" title="Customers">Daily Visits</h6>
                            <h2 class="my-2">8,652</h2>
                            <p class="mb-0">
                                <span class="badge bg-white bg-opacity-10 me-1">2.97%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div>
                    </div>
                </div> <!-- end col-->

                <div class="col-xxl-3 col-sm-6">
                    <div class="card widget-flat text-bg-purple">
                        <div class="card-body">
                            <div class="float-end">
                                <i class="ri-wallet-2-line widget-icon"></i>
                            </div>
                            <h6 class="text-uppercase mt-0" title="Customers">Revenue</h6>
                            <h2 class="my-2">$9,254.62</h2>
                            <p class="mb-0">
                                <span class="badge bg-white bg-opacity-10 me-1">18.25%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div>
                    </div>
                </div> <!-- end col-->

                <div class="col-xxl-3 col-sm-6">
                    <div class="card widget-flat text-bg-info">
                        <div class="card-body">
                            <div class="float-end">
                                <i class="ri-shopping-basket-line widget-icon"></i>
                            </div>
                            <h6 class="text-uppercase mt-0" title="Customers">Orders</h6>
                            <h2 class="my-2">753</h2>
                            <p class="mb-0">
                                <span class="badge bg-white bg-opacity-25 me-1">-5.75%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div>
                    </div>
                </div> <!-- end col-->

                <div class="col-xxl-3 col-sm-6">
                    <div class="card widget-flat text-bg-primary">
                        <div class="card-body">
                            <div class="float-end">
                                <i class="ri-group-2-line widget-icon"></i>
                            </div>
                            <h6 class="text-uppercase mt-0" title="Customers">Users</h6>
                            <h2 class="my-2">63,154</h2>
                            <p class="mb-0">
                                <span class="badge bg-white bg-opacity-10 me-1">8.21%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div>
                    </div>
                </div> <!-- end col-->
            </div>

            <!-- Members Table -->
            <div class="row">
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mb-3">Recent Member Registrations</h4>
                            <div class="table-responsive">
                                <table class="table table-hover align-middle mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Membership</th>
                                            <th>Join Date</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Rahul Sharma</td>
                                            <td>Gold</td>
                                            <td>Nov 5, 2025</td>
                                            <td><span class="badge bg-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Simran Kaur</td>
                                            <td>Silver</td>
                                            <td>Nov 3, 2025</td>
                                            <td><span class="badge bg-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Vikram Patel</td>
                                            <td>Platinum</td>
                                            <td>Nov 2, 2025</td>
                                            <td><span class="badge bg-danger">Expired</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Trainers Section -->
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mb-3">Top Trainers</h4>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    John Carter <span class="badge bg-primary">45 Sessions</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Emma Watson <span class="badge bg-primary">41 Sessions</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Mark Evans <span class="badge bg-primary">38 Sessions</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
