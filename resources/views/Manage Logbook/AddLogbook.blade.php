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
                    <form action="http://localhost/UMP-Parcel/Complaint/insertDataComplaint.php" method="post"><br>
                    <p> STUDENT ID </p>
                    <input type="text" class="input-field" placeholder="enter student id" name="stud_id" required><br><br>
                    
                    <p> MEETING DATE </p>
                    <input type="date" name="meeting_date" required><br><br>
                    
                    <p>START TIME</p>
                    <input type="time" name="start_time" required><br><br>
                    
                    <p>END TIME</p>
                    <input type="time" name="end_time" required><br><br>
                    
                    <p>CURRENT PROGRESS </p>
                    <textarea type="text" class="input-field textarea-field" placeholder="enter your current progress" name="current_progress" rows="6" cols="50"></textarea><br><br>
                    
                    
                    <p>DISCUSSION DETAIL </p>
                    <textarea type="text" class="input-field textarea-field" placeholder="enter your discussion detail" name="discussion_details" rows="6" cols="50"></textarea><br><br>
                    
                    <p>ACTION PLAN </p>
                    <textarea type="text" class="input-field textarea-field" placeholder="enter your action plan" name="action_plan" rows="6" cols="50"></textarea><br><br>
                    
                    <a href="Logbook" onclick="return confirm('Are you sure want to submit?')">
                    <input type='submit' class="butangSubmit btn btn-primary" name="submit" value="Submit">
                    <a href="Logbook" onclick="return confirm('Are you sure want to cancel updating?')">
                    <button type="button" class="butangBack btn btn-close"> Back </button>
            </a>

            </form>
                </div>
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