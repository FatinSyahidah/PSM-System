@extends('layouts.TechMaster')

@section('content')

<!-- Page for technician to view the list of pick up item and edit the return date -->
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
                <!--page title-->
                <div class="col-6">
                    <h2 style="color:black">Inventory Details</h2>
                </div> 

                
               
    </body>
</html>

@endsection

