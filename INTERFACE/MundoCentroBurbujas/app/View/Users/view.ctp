<?php
$this->layout = 'home';
?>
<div class="vista">
    <h2>Usuarios</h2>
    <?php echo $this->Html->link('Agregar Usuarios', array('action' => 'add')); ?>
    <table>

        <tr>
            <th><?php echo $this->Paginator->sort('nis'); ?></th>
            <th><?php echo $this->Paginator->sort('name', 'Nombre'); ?></th>
            <th><?php echo $this->Paginator->sort('last_name', 'Apellido'); ?></th>
            <th><?php echo $this->Paginator->sort('street_address','Direccion'); ?></th>
            <th><?php echo $this->Paginator->sort('phone','Telefono'); ?></th>
            <th><?php echo $this->Paginator->sort('salary','Salario'); ?></th>
            <th><?php echo $this->Paginator->sort('username','Nombre Usuario'); ?></th>
            <th><?php echo $this->Paginator->sort('role','Permiso'); ?></th>
        </tr>


        <?php foreach ($user as $users): ?>
            <tr>
                <td><?php echo $users['User']['nis']; ?></td>
                <td><?php echo $users['User']['name']; ?></td>
                <td><?php echo $users['User']['last_name']; ?></td>
                <td><?php echo $users['User']['street_address']; ?></td>
                <td><?php echo $users['User']['phone']; ?></td>
                <td><?php echo $users['User']['salary']; ?></td>
                <td><?php echo $users['User']['username']; ?></td>
                <td><?php echo $users['User']['role']; ?></td>
            </tr>
        <?php endforeach; ?>


    </table>

    <p><?php
        echo $this->Paginator->counter(
                array(
                    'format' => 'Pagina {:page} de {:pages}, Se muestran {:current} registros de {:count}'
        ));
        ?>
    </p>
    
    <div class="paging">
        
        <?php 
            echo $this->Paginator->prev('Anterior', array(),null,array('class'=>'prev disabled'));
            echo $this->Paginator->numbers(array('separator'=>''));
            echo $this->Paginator->next('Siguiente', array(),null,array('class'=>'next disabled'));
        ?>
        
    </div>
    
    <?php echo $this->Html->link('Volver al menu', array('controller'=> 'pages', 'action' => 'admin')); ?>
</div>