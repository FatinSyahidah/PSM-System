@extends('layouts.master')

@section('content')

<!DOCTYPE html>
<html>
    <head>
    </head>
    
    <body>
        <!-- Begin Page Content -->
        <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Logbook</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            
            <div class="card-body"><br><br>
            
                <div class="card shadow mb-4">
                <div class="card-body"><br>
            
                <p><strong>STUDENT ID </strong></p>
                {{$student->stud_matricID}}       
                <br><br><br>
                
                <p><strong>STUDENT NAME </strong></p>
                {{$student->stud_name}}
                <br><br><br>

                <p><strong>MEETING DATE </strong></p>
                {{$student->meeting_date}}
                <br><br><br>
                
                <p><strong> START TIME </strong></p>
                {{$student->start_time}}
               <br><br><br>
                
                <p><strong> END TIME </strong></p>
                {{$student->end_time}}
                <br><br><br>
                
                <p><strong>CURRENT PROGRESS </strong></p>
                {{$student->currrent_progress}}
                <br><br><br>
                
                <p><strong>DISCUSSION DETAIL </strong></p>
                {{$student->discussion_details}}
                <br><br><br>
                
                <p><strong>ACTION PLAN </strong></p>
                {{$student->action_plan}}
                <br><br><br>
                
                <a href="Logbook" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fa-sm text-white-50"></i> Back</a>
                
                </div>
                </div>   
            </div>
        </div>

        </div>
        <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
</body>

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

@endsection