@extends('layouts.master')

@section('content')

<!-- Page for student to view request status -->
<!DOCTYPE html>
<html>
    <head>
         <!-- Custom fonts for this template -->    
         <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.css"/>  
    </head>

    <body> 
        <div class = "container">
            <div class = "row">

                <!-- page title -->
                <div class="col-6">
                    <h2 style="color:black">Request Status</h2>
                </div> 
                
                <!-- Table to show the inventory request status -->
                <div class="container-fluid">
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Request Status List</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                
                                <table id="example" class="table  nowrap" style="color: black; width: 100%">
                                    <thead>
                                        <tr>
                                            <th>Inventory ID</th>
                                            <th>Student Matric ID</th>
                                            <th>Student Name</th>
                                            <th>Inventory Name</th>
                                            <th>Quantity</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <!--Fetch data from database -->
                                        @foreach($data as $student)
                                            <tr>
                                                <td>{{$student->inv_ID}}</td>
                                                <td>{{$student->stud_matricID}}</td>
                                                <td>{{$student->stud_name}}</td>
                                                <td>{{$student->inv_name}}</td>
                                                <td>{{$student->quantity}}</td>
                                                <td>{{$student->req_status}}</td>
                                                
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
        <!-- script source for this page -->
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.js"></script> 
       <!--data table script -->
       <script>
                $('#example').DataTable( {
                    responsive: {
                        details: {
                            renderer: function ( api, rowIdx, columns ) {
                                var data = $.map( columns, function ( col, i ) {
                                    return col.hidden ?
                                        '<tr data-dt-row="'+col.rowIndex+'" data-dt-column="'+col.columnIndex+'">'+
                                            '<td>'+col.title+':'+'</td> '+
                                            '<td>'+col.data+'</td>'+
                                        '</tr>' :
                                        '';
                                } ).join('');
                
                                return data ?
                                    $('<table/>').append( data ) :
                                    false;
                            }
                        }
                    }
                });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        </div>
      
    </body>
</html>

@endsection