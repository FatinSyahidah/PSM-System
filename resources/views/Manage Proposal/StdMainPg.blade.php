@extends('layouts.master')

@section('content')

<!DOCTYPE html>
<html>
    <head>
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

            <div class = "row">          <!--Header -->
                <div class="col-6">
                    <h2 style="color:black">VIEW MY REQUEST</h2>         <!--Title page -->
                </div> 

                @if($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{$message}}</p>
                </div>
                @endif
                
                <div class="col-6">   <!--Button add new request -->
                    <a type="button" href="/form" class="btn btn-primary float-right" 
                    data-bs-toggle="modal" data-bs-target="#exampleModal">ADD REQUEST</a>
                </div>
            </div>

            <div class="card-body">
            
            @yield('content')
            <br>
            <div class= "column">
            <table class="table table-hover">        <!--Table display the list -->
                <thead class="table-primary">
                <tr>
                    <th>NO</th>
                    <th>DATE</th>
                    <th>LECTURER NAME</th>
                    <th>TITLE</th>
                    <th colspan="3">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
            @foreach($proposal as $proposal)
                <tr>
                    <td>{{$proposal->proposal_ID}}</td>
                    <td>{{$proposal->date_submit}}</td>
                    <td>{{$proposal->stud_advisor}}</td>
                    <td>{{$proposal->stud_psmTItle}}</td>      
                    <td><a type="button" href="/ViewStat" class="btn btn-success float-center" 
                    data-bs-toggle="modal" data-bs-target="#exampleModal">VIEW STATUS</a></td>
                    <td><a type="button" href="/EditReq" class="btn btn-warning float-center" 
                    data-bs-toggle="modal" data-bs-target="#exampleModal">EDIT</a></td>
                    @csrf
                    @method('delete') 
                    <td><a type="button" href="{{ route('delete', ['proposal_ID' => $proposal]) }}" class="btn btn-danger float-center" 
                    data-bs-toggle="modal" data-bs-target="#exampleModal">DELETE</a></td>
                </tr>
                @endforeach
            </tbody>
                    
            </table>
            </div>
        </div>    

    

    </body>
</html>

@endsection