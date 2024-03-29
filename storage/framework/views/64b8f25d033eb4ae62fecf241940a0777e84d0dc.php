<?php $__env->startSection('title', 'Customers'); ?>
<?php $__env->startSection('parentPageTitle', 'CRM'); ?>
<?php $__env->startSection('page-style'); ?>
    <?php use App\Libraries\appLib; ?>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/dt/dt-1.10.23/b-1.6.5/b-colvis-1.6.5/datatables.min.css" />
    <link rel="stylesheet" href="<?php echo e(asset('public/assets/css/list.css')); ?>">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
            <form action="<?php echo e(route('customers.import')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input type="file" name="csv_file">
                        <button class="btn btn-primary" type="submit">Import</button>
            </form>
                <div class="header">
                    <button class="btn btn-primary" style="align:right"
                        onclick="window.location.href = '<?php echo e(url('Crm/Customers/Create/')); ?>';">New</button>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover" id="product">
                            <thead>
                                <tr>
                                    <th class="px-1 py-0">SR#</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Note</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Credit Limit</th>
                                    <th>Credit Amount</th>
                                    <td>type</td>
                                    <td>main Account</td>
                                    <td>Discount</td>
                                    <td>Special Discount</td>
                                    <td>Margin</td>
                                    <td>COD</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="action">
                                            <?php echo e($key +1); ?>

                                        </td>
                                        <td class="column_size"><a href="<?php echo e(url('Crm/Customers/Views/' . $customer->id)); ?>"><?php echo e($customer->name); ?></a></td>
                                        <td class="column_size"><?php echo e($customer->category); ?></td>
                                        <td class="column_size"><?php echo e($customer->note); ?></td>
                                        <td class="column_size"><?php echo e($customer->phone); ?></td>
                                        <td class="column_size"><?php echo e($customer->email); ?></td>
                                        <td class="column_size"><?php echo e($customer->credit_limit); ?></td>
                                        <td class="column_size"><?php echo e($customer->credit_amount); ?></td>
                                        <td class="column_size"><?php echo e($customer->type); ?></td>
                                        <td class="column_size"><?php echo e($customer->main_account); ?></td>
                                        <td class="column_size"><?php echo e($customer->discount); ?></td>
                                        <td class="column_size"><?php echo e($customer->special_discount); ?></td>
                                        <td class="column_size"><?php echo e($customer->margin); ?></td>
                                        <td class="column_size"><?php echo e($customer->cod); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-script'); ?>
    <?php echo $__env->make('datatable-list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
    <script>
        $('#product').DataTable({
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'pageLength',
                    className: 'btn cl mr-2 px-3 rounded'
                },
                {
                    extend: 'copy',
                    className: 'btn  bg-dark mr-2 px-3 rounded',
                    title: 'Customers'
                },
                {
                    extend: 'csv',
                    className: 'btn btn-info mr-2 px-3 rounded',
                    title: 'Customers'
                },
                {
    extend: 'pdf',
    className: 'btn btn-danger mr-2 px-3 rounded',
    title: 'Customers',
    customize: function (doc) {
        // Set a larger margin to avoid content cutoff
        doc.pageMargins = [5, 0, 5, 0];

        // Decrease the font size for table cells
        doc.defaultStyle.fontSize = 6; // Adjust the value as needed

        // Decrease the font size for table headers (th)
        doc.content[1].table.headerRows = 1;
        doc.content[1].table.body[0].forEach(function (cell) {
            cell.fontSize = 6; // Adjust the value as needed
        });

        // Decrease the margin between columns
        doc.content[1].layout = {
            hLineWidth: function (i, node) {
                return (i === 0 || i === node.table.body.length) ? 0.5 : 0.2;
            },
            vLineWidth: function (i) {
                return 0;
            },
            paddingLeft: function (i) {
                return 2;
            },
            paddingRight: function (i) {
                return 0;
            },
            paddingTop: function (i) {
                return 2;
            },
            paddingBottom: function (i) {
                return 2;
            }
        };

        // Wrap the text into two to three lines
        doc.content[1].table.body.forEach(function (row) {
            row.forEach(function (cell) {
                cell.styles = {
                    cellWidth: 'wrap',
                    cellPadding: 2
                };
            });
        });
    }
},

                {
                    extend: 'excel',
                    className: 'btn btn-warning mr-2 px-3 rounded',
                    title: 'Customers'
                },
                {
                    extend: 'print',
                    className: 'btn btn-success mr-2 px-3 rounded',
                    title: 'Customers'
                },
                {
                    extend: 'colvis'
                },
            ],
            "bDestroy": true,
            "lengthMenu": [
                [100, 200, 500, -1],
                [100, 200, 500, "All"]
            ],
            "columnDefs": [{
                className: "dt-right",
                "targets": [4, 7, 10, 11, 12, 13]
            }, ],

        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\app\resources\views/crm/customers_list.blade.php ENDPATH**/ ?>