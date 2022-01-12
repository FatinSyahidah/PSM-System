@extends('layouts.LectMaster')

@section('content')


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                
                <!-- Begin Page Content -->
                <div class="container-fluid">

                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Title</h1>
                    <a href="AddTitle" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-plus fa-sm text-white-50"></i> Add Title</a>
                </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Title List</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Project Title</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>System Architect</td>
                                            
                                            <td style="text-align:right;">
                                                <div class="comment-footer">
                                                    
                                                    <button
                                                    type="button"
                                                    class="btn btn-success btn-sm text-white"
                                                    >
                                                    View
                                                    </button>
                                                    <button
                                                    type="button"
                                                    class="btn btn-info btn-sm text-white"
                                                    >
                                                    Edit
                                                    </button>
                                                    <button
                                                    type="button"
                                                    class="btn btn-danger btn-sm text-white"
                                                    >
                                                    Delete
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Customer Support</td>
                                            <td style="text-align:right;">
                                                <div class="comment-footer">
                                                    
                                                    <button
                                                    type="button"
                                                    class="btn btn-success btn-sm text-white"
                                                    >
                                                    View
                                                    </button>
                                                    <button
                                                    type="button"
                                                    class="btn btn-info btn-sm text-white"
                                                    >
                                                    Edit
                                                    </button>
                                                    <button
                                                    type="button"
                                                    class="btn btn-danger btn-sm text-white"
                                                    >
                                                    Delete
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

           

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->




</body>

</html>
@endsection

