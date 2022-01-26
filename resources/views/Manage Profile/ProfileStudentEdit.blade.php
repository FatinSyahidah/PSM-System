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

       @csrf
     <div class = "row">
                <div class="col-6">
                    <h2 style="color:black">Edit MyProfile</h2>
                </div>
        </div>
        <div style ="margin-left:50px; margin-left: 1em; margin-top: 12px">
         <br>
         @foreach($students as $student)
        <form action="/ProfileStudentEdit/{{$student->stud_id}}" method = "post" class="form-group" style="width:70%; margin-left:15%" action= "/action_page.php">
        <input type ="hidden" name="_token" value="<?php echo csrf_token();?>">
        
            <table>
                <tr>
                    <td>Name:&emsp;</td>
                    <td><input type="text" name="name" value="{{$student->name}} " required></td>
                </tr>
                <tr>
                       <td>Matric ID:</td>
                       <td><input type="text" name=" " value=" " required></td>
                   </tr>
                   <tr>
                       <td>Course:&emsp;</td>
                       <td><input type="text" name=" " value=" " required></td>
                   </tr>
                   <tr>
                       <td>Year of Study:</td>
                       <td><input type="text" name=" " value=" " required></td>
                   </tr>
                   <tr>
                       <td>Phone Number:&emsp;&emsp;</td>
                       <td><input type="text" name=" " value=" " required></td>
                   </tr>
                   <tr>
                       <td>Email:&emsp;</td>
                       <td><input type="text" name=" " value=" " required></td>
                   </tr>
                   <tr>
                       <td>Address:&emsp;</td>
                       <td><input type="text" name=" " value=" " required></td>
                   </tr>
                   <tr>
                       <td>Academic Advisor:&emsp;</td>
                       <td><input type="text" name=" " value=" " required></td>
                   </tr>
                   <tr>
                       <td>PSM Title:&emsp;</td>
                       <td><input type="text" name=" " value=" " required></td>
                   </tr>

        </table>

        </div>
        </div>

        <div class = "row-12">
                <!--Button trigger modal-->
                <!-- Button trigger modal -->
                <div class = "col-12">
                <button type="button" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Cancel Edit
                    </button>
               </div>

                    <!--Button trigger modal-->
                    <!--Button trigger modal-->
                <div class = "col-10">
                    <button type="button" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Save Details
                    </button>
                </div>



            </div>

               

        </body>
</html>
@endsection


