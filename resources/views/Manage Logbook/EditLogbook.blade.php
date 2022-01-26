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
                           
							<form method="POST" action="#">
								<p><strong>STUDENT ID </strong></p>
								<input type="text" class="input-field" style="background-color: #9fa39f" value="#" readonly><br><br>
								
								<p><strong>MEETING DATE </strong></p>
								<input type="date" class="input-field" style="background-color: #d9d9d9" value="#" ><br><br>
								
								<p><strong>START TIME </strong></p>
								<input type="time" class="input-field" style="background-color: #d9d9d9" value="" ><br><br>
								
								<p><strong>END TIME </strong></p>
								<input type="time" class="input-field" style="background-color: #d9d9d9" value="" ><br><br>
								
								<p><strong>CURRENT PROGRESS </strong></p>
								<input type="date" class="input-field" style="background-color: #d9d9d9" value="" ><br><br>
								
								<p><strong>DISCUSSION DETAILS </strong></p>
								<input type="date" class="input-field" style="background-color: #d9d9d9" value="" ><br><br>
								
								<p><strong>ACTION PLAN </strong></p>
								<input type="date" class="input-field" style="background-color: #d9d9d9" value="" ><br><br>
								
								
								
								<a href="Logbook" onclick="return confirm('Are you sure want to update the entry?')">
								<input type='submit' class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" name="Update" value="Update">
								<a href="Logbook" onclick="return confirm('Are you sure want to cancel updating?')">
								<button type="button" class="butangBack btn btn-close"> Back </button>
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