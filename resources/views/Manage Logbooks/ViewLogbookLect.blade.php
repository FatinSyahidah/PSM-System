@extends('layouts.LectMaster')

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
                <br><br><br>
                
                <p><strong>MEETING DATE </strong></p>
                <br><br><br>
                
                <p><strong> START TIME </strong></p>
               <br><br><br>
                
                <p><strong> END TIME </strong></p>
                <br><br><br>
                
                <p><strong>CURRENT PROGRESS </strong></p>
                <br><br><br>
                
                <p><strong>DISCUSSION DETAIL </strong></p>
                <br><br><br>
                
                <p><strong>ACTION PLAN </strong></p>
                <br><br><br>
                
                <a href="LogbookLecturer" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
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