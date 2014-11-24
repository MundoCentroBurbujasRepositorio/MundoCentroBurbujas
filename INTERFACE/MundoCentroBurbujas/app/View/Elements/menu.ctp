<div id="menu">
    <ul>
        <li id="menInicio"><?php echo $this->Html->link('Inicio', array('controller' => 'pages', 'action' => 'inicio'),array('onclick' => 'validarMenu(menInicio);')); ?></li>
        <li id="menInventario"><?php echo $this->Html->link('Inventario', array('controller' => 'pages', 'action' => 'inventario'),array('onclick' => 'validarMenu(menInventario);')); ?></li>
        <li id="menFacturacion"><?php echo $this->Html->link('Facturación', array('controller' => 'pages', 'action' => 'facturacion'),array('onclick' => 'validarMenu(menFacturacion);')); ?></li>
        <li id="menConsultas"><a href="#" onclick="validarMenu('menConsultas');">Consultas</a></li>
        <li id="menAdministracion"><?php echo $this->Html->link('Administración', array('controller' => 'pages', 'action' => 'admin'),array('onclick' => 'validarMenu(menAdministracion);')); ?></li>
        <li id="menSalir" class="active"><?php echo $this->Html->link('Salir', array('controller' => 'Users', 'action' => 'logout')); ?></li>
    </ul>
</div>


