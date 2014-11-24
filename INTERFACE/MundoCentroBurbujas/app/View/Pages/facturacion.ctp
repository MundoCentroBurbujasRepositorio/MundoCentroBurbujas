<?php
$this->layout = 'home';
?>

<div id="panelMenu">

    <center><h1>Facturación</h1></center>
    <ul>
        <li>
            <div id="panelMenu2">
                <?php echo $this->Html->link('Proveedores', array('controller' => 'Suppliers', 'action' => 'index')); ?>
            </div>
        </li> 
        <!--tipo de proveedor va dentro de proveedores-->
        <li>
            <div id="panelMenu2">
                <?php echo $this->Html->link('Facturas', array('controller' => 'Billings', 'action' => 'index')); ?>
            </div>
        </li> 
        <!--tipo de factura va dentro de facturas-->
        <li>
            <div id="panelMenu2">
                <?php echo $this->Html->link('Tipo de Pago', array('controller' => 'Invoicetypes', 'action' => 'index')); ?>
            </div>
        </li> 
        <li>
            <div id="panelMenu2">
                <?php echo $this->Html->link('Pedidos', array('controller' => 'orders', 'action' => 'index')); ?>
            </div>
        </li>         
    </ul>			


</div>