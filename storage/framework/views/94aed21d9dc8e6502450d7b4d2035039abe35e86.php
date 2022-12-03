
<?php $__env->startSection('navbar'); ?>
    

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            Tambah Data
            <?php if(Session::has('role_created')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo e(Session::get('role_created')); ?>

            <?php endif; ?>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="POST" action="<?php echo e(route('role.create')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama"  class="form-control" value="" />
                    </div>

                    <div class="form-group">
                        <label for="nama">Jabatan</label>
                        <input type="text" name="jabatan"  class="form-control" value="" />
                    </div>

                    <div class="form-group">
                        <label for="nama">Deskripsi</label>
                        <input type="text" name="desc"  class="form-control" value="" />
                    </div>

                    <form method="POST" action="" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <label for="file">Upload File</label>
                    <input type="file" class="form-control" name="file" id="file">
                    
                    <button type="submit" class="btn btn-success">Tambah data</button> 
                    </form>
                    

                        
                           
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\UTS_Pembasdat\resources\views/tasks/add-role.blade.php ENDPATH**/ ?>