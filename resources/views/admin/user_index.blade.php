@extends('layouts.admin.app')


@section('page-header')
    <section class="content-header">
        <h1>
            Divers
            <small>drivers datatable</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Users</li>
            <li class="active">Drivers</li>
        </ol>
    </section>
@endsection

@section('content')

    <div class="row">
        <div class="col-xs-12">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible" id="success-alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-check"></i> Alert!</h4>
                    {{ $message }}
                </div>

            @endif
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Driver List</h3>
                    <div class="pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn  btn-success"><i class="fa fa-print"></i>&nbsp;&nbsp;&nbsp;Export as</button>
                            <button type="button" class="btn  btn-primary dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a id="pdf" href="{{url('export-products-pdf')}}" >PDF</a></li>
                                <li class="divider"></li>
                                <li><a id="excel" href="{{url('export-products-excel')}}" >XLSX</a></li>
                                <li class="divider"></li>
                                <li><a id="excel" href="{{url('export-products-csv')}}" >CSV</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>

                            <th>#</th>
                            <th>Name</th>
                            <th>NIC</th>
                            <th>Email</th>
                            <th>Registered on</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($drivers as $driver)
                            <tr>

                                <td>{{$driver->id}}</td>
                                <td>{{$driver->name}}</td>
                                <td>{{$driver->nic}}</td>
                                <td>{{$driver->email}}</td>
                                <td>{{$driver->created_at->toDateString()}}</td>
                                <td>
                                    <form action="{{ route('users.destroy',$driver->id) }}" method="POST" id="formfields">

                                        @csrf
                                        @method('DELETE')

                                        <button
                                                type="button"
                                                class="btn btn-xs btn-danger"
                                                data-toggle="modal"
                                                data-target="#productDeleteConfirmationModal"
                                                data-id="{{$driver['id']}}"
                                        >Deactivate</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>NIC</th>
                            <th>Email</th>
                            <th>Registered on</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>

    @include('admin.includes.modals.vendorDeleteConfirmationModal')


@endsection
@section('scripts')
    <script>

        $(function () {



            $('.select2').select2()
            $('#example1').DataTable({
                "order": [[ 0, "desc" ]]
            });
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })

        $('#productDeleteConfirmationModal').on('show.bs.modal', function(event){

            var button = $(event.relatedTarget);

            var id = button.data('id');

            var modal = $(this);

            modal.find('.modal-footer #prod_id').val(id);

        });
    </script>

@endsection
