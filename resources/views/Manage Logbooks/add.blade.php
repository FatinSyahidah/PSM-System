@extends('layouts.master')

@section('content')

<!DOCTYPE html>
<html>
    <head>
         <!-- Custom fonts for this template -->
        
         <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.css"/>
         
         
         <style>
            .butangSubmit{
			
			color:white; 
			text-align:center;
			padding: 3px 10px; 
			cursor: pointer;
			border-radius: 5px;
		    }
	        .butangSubmit:hover {background-color: #e6e6e6; color: black;}
	
	        .butangBack{
			background-color:grey; 
			color:white; 
			text-align:center;
			padding: 3px 10px; 
			cursor: pointer;
			border-radius: 5px;
		    }
	        .butangBack:hover {background-color: #e6e6e6; color: black;}
         </style>

    </head>
    <body>
            <!-- Begin Page Content -->
            <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Add New Logbook Entry</h1>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                
                <div class="card-body">
                    
                
                <form action="{{ route('logbooks.store') }}" method="POST">
                    @csrf
                
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Matric ID:</strong>
                                <input type="text" name="stud_matricID" class="form-control" placeholder="Matric ID">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name:</strong>
                                <input type="text" name="stud_name" class="form-control" placeholder="Name">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Meeting Date:</strong>
                                <input type="date" name="meeting_date" class="form-control" placeholder="Meeting Date">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Start Time:</strong>
                                <input type="time" name="start_time" class="form-control" placeholder="Start timne">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>End Time:</strong>
                                <input type="time" name="end_time" class="form-control" placeholder="End time">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Current Progress:</strong>
                                <textarea class="form-control" style="height:150px" name="current_progress" placeholder="Current Progress"></textarea>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Discussion Details:</strong>
                                <textarea class="form-control" style="height:150px" name="discussion_details" placeholder="Discussion Details "></textarea>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                
                </form>
       
                
            </div>

            </div>
            <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Bootstrap core JavaScript-->
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