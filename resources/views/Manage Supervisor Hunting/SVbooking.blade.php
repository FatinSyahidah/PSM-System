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
                    <h2 style="color:black">Book Supervisor</h2>
                </div> 

                
            </div>
        </div>
        <br><br>

        <div style ="margin-left: 40px; margin-left: 8em;">
        <h3>Expertise</h3>

<form name="form1" id="form1" action="/action_page.php">
<select name="expertise" id="expertise">
    <option value="" selected="selected">Select Expertise</option>
    <option value=" ">IoT</option>
    <option value=" ">Artificial Intelligence</option>
    <option value=" ">Graphic & Multimedia</option>
    <option value=" ">Cyber Security</option>
  </select>

  <br><br>
  <h3>Supervisor Name</h3>

<form name="form1" id="form1" action="/action_page.php">
<select name="SV" id="SV">
    <option value="" selected="selected">Select Supervisor</option>
  </select>
  <br><br>
  <div class = "row-12">
                <!--Button trigger modal-->
                <!-- Button trigger modal -->
                <div class = "col-8">
                <button type="button" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Cancel
                    </button>

    <div class = "row-12">
                <!--Button trigger modal-->
                <!-- Button trigger modal -->
                <div class = "col-10">
                <button type="button" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Confirm
                    </button>
               </div>
</form>
 </div>   

    </body>
</html>

@endsection