@extends('common::layouts.app')
@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Add New Contact Record <small> all Contact </small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>

                        <div class="x_content">
                                <div>
                                    <form action="{{route('shope.store')}}" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Enter Name" type="text" name="name" required>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Enter Email" type="email" name="email" required>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Enter Logo" type="file" name="logo" required>
                                        </div>
                            
                                        <div class="form-group">
                                            <input class="form-control btn btn-lg btn-success" type="submit"  required>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script>

    </script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable({
                "columnDefs": [
                    { "orderable": false, "targets": 3 },
                ]
            });
        } );
    </script>
@endpush