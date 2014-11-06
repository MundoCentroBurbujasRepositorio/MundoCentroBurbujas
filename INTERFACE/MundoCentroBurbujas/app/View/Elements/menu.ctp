        <div id="menu">
            <ul>
                <li class="active"><a href="#">Bienvenido</a></li>
                <li><a href="#">Inventario</a></li>
                <li><a href="#">Facturacion</a></li>
                <li><a href="#">Consultas</a></li>
                <li><?php echo $this->Html->link('Administración',array('controller' => 'Users', 'action' => 'view')); ?></li>
                <li><?php echo $this->Html->link('Salir',array('controller' => 'Users', 'action' => 'logout')); ?></li>
            </ul>
        </div>