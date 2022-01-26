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
        
        <!--Edit Student Profile--> 
        <form action="/ProfileStudentView/{{$students->stud_id}}/updatestud" method="POST">
            {{csrf_field()}}
            <div class="mb-3">
            <label for ="exampleFormControlInput1" class="form-label">Name:</label>
            <input type="text" class = "form-control" name="name" id="exampleFormControlInput1" value="{{$students->name}}"></div>
            
            <div class="mb-3">
            <label for ="exampleFormControlInput2" class="form-label">Matric ID:</label>
            <input type="text" class="form-control" name="stud_matricID " id="exampleFormInput2" value="{{$students->stud_matricID}}"></div>
            
            <div class="mb-3">
            <label for ="exampleFormControlInput3" class="form-label">Course:</label>
            <input type="text" name="stud_course" id="exampleFormInput3" value="{{$students->stud_course}}" ></div>
            
            <div class="mb-3">
            <label for ="exampleFormControlInput4" class="form-label">Year of Study:</label>
            <td><input type="text" name="stud_year" id="exampleFormInput4" value="{{$students->stud_year}}"></div>
           
            <div class="mb-3">
            <label for ="exampleFormControlInput5" class="form-label">Phone Number:</label>
            <input type="text" name="stud_hpNum" id="exampleFormInput5" value="{{$students->stud_hpNum}}"></div>
            
            <div class="mb-3">
            <label for ="exampleFormControlInput7" class="form-label">Email:</label>
            <input type="text" name="email" id="exampleFormInput7" value="{{$students->email}}"></div>
            
            <div class="mb-3">
            <label for ="exampleFormControlInput8" class="form-label">Address:</label>
            <input type="text" name="stud_add" id="exampleFormInput8" value="{{$students->stud_add}}"></div>
            
            <div class="mb-3">
            <label for ="exampleFormControlInput9" class="form-label">Academic Advisor:</label>
            <input type="text" name="stud_advisor " id="exampleFormInput9" value="{{$students->stud_advisor}}"></div>
            
            <div class="mb-3">
            <label for ="exampleFormControlInput10" class="form-label">PSM Title:</label>
            <input type="text" name="stud_psmTitle" id="exampleFormInput10" value="{{$students->stud_psmTitle}}"></div>
         

        
        
        </div>
        </div>

        <div class = "row-12">
                <!-- Button to Cancel Edit -->
                <div class = "col-12">
                <button type="button" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Cancel Edit
                    </button>
               </div>

                    
                    <!--Button Save Edited Student Profile Details-->
                <div class = "col-10">
                    <button type="submit"  value = "Update" class="btn btn-primary float-right" >
                    Save Details
                    </button>
                </div>
        </form>
               

            </div>

               

        </body>
</html>
@endsection


