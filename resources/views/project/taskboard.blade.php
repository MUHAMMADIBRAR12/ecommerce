@extends('layout.master')
@section('title', 'Taskboard')
@section('parentPageTitle', 'Project')
@section('content')
<div class="row clearfix">
    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>Planned</strong></h2>
                <ul class="header-dropdown">
                    <li><a href="javascript:void(0);" data-toggle="modal" data-target="#addcontact"><i class="icon-plus"></i></a></li>
                </ul>
            </div>
            <div class="body taskboard planned_task">
                <div class="dd" data-plugin="nestable">
                    <ol class="dd-list">
                        <li class="dd-item" data-id="1">
                            <div class="dd-handle d-flex justify-content-between align-items-center">
                                <div class="h6 mb-0">Themeforest update</div>
                                <div class="action">
                                    <a href="javascript:void(0);"><i class="zmdi zmdi-edit"></i></a>
                                    <a href="javascript:void(0);"><i class="zmdi zmdi-delete"></i></a>
                                </div>
                            </div>
                            <div class="dd-content p-15">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <ul class="list-unstyled d-flex bd-highlight align-items-center">
                                    <li class="mr-2 flex-grow-1 bd-highlight"><span class="badge badge-default"><i class="zmdi zmdi-time"></i> 18 Jan</span></li>
                                    <li class="ml-3 bd-highlight"><a href="javascript:void(0);" class="text-muted"><i class="zmdi zmdi-comments"></i> 5</a></li>
                                    <li class="ml-3 bd-highlight"><a href="javascript:void(0);" class="text-muted"><i class="zmdi zmdi-check-square"></i> 11</a></li>
                                    <li class="ml-3 bd-highlight">
                                        <ul class="list-unstyled team-info margin-0">
                                            <li><img src="{{asset('assets/images/xs/avatar7.jpg')}}" alt="Avatar"></li>
                                            <li><img src="{{asset('assets/images/xs/avatar8.jpg')}}" alt="Avatar"></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dd-item" data-id="2">
                            <div class="dd-handle d-flex justify-content-between align-items-center">
                                <div class="h6 mb-0">Sites to review</div>
                                <div class="action">
                                    <a href="javascript:void(0);"><i class="zmdi zmdi-edit"></i></a>
                                    <a href="javascript:void(0);"><i class="zmdi zmdi-delete"></i></a>
                                </div>
                            </div>
                            <div class="dd-content p-15">
                                <p>Contrary to popular belief, Lorem Ipsum is not simply.</p>
                                <ul class="list-unstyled d-flex bd-highlight align-items-center">
                                    <li class="mr-2 flex-grow-1 bd-highlight"><span class="badge badge-default"><i class="zmdi zmdi-time"></i> 28 Jan</span></li>
                                    <li class="ml-3 bd-highlight"><a href="javascript:void(0);" class="text-muted"><i class="zmdi zmdi-comments"></i> 2</a></li>
                                    <li class="ml-3 bd-highlight"><a href="javascript:void(0);" class="text-muted"><i class="zmdi zmdi-check-square"></i> 8</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="dd-item" data-id="3">
                            <div class="dd-handle d-flex justify-content-between align-items-center">
                                <div class="h6 mb-0">Client Followup</div>
                                <div class="action">
                                    <a href="javascript:void(0);"><i class="zmdi zmdi-edit"></i></a>
                                    <a href="javascript:void(0);"><i class="zmdi zmdi-delete"></i></a>
                                </div>
                            </div>
                            <div class="dd-content p-15">
                                <p>It is a long established fact that a reader.</p>
                                <ul class="list-unstyled d-flex bd-highlight align-items-center">
                                    <li class="mr-2 flex-grow-1 bd-highlight"><span class="badge badge-default"><i class="zmdi zmdi-time"></i> 05 Feb</span></li>
                                </ul>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>In</strong> progress</h2>
            </div>
            <div class="body taskboard progress_task">
                <div class="dd" data-plugin="nestable">
                    <ol class="dd-list">
                        <li class="dd-item" data-id="2">
                            <div class="dd-handle d-flex justify-content-between align-items-center">
                                <div class="h6 mb-0">Sites to review</div>
                                <div class="action">
                                    <a href="javascript:void(0);"><i class="zmdi zmdi-edit"></i></a>
                                    <a href="javascript:void(0);"><i class="zmdi zmdi-delete"></i></a>
                                </div>
                            </div>
                            <div class="dd-content p-15">
                                <p>Contrary to popular belief, Lorem Ipsum is not simply.</p>
                                <ul class="list-unstyled d-flex bd-highlight align-items-center">
                                    <li class="mr-2 flex-grow-1 bd-highlight"><span class="badge badge-default"><i class="zmdi zmdi-time"></i> 28 Jan</span></li>
                                    <li class="ml-3 bd-highlight"><a href="javascript:void(0);" class="text-muted"><i class="zmdi zmdi-comments"></i> 2</a></li>
                                    <li class="ml-3 bd-highlight"><a href="javascript:void(0);" class="text-muted"><i class="zmdi zmdi-check-square"></i> 8</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="dd-item" data-id="3">
                            <div class="dd-handle d-flex justify-content-between align-items-center">
                                <div class="h6 mb-0">Client Followup</div>
                                <div class="action">
                                    <a href="javascript:void(0);"><i class="zmdi zmdi-edit"></i></a>
                                    <a href="javascript:void(0);"><i class="zmdi zmdi-delete"></i></a>
                                </div>
                            </div>
                            <div class="dd-content p-15">
                                <p>It is a long established fact that a reader.</p>
                                <ul class="list-unstyled d-flex bd-highlight align-items-center">
                                    <li class="mr-2 flex-grow-1 bd-highlight"><span class="badge badge-default"><i class="zmdi zmdi-time"></i> 05 Feb</span></li>
                                </ul>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>Completed</strong></h2>
            </div>
            <div class="body taskboard completed_task">
                <div class="dd" data-plugin="nestable">
                    <ol class="dd-list">
                        <li class="dd-item" data-id="1">
                            <div class="dd-handle d-flex justify-content-between align-items-center">
                                <div class="h6 mb-0">Themeforest update</div>
                                <div class="action">
                                    <a href="javascript:void(0);"><i class="zmdi zmdi-edit"></i></a>
                                    <a href="javascript:void(0);"><i class="zmdi zmdi-delete"></i></a>
                                </div>
                            </div>
                            <div class="dd-content p-15">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <ul class="list-unstyled d-flex bd-highlight align-items-center">
                                    <li class="mr-2 flex-grow-1 bd-highlight"><span class="badge badge-default"><i class="zmdi zmdi-time"></i> 18 Jan</span></li>
                                    <li class="ml-3 bd-highlight"><a href="javascript:void(0);" class="text-muted"><i class="zmdi zmdi-comments"></i> 5</a></li>
                                    <li class="ml-3 bd-highlight"><a href="javascript:void(0);" class="text-muted"><i class="zmdi zmdi-check-square"></i> 11</a></li>
                                    <li class="ml-3 bd-highlight">
                                        <ul class="list-unstyled team-info margin-0">
                                            <li><img src="{{asset('assets/images/xs/avatar7.jpg')}}" alt="Avatar"></li>
                                            <li><img src="{{asset('assets/images/xs/avatar8.jpg')}}" alt="Avatar"></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dd-item" data-id="3">
                            <div class="dd-handle d-flex justify-content-between align-items-center">
                                <div class="h6 mb-0">Client Followup</div>
                                <div class="action">
                                    <a href="javascript:void(0);"><i class="zmdi zmdi-edit"></i></a>
                                    <a href="javascript:void(0);"><i class="zmdi zmdi-delete"></i></a>
                                </div>
                            </div>
                            <div class="dd-content p-15">
                                <p>It is a long established fact that a reader.</p>
                                <ul class="list-unstyled d-flex bd-highlight align-items-center">
                                    <li class="mr-2 flex-grow-1 bd-highlight"><span class="badge badge-default"><i class="zmdi zmdi-time"></i> 05 Feb</span></li>
                                </ul>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add New Task Modal -->
<div class="modal fade" id="addcontact" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel">Add New Task</h6>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-12">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Task no.">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Job title">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <textarea type="number" class="form-control" placeholder="Description"></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <select class="form-control show-tick m-b-10">
                            <option>Select Team</option>
                            <option>John Smith</option>
                            <option>Hossein Shams</option>
                            <option>Maryam Amiri</option>
                            <option>Tim Hank</option>
                            <option>Gary Camara</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label>Range</label>
                        <div class="input-daterange input-group" data-provide="datepicker">
                            <input type="text" class="form-control" name="start">
                            <span class="input-group-addon"> to </span>
                            <input type="text" class="form-control" name="end">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Add</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>
@stop
@section('page-script')
<script src="{{asset('assets/plugins/nestable/jquery.nestable.js')}}"></script>
<script src="{{asset('assets/js/pages/ui/sortable-nestable.js')}}"></script>
@stop
