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
      <div class = "card">


     <div class = "card-header">
                
                    <h2 style="color:b lack">My Profile</h2>
                
        </div> 
        <div style ="margin-left:40px; margin-left: 2em;">
            <img src="prof pic.jpg"  style="height:106px;width:106px"
                alt="Avatar" title="Profile picture to show customised image">
            </div>

        
           <div class="card-body">
           @foreach($students as $student)
               <table>
                   <tr>
                       <td>Name:&emsp;</td>
                       <td>{{$student['name']}}</td>
                   </tr>
                   <tr>
                       <td>Matric ID:&emsp;</td>
                       <td>{{$student['name']}}</td>
                   </tr>
                   <tr>
                       <td>Course:&emsp;</td>
                       <td>{{$student['name']}}</td>
                   </tr>
                   <tr>
                       <td>Year of Study:&emsp;</td>
                       <td>{{$student['name']}}</td>
                   </tr>
                   <tr>
                       <td>Phone Number:&emsp;</td>
                       <td>{{$students['name']}}</td>
                   </tr>
                   <tr>
                       <td>Email:&emsp;</td>
                       <td>{{$student['name']}}</td>
                   </tr>
                   <tr>
                       <td>Address:&emsp;</td>
                       <td>{{$studen['name']}}</td>
                   </tr>
                   <tr>
                       <td>Academic Advisor:&emsp;</td>
                       <td>{{$student['name']}}</td>
                   </tr>
                   <tr>
                       <td>PSM Title:&emsp;</td>
                       <td>{{$student['name']}}</td>
                   </tr>

               </table>
               <br>
               <br>
          </div>
          

          <div class = "row-12">
                <!--Button trigger modal-->
                <!-- Button trigger modal -->
                <div class = "col-12">
                <button type="button" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Delete Profile
                    </button>
               </div>

                    <!--Button trigger modal-->
                    <!--Button trigger modal-->
                <div class = "col-10">
                    <button type="button" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Edit Profile
                    </button>
                </div>

              @endforeach

            </div>

               
                   
                       

                   



        </div>
     </div>
             
           
    </div>
        

    

    </body>
</html>

@endsection

