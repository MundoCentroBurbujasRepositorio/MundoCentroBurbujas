<div style="margin-top: 8%;"></div>
<div class="add"> 
    <?php
    echo $this->Form->create('User');
    ?>

    <fieldset>
        <legend>Agregar Usuario</legend>

        <?php echo $this->Form->input('nis', array('label' => 'Numero de Cedula')); ?>
        <?php echo $this->Form->input('name', array('label' => 'Nombre')); ?>
        <?php echo $this->Form->input('last_name', array('label' => 'Apellido')); ?>
        <?php echo $this->Form->input('street_address', array('label' => 'Direccion')); ?>
        <?php echo $this->Form->input('phone', array('label' => 'Telefono')); ?>
        <?php echo $this->Form->input('salary', array('label' => 'Salario')); ?>
        <?php echo $this->Form->input('username', array('label' => 'Nombre Usuario')); ?>
        <?php echo $this->Form->input('password', array('label' => 'Contraseña')); ?>
        <?php echo $this->Form->input('role',array('options' => array('admin' => 'admin', 'employee' => 'employee'),'label' => 'Perimisos')); ?>


    </fieldset>
    <?php
    echo $this->Form->end('Guardar Usuario');
    echo $this->Html->link('Ver usuarios', array('action' => 'vista'));
    ?>
</div>