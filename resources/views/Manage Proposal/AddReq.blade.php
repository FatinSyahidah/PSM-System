@extends('layouts.master')

@section('content')

<!DOCTYPE html>
<html>
    <head>
         <!-- Custom fonts for this template -->
         <link rel="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
         <link rel="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
         <link rel="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">
         <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.css"/>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
         
         <style>
            .float-right{
                margin-left: -60px;
            }
         </style>

    </head>

    <body> 
        <div class = "container">

        @if (session('status'))
            <h6 class="alert-alert-success">{{ session('status') }}</h6>
        @endif
            <div class = "row">
                <div class="col-6">
                    <h2 style="color:black">Add Request</h2>
                </div> 
            </div>
            
            <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Student Name</th>
                    <th>Matric ID</th>
                    <th>Advisor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                </tr>
            </tbody>
            </table>
            
            <form action="submit" method="POST">
            @csrf
            <input type="text" name="name" placeholder="company name">
            <br><br>
            <input type="text" name="address" placeholder="company address">
            <br><br>
            <div class="form-group mb-">
                    <label for="">Student Name</label>
                    <input type="text" name="" class="form-control">
                </div>

                <div class="form-group mb-">
                    <label for="">Matric ID</label>
                    <input type="text" name="" class="form-control">
                </div>

                <div class="form-group mb-">
                    <label for="">PROPOSAL</label>
                    <input type="file" name="stud_proposal" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                </div>
            </form>



            
            <form action="{{ url('AddReq') }}" method="POST" enctype="multiple/form-data">
                @csrf
                
            </form>

    

    </body>
</html>

@endsection
