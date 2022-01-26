@extends('layouts.LectMaster')

@section('content')

<!-- Page for lecturer to key in the pick up item details when the request status is APPROVE -->
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

            @if(session('success'))
                <div class="alert alert-primary" role="alert">
                {{session('success')}}
                </div>
            @endif
            
            <div class = "row">
                <!-- page title -->
                <div class="col-6">
                    <h2 style="color:black">Pick Up Item</h2>
                </div> 

                <div class="container-fluid">
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">ADD PICK UP ITEM DETAILS</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <!-- table to show the students' inventory request which is request status is set to APPROVE -->
                                <table id="example" class="table nowrap" style="color:black">
                                    <thead>
                                        <tr>
                                            <th>Inventory ID</th>
                                            <th>Student Matric ID</th>
                                            <th>Student Name</th>
                                            <th>Inventory Name</th>
                                            <th>Quantity</th>
                                            <th>Status</th>
                                            <th>Operation</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
        </div>

    </body>
</html>

@endsection
