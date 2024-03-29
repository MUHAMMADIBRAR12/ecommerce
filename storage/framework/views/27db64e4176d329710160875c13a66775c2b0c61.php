<?php $__env->startSection('title', 'Customers'); ?>
<?php $__env->startSection('parentPageTitle', 'Crm'); ?>
<?php $__env->startSection('parent_title_icon', 'zmdi zmdi-home'); ?>
<?php $__env->startSection('page-style'); ?>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo e(asset('public/assets/plugins/select2/select2.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('public/assets/plugins/morrisjs/morris.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('public/assets/plugins/jquery-spinner/css/bootstrap-spinner.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('public/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('public/assets/plugins/bootstrap-select/css/bootstrap-select.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('public/assets/plugins/nouislider/nouislider.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('public/assets/plugins/dropify/css/dropify.min.css')); ?>" />
    <style>
        .input-group-text {
            padding: 0 .75rem;
        }

        .amount {
            width: 150px;
            text-align: right;
        }

        .table td {
            padding: 0.10rem;
        }

        .dropify {
            width: 200px;
            height: 200px;
        }
    </style>
    <script lang="javascript/text">
        var CustomerURL = "<?php echo e(url('customerSearch')); ?>";
        var locationURL = "<?php echo e(url('locationSearch')); ?>";
        var token = "<?php echo e(csrf_token()); ?>";
    </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="row clearfix">
        <div class="card col-lg-12">
            <div class="header">
                <h2><strong>Leads</strong> Details</h2>
            </div>
            <?php if(session()->has('message')): ?>
                <div class="alert alert-success">
                    <?php echo e(session()->get('message')); ?>

                </div>
            <?php endif; ?>
            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <div class="body">
                <form method="post" action="<?php echo e(isset($customer) ? route('Crm/Customers/Update', ['id' => $customer->id]) : route('Crm/Customers/Add')); ?>" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                    <input type="hidden" name="id" value="<?php echo e($customer->id ?? ''); ?>">
                    <input type="hidden" name="coa_id" value="<?php echo e($customer->coa_id ?? ''); ?>">

                    <div class="row">
                        <div class="col-md-6">
                            <label for="name">Name</label>
                            <div class="form-group">
                                <input type="text" name="name" id="customer"
                                    onkeyup="autoFill(this.id,CustomerURL,token)"
                                    value="<?php echo e($customer->name ?? old('name')); ?>" class="form-control" required>
                                <!-- <input type="autofill" name="name" class="form-control" value="<?php echo e($customer->name ?? ''); ?>" placeholder="Name"  required>  -->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="category">Category</label>
                            <div class="form-group">
                                <select name="category" class="form-control show-tick ms select2" data-placeholder="Select"
                                    >
                                    <option value="">Select Category</option>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($category->category); ?>"
                                            <?php echo e($category->category == ($customer->category ?? old('category')) ? 'selected' : ''); ?>>
                                            <?php echo e($category->category); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="coa_id">Main Account</label>
                            <div class="form-group">
                                <select name="parent_coa_id" class="form-control show-tick ms select2"
                                    data-placeholder="Select" >
                                    <option value="">Select Account</option>
                                    <?php $__currentLoopData = $coaAccount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option
                                            <?php echo e($account->id == ($customer->coa_coa_id ?? old('parent_coa_id')) ? 'selected' : ''); ?>

                                            value="<?php echo e($account->id); ?>"><?php echo e($account->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="code">Account Code</label>
                            <div class="form-group">
                                <input type="text" name="code" class="form-control"
                                    value="<?php echo e($customer->code ?? old('code')); ?>" placeholder="Account Code">
                            </div>
                            
                        </div>
                        <div class="col-md-2">
                            <label for="type">Credit Limit</label>
                            <div class="form-group">
                                <select name="credit_limit" class="form-control show-tick ms select2"
                                    data-placeholder="Select">
                                    <option value="">--Select Credit Limit--</option>
                                    <?php $__currentLoopData = $credit_limits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $credit_limit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option
                                            <?php echo e($credit_limit->description == ($customer->credit_limit ?? old('credit_limit')) ? 'selected' : ''); ?>

                                            value="<?php echo e($credit_limit->description); ?>"><?php echo e($credit_limit->description); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <label for="type">Credit Amount</label>
                            <div class="form-group">
                                <input type="number" step="any" name="credit_amount" id="credit_amount"
                                    value="<?php echo e($customer->credit_amount ?? old('credit_amount')); ?>" class="form-control qty"
                                    placeholder="Credit Amount">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2">
                            <label for="code">Tax Number</label>
                            <div class="form-group">
                                <input type="text" name="tax_number" class="form-control"
                                    value="<?php echo e($customer->tax_number ?? old('tax_number')); ?>" placeholder="Tax Number">
                            </div>

                            <?php $__errorArgs = ['tax_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="alert alert_danger"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            
                        </div>
                        <!--                        <div class="col-md-3">
                                <label for="location">Location</label>
                                <div class="form-group">
                                    <input type="autofill" name="location" id="location" class="form-control" value="<?php echo e($customerAddress->location ?? old('location')); ?>" placeholder="Location Name" onkeyup="autoFill(this.id, locationURL, token)">
                                    <input type="hidden" name="location_ID" id="location_ID">
                                </div>
                            </div>-->
                        <div class="col-md-3">
                            <label for="status">Status</label>
                            <div class="form-group">
                                <select name="status" class="form-control show-tick ms select2"
                                    data-placeholder="Select" >
                                    <option value="">--Select Status--</option>
                                    <option <?php echo e(($customer->status ?? old('status')) == 'Active' ? 'selected' : ''); ?>

                                        value="Active">Active</option>
                                    <option <?php echo e(($customer->status ?? old('status')) == 'Suspended' ? 'selected' : ''); ?>

                                        value="Suspended">Suspended</option>
                                    <option <?php echo e(($customer->status ?? old('status')) == 'Closed' ? 'selected' : ''); ?>

                                        value="Closed">Closed</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="type">Type</label>
                            <div class="form-group">
                                <select name="type" class="form-control show-tick ms select2"
                                    data-placeholder="Select">
                                    <option value="">--Select Type--</option>
                                    <?php $__currentLoopData = $customer_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option
                                            <?php echo e($customer_type->description == ($customer->type ?? old('type')) ? 'selected' : ''); ?>

                                            value="<?php echo e($customer_type->description); ?>"><?php echo e($customer_type->description); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label for="code">Margin %</label>
                            <div class="form-group">
                                <input type="number" step="any" name="margin" class="form-control qty"
                                    value="<?php echo e($customer->margin ?? old('margin')); ?>" placeholder="Margin %">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="phone">Phone</label>
                            <div class="form-group">
                                <input type="autofill" name="phone" class="form-control"
                                    value="<?php echo e($customerAddress->phone ?? old('phone')); ?>" placeholder="Phone">
                            </div>

                            <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger"><?php echo e($message); ?></div>
                                
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="col-md-4">
                            <label for="email">Email</label>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control"
                                    value="<?php echo e($customerAddress->email ?? old('email')); ?>" placeholder="Email">
                            </div>
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="alert alert-danger"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="note">Note</label>
                            <div class="form-group">
                                <textarea name="note" rows="4" class="form-control no-resize" placeholder="Description"><?php echo e($customer->note ?? old('note')); ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <label for="address">Address</label>
                            <div class="form-group">
                                <textarea name="address" rows="3" class="form-control no-resize" placeholder="Location Address"><?php echo e($customerAddress->address ?? old('address')); ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="display:none">
                        <?php for($i = 0; $i <= 3; $i++): ?>
                            <div class="col-md-3">
                                <label for="attachment">Attachment <?php echo e($i + 1); ?></label>
                                <div class="form-group">
                                    <?php if($attachments[$i] ?? ''): ?>
                                        <button type="button" class="btn btn-danger btn-sm"
                                            onclick="alert('Delete option is not available now.');"><i
                                                class="zmdi zmdi-delete"></i></button>
                                        <a href="<?php echo e(asset('assets/products/' . $attachments[$i]->file)); ?>"
                                            download><?php echo e($attachments[$i]->file); ?></a>
                                    <?php else: ?>
                                        <input name="file[]" type="file" class="dropify">
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>

                    <div class="row">
                        <div class="ml-auto">
                            <button class="btn btn-raised btn-primary waves-effect" type="submit">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-script'); ?>
    <script src="<?php echo e(asset('public/assets/plugins/dropify/js/dropify.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/assets/js/pages/forms/dropify.js')); ?>"></script>
    <script src="<?php echo e(asset('public/assets/js/sw.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\app\resources\views/crm/customer.blade.php ENDPATH**/ ?>