@extends('layouts.LectMaster')

@section('content')

<!-- Page for lecturer to view the inventory request made by students -->
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
                    <h2 style="color:black">Student Request Status</h2>
                </div> 

                <!-- Table to show the inventory request status -->
                <div class="container-fluid">
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Student Request Status List</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <!-- table to display all the inventory request made by student -->
                            <table id="example" class="table nowrap" style="color:black; width: 100%">
                                <thead>
                                    <tr>
                                        <th>Inventory ID</th>
                                        <th>Student Matric ID</th>
                                        <th>Inventory Name</th>
                                        <th>Quantity</th>
                                        <th>Status</th>
                                        <th>Operation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <!-- fetch data from _inventories table -->
                                @foreach($data as $student)
                                    <tr>
                                        <td>{{$student->inv_ID}}</td>
                                        <td>{{$student->stud_matricID}}</td>
                                        <td>{{$student->inv_name}}</td>
                                        <td>{{$student->quantity}}</td>
                                        <td>{{$student->req_status}}</td>
                                        <td>
                                            <!--Button to update request -> do update in controller -->
                                            <!--update based on inventory id -->
                                            <a href="{{$student->inv_ID}}/updateRequest" class="btn btn-success btn-sm text-white edit" data-bs-toggle="modal" data-bs-target="#editModal"><span class="icon text-white-50">
                                            <i class="fas fa-edit text-white-50"></i>
                                                </span>EDIT</a>
                                        </td>
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
                <!--Start edit modal-->
                <!-- modal to edit the request status -->
                <div class="modal fade" id="editModal" tabindex="-1" style="color:black" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Update Status</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
                            </div>

                            <!-- form action after clicking update button, go to controller for process -->
                            <form action="{{$student->inv_ID}}/updateRequest" method="POST" id="editForm">
                            {{csrf_field()}}
                    
                            <div class="modal-body">
                                <div class="form-group row">
                                    <label for="exampleFormControlInput1" class="col-sm-3 col-form-label">Matric ID</label> <!--Data matrid id-->
                                    <div class="col-sm-9">
                                    <input name="stud_matricID" id="stud_matricID" type="text"  class="form-control" value="{{$student->stud_matricID}}" disabled >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="exampleFormControlInput1" class="col-sm-3 col-form-label">Inventory Name</label> <!--Inventory name data-->
                                    <div class="col-sm-9">
                                    <input name="inv_name" id="inv_name" type="text" class="form-control" disabled>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="exampleFormControlInput1" class="col-sm-3 col-form-label">Quantity</label>    <!--Quantity data-->
                                    <div class="col-sm-9">
                                    <input name="quantity" id="quantity" type="text" class="form-control" disabled>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="exampleFormControlInput1" class="col-sm-3 col-form-label">Edit Status</label>  <!--Update status-->
                                    <div class="col-sm-9">
                                    <select name="req_status" id="req_status" class="form-control" aria-label="Status" required>
                                        <option selected>Status</option>
                                        <option value="APPROVE">APPROVE</option>
                                        <option value="REJECT">REJECT</option>
                                    </select>
                                    </div>
                                </div>
                            </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">UPDATE</button>                 <!--update button -->
                                </form>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- script source used in this page -->
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>

        <!--data table script -->
        <script>
            $(document).ready(function($) {
        
        var table = $('#example').DataTable();

        //start edit record
            table.on('click','.edit', function() {

                $tr = $(this).closest('tr');
                if ($($tr).hasClass('child')){
                    $tr = $tr.prev('.parent');
                }

                var data = table.row($tr).data();
                console.log(data);
                //data value based on column name
                $('#stud_matricID').val(data[1]);
                $('#inv_name').val(data[2]);
                $('#quantity').val(data[3]);
                $('#req_status').val(data[4]);

                $('#editForm').attr('action', '{{$student->inv_ID}}/updateRequest');   //update based on id
                $('#editModal').modal('show');              //show modal form
            });
        });    
        </script>
        
        </div>  
    </body>
</html>

@endsection
