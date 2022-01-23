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
                    <h2 style="color:black">List of Request</h2>
                </div>
                <div class="col-6">
                    //button/link patah balik
                </div> 
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <>//total function..
                </div>
            
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>NO.</th>
                                <th>STUDENT NAME</th>
                                <th>MATRIC ID</th>
                                <th>TITLE</th>
                                <th>PROPOSAL</th>
                                <th>STATUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($proposal as $row)
                            <tr>
                            <td>{{$row['stud_name']}}</td>
                            <td>{{ }}</td>
                            <td>{{ }}</td>
                            <td>{{ }}</td>
                            <td>{{$row['stud_proposal']}}</td>
                            <td>{{$row['status_proposal']}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
    </body>
</html>

@endsection
