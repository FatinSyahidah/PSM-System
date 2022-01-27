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
            
            <table class="table">
            @foreach($new1 as $new1)
                <thead>
                    <tr>Student Name</tr>
                    <tr>{{$new1->stud_name}}</tr>
                </thead>
                <tbody>
                
                <tr>
                    <td></td>
                    <td></td>
                    <td>{{$new1->date_submit}}</td>
                </tr>
                </tbody>
            @endforeach
            </table>


            <form action="submit" method="POST">
                <div class="form-group mb-">
                    <label for="">PROPOSAL</label>
                    <input type="file" name="stud_proposal" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                </div>
            </form>
        </div>
    </body>
</html>
@endsection
