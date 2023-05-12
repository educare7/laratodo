
<?php $__env->startSection('content'); ?>

<style>
    .restore-area,
    .body-area {
        cursor: pointer;
    }

    .restore-area:hover {
        opacity: 0.5;
    }
</style>
<!-- Bootstrap　グリッドシステム -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <label for="task-input"><p>ゴミ箱<i class="fas fa-trash"></i></p></label>
            <?php if( count($posts) > 0): ?>
            <table class="w-100 table table-hover">
                <thead>
                    <tr>
                        <th>タスク</th>
                        <th>日付</th>
                        <th class="float-end">元に戻す</th>
                    </tr>
                </thead>
                <tbody>
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr id="tr_<?php echo e($post->id); ?>">
                        
                            <td class="w-50"><span class="body-area"><?php echo e($post->text); ?></span></td>
                            <td><span class="date-area"><?php echo e($post->create_time); ?></span></td>
                            <td><span class="restore-area float-end" onClick="restore(<?php echo e($post->id); ?>)"><i class="fas fa-undo fa-2xl"></i></span>
                            </td>
                        
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                  
                </tbody>
            </table>
            <form action="/delete" method="post" onSubmit="return emptyTrash()">
                <?php echo csrf_field(); ?>
                <button class="btn btn-outline-danger" type="submit">ゴミ箱を空にする</button>
            </form>
            <?php else: ?>
            <p>データはありません。</p>
            <?php endif; ?>
            
        </div>
    </div>
</div>

<script>
// $(function(){
function restore(id) {

    console.log(id);

    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });

    $.ajax({
    type: 'post',
    data: {
    'id' : id
    },
    datatype: 'json',
    url: '/restore'
    })
    .done(function(data){ 
    // console.log(data);
    $('#tr_'+id).remove();
    })
    .fail(function(data){ 
    // console.log(data);
    alert("error!");
    });
}

function emptyTrash() {
    if(window.confirm('本当に実行しますか？')) {
        return true;
    } else {
        return false;
    }
}
// });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\xhskw\createToDo\ToDo\ToDo\resources\views/posts/trash.blade.php ENDPATH**/ ?>