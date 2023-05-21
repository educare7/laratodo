

<?php $__env->startSection('content'); ?>
    <div class="container">
      <div class="row row-cols-auto">
            <div class="col-4">
                <div class="card">
                    <div class="card-header"><?php echo e(__('フォルダ')); ?></div>

                    <div class="card-body ">
                        <div class="d-grid gap-2">
                            <a href="<?php echo e(route('folders.create')); ?>" class="btn btn-outline-secondary text-center">
                                フォルダを追加する
                            </a>
                        </div>
                    </div>
                    <div class="list-group">
                    </div>
                </div>
            </div>
        <div class="col-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('タスク')); ?></div>

                <div class="card-body ">
                    <div class="d-grid gap-2">
                        <a href="#" class="btn btn-outline-secondary text-center">
                            タスクを追加する
                        </a>
                    </div>
                </div>
                <table class="table">
                  <thead>
                  <tr>
                    <th>タイトル</th>
                    <th>状態</th>
                    <th>期限</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
            </div>
        </div>
      </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\xhskw\createToDo\ToDo\ToDo\resources\views/home.blade.php ENDPATH**/ ?>