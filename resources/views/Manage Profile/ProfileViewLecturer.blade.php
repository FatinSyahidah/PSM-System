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
                    <h2 style="color:black">My Profile</h2>
                </div>
        </div> 
        
         <!--Call Lecturer Profile Data From Database-->
         <div class="card-body">
           @foreach($lecturers as $lecturer)
               <table>
                   <tr>
                       <td>Name:&emsp;</td>
                       <td>{{$lecturer->name}}</td>
                   </tr>
                   <tr>
                       <td>Staff ID:&emsp;</td>
                       <td>{{$lecturer->lect_staffID}}</td>
                   </tr>
                   <tr>
                       <td>Field:&emsp;</td>
                       <td>{{$lecturer->lect_field}}</td>
                   </tr>
                   <tr>
                       <td>Office Number:&emsp;</td>
                       <td>{{$lecturer->lect_officeNum}}</td>
                   </tr>
                   <tr>
                       <td>Phone Number:&emsp;</td>
                       <td>{{$lecturer->lect_hpNum}}</td>
                   </tr>
                   <tr>
                       <td>Email:&emsp;</td>
                       <td>{{$lecturer->email}}</td>
                   </tr>
                   <tr>
                       <td>Address:&emsp;</td>
                       <td>{{$lecturer->lect_add}}</td>
                   </tr>
                   <tr>
                       <td>Expertise:&emsp;</td>
                       <td>{{$lecturer->lect_expertise}}</td>
                   </tr>
                
               </table>
               <br>
               <br>
          </div>
          
           <!--Delete Profile -->
          <div class = "row-12">
               @csrf
                @method('deletelect')
                <div class = "col-12">
                   <td> <a href = "{{ route('deletelect', ['lect_id' => $lecturer]) }}">
                    Delete
                  </a></td>
               
               </div>
                 <!--Edit Profile-->
                 @csrf
                    @method('vieweditlect')
                <div class = "col-10">
                <td> <a href = "/ProfileViewLecturer/{{$lecturer->lect_id}}/ProfileLectEdit ">
                    Edit
                  </a></td>
                   
                </div>

              @endforeach

            </div>


    </body>
</html>

@endsection


