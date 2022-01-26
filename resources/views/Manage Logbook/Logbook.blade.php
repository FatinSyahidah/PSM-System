@extends('layouts.master')

@section('content')

<!DOCTYPE html>
<html>
    <head>
    <title>Logbook-Student</title>

        <!-- Custom fonts for this template -->
        <link href="{{asset('admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="{{asset('admin/css/sb-admin-2.min.css')}}" rel="stylesheet">

        <!-- Custom styles for this page -->
        <link href="{{asset('admin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

         <!-- Custom fonts for this template -->
        
         <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.css"/>
         
         
         <style>
           
	
         </style>

    </head>
    <body>
            <!-- Begin Page Content -->
            <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Logbook</h1>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                
                <div class="card-body">
                <a href="AddLogbook" class="d-none d-sm-inline-block fa-sm text-white-50">
                <button type="button" class="butangUpdate btn btn-sm btn-primary">Add New Entry </button> </a><br><br><br>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Student ID</th>
                                    <th>Student Name</th>
                                    <th>Meeting Date</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                    <th> </th>
                                </tr>
                            </thead>
                            

                            <tbody>
                                <!--Fetch data from database -->
                                @foreach($data as $student)
                                    <tr>
                                        <td>{{$student->stud_matricID}}</td>
                                        <td>{{$student->stud_name}}</td>
                                        <td>{{$student->meeting_date}}</td>
                                        <td>{{$student->start_time}}</td>
                                        <td> 
                                            <!--Button to update detail -> do update in controller -->
                                            <a href="{{$student->inv_ID}}/updateDetail" class="btn btn-success btn-sm text-white edit" data-bs-toggle="modal" data-bs-target="#editModal"><span class="icon text-white-50">
                                            <i class="fas fa-edit text-white-50"></i>
                                                </span>EDIT</a>
                                        </td>
                                        <td>
                                            <a href="{{$student->logbook_ID}}/ViewLogbook" class="d-none d-sm-inline-block fa-sm text-white-50">
                                            <button type="button" class="butangView btn btn-sm btn-success">View </button> </a>
                                            
                                            <a href="EditLogbook" class="d-none d-sm-inline-block fa-sm text-white-50">
                                            <button type="button" class="butangUpdate btn btn-sm btn-primary">Update </button> </a>
                                            
                                            <a href="DeleteLogbook" class="d-none d-sm-inline-block fa-sm text-white-50" onclick="return confirm('Are you sure want to delete?')">
                                            <button type="button" class="butangDelete btn btn-sm btn-danger">Delete </button> </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            </div>
            <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('admin/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('admin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('admin/js/demo/datatables-demo.js')}}"></script>
    </body>
</html>

@endsection