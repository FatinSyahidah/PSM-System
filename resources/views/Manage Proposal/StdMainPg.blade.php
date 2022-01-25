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


            <div class = "row">
                <div class="col-6">
                    <h2 style="color:black">View My Request</h2>
                </div> 

                <div class="col-6">
                <!--Button trigger modal-->
                <!-- Button trigger modal -->
                    <a type="button" href="/form" class="btn btn-primary float-right" 
                    data-bs-toggle="modal" data-bs-target="#exampleModal">Add Request</a>
                </div>
            </div>

            <div class="card-body">
            

            
            @yield('content')
            <br>
            <div class= "column">
            <table class="table table-hover">
                <thead class="table-primary">
                <tr>
                    <th>Title</th>
                    <th>Lecturer Name</th>
                    <th>Date</th>
                    <th colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($proposal as $proposal)
                <tr>
                    <td></td>
                    <td>{{$proposal->stud_advisor}}</td>
                    <td>{{$proposal->date_submit}}</td>
                    <td><a type="button" href="/EditReq" class="btn btn-primary float-center" 
                    data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</a></td>
                    <td><a type="button" href="/form" class="btn btn-primary float-center" 
                    data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
                    
            </table>
            </div>
        </div>    

    

    </body>
</html>

@endsection