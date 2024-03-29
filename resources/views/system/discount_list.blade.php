@extends('layout.master')
@section('title', 'Discounts List')
@section('parentPageTitle', 'System')
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
                    <button class="btn btn-primary" style="align:right" onclick="window.location.href = '{{ url('Admin/Discounts/Create') }}';" >New Discount</button>
                    <table class="table table-bordered table-striped table-hover" id="discounts">
                        <thead>
                            <tr>
                                <th class="px-1 py-0 text-center">Action</th>
                                <th>Title</th>
                                <th>Rate</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                            <tbody>
                                @foreach($discountList as $discount)
                                <tr >
                                    <td class="action">
                                        <button class="btn btn-success btn-sm p-0 m-0" onclick="window.location.href = '{{ url('Admin/Discounts/Create/'.$discount->id) }}';"><i class="zmdi zmdi-edit px-2 py-1"></i></button>                                        
                                    </td>
                                    <td class="column_size">{{$discount->name }}</td>
                                    <td class="column_size" style="text-align: right">{{$discount->rate }}</td>
                                    <td class="column_size"><span class="tag tag-danger"> {{ ($discount->status==1)?'Active':'Disable' }}</span></td>
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
$('#discounts').DataTable( {
    dom: 'Bfrtip',
    buttons: [
        {
            extend: 'pageLength',
            className: 'btn cl mr-2 px-3 rounded'
        },
        {
            extend: 'copy',
            className: 'btn bg-dark mr-2 px-3 rounded',
            title: 'Discounts List',
            exportOptions: {
                columns: [1,2,3] // Exclude columns with the class 'actions'
            }
        },
        {
            extend: 'csv',
            className: 'btn btn-info mr-2 px-3 rounded',
            title: 'Discounts List',
            exportOptions: {
                columns: [1,2,3] // Exclude columns with the class 'actions'
            }
        },
        {
            extend: 'pdf',
            className: 'btn btn-danger mr-2 px-3 rounded',
            title: 'Discounts List',
            exportOptions: {
                columns: [1,2,3] // Exclude columns with the class 'actions'
            }
        },
        {
            extend: 'excel',
            className: 'btn btn-warning mr-2 px-3 rounded',
            title: 'Discounts List',
            exportOptions: {
                columns: [1,2,3] // Exclude columns with the class 'actions'
            }
        },
        {
            extend: 'print',
            className: 'btn btn-success mr-2 px-3 rounded',
            title: 'Discounts List',
            exportOptions: {
                columns: [1,2,3] // Exclude columns with the class 'actions'
            }
        },
        { extend: 'colvis', className: 'visible btn rounded' }
    ],
    "bDestroy": true,
    "lengthMenu": [[100, 200, 500, -1], [100, 200, 500, "All"]],
        
}); 
</script>
@stop