<?php
$this->layout = 'home';
?>

<div id="panelLog">

    <h1>Registros de Actividades </h1>

    <table  cellspacing="5" cellpadding="5">
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('session_id', 'Id_Session'); ?></th>
            <th><?php echo $this->Paginator->sort('ip_address', 'Ip de Usuario'); ?></th>
            <th><?php echo $this->Paginator->sort('User.name', 'Usuario'); ?></th>
            <th><?php echo $this->Paginator->sort('action', 'Accion Realizada'); ?></th>
            <th><?php echo $this->Paginator->sort('date_action', 'Fecha'); ?></th>

        </tr>

        <?php foreach ($logs as $log): ?>

            <tr>
                <td><?php echo $log['Log']['id']; ?></td>
                <td><?php echo $log['Log']['session_id']; ?></td>
                <td><?php echo $log['Log']['ip_address']; ?></td>
                <td><?php echo $log['User']['name']; ?></td>
                <td><?php echo $log['Log']['action']; ?></td>
                <td><?php echo $log['Log']['date_action']; ?></td>

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