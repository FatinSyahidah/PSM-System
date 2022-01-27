@extends('layouts.master')

@section('content')

<!-- Page for student to request inventory -->
<!DOCTYPE html>
<html>
    <head>
         <!-- Custom fonts for this template -->
        
         <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.css"/>
         
         <!-- style the float right button for request modal-->
         <style>
            .float-right{
                margin-left: -60px;
            }
         </style>

    </head>

    <body> 
        <div class = "container">
             <!--return alert message if data successfully inserted -->
            @if(session('success'))
                <div class="alert alert-primary" role="alert">
                {{session('success')}}
                </div>
            @endif

            <div class = "row">
                <div class="col-6">
                    <h2 style="color:black">Request Inventory</h2> <!-- Page Title at page content -->
                </div> 

                <div class="col-6">
                <!-- Button trigger modal -->
                    <button type="button"  class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm float-right" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fas fa-plus fa-sm text-white-50"></i> REQUEST
                    </button>
                </div>
            </div>
        </div>    

        <div class="container-fluid">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                 <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Inventory List</h6>
                </div>

                <!--- Display the inventory list --->
                <div class="card-body">
                    <div class="table-responsive">

                        <table id="example" class="table nowrap center" style="color:black">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Item Name</th>
                                    <th>Availability</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Arduino Kit</td>
                                    <td>Available</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Cable</td>
                                    <td>Available</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Camera Digital</td>
                                    <td>Available</td>     
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Desktop/PC</td>
                                    <td>Available</td>   
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>External Hard Drives</td>
                                    <td>Available</td>   
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Hub</td>
                                    <td>Available</td>   
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Keyboard</td>
                                    <td>Available</td>   
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Projector</td>
                                    <td>Available</td>   
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Router</td>
                                    <td>Available</td>   
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Scanner</td>
                                    <td>Available</td>   
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Smart Board</td>
                                    <td>Available</td>   
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Smart Card Reader</td>
                                    <td>Available</td>   
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Switch</td>
                                    <td>Available</td>   
                                </tr>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
         <!-- /.container-fluid -->
            

          <!-- Modal -->
          <!-- Create request inventory form -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" style="color:black; z-index: 1050; display: none;" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">REQUEST INVENTORY</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
            </div>
        <div class="modal-body">

            <!-- form action after click submit button -->
            <form action="create" method="POST">
            {{csrf_field()}}
            
            <div class="modal-body" style="height:68vh;overflow-y: auto;">
            <div class="form-group row">
                    <label for="exampleFormControlInput1" class="col-sm-3 col-form-label">Matric ID</label> <!--Insert matrid id-->
                    <div class="col-sm-9">
                        <input name="stud_matricID" type="text"  class="form-control" id="exampleFormControlInput1" placeholder="Insert Student ID" required>
                    </div>
            </div>

                <div class="form-group row">
                    <label for="exampleFormControlInput1" class="col-sm-3 col-form-label">Name</label>    <!--Insert name-->
                    <div class="col-sm-9">
                        <input name="stud_name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Insert Student Name" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleFormControlTextarea1" class="col-sm-3 col-form-label">Inventory</label> <!--Choose inventory-->
                    <div class="col-sm-9">
                        <select name="inv_name" class="form-control" aria-label="Inventory" required>
                            <option selected>Choose</option>
                            <option value="Arduino Kit">Arduino Kit</option>
                            <option value="Cable">Cable</option>
                            <option value="Camera Digital">Camera Digital</option>
                            <option value="Desktop">Desktop/PC</option>
                            <option value="External Drive">External Hard Drives</option>
                            <option value="Hub">Hub</option>
                            <option value="Keyboard">Keyboard</option>
                            <option value="Projector">Projector</option>
                            <option value="Router">Router</option>
                            <option value="Scanner">Scanner</option>
                            <option value="Smart Board">Smart Board</option>
                            <option value="Smart Card Reader">Smart Card Reader</option>
                            <option value="Switch">Switch</option>
                            <option value="Projector">Projector</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleFormControlTextarea1" class="col-sm-3 col-form-label">Quantity</label> <!--Choose quantity-->
                    <div class="col-sm-9">
                        <select name="quantity" class="form-control" aria-label="Quantity" required>
                            <option selected>Choose</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleFormControlTextarea1" class="col-sm-3 col-form-label">Request Date</label>  <!--Insert date-->
                    <div class="col-sm-9">
                        <input name="date" type="date" id="datepicker" class="form-control" rows="3" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleFormControlTextarea1" class="col-sm-3 col-form-label">Status</label>  <!--Readonly status-->
                    <div class="col-sm-9">
                        <input name="req_status" class="form-control" id="exampleFormControlTextarea1" rows="3" value="REQUEST" readonly>

                    </div>
                </div>
            
            </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">SUBMIT</button> <!--submit button -->
            </form>
        </div>
        </div>
        </div>
        </div>
            <!-- Script source used in interface -->
            <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.js"></script> 
          <!--data table script  -->          
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
            } );
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        </div>
    </body>
</html>

@endsection