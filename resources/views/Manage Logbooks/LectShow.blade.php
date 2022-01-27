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
                
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2> Logbook Details</h2>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('logbooks.index') }}"> Back</a>
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Matric ID:</strong>
                            {{ $logbook->stud_matricID }}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $logbook->stud_name }}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Meeting Date:</strong>
                            {{ $logbook->meeting_date }}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Start Time:</strong>
                            {{ $logbook->start_time }}
                        </div>
                    </div>

                    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>End Time:</strong>
                            {{ $logbook->end_time }}
                        </div>
                    </div>

                    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Current Progression:</strong>
                            {{ $logbook->current_progress }}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Discussion Detail:</strong>
                            {{ $logbook->discussion_details }}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong> Action Plan:</strong>
                            {{ $logbook->action_plan }}
                        </div>
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