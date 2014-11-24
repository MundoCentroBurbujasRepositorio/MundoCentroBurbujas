<?php
$this->layout = 'home';
?>

<div id="panelMenu">

    <center><h1>Inventario</h1></center>
    <ul>
        <li>
            <div id="panelMenu2">
                <?php echo $this->Html->link('Productos', array('controller' => 'Products', 'action' => 'index')); ?>
            </div>
        </li>
        <li>
            <div id="panelMenu2">
                <?php echo $this->Html->link('Categoria de Productos', array('controller' => 'Productcategories', 'action' => 'index')); ?>
            </div>
        </li>
        <li>
            <div id="panelMenu2">
                <?php echo $this->Html->link('Descuentos', array('controller' => 'Discounts', 'action' => 'index')); ?>
            </div>
        </li>
      

    </ul>			


</div>