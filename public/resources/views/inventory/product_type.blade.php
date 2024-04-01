@extends('layout.master')
@section('title', 'Product Type')
@section('parentPageTitle', 'Inventory')
@section('page-style')
<?php  use App\Libraries\appLib; ?>
<link rel="stylesheet" href="{{ asset('public/assets/plugins/footable-bootstrap/css/footable.bootstrap.min.css') }}"/>
<link rel="stylesheet" href="{{ asset('public/assets/plugins/footable-bootstrap/css/footable.standalone.min.css') }}"/>
@stop
@section('content')
<!-- Horizontal Layout -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="body">
                <form class="form-horizontal" action="{{url('Inventory/productType/Add')}}" method="post">
                   {{ csrf_field() }}
                   @if(isset($productType))
                    <input type="hidden" name="id" value="{{$productType->id}}">
                    @endif
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                            <label>Product Type</label>
                        </div>
                         <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="form-group">
                                <input type="text" id="type" name="type" class="form-control" placeholder="Product Type --" value="@if(isset($productType)){{$productType->type}}@endif" required>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="form-group">
                               <button type="submit" class="btn btn-raised btn-primary btn-round waves-effect">SAVE</button>
                            </div>
                        </div>
                    </div>
                   
                </form>
            </div>
        </div>
    </div>
</div>
@stop
@section('page-script')
<script src="{{asset('public/assets/bundles/footable.bundle.js')}}"></script>
<script src="{{asset('public/assets/js/pages/tables/footable.js')}}"></script>
@stop




