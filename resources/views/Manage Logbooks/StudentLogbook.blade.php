@extends('layouts.master')

@section('content')

<!-- page for student view logbook list -->
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
                <!--return alert message if data successfully updated -->
            @if(session('success'))
                <div class="alert alert-primary" role="alert">
                {{session('success')}}
                </div>
            @endif

            <div class="card-body">
                <a href="AddLogbook" class="d-none d-sm-inline-block fa-sm text-white-50">          <!-- button to go to logbook form to add new entry-->
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
                                <th>Action </th>
                            </tr>
                        </thead>
                        

                        <tbody>
                            <!--Fetch data from database -->
                            @foreach($entry as $logbook)
                                <tr>
                                    <td>{{$logbook->stud_matricID}}</td>
                                    <td>{{$logbook->stud_name}}</td>
                                    <td>{{$logbook->meeting_date}}</td>
                                    <td>{{$logbook->start_time}}</td>
                                    <td>{{$logbook->end_time}}</td>
                                    <td>
                                        <a href="{{$logbook->logbook_ID}}/ShowLogbook" method="POST" class="d-none d-sm-inline-block fa-sm text-white-50">         
                                        <button type="button" class="butangView btn btn-sm btn-success">View </button> </a>         <<!--button to view logbook details-->>
                                        
                                        <a href="EditLogbook" class="d-none d-sm-inline-block fa-sm text-white-50">
                                        <button type="button" class="butangUpdate btn btn-sm btn-primary">Edit </button> </a>     <<!--button to update logbook entry-->>
                                
                                        @csrf
                                        @method('deletelect')
                                        <div class = "col-12">
                                            <a href = "{{ route('DeleteLogbook', ['logbook_ID' => $logbook]) }}">
                                            <button type="submit" class="butangDelete btn btn-sm btn-danger" onclick="return confirm('Are you sure want to delete?')">Delete</button>    
                                            </a>
                                    
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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