@extends('layouts.LectMaster')

@section('content')

<!-- Page for lecturer to key in the pick up item details when the request status is APPROVE -->
<!DOCTYPE html>
<html>
    <head>
         <!-- Custom fonts for this template -->
        
         <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.css"/>
        
         
         <style>
            .float-right{
                margin-left: -60px;
            }
         </style>

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
                    <h2 style="color:black">Pick Up Item</h2>
                </div> 

                <div class="container-fluid">
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">ADD PICK UP ITEM DETAILS</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <!-- table to show the students' inventory request which is request status is set to APPROVE -->
                                <table id="example" class="table nowrap" style="color:black">
                                    <thead>
                                        <tr>
                                            <th>Inventory ID</th>
                                            <th>Student Matric ID</th>
                                            <th>Student Name</th>
                                            <th>Inventory Name</th>
                                            <th>Quantity</th>
                                            <th>Status</th>
                                            <th>Operation</th>
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
                                            <td>
                                                <!--Button to add detail -> do add in controller -->
                                                <!--add based on inventory id -->
                                                <a href="{{$student->inv_ID}}/add" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm edit" data-bs-toggle="modal" data-bs-target="#editModal"> <i class="fas fa-plus fa-sm text-white-50"></i>
                                                ADD DETAILS</a>
                                                
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
            <!--Modal to key in item details -->
                <div class="modal fade" id="editModal" tabindex="-1" style="color:black; z-index: 1050; display: none;" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">ADD PICK UP DETAILS</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
                            </div>

                            <form action="{{$student->inv_ID}}/add" method="POST" id="editForm">
                            {{csrf_field()}}

                            <div class="modal-body" style="height:68vh;overflow-y: auto;">
                                <div class="form-group row">
                                    <label for="exampleFormControlInput1" class="col-sm-3 col-form-label">Inventory ID</label>  <!--Insert inv id-->
                                    <div class="col-sm-9">
                                        <input name="inv_ID" id="inv_ID" type="text"  class="form-control" value="{{$student->inv_ID}}" required >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="exampleFormControlInput1" class="col-sm-3 col-form-label">Student Matric ID</label> <!--Matric id data-->
                                    <div class="col-sm-9">
                                        <input name="stud_matricID" id="stud_matricID" type="text"  class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="exampleFormControlInput1" class="col-sm-3 col-form-label">Name</label>   <!--Std name data-->
                                    <div class="col-sm-9">
                                        <input name="stud_name" id="stud_name" type="text"  class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="exampleFormControlTextarea1" class="col-sm-3 col-form-label">Inventory Name</label> <!--Inventory name data-->
                                    <div class="col-sm-9">
                                        <input name="inv_name" id="inv_name" type="text" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="exampleFormControlTextarea1" class="col-sm-3 col-form-label">Quantity</label> <!--Quantity data-->
                                    <div class="col-sm-9">
                                        <input name="quantity" id="quantity" type="text" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="exampleFormControlTextarea1" class="col-sm-3 col-form-label">Pick Up Date</label> <!--Insert pick up date-->
                                    <div class="col-sm-9">
                                    <input name="pick_date" id="pick_date" type="date" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="exampleFormControlTextarea1" class="col-sm-3 col-form-label">Return Date</label> <!--Insert return up date-->
                                    <div class="col-sm-9">
                                    <input name="ret_date" id="ret_date" type="date" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="exampleFormControlTextarea1" class="col-sm-3 col-form-label">Remark</label> <!--Insert remark-->
                                    <div class="col-sm-9">
                                    <input name="remark" id="remark" type="text" class="form-control" required>
                                    </div>
                                </div>
                            
                            </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">SUBMIT</button>            <!--submit button -->     
                                </form>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <!--script source used in this page -->
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
       
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
            $('#inv_ID').val(data[0]);
            $('#stud_matricID').val(data[1]);
            $('#stud_name').val(data[2]);
            $('#inv_name').val(data[3]);
            $('#quantity').val(data[4]);
            $('#pick_date').val(data[5]);
            $('#ret_date').val(data[6]);

            $('#editForm').attr('action', '{{$student->inv_ID}}/add');  //add based on id
            $('#editModal').modal('show');                //show modal form
        });
        });
            
        </script>   
        </div>

    </body>
</html>

@endsection
