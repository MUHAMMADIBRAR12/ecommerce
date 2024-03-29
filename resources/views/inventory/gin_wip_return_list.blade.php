@extends('layout.master')
@section('title','GIN-WIP-Return List')
@section('parentPageTitle', 'Inventory')
@section('page-style')
<?php  use App\Libraries\appLib; ?>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.23/b-1.6.5/b-colvis-1.6.5/datatables.min.css"/>
<link rel="stylesheet" href="{{asset('public/assets/css/sw.css')}}">
<link rel="stylesheet" href="{{asset('public/assets/css/list.css')}}">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
@stop
@section('content')
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
              <button class="btn btn-primary" style="align:right" onclick="window.location.href = '{{ url('Inventory/GIN_WIP_Return/Create') }}';" >Add GIN-WIP Return</button>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover" id="purchase_order">
                        <thead>
                            <tr>
                                <th class="px-1 py-0">Action</th>
                                <th class="px-1 py-0">Document No#</th>
                                <th class="px-1 py-0">Date</th>
                                <th class="px-1 py-0">Warehouse</th>
                                <th class="px-1 py-0">Note</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($gin_wip_return_list as $gin_wip_return)
                            <tr>
                                <td class="action">
                                    @if($gin_wip_return->post_status !=='Posted')
                                        <button class="btn btn-success btn-sm p-0 m-0" onclick="window.location.href = '{{ url('Inventory/GIN_WIP_Return/Create/'.$gin_wip_return->id)}}';" ><i class="zmdi zmdi-edit px-2 py-1"></i></button>
                                    @endif
                                        <button class="btn btn-primary btn-sm p-0 m-0"  ><i class="zmdi zmdi-view-day px-2 py-1"></i></button>
                                </td>
                                    <td class="column_size">{{$gin_wip_return->month ?? ''}}-{{appLib::padingZero($gin_wip_return->number  ?? '')}}</td>
                                    <td class="column_size">{{date(appLib::showDateFormat(), strtotime($gin_wip_return->date))}}</td>
                                    <td class="column_size">{{$gin_wip_return->warehouse_name}}</td>
                                    <td class="column_size">{{$gin_wip_return->note}}</td>
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
<script src="{{asset('public/assets/bundles/datatablescripts.bundle.js')}}"></script>
<script src="{{asset('public/assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('public/assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/assets/plugins/jquery-datatable/buttons/buttons.html5.min.js')}}"></script>
<script src="{{asset('public/assets/plugins/jquery-datatable/buttons/buttons.print.min.js')}}"></script>
<script src="{{asset('public/assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js')}}"></script>
<script src="{{asset('public/assets/plugins/jquery-datatable/buttons/buttons.pdfMake.min.js')}}"></script>
<script src="{{asset('public/assets/plugins/jquery-datatable/buttons/buttons.pdfMakeVfs.min.js')}}"></script>
<script src="{{asset('public/assets/plugins/jquery-datatable/buttons/buttons.excel.min.js')}}"></script>
<script>
$('#purchase_order').DataTable( {
    scrollY: '50vh',
    //scrollX: true,
    scrollCollapse: true,
    dom: 'Bfrtip',
    buttons: [
        { extend: 'pageLength', className:'btn cl mr-2 px-3 rounded'},
        { extend: 'copy', className: 'btn bg-dark mr-2 px-3 rounded', title:'Products'},
        { extend: 'csv', className: 'btn btn-info mr-2 px-3 rounded', title:'Products'},
        { extend: 'pdf', className: 'btn btn-danger mr-2 px-3 rounded', title:'Products'},
        { extend: 'excel', className: 'btn btn-warning mr-2 px-3 rounded',title:'Products'},
        { extend: 'print', className: 'btn btn-success mr-2 px-3 rounded',title:'Products'},
        { extend: 'colvis', className:'visible btn rounded'},

        ],
    "bDestroy": true,
    "lengthMenu": [[100, 200, 500, -1], [100, 200, 500, "All"]],

});
</script>
@stop
