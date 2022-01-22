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
                       
        </div>
    </body>
</html>

@endsection