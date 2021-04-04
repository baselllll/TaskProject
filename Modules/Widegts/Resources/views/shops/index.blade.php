@extends('common::layouts.app')
@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Shops Us Table <small> all Shopes </small></h2>
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
                        @if(Session::has('message'))
                            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                        @endif
                        <div class="x_content">
                            <div class="table-responsive">

                                <a href="{{route('shope.create')}}">
                                  <button class="btn btn-sm bg-success"><i class="fa fa-plus fa-2x">Add</i></button>
                                </a>
                                <table id="myTable" class="table table-striped bg-primary bulk_action">
                                    <thead>
                                    <tr class="headings">
                                        <th class="column-title">ID </th>
                                        <th class="column-title">name </th>
                                        <th class="column-title">Email </th>
                                        <th class="column-title">logo</th>

                                    </tr>
                                    </thead>
                                    <tbody style="color: black">
                                    @foreach($shop as $row)
                                        <tr class="even pointer">
                                            <td class=" ">{{ $loop->iteration }}</td>
                                            <td class=" ">{{ $row->name }}</td>
                                            <td class=" ">{{ $row->email }}</td>
                                            <td class=" ">
                                            <img class="img-thumbnail" width="100" height="100" src="http://localhost/fawzyCPanel/storage/app/Modules/Widegts/Resources/assets/images\{{$row->logo}}">
                                            </td>
                                            <td style="display: inline-flex;">
                                                <a href="{{route('shope.edit',['id'=>$row->id])}}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                                <form action="{{route('shope.destroy',['id'=>$row->id])}}">
                                        
                                                    <button type="submit" class="btn btn-danger btn-sm "><i class="fa fa-trash-o"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    
                                    </tbody>
                                
                                </table>
                                <nav aria-label="Page navigation example">
                                        <ul class="pagination" style="float: right;">
                                        
                                             {{$shop->links()}}
                                           
                                        </ul>
                                    </nav>
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
    $('.delete').on('click',function (e) {
        e.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        })
    });
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