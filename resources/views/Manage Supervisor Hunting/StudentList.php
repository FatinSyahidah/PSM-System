@@extends('layouts.LectMaster')

@section('content')

<!-- Page for lecturer to view the student list -->
<!DOCTYPE html>
<html>
    <head>
         <!-- Custom fonts for this template -->
         <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.css"/>
        
    </head>

    <body> 
        <div class = "container">

            @if(session('success'))
                <div class="alert alert-primary" role="alert">
                {{session('success')}}
                </div>
            @endif
            <div class = "row">
                <!-- page title -->
                <div class="col-6">
                    <h2 style="color:black">Student List</h2>
                </div>
                
    </body>
</html>

@endsection 