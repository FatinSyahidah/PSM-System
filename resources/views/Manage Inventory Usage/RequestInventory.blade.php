@extends('layouts.master')

@section('content')

<!-- Page for student to request inventory -->
<!DOCTYPE html>
<html>
    <head>
         <!-- Custom fonts for this template -->
        
         <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.css"/>
         
         
         <style>
            .float-right{
                margin-left: -60px;
            }

            .center {
                margin-left: auto;
                margin-right: auto;
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
                <div class="col-6">
                    <h2 style="color:black">Request Inventory</h2>
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

      
        </div>
    </body>
</html>

@endsection