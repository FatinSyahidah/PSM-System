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
        <form action="/ProfileStudentEdit{{$student->stud_id}}" method = "post" class="form-group" style="width:70%; margin-left:15%" >
       <input type ="hidden" name="_token" value="<?php echo csrf_token();?>">
        
            <table>
                <tr>
                    <td>Name:&emsp;</td>
                    <td><input type="text" name="name" value="{{$student->name}} " required></td>
                </tr>
                <tr>
                       <td>Matric ID:</td>
                       <td><input type="text" name="stud_matricID " value="{{$student->stud_matricID}} " required></td>
                   </tr>
                   <tr>
                       <td>Course:&emsp;</td>
                       <td><input type="text" name="stud_course" value="{{$student->stud_course}}" required></td>
                   </tr>
                   <tr>
                       <td>Year of Study:</td>
                       <td><input type="text" name="stud_year" value="{{$student->stud_year}}" required></td>
                   </tr>
                   <tr>
                       <td>Phone Number:&emsp;&emsp;</td>
                       <td><input type="text" name="stud_hpNum" value="{{$student->stud_hpNum}}" required></td>
                   </tr>
                   <tr>
                       <td>Email:&emsp;</td>
                       <td><input type="text" name="email" value="{{$student->email}}" required></td>
                   </tr>
                   <tr>
                       <td>Address:&emsp;</td>
                       <td><input type="text" name="stud_add" value="{{$student->stud_add}}" required></td>
                   </tr>
                   <tr>
                       <td>Academic Advisor:&emsp;</td>
                       <td><input type="text" name="stud_advisor " value="{{$student->stud_advisor}}" required></td>
                   </tr>
                   <tr>
                       <td>PSM Title:&emsp;</td>
                       <td><input type="text" name="stud_psmTitle" value="{{$student->stud_psmTitle}}" required></td>
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
                    <button type="submit"  value = "Update" class="btn btn-primary float-right" >
                    Save Details
                    </button>
                </div>
        </form>
               @endforeach

            </div>

               

        </body>
</html>
@endsection


