@extends('layouts.LectMaster')

@section('content')

<!-- Page for lecturer to view the inventory request made by students -->
<!DOCTYPE html>
<html>
    <head>
         <!-- Custom fonts for this template -->
         <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.css"/>
        
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
                    <h2 style="color:black">Student Request Status</h2>
                </div> 

                <!-- Table to show the inventory request status -->
                <div class="container-fluid">
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Student Request Status List</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <!-- table to display all the inventory request made by student -->
                            <table id="example" class="table nowrap" style="color:black; width: 100%">
                                <thead>
                                    <tr>
                                        <th>Inventory ID</th>
                                        <th>Student Matric ID</th>
                                        <th>Inventory Name</th>
                                        <th>Quantity</th>
                                        <th>Status</th>
                                        <th>Operation</th>
                                    </tr>
                                </thead>
                                
    </body>
</html>

@endsection
