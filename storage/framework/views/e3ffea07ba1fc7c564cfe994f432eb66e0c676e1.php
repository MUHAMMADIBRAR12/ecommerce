<?php $__env->startSection('title', 'Opportunities List'); ?>
<?php $__env->startSection('parentPageTitle', 'Crm'); ?>
<?php $__env->startSection('page-style'); ?>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.23/b-1.6.5/b-colvis-1.6.5/datatables.min.css"/>
<link rel="stylesheet" href="<?php echo e(asset('public/assets/css/sw.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('public/assets/css/list.css')); ?>">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="body">
                <div class="table-responsive">
                    <button class="btn btn-primary" style="align:right" onclick="window.location.href = '<?php echo e(url('Crm/Opportunities/Create')); ?>';">New Opportunities</button>
                    <table class="table table-bordered table-striped table-hover" id="opportunities">
                        <thead>
                            <tr>
                                <th class="px-1 py-0">Action</th>
                                <th>Opportunity Name</th>
                                <th>Account Name</th>
                                <th>Amount</th>
                                <th>Lead Type</th>
                                <th>Sale stage</th>
                                <th>Assigned User</th>  
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $opportunities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opportunity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="action">
                                    <button class="btn btn-primary btn-sm p-0 m-0" onclick="window.location.href = '<?php echo e(url('Crm/Opportunities/Create/'.$opportunity->id)); ?>';"><i class="zmdi zmdi-edit px-2 py-1"></i></button>
                                    <a class="btn btn-danger btn-sm del" data-toggle="modal" data-target="#modalCenter<?php echo e($opportunity->id); ?>">
                                        <input type="hidden" id="userId" value="<?php echo e($opportunity->id); ?>">
                                        <i class="zmdi zmdi-delete text-white"></i>
                                    </a>
                                </td>
                                <td class="column_size"><?php echo e($opportunity->name); ?></td>
                                <td class="column_size"><?php echo e($opportunity->cust_name); ?></td>
                                <td class="column_size"><?php echo e($opportunity->amount); ?></td>
                                <td class="column_size"><?php echo e($opportunity->lead_type); ?></td>
                                <td class="column_size"><?php echo e($opportunity->sale_stage); ?></td>
                                <td class="column_size"><?php echo e($opportunity->user_name); ?></td>
                            </tr>
                            <div class="modal fade" id="modalCenter<?php echo e($opportunity->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Are You Sure to Delete The Role</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-footer">
                                            <a class="btn btn-secondary" data-dismiss="modal">No</a>
                                            <a class="btn btn-primary model-delete" href="<?php echo e(url('Crm/Opportunities/Remove/'.$opportunity->id)); ?>">Yes</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                            
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-script'); ?>
<?php echo $__env->make('datatable-list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script>
$('#opportunities').DataTable( {
    dom: 'Bfrtip',
    buttons: [
        {
            extend: 'pageLength',
            className: 'btn cl mr-2 px-3 rounded'
        },
        {
            extend: 'copy',
            className: 'btn bg-dark mr-2 px-3 rounded',
            title: 'Opportunities',
            exportOptions: {
                columns: [1,2,3,4,5,6] // Exclude columns with the class 'actions'
            }
        },
        {
            extend: 'csv',
            className: 'btn btn-info mr-2 px-3 rounded',
            title: 'Opportunities',
            exportOptions: {
                columns: [1,2,3,4,5,6] // Exclude columns with the class 'actions'
            }
        },
        {
            extend: 'pdf',
            className: 'btn btn-danger mr-2 px-3 rounded',
            title: 'Opportunities',
            exportOptions: {
                columns: [1,2,3,4,5,6] // Exclude columns with the class 'actions'
            }
        },
        {
            extend: 'excel',
            className: 'btn btn-warning mr-2 px-3 rounded',
            title: 'Opportunities',
            exportOptions: {
                columns: [1,2,3,4,5,6] // Exclude columns with the class 'actions'
            }
        },
        {
            extend: 'print',
            className: 'btn btn-success mr-2 px-3 rounded',
            title: 'Opportunities',
            exportOptions: {
                columns: [1,2,3,4,5,6] // Exclude columns with the class 'actions'
            }
        },
        { extend: 'colvis', className: 'visible btn rounded' }
    ],
    "bDestroy": true,
    "lengthMenu": [[100, 200, 500, -1], [100, 200, 500, "All"]],
        
}); 
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\app\resources\views/crm/opportunities_list.blade.php ENDPATH**/ ?>