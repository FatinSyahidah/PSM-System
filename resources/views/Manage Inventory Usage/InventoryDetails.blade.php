@extends('layouts.TechMaster')

@section('content')

<!-- Page for technician to view the list of pick up item and edit the return date -->
<!DOCTYPE html>
<html>
    <head>
         <!-- Custom fonts for this template -->
         
         <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.css"/>

    </head>

    <body> 
        <div class = "container">
            <!--return alert message if data successfully updated -->
            @if(session('success'))
                <div class="alert alert-primary" role="alert">
                {{session('success')}}
                </div>
            @endif

            <div class = "row">
                <!--page title-->
                <div class="col-6">
                    <h2 style="color:black">Inventory Details</h2>
                </div> 

                
                <div class="container-fluid">
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">ADD PICK UP ITEM DETAILS</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <!-- table to show the pick up item details-->
                                <div style="overflow-x: auto;">
                                <table id="example" class="table nowrap" style="color:black; width: 90px;">
                                    <thead>
                                        <tr>
                                            <th>Inventory ID</th>
                                            <th>Student Matric ID</th>
                                            <th>Student Name</th>
                                            <th>Inventory Name</th>
                                            <th>Quantity</th>
                                            <th>Pick Up Date</th>
                                            <th>Return Date</th>
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
                                                <td>{{$student->pick_date}}</td>
                                                <td>{{$student->ret_date}}</td>
                                                <td> 
                                                    <!--Button to update detail -> do update in controller -->
                                                    <a href="{{$student->inv_ID}}/updateDetail" class="btn btn-success btn-sm text-white edit" data-bs-toggle="modal" data-bs-target="#editModal"><span class="icon text-white-50">
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

        {{--Start edit modal--}}

        <!-- Modal to show the the details and to update the return date and add remark -->
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" style="color: black; z-index: 1050; display: none;" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">UPDATE DETAILS</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
                </div>
                <div class="modal-body">

                <form action="{{$student->inv_ID}}/updateDetail" method="POST">
                {{csrf_field()}}
        
                    <div class="modal-body" style="height:68vh;overflow-y: auto;">
                        <div class="form-group row">
                            <label for="exampleFormControlInput1" class="col-sm-3 col-form-label">Inventory ID</label>
                            <div class="col-sm-9">
                                <input name="inv_ID" id="inv_ID" type="text"  class="form-control" value="{{$student->inv_ID}}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleFormControlInput1" class="col-sm-3 col-form-label">Student Matric ID</label>
                            <div class="col-sm-9">
                                <input name="stud_matricID" id="stud_matricID" type="text"  class="form-control" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleFormControlInput1" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input name="stud_name" id="stud_name" type="text"  class="form-control" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleFormControlTextarea1" class="col-sm-3 col-form-label">Inventory Name</label>
                            <div class="col-sm-9">
                                <input name="inv_name" id="inv_name" type="text" class="form-control" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleFormControlTextarea1" class="col-sm-3 col-form-label">Quantity</label>
                            <div class="col-sm-9">
                                <input name="quantity" id="quantity" type="text" class="form-control" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleFormControlTextarea1" class="col-sm-3 col-form-label">Pick Up Date</label>
                            <div class="col-sm-9">
                            <input name="pick_date" id="pick_date" type="date" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleFormControlTextarea1" class="col-sm-3 col-form-label">Return Date</label>
                            <div class="col-sm-9">
                            <input name="ret_date" id="ret_date" type="date" class="form-control" required>
                            </div>
                        </div>
                    
                        <div class="form-group row">
                            <label for="exampleFormControlTextarea1" class="col-sm-3 col-form-label">Remark</label>
                            <div class="col-sm-9">
                            <input name="remark" id="remark" type="text" class="form-control" required>
                            </div>
                        </div>
                    </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">SAVE</button>                 
                        </form>
                        </div >
                    </div>
            </div>
        </div>
    </div>

        </div>
    </body>
</html>

@endsection

