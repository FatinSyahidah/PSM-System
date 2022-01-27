@extends('layouts.master')

@section('content')

<!DOCTYPE html>
<html>
    <head>
    <title>Update Logbook</title>
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
        .butangView{
                background-color:green; 
                color:white; 
                text-align:center;
                padding: 3px 10px; 
                cursor: pointer;
                border-radius: 5px;
            }
        .butangView:hover {background-color: #e6e6e6; color: black;}

        .butangUpdate{
                background-color:blue; 
                color:white; 
                text-align:center;
                padding: 3px 10px; 
                cursor: pointer;
                border-radius: 5px;
            }
        .butangUpdate:hover {background-color: #e6e6e6; color: black;}

        .butangDelete{
                background-color:red; 
                color:white; 
                text-align:center;
                padding: 3px 10px; 
                cursor: pointer;
                border-radius: 5px;
            }
        .butangDelete:hover {background-color: #e6e6e6; color: black;}
        .butangBack{
			background-color:grey; 
			color:white; 
			text-align:center;
			padding: 3px 10px; 
			cursor: pointer;
			border-radius: 5px;
		    }

        button{margin:auto;}

        </style>
    </head>
    <body>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Update Logbook Entry</h1>
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        
                        <div class="card-body">
							<div class="card shadow mb-4">
                        
							<div class="card-body">
                                <form action="{{ route('logbooks.update',$logbook->logbook_ID) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                            
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Matric ID:</strong>
                                                <input type="text" name="stud_matricID" value="{{ $logbook->stud_matricID }}" class="form-control" >
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Name:</strong>
                                                <input type="text" name="stud_name" value="{{ $logbook->stud_name }}" class="form-control" >
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Meeting Date:</strong>
                                                <input type="date" name="meeting_date" value="{{ $logbook->meeting_date }}" class="form-control" >
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Start Time :</strong>
                                                <input type="time" name="start_time" value="{{ $logbook->start_time }}" class="form-control" >
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>End Time :</strong>
                                                <input type="time" name="end_time" value="{{ $logbook->end_time }}" class="form-control" >
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Current Progress:</strong>
                                                <textarea class="form-control" style="height:150px" name="current_progress" placeholder="Current progress">{{ $logbook->current_progress }}</textarea>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Discussion Details :</strong>
                                                <textarea class="form-control" style="height:150px" name="discussion_details" placeholder="Discussion details">{{ $logbook->discussion_details }}</textarea>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Action Plan :</strong>
                                                <textarea class="form-control" style="height:150px" name="action_plan" placeholder="Action Plan ">{{ $logbook->action_plan }}</textarea>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                            <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure want to update the entry?')">Submit</button>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                            <a href="logbooks.index" onclick="return confirm('Are you sure want to cancel updating?')">
								            <button type="button" class="butangBack btn btn-close"> Back </button>
                                        </div>

                                    </div>                   
                                </form>
							</div>
							</div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            
            <script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>
            <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

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