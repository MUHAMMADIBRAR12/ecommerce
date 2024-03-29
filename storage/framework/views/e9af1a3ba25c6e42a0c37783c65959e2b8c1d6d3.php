<?php $__env->startSection('title', 'Ticket List'); ?>
<?php $__env->startSection('parentPageTitle', 'Support & Tickets'); ?>
<?php $__env->startSection('page-style'); ?>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/dt/dt-1.10.23/b-1.6.5/b-colvis-1.6.5/datatables.min.css" />
    <link rel="stylesheet" href="<?php echo e(asset('public/assets/css/list.css')); ?>">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <style>
        #ledger tr td {
            padding-top: 1px;
            padding-bottom: 1px;
        }

        .pointer {
            cursor: pointer;
        }

        .dt-buttons {
            gap: 10px;
        }

        .searchopen {
            float: right;
            cursor: pointer;
        }

        .searchopen i {
            font-size: 20px
        }

        /* .bothth {
                                                                                                                                                                    height: 30px;
                                                                                                                                                                    margin-top: 50px;
                                                                                                                                                                } */
    </style>
    <?php use App\Libraries\appLib; ?>
    <script lang="javascript/text">
        var accountsURL = "<?php echo e(url('transactionAccountSearch')); ?>";
        var token = "<?php echo e(csrf_token()); ?>";
    </script>
    <script lang="javascript/text">
        var contactURL = "<?php echo e(url('contactsSearch')); ?>";
        var url = "<?php echo e(url('')); ?>";
        var userURL = "<?php echo e(url('userSearch')); ?>";
        var token = "<?php echo e(csrf_token()); ?>";
    </script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row clearfix">
        <div class="col-lg-3 col-md-6 col-sm-12">


            <a href="<?php echo e(url('Tmg/Listing/New')); ?>">
                <div class="card widget_2 big_icon traffic">
                    <div class="body">
                        <h6>New Tickets</h6>
                        <h2><a href="<?php echo e(url('Tmg/Listing/New')); ?>"><?php echo e($newTickets ?? '0'); ?> <small
                                    class="badge badge-success"></small></a> </h2>
                        <div class="progress">
                            <div class="progress-bar l-amber" role="progressbar" aria-valuenow="45" aria-valuemin="0"
                                aria-valuemax="100" style="width: 45%;"></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <a href="<?php echo e(url('Tmg/Listing/me')); ?>">
                <div class="card widget_2 big_icon sales">
                    <div class="body">
                        <h6>My Tickets</h6>
                        <h2><a href="<?php echo e(url('Tmg/Listing/me')); ?>"> <?php echo e($myTickets ?? '0'); ?> <small
                                    class="badge badge-success"></small></a></h2>
                        <div class="progress">
                            <div class="progress-bar l-blue" role="progressbar" aria-valuenow="38" aria-valuemin="0"
                                aria-valuemax="100" style="width: 38%;"></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <a href="<?php echo e(url('Tmg/Listing/open')); ?>">
                <div class="card widget_2 big_icon email">
                    <div class="body">
                        <h6>Open Tickets</h6>
                        <h2><a href="<?php echo e(url('Tmg/Listing/open')); ?>"><?php echo e($openTickets ?? '0'); ?> <small
                                    class="badge badge-success"></small></a></h2>
                        <small></small>
                        <div class="progress">
                            <div class="progress-bar l-purple" role="progressbar" aria-valuenow="39" aria-valuemin="0"
                                aria-valuemax="100" style="width: 39%;"></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <a href="<?php echo e(url('Tmg/Listing/closed')); ?>">
                <div class="card widget_2 big_icon email">
                    <div class="body">
                        <h6>Closed Tickets</h6>
                        <h2><a href="<?php echo e(url('Tmg/Listing/closed')); ?>"><?php echo e($closedTickets ?? '0'); ?> <small
                                    class="badge badge-success"></small></a></h2>
                        <small></small>
                        <div class="progress">
                            <div class="progress-bar l-red" role="progressbar" aria-valuenow="39" aria-valuemin="0"
                                aria-valuemax="100" style="width: 39%;"></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        



        <div class="col-lg-12">
            <?php if(session()->has('message')): ?>
                <div class="alert alert-success">
                    <?php echo e(session()->get('message')); ?>

                </div>
            <?php endif; ?>
            <?php if(session()->has('error')): ?>
                <div class="alert alert-danger">
                    <?php echo e(session()->get('error')); ?>

                </div>
            <?php endif; ?>
            <div class="card">
                <div class="header">
                    <button class="btn btn-primary" style="align:right"
                        onclick="window.location.href = '<?php echo e(url('Tmg/Ticket/')); ?>'">
                        New Ticket </button>

                    <button class="btn btn-primary" style="float:inline-end;"
                        onclick="window.location.href = '<?php echo e(url('mails')); ?>'">
                        <i class="zmdi zmdi-refresh zmdi-hc-spin"></i> </button>
                </div>
                <div class="body">
                    <span class="searchopen"><i class="zmdi zmdi-menu" onclick="openSearch()"></i></span>
                    <hr style="opacity: 0;" class="hr" />
                    <form style="display: none;" action="" id="searchforme">
                        <div class="row clearfix">
                            <div class="col-md-1 col-sm-12">
                                <div class="form-group">
                                    <label>Ticket ID</label>
                                    <input type="text" name="ticket_id" id="account"
                                        value="<?php echo e(request('ticket_id')); ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 pl-1">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" id="email" class="form-control"
                                        value="<?php echo e(request('email')); ?>">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-12 pl-1">
                                <div class="form-group">
                                    <label>From</label>
                                    <div class="input-group">
                                        <input type="date" id="from_date" name="from_date" class="form-control"
                                            value="<?php echo e(request('from_date')); ?>">
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-2 col-sm-12 pl-1">
                                <div class="form-group">
                                    <label>To</label>
                                    <div class="input-group">
                                        <input type="date" id="to_date" name="to_date" class="form-control"
                                            value="<?php echo e(request('to_date')); ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-12 pl-1">
                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="form-control show-tick ms select2" data-placeholder="Select"
                                        id="category" name="category" required>
                                        <option selected disabled>Select Category</option>
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option id="category"
                                                value=" <?php echo e($category->description); ?>"<?php echo e(old('category', request('category')) == $category->description ? 'selected' : ''); ?>>
                                                <?php echo e($category->description); ?> </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-12 pl-1">
                                <div class="form-group">
                                    <label>Priority</label>
                                    <select class="form-control show-tick ms select2" data-placeholder="Select"
                                        id="priority" name="priority" required>
                                        <option selected disabled>Select
                                            Priority</option>
                                        <?php $__currentLoopData = $priorities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $priority): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option id="priority"
                                                value="  <?php echo e($priority->description); ?>"<?php echo e(old('priority', request('priority')) == $priority->description ? 'selected' : ''); ?>>
                                                <?php echo e($priority->description); ?> </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-12 pl-1">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control show-tick ms select2" data-placeholder="Select"
                                        id="status" name="status" required>
                                        <option selected disabled>Select Status</option>
                                        <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option id="status" value="<?php echo e($status->description); ?>"
                                                <?php echo e(old('status', request('status')) == $status->description ? 'selected' : ''); ?>>
                                                <?php echo e($status->description); ?> </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-12 pl-1">
                                <div class="form-group">
                                    <label>Departments</label>
                                    <select class="form-control show-tick ms select2" data-placeholder="Select"
                                        id="department" name="department" required>
                                        <option selected disabled>Select Department</option>
                                        <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option
                                                value="  <?php echo e($department->name); ?>"<?php echo e(old('department', request('department')) == $department->name ? 'selected' : ''); ?>>
                                                <?php echo e($department->name); ?> </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <label for="">Assign To</label>
                                <input type="text" name="assign" id="assign" class="form-control"
                                    value="<?php echo e(request('assign')); ?>" placeholder="Assign To"
                                    onkeyup="autoFill(this.id, userURL, token)">

                                <input type="hidden" name="assign_ID" id="assign_ID"
                                    value="<?php echo e(request('assign_ID')); ?>">
                            </div>



                            <div class="col-md-2">
                                <label for="">Related To</label>
                                <select name="related_to_type" id="related_to"
                                    class=" form-control show-tick ms select2">
                                    <option value="1" selected disabled>Select Type</option>
                                    <?php
                                        $projectFind = DB::table('prj_projects')
                                            ->where('id', $project->id ?? '')
                                            ->first();
                                        $relatedTo = $projectFind ? 'project' : null;
                                        $relatedOptions = appLib::$related_to;
                                    ?>
                                    <?php $__currentLoopData = $relatedOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $related_to): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($related_to); ?>"
                                            <?php echo e($related_to == $relatedTo ? 'selected' : ''); ?>

                                            <?php echo e($related_to == request('related_to_type') ? 'selected' : ''); ?>>
                                            <?php echo e($related_to); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class=" col-md-2">
                                <label for="">Related To Type</label>
                                <input type="text" name="related" class="form-control related"
                                    id="<?php echo e($ticket->related_to ?? ($relatedTo ?? ($sessionrelated_to ?? ''))); ?>"
                                    value="<?php echo e(request('related')); ?>" placeholder="Search"
                                    onkeyup="autoFill(this.id, url+'/'+this.id+'Search', token);">
                                <input type="hidden" name="related_ID" class="related_ID"
                                    id="<?php echo e(($ticket->related_to ?? ($relatedTo ?? ($sessionrelated_to ?? ''))) . '_ID'); ?>"
                                    value="">
                            </div>
                            <input type="hidden" name="type" id="type" value="<?php echo e($type ?? ''); ?>">
                            <div class="col-md-2">
                                <br>
                                <input type="checkbox" name="is_billable" id="is_billable">Billable
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary" style="height: 30px;margin-top: 30px;"
                                id="formSubmitButton">Search</button>
                            <button class="btn btn-primary " style=" height: 30px; margin-top: 30px;"
                                onclick="clearForm()">Clear</button>
                        </div>
                    </form>

                    <script>
                        function clearForm() {
                            document.getElementById("searchforme").reset();
                            document.getElementById("account").value = "";
                            document.querySelector(".related_ID").value = "";
                            document.querySelector(".related").value = "";
                            document.getElementById("email").value = "";
                            document.getElementById("from_date").value = "";
                            document.getElementById("to_date").value = "";
                            document.getElementById("assign").value = "";
                            document.getElementById("assign_ID").value = "";
                            var selectElement = document.getElementById("category");
                            selectElement.selectedIndex = 0;
                            var selectElement = document.getElementById("department");
                            selectElement.selectedIndex = 0;
                            var selectElement = document.getElementById("status");
                            selectElement.selectedIndex = 0;
                            var selectElement = document.getElementById("priority");
                            selectElement.selectedIndex = 0;
                            var selectElement = document.getElementById("related_to");
                            selectElement.selectedIndex = 0;
                            document.getElementById("searchForm").value = " ";

                        }
                    </script>
                    <form action="<?php echo e(url('Tmg/Ticket/BulkUpdate')); ?>" method="post" id="searchForm">
                        <?php echo csrf_field(); ?>


                        <div class="table-responsive">
                            <table id="transactionList"
                                class="table table-bordered table-striped table-hover js-exportable dataTable "
                                style="width:100%">
                                <thead>
                                    <td><input type="checkbox" id="select_all_ids" onclick="selectAll()"></td>
                                    <th>Edit</th>
                                    <th>View</th>
                                    <th>Delete</th>
                                    <th>Ticket No.</th>
                                    <th>Date</th>
                                    <th style="text-align:center;">Subject</th>
                                    <th style="text-align:center;">Priority</th>
                                    <th style="text-align:center;">Assign To</th>
                                    <th style="text-align:center;">Email</th>
                                    <th style="text-align:center;">Status</th>
                                    <th style="text-align:center;">Category</th>
                                    <th style="text-align:center;">Department</th>

                                </thead>
                                <tbody>
                                    
                                    <?php $__currentLoopData = $tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>

                                            <td><input type="checkbox" name="ids[]" value="<?php echo e($ticket->id); ?>"
                                                    class="bulkselect"></td>
                                            <td><button class="btn btn-success btn-sm p-0 m-0"><a
                                                        href="<?php echo e(url('Tmg/Ticket/' . $ticket->id)); ?>"
                                                        onclick="UpdateUrl('<?php echo e(url('Tmg/Ticket/' . $ticket->id)); ?>')"><i
                                                            class="zmdi zmdi-edit px-2 py-1"></i></a></button> </td>
                                            <td><button class="btn btn-danger btn-sm p-0 m-0"><a
                                                        href="<?php echo e(url('Tmg/View/' . $ticket->id)); ?>"
                                                        onclick="UpdateUrl('<?php echo e(url('Tmg/View/' . $ticket->id)); ?>')"
                                                        class="btn btn-danger print btn-sm p-0 m-0"><i
                                                            class="zmdi zmdi-receipt px-2 py-1"></i></a></button></td>
                                            <td><button class="btn btn-danger btn-sm p-0 m-0"><a
                                                        href="<?php echo e(url('Tmg/Ticket/Delete/' . $ticket->id)); ?>"
                                                        onclick="ConfirmAndDelete('<?php echo e(url('Tmg/Ticket/Delete/' . $ticket->id)); ?>')"
                                                        class="btn btn-danger print btn-sm p-0 m-0"><i
                                                            class="zmdi zmdi-delete px-2 py-1"></i></a></button></td>
                                            <td><?php echo e($ticket->number ?? ''); ?> </td>
                                            
                                            <td><?php echo e(date(appLib::showDateFormat() . ' H:i:s', strtotime($ticket->created_at))); ?>

                                            </td>
                                            <td><?php echo e($ticket->subject ?? ''); ?> </td>
                                            <td><?php echo e($ticket->priority ?? ''); ?> </td>
                                            <td>
                                                <?php
                                                    $assignedUser = \App\Models\User::find($ticket->assign_to);
                                                ?>
                                                <?php echo e($assignedUser->firstName ?? ''); ?><?php echo e($assignedUser->lastName ?? ''); ?>

                                            </td>
                                            <td><?php echo e($ticket->email ?? ''); ?> </td>
                                            <td><?php echo e($ticket->status ?? ''); ?> </td>
                                            <td><?php echo e($ticket->category ?? ''); ?> </td>
                                            <td><?php echo e($ticket->department ?? ''); ?> </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="mainn mr-3" style="display: flex;margin-top: 5px;">
                            <div style="width: 15%">
                                <select class="form-control show-tick ms select2" data-placeholder="Select"
                                    id="status" name="status" required>
                                    <option selected disabled>Select Status</option>
                                    <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option id="status" value="<?php echo e($status->description); ?>"
                                            <?php echo e(request('status') == $status->description ? 'selected' : ''); ?>>
                                            <?php echo e($status->description); ?> </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div style="width: 15%; margin: 0px 10px;">
                                <input type="text" name="assign_id" id="assign1" class="form-control"
                                    value="<?php echo e(request('assign_id')); ?>" placeholder="Assign To"
                                    onkeyup="autoFill(this.id, userURL, token)">

                                <input type="hidden" name="assign_id_value" id="assign1_ID"
                                    value="<?php echo e(request('assign_id_value')); ?>">
                            </div>
                            <div>
                                <button class="btn btn-danger" onclick="searchUpdate()" id="searchUpdate">Update</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-script'); ?>
    <script src="<?php echo e(asset('public/assets/bundles/datatablescripts.bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('public/assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/assets/plugins/jquery-datatable/buttons/buttons.flash.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/assets/plugins/jquery-datatable/buttons/buttons.html5.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/assets/plugins/jquery-datatable/buttons/buttons.print.min.js')); ?>"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="<?php echo e(asset('public/assets/plugins/jquery-datatable/buttons/buttons.excel.min.js')); ?>"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.colVis.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="<?php echo e(asset('public/assets/js/sw.js')); ?>"></script>
    <script>
        t = $('#transactionList').DataTable({
            scrollY: '50vh',
            "scrollX": true,
            scrollCollapse: true,
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'pageLength',
                    className: 'btn cl mr-2 px-3 rounded'
                },
                {
                    extend: 'copy',
                    className: 'btn bg-dark mr-2 px-3 rounded',
                    title: 'Products',
                    exportOptions: {
                        columns: [0, 3, 4, 5, 6, 7] // Exclude columns 1 and 2 (Edit and Print)
                    }
                },
                {
                    extend: 'csv',
                    className: 'btn btn-info mr-2 px-3 rounded',
                    title: 'Products',
                    exportOptions: {
                        columns: [0, 3, 4, 5, 6, 7] // Exclude columns 1 and 2 (Edit and Print)
                    }
                },
                {
                    extend: 'pdf',
                    className: 'btn btn-danger mr-2 px-3 rounded',
                    title: 'Products',
                    exportOptions: {
                        columns: [0, 3, 4, 5, 6, 7] // Exclude columns 1 and 2 (Edit and Print)
                    }
                },
                {
                    extend: 'excel',
                    className: 'btn btn-warning mr-2 px-3 rounded',
                    title: 'Products',
                    exportOptions: {
                        columns: [0, 3, 4, 5, 6, 7] // Exclude columns 1 and 2 (Edit and Print)
                    }
                },

                {
                    extend: 'print',
                    className: 'btn btn-success mr-2 px-3 rounded',
                    title: 'Products',
                    exportOptions: {
                        columns: [0, 3, 4, 5, 6, 7] // Exclude columns 1 and 2 (Edit and Print)
                    }
                },
                {
                    extend: 'colvis',
                    className: 'visible btn rounded'
                },
            ],
            "lengthMenu": [
                [100, 200, 500, -1],
                [100, 200, 500, "All"]
            ],
            "columnDefs": [{
                    className: "dt-center column_size",
                    "targets": [0, 1, 2, 3, 4]
                },
                {
                    className: "dt-right column_size",
                    "targets": []
                },
                {
                    className: "column_size",
                    "targets": [0, 1, 2, 3, 4, 5, 6, 7]
                },
            ],
            "bDestroy": true,
        });
    </script>
    


    <script>
        function openSearch() {
            $('#searchforme').slideToggle();
        }

        function searchUpdate() {
            $('#searchForm').submit();
        }

        function ConfirmAndDelete(url) {

            var isConfirmed = window.confirm("Are you sure you want to delete?");

            if (isConfirmed) {
                event.preventDefault();
                window.location.href = url;
            } else {
                console.log("Deletion canceled.");
            }
        }

        function UpdateUrl(url) {


            event.preventDefault();
            window.location.href = url;
        }

        function selectAll() {
            const bulkCheck = $('.bulkselect');

            if (bulkCheck.prop('checked')) {
                bulkCheck.prop('checked', false)
            } else {
                bulkCheck.prop('checked', true)
            }
        }
    </script>

    <script>
        $(document).ready(function() {
            $('#formSubmitButton').on('click', function(e) {
                e.preventDefault();
                var ticketId = $('#account').val();
                var email = $('#email').val();
                var from_date = $('#from_date').val();
                var to_date = $('#to_date').val();
                var category = $('#category').val();
                var priority = $('#priority').val();
                var status = $('#status').val();
                var assign_ID = $('#assign_ID').val();
                var department = $('#department').val();
                var related_ID = $('.related_ID').val();
                var is_billable = $('#is_billable').prop('checked') ? 'on' : '';
                var type = $('#type').val();



                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'post',
                    url: '<?php echo e(route('search.ticket')); ?>',
                    data: {
                        ticket_id: ticketId,
                        email: email,
                        from_date: from_date,
                        to_date: to_date,
                        priority: priority,
                        status: status,
                        assign_ID: assign_ID,
                        department: department,
                        related_ID: related_ID,
                        is_billable: is_billable,
                        type: type,

                    },
                    success: function(data) {
                        var body = $('#transactionList tbody');
                        body.empty();
                        data.forEach(function(singleData) {
                            var row = '<tr>' +
                                '<td><input type="checkbox" name="ids[]" value="' +
                                singleData.id + '" class="bulkselect"></td>' +
                                '<td><button class="btn btn-success btn-sm p-0 m-0"><a href="<?php echo e(url('Tmg/Ticket/')); ?>/' +
                                singleData.id +
                                '" onclick="UpdateUrl(\'<?php echo e(url('Tmg/Ticket/')); ?>/' +
                                singleData.id +
                                '\')"><i class="zmdi zmdi-edit px-2 py-1"></i></a></button></td>' +
                                '<td><button class="btn btn-danger btn-sm p-0 m-0"><a href="<?php echo e(url('Tmg/View/')); ?>/' +
                                singleData.id +
                                '" onclick="UpdateUrl(\'<?php echo e(url('Tmg/View/')); ?>/' +
                                singleData.id +
                                '\')" class="btn btn-danger print btn-sm p-0 m-0"><i class="zmdi zmdi-receipt px-2 py-1"></i></a></button></td>' +
                                '<td><button class="btn btn-danger btn-sm p-0 m-0"><a href="<?php echo e(url('Tmg/Ticket/Delete/')); ?>/' +
                                singleData.id +
                                '" onclick="UpdateUrl(\'<?php echo e(url('Tmg/Ticket/Delete/')); ?>/' +
                                singleData.id +
                                '\')" class="btn btn-danger print btn-sm p-0 m-0"><i class="zmdi zmdi-delete px-2 py-1"></i></a></button></td>' +
                                '<td>' + (singleData.number ?? '') + '</td>' +
                                '<td>' + (singleData.created_at ?? '') + '</td>' +
                                '<td>' + (singleData.subject ?? '') + '</td>' +
                                '<td>' + (singleData.priority ?? '') + '</td>' +
                                '<td>' + (singleData.assigned_user_first_name +
                                    singleData.assigned_user_last_name ?? '') +
                                '</td>' +
                                '<td>' + (singleData.email ?? '') + '</td>' +
                                '<td>' + (singleData.status ?? '') + '</td>' +
                                '<td>' + (singleData.category ?? '') + '</td>' +
                                '<td>' + (singleData.department ?? '') + '</td>' +
                                '</tr>';

                            // Append the row to a table or tbody element
                            // For example, assuming you have a table with id 'ticketTable'
                            body.append(row);
                        });
                    },
                });
            });
        });
    </script>

<script lang="text/javascript">
    $(document).ready(function () {
        var userURL = "<?php echo e(url('userSearch')); ?>";
        var token = "<?php echo e(csrf_token()); ?>";

        // Event handler for the input field
        $('#assign1').on('keyup', function () {
            var inputValue = $(this).val().trim();

            // Make an AJAX request to the userSearch endpoint
            if (inputValue.length >= 2) {
                $.ajax({
                    url: userURL,
                    method: 'GET',
                    data: { name: inputValue, _token: token },
                    success: function (data) {
                        // Assuming data is an array of { value, label } objects
                        // You may need to adjust this based on the actual structure of your data
                        console.log(data);

                        // Update the value of the second input with the selected value
                        $('#assign_ID1').val(data[0].value);

                        // Handle updating UI or displaying suggestions if needed
                    },
                    error: function (error) {
                        console.error('Error:', error);
                    }
                });
            }
        });
    });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\app\resources\views/tickets/list.blade.php ENDPATH**/ ?>