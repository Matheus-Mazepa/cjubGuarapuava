<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="container">

                    <div class="form_inscription">
    <?php if($total < 150): ?>
    <?php echo Form::open(['route' => 'participants.store', 'method' => 'POST']); ?>

        <?php echo $__env->make('participants.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo Form::close(); ?>

    <?php else: ?>
        <h1>Vagas esgotadas!</h1>
    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>