<?php $__env->startSection('content'); ?>
    <div class="container">
    <div class="panel panel-default">
        <div class="form_inscription">
            <h1>Oficinas</h1>
        <table class="table">
            <tr>
                <td>Nome</td>
                <td>Ministrante</td>
                <td>Quantidade de participantes</td>
                <td>Vagas disponíveis</td>
            </tr>
            <?php $__currentLoopData = $workshops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $workshop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($workshop->name); ?></td>
                    <td><?php echo e($workshop->minister); ?></td>
                    <td><?php echo e($workshop->participants()->count()); ?></td>
                    <td><?php echo e($workshop->available_vacancies); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
            </div>
    </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>