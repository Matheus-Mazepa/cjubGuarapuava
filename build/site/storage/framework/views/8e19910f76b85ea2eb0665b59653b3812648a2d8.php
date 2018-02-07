<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="panel panel-default">
            <div class="form_inscription">
                <h1>Inscrições</h1>
        <table class="table">
            <tr>
                <td>Nome</td>
                <td>Comunidade</td>
                <td>Oficina</td>
                <td>Status de pagamento</td>
                <td></td>
            </tr>
            <?php $__currentLoopData = $participants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $participant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($participant->name); ?></td>
                    <td><?php echo e($participant->community); ?></td>
                    <td><?php echo e($participant->workshop->name); ?></td>
                    <?php if($participant->paid_out == true): ?>
                        <td>Pago</td>
                    <?php else: ?>
                        <td>Não pago</td>
                        <td><button onclick="javascript:confirmPayment(this)" data-id="<?php echo e($participant->id); ?>">Confirmar pagamento</button></td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>