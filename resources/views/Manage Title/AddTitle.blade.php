@extends('layouts.LectMaster')

@section('content')


                <!-- Begin Page Content -->
                <div class="container-fluid">

                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Add Title</h1>
                    <a href="TitleList" class="btn btn-danger btn-circle btn-sm">
                                        <i >X</i>
                                    </a>
                </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">New Project</h6>
                        </div>
                        <div class="card-body">
                            <form action="TitleList.php" method="POST">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label
                                            for="title_headline"
                                            class="col-sm-3 text-end control-label col-form-label"
                                            >Title</label>
                                        <div class="col-sm-9">
                                            <input 
                                            type="text"
                                            class="form-control"
                                            id="title_headline"
                                            placeholder="Enter Title Here.."/>
                                        </div>
                                    </div>
                                    
                                        
                                    <div class="form-group row">
                                    <label
                                        for="title_detail"
                                        class="col-sm-3 text-end control-label col-form-label"
                                        >Details</label
                                    >
                                    <div class="col-sm-9">
                                        <input type="text" name= "title_detail" class="form-control" placeholder="Enter Details Here..">
                                        <input type="hidden" name="title_status" class="form-control" value="pending">
                                        <input type="hidden" name="title_booked" class="form-control" value="0">
                                    </div>
                                    </div>

                                    <div class="form-group row">
                                    <div class="col-sm-9">
                                        <input type="hidden" name="title_status" class="form-control" value="pending">
                                        <input type="hidden" name="title_booked" class="form-control" value="0">
                                    </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                    
                                    <button type="submit" name="submit "class="btn btn-primary">
                                        Submit
                                    </button>

                                    </div>
                                </div>
                                </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
            
@endsection

