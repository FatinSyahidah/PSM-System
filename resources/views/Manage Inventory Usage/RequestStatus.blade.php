@extends('layouts.master')

@section('content')

<!-- Page for student to view request status -->
<!DOCTYPE html>
<html>
    <head>
         <!-- Custom fonts for this template -->
         
         <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.css"/>
         
         <style>
            .float-right{
                margin-left: -60px;
            }
         </style>

    </head>

    <body> 
        <div class = "container">
            <div class = "row">

                <!-- page title -->
                <div class="col-6">
                    <h2 style="color:black">Request Status</h2>
                </div> 
                
                <!-- Table to show the inventory request status -->
                <div class="container-fluid">
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Request Status List</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                
                                <table id="example" class="table  nowrap" style="color: black; width: 100%">
                                    <thead>
                                        <tr>
                                            <th>Inventory ID</th>
                                            <th>Student Matric ID</th>
                                            <th>Student Name</th>
                                            <th>Inventory Name</th>
                                            <th>Quantity</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $student)
                                            <tr>
                                                <td>{{$student->inv_ID}}</td>
                                                <td>{{$student->stud_matricID}}</td>
                                                <td>{{$student->stud_name}}</td>
                                                <td>{{$student->inv_name}}</td>
                                                <td>{{$student->quantity}}</td>
                                                <td class="text-success">{{$student->req_status}}</td>
                                                
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    

      
    </body>
</html>

@endsection