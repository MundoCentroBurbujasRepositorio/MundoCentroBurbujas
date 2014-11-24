<?php
$this->layout = 'home';
?>

<div id="panelMenu">

    <center><h1>Administración</h1></center>

    <ul>
        <li>
            <div id="panelMenu2">
                <?php echo $this->Html->link('Usuarios', array('controller' => 'Users', 'action' => 'view')); ?>
            </div>
        </li>
        <li>
            <div id="panelMenu2">
                <?php echo $this->Html->link('Clientes', array('controller' => 'Clients', 'action' => 'index')); ?>
            </div>
        </li>
        <!-- tipo de cliente va dentro de clientes-->
        <li>
            <div id="panelMenu2">
                <?php echo $this->Html->link('Registros', array('controller' => 'Logs', 'action' => 'index')); ?>
            </div>
        </li>

        <li>
            <div id="panelMenu2">
                <a>Respaldos</a>
            </div>
        </li>

    </ul>			


</div>