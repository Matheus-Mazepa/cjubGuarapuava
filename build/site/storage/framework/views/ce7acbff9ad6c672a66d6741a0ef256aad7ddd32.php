<?php if(\Carbon\Carbon::now()->between(\Carbon\Carbon::create(2018,02,06), \Carbon\Carbon::create(2018,04,06))): ?>
    <?php if($total <= 150): ?>
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <h1>Inscreva-se</h1>
<div>
    <p>
        <?php echo Form::label('name', 'Nome (*)'); ?>

    </p>
    <?php echo Form::text('name'); ?>

</div>
<div>
    <p>
        <?php echo Form::label('cpf', 'CPF (*)'); ?>

    </p>
    <?php echo Form::text('cpf', null, ['id'=>'cpf']); ?>

</div>
<div>
    <p>
        <?php echo Form::label('address', 'Endereço'); ?>

    </p>
    <?php echo Form::text('address'); ?>

</div>
<div>
    <p>
        <?php echo Form::label('community', 'Comunidade (*)'); ?>

    </p>
    <?php echo Form::text('community'); ?>

</div>
<div>
    <?php echo Form::label('size_t_shirt', 'Tamanho da camiseta (*)'); ?>

    <p>
    <label>
        <?php echo Form::radio('size_t_shirt', 'P');; ?>

        P
    </label>
    <label>
        <?php echo Form::radio('size_t_shirt', 'M');; ?>

        M
    </label>
    <label>
        <?php echo Form::radio('size_t_shirt', 'G');; ?>

        G
    </label>
    <label>
        <?php echo Form::radio('size_t_shirt', 'GG');; ?>

        GG
    </label>
    </p>
</div>
    <div>
        <p>
            <?php echo Form::label('babylook', 'babylook? (*)'); ?>

        </p>
        <label>
            <?php echo Form::radio('babylook', '1');; ?>

            Sim
        </label>
        <label>
            <?php echo Form::radio('babylook', '0');; ?>

            Não
        </label>
    </div>
<div>
    <p>
        <?php echo Form::label('phone', 'Telefone'); ?>

    </p>
    <?php echo Form::text('phone'); ?>

</div>
<div>
    <p>
        <?php echo Form::label('email', 'E-mail (*)'); ?>

    </p>
    <?php echo Form::email('email'); ?>

</div>
<div>
    <p>
        <?php echo Form::label('birth_date', 'Data de Nascimento (Maiores de 16 anos)'); ?>

    </p>
    <?php echo Form::text('birth_date', null, ['class'=>'datepicker']); ?>

</div>
<div>
    <p>
        <?php echo Form::label('has_special_needs', 'Necessidades Especiais? (*)'); ?>

    </p>
    <label>
        <?php echo Form::radio('has_special_needs', '1');; ?>

        Sim
    </label>
    <label>
        <?php echo Form::radio('has_special_needs', '0');; ?>

        Não
    </label>
</div>
<div>
    <p>
        <?php echo Form::label('special_needs', 'Quais necessidades'); ?>

    </p>
    <?php echo Form::text('special_needs'); ?>

</div>
    <div>
        <p>
            <?php echo Form::label('arrives_on_friday', 'Dia da chegada (*)'); ?>

        </p>
        <label>
            <?php echo Form::radio('arrives_on_friday', '1');; ?>

            Sexta
        </label>
        <label>
            <?php echo Form::radio('arrives_on_friday', '0');; ?>

            Sábado
        </label>
    </div>
<div>
    <p>
    <?php echo Form::label('needs_transport', 'Precisará de transporte durante o evento dentro da cidade em Guarapuava/PR?'); ?>

    <?php echo Form::label('needs_transport', ' (Translado entre rodoviaria e local do evento)'); ?>

    </p>
    <label>
        <?php echo Form::radio('needs_transport', '1');; ?>

        Sim
    </label>
    <label>
        <?php echo Form::radio('needs_transport', '0');; ?>

        Não
    </label>
</div>
<div>
    <p>
        <?php echo Form::label('workshop_id', 'Oficina que deseja fazer'); ?>

    </p>
    <?php echo Form::select('workshop_id', $workshops, null, ['placeholder' => 'Selecione uma oficina']); ?>

</div>
<div>
    <p>
        <?php echo Form::label('observations', 'Observações'); ?>

    </p>
    <?php echo Form::textarea('observations'); ?>

</div>
    <?php echo Form::submit('Enviar', ['class'=>'btn btn-primary']); ?>

    <?php else: ?>
        <h2>Inscrições esgotadas!</h2>
    <?php endif; ?>
<?php else: ?>
    <h2>As inscrições iniciarão dia 05 de Fevereiro de 2018</h2>
<?php endif; ?>
