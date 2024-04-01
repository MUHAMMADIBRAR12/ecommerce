@extends('layout.master')
@section('title', 'Warehouse List')
@section('parentPageTitle', 'Admin')
@section('page-style')
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.23/b-1.6.5/b-colvis-1.6.5/datatables.min.css"/>
<link rel="stylesheet" href="{{asset('public/assets/css/sw.css')}}">
<link rel="stylesheet" href="{{asset('public/assets/css/list.css')}}">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
@stop
@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="body">
                <div class="table-responsive">
                    <button class="btn btn-primary" style="align:right" onclick="window.location.href = '{{ url('Admin/Warehouse/Create') }}';" >New Warehouse</button>
                    <table class="table table-bordered table-striped table-hover" id="warehouses">
                        <thead>
                            <tr>
                                <th class="px-1 py-0 text-center">Action</th>
                                <th>Name</th>
                                <th>Location</th>
                                <th>Address</th>                                
                                <th>Status</th>
                            </tr>
                        </thead>
                            <tbody>
                                @foreach($warehouselist as $warehouse)
                                <tr >
                                    <td class="action">
                                        <button class="btn btn-primary btn-sm p-0 m-0" onclick="window.location.href = '{{ url('Admin/Warehouse/Create/'.$warehouse->id) }}';"><i class="zmdi zmdi-edit px-2 py-1"></i></button>                                        
                                    </td>
                                    <td class="column_size">{{ $warehouse->name }}</td>
                                    <td class="column_size">{{ $warehouse->location }}</td>
                                    <td class="column_size">{{ $warehouse->address }}</td>
                                    <td class="column_size"><span class="tag tag-danger"> {{ ($warehouse->status==1)?'Active':'Disable' }}</span></td>
                                </tr>
                            @endforeach                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@section('page-script')
@include('datatable-list');
<script>
    $('#warehouses').DataTable( {
    dom: 'Bfrtip',
    buttons: [{
                        extend: 'pageLength',
                        className: 'btn cl mr-2 px-3 rounded'
                    },
                    {
                        extend: 'copy',
                        className: 'btn bg-dark mr-2 px-3 rounded',
                        title: 'Warehouse List',
                        exportOptions: {
                        columns: [1,2,3,4] // Exclude columns with the class 'actions'
            }
                    },
                    {
                        extend: 'csv',
                        className: 'btn btn-info mr-2 px-3 rounded',
                        title: 'Warehouse List',
                        exportOptions: {
                        columns: [1,2,3,4] // Exclude columns with the class 'actions'
            }
                    },
                    {
                        extend: 'pdf',
                        className: 'btn btn-danger mr-2 px-3 rounded',
                        title: 'Warehouse List',
                        exportOptions: {
                        columns: [1,2,3,4] // Exclude columns with the class 'actions'
            }
                    },
                    {
                        extend: 'excel',
                        className: 'btn btn-warning mr-2 px-3 rounded',
                        title: 'Warehouse List',
                        exportOptions: {
                        columns: [1,2,3,4] // Exclude columns with the class 'actions'
            }
                    },
                    {
                        extend: 'print',
                        className: 'btn btn-success mr-2 px-3 rounded',
                        title: 'Warehouse List',
                        exportOptions: {
                        columns: [1,2,3,4] // Exclude columns with the class 'actions'
            }
                    },
                    {
                        extend: 'colvis',
                        className: 'visible btn rounded'
                    },
                ],
    "bDestroy": true,
    "lengthMenu": [[100, 200, 500, -1], [100, 200, 500, "All"]],
        
}); 
</script>
@stop