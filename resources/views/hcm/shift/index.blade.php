@extends('layout.master')
@section('title', 'Shifts')
@section('parentPageTitle', 'Hcm')

@section('page-style')
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.23/b-1.6.5/b-colvis-1.6.5/datatables.min.css"/>
    <link rel="stylesheet" href="{{asset('public/assets/css/sw.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/list.css')}}">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
@endsection

@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="d-flex justify-content-end mb-3">
                    <a href="{{ route('hcm.shifts.create') }}" class="btn btn-primary">New Shift</a>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover" id="shifts">
                            <thead>
                            <tr>
                                <th class="">Action</th>
                                <th>Shift Code</th>
                                <th>Shift Name</th>
{{--                                <th>Days</th>--}}
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($shifts as $shift)
                                <tr >
                                    <td class="action">
                                        <div class="d-flex justify-content-center gap-2 py-2">
                                            <div>
                                                <a href="{{ route('hcm.shift.edit' , $shift->id) }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div>
                                                    <form action="{{ route('hcm.shift.delete' , $shift->id) }}"
                                                          method="POST"
                                                          class="delete-form"
                                                    >
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="text-danger border-0 delete-button">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
                                                                <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                                                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                                                            </svg>
                                                        </button>
                                                    </form>

                                            </div>

                                        </div>
                                        {{--                                        <button class="btn btn-success btn-sm p-0 m-0" onclick="window.location.href = '{{ url('Sales/Quotation/Create/'.$quotation->id) }}';"><i class="zmdi zmdi-edit px-2 py-1"></i></button>--}}
                                    </td>
                                    <td class="column_size py-2">{{ $shift->shift_code }}</td>
                                    <td class="column_size py-2">
                                        <a href="{{ route('shift.show' , $shift->id) }}">{{ $shift->shift_name }}</a>
                                    </td>
{{--                                    <td class="column_size py-2">{{ $shift->active_days_count }}</td>--}}

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('page-script')
    @include('datatable-list');
    <script>
        $('#shifts').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                { extend: 'pageLength', className:'btn cl mr-2 px-3 rounded'},
                { extend: 'copy', className: 'btn bg-dark mr-2 px-3 rounded', title:'Shifts'},
                { extend: 'csv', className: 'btn btn-info mr-2 px-3 rounded', title:'Shifts'},
                { extend: 'pdf', className: 'btn btn-danger mr-2 px-3 rounded', title:'Shifts'},
                { extend: 'excel', className: 'btn btn-warning mr-2 px-3 rounded',title:'Shifts'},
                { extend: 'print', className: 'btn btn-success mr-2 px-3 rounded',title:'Shifts'},
                { extend: 'colvis', className:'visible btn rounded'},
            ],
            "bDestroy": true,
            "lengthMenu": [[100, 200, 500, -1], [100, 200, 500, "All"]],

        });


        document.querySelectorAll('.delete-form').forEach(form => {
            form.addEventListener('submit', function (event) {
                event.preventDefault(); // Prevent form submission
                const confirmation = confirm('Are you sure you want to delete this shift?'); // Display confirmation dialog
                if (confirmation) {
                    this.submit(); // If confirmed, submit the form
                }
            });
        });
    </script>
@endsection

