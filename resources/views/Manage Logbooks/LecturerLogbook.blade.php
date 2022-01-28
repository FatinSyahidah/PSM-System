@extends('layouts.LectMaster')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
<title>Logbook-Student</title>

<!-- Custom fonts for this template -->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/sb-admin-2.min.css" rel="stylesheet">

<!-- Custom styles for this page -->
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=8igqhaweeWKVN3c9Fz3eFsHfIA5xuRCchnKEPzn1dwYPNOrdAlakvxF1Z1dAWKLWRETlktwqKvx9YUvmFbXk8wrIGJslygYLdf2JU3EtnHBFE41Ua4pkMAq2ZYjA6D_qUKcqSBR8UcxGNg8O_N2wCZMGzfmkaehrEKyPScuUBNnGRvdZx54YMyYkT8r8dB0Pzk-RvJZzoQf9qrbWJ5vPtMCCfJGm565u18KneRfCEBRBPO0535tP2W8srzrNdCh7KBTcBNxCvsUV85bs2oqhpoF0EB6nPLAsHzQ2FGMLooxpY1CNf7n3ll6aX0BrcsRpLj0VDEloUHTnqLT21fIHh5BK4z-NqKDJWW1tapkdOyX5tv80uvwWddUdsjsDDY6pENt4iom1xnFVbVUXNLOH45ZsT1_7yq2LC2Z41AM-p6l9Ku7lofIKBvwa5k1TS3tuVjF2OL8tiA72VDQTY2trWY4rbMpNcT0sdnz9aoVVq66nT7ee3BIdwMyG6uO38YJDLldTzvqestE6bFhUuBTfZJrm6p0-jXV0nZErnp_7b2i7c9zfqhdsB9N4O4JiA7Wjc4dVSd4YUpUI1sX3TSnis9lvxPekEm-aYCFQXbuTiaHf2xARsPv_8jAUKyEfhV43XlTB-R6Q0wTfXmoeGbp1mN_ZZNId-9zPsG8ck4N_4RXP7bkw6eNLwkZ7LmN40CZdYSBSYqQECGwbdcw7GQLP_oadFz2xsUG6i1GTDWQjjC1jVvSdU07mRJnXxQKOB0rFbqrQEkrfeWAyo-pttffpJxelLkCwvz8mlWfKfKt-V1jDirM6aknRWgut_0y0Ct-elSqEhydlP2zuSUM06w4Ue-2dDMPRUmfX4XiVZzGmmiz9PgciSbr3GsCKC2anQGtQLzPYOvG6Z-vDGKcbRmrJ4Wd8iqsodGLXHhL00Rgni3tJzWW8tTzfLz_POq3NN0w4bIrFvvXfC6hP_7TFMyaSvjau3UtWGXdDVdQlmof7OWLYhvFNCXUb6ZgDHByxS9hHEwerixhcSULjMGWs6jaRrUVHBhWxqj7YnuP8TBWlbE_cyyCduW-ttRpgPJ05-qIEj-gMxHDBB2_NRYw9N-gzGDB1ScYy28sDKoANh7aOu0vR750xqZOaalISqJyDD38fBoEIQJodHabEZvNIUSYFD17eubMVlugAOuB_kvIms2hpIDp2XikrPP3klhoNsSt84yRTtCTTk-lpAIKZTcjZ-9MWNaNHiyWKpRz2Xf-_1foujgfMH-slKFlZRld4WT29Az8jm35y5nNIBstasZMAhWYGlzl13toC_UkVwVoUbYw5wi_LXSBwa_uUctoLOsdEoOFH3TUf0yP8taPsE24RsjY4CnXGn_z45kmN03DldB2ww2oXmQBaodD-2RNGcRB7DxCV7mwA22VNxKXu23aYLAEqKvvEqD8c9dl3tGZUnEeO2HMr5R6wEKrCIW1-8im_6aFeCDiip5FvF8CBV256zljeXsxgetzykBenYh_Syd6cWbXEBTr_fy1iMewGWf6qVBvKOEb8mC_vB5-GS0AvXZHxXKTKrGcgs57Gcr0k7cLz9KGRns7TApzZioPEh9P87i7jlSCq-0ByS0nksbPWqmZ56pCw3LrPRMfekWSGLFOeSxM23dXSpVZtnsq93LOKNd8fckQ8MxuG4ZUlVIDTl4JPeC6uiiXKTDny87Vk2mjnaNEb2Dj83yJM6svHbv8e1I_db_L_AlHsC7HXUuawUSIL59QoOuDtS3pNQwf9uNm_Qj3PJNxydYooOy_soDuDFucF5oeg3zpjZ1qjS0kv2_6Y-HIWdHbl3LOe5D2q8_F-QTGDeq8tixsB5syj_Yi_P80d45htzjAwFwUMyLqTRMVHn3f-4EYiLBNny71Nk8NFWE0GtgaD4oFQkwX5BEbRzjZiL1eDmb0SouV6BUUQMw" charset="UTF-8"></script></head>

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

button{margin:auto;}


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
                    <tr>
                        <td>CB19020</td>
                        <td>Fatin</td>
                        <td>21/11/2021</td>
                        <td>1400</td>
                        <td>1500</td>
                        <td>
                            <a href="ViewLogbookLect" class="d-none d-sm-inline-block fa-sm text-white-50">
                            <button type="button" class="btn btn-sm btn-success">View </button> </a>
                        </td>
                    </tr>
                    <tr>
                        <td>CB19001</td>
                        <td>Lee kok wing</td>
                        <td>23/11/2021</td>
                        <td>1400</td>
                        <td>1500</td>
                        <td>
                            <a href="ViewLogbookLect" class="d-none d-sm-inline-block fa-sm text-white-50">
                            <button type="button" class="butangView">View </button> </a>
                        </td>
                    </tr>
                    <tr>
                        <td>CB19022</td>
                        <td>Harshini</td>
                        <td>03/12/2021</td>
                        <td>1400</td>
                        <td>1500</td>
                        <td> <<!--button to view logbook details-->>
                            <a href="{{$logbook->logbook_ID}}/LecturerShowLogbook" method="POST" class="d-none d-sm-inline-block fa-sm text-white-50">         
                            <button type="button" class="butangView btn btn-sm btn-success">View </button> </a>                                                                       
                        </td>
                    </tr>
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
@endsection