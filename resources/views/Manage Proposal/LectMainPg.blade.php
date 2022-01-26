@extends('layouts.master')

@section('content')

<!DOCTYPE html>
<html>
    <head>
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

            <div class = "row">          <!--Header -->
                <div class="col-6">
                    <h2 style="color:black">List of Request</h2>
                </div> 
            </div>

            <br><br>
            <!--Content for the Lecturer Page-->
            @yield('content')
            <div class= "column">           
                <table class="table table-hover">        <!--Table that display list of request -->
                    <thead class="table-primary">
                        <tr>
                            <th>NO</th>
                            <th>STUDENT NAME</th>
                            <th>METRIC ID</th>
                            <th>TITLE</th>
                            <th>PROPOSAL</th>
                            <th colspan="2">STATUS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><a type="button" href="/EditReq" class="btn btn-success float-center" 
                            data-bs-toggle="modal" data-bs-target="#exampleModal">APPROVE</a></td>
                            <td><a type="button" href="/form" class="btn btn-danger float-center" 
                            data-bs-toggle="modal" data-bs-target="#exampleModal">REJECT</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        
        
        </div>   
    </body>
</html>

@endsection