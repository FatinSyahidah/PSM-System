@extends('layouts.LectMaster')

@section('content')


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Title Approval</h1>
</div>

<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Number of students</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">2</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Annual) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Approve</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">1</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-check fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Pending Requests</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">1</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Title List</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Project Title</th>
                                            <th>Student ID</th>
                                            <th>Status</th>
                                            <th style="text-align:right;"><th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>System Architect</td>
                                            <td>CB19033</td>
                                            <td class="text-success">Approved</td>
                                            <td style="text-align:right;">
                                                <div class="comment-footer">
                                                    
                                                    <button
                                                    type="button"
                                                    class="btn btn-success btn-sm text-white"
                                                    >
                                                    Approve
                                                    </button>
                                                    <button
                                                    type="button"
                                                    class="btn btn-danger btn-sm text-white"
                                                    >
                                                    Reject
                                                    </button>
                                                    <button
                                                    type="button"
                                                    class="btn btn-info btn-sm text-white"
                                                    >
                                                    View
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Customer Support</td>
                                            <td>CB19073</td>
                                            <td class="text-warning">Pending</td>
                                            <td style="text-align:right;">
                                                <div class="comment-footer">
                                                    
                                                    <button
                                                    type="button"
                                                    class="btn btn-success btn-sm text-white"
                                                    >
                                                    Approve
                                                    </button>
                                                    <button
                                                    type="button"
                                                    class="btn btn-danger btn-sm text-white"
                                                    >
                                                    Reject
                                                    </button>
                                                    <button
                                                    type="button"
                                                    class="btn btn-info btn-sm text-white"
                                                    >
                                                    View
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Customer Support</td>
                                            <td>CB19083</td>
                                            <td class="text-danger">Rejected</td>
                                            <td style="text-align:right;">
                                                <div class="comment-footer">
                                                    
                                                    <button
                                                    type="button"
                                                    class="btn btn-success btn-sm text-white"
                                                    >
                                                    Approve
                                                    </button>
                                                    <button
                                                    type="button"
                                                    class="btn btn-danger btn-sm text-white"
                                                    >
                                                    Reject
                                                    </button>
                                                    <button
                                                    type="button"
                                                    class="btn btn-info btn-sm text-white"
                                                    >
                                                    View
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


</div>

</div>
<!-- /.container-fluid -->
@endsection