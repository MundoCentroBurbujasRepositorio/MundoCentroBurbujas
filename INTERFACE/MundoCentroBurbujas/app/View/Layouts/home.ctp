<!DOCTYPE html>
<html>
    <head>
        <title>
            <?php echo $title_for_layout ?>:
        </title>
        <?php echo $this->Html->charset(); ?>

        <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css(array('style_cri', 'ccsPersonal'));
        echo $this->Html->script(array('funcionesVarias', 'jquery-libreria'));

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>

    </head>
    <body>
        <?php echo $this->element('menu'); ?>
        <?php echo $this->fetch('content'); ?>
        <?php echo $this->Session->flash(); ?>

        <div id="footer">
            <p id="legal">Copyright &copy; 2014 MundoCentroBrubujas. Todos los derechos Reservados. Diseñado por <a href="http://www.freecsstemplates.org/">PROLOSI S.A</a>.</p>
            <p id="links">    <?php echo $this->Html->link('Inicio', array('controller' => 'pages', 'action' => 'display', 'inicio')); ?>| <a href="#">Términos de Uso</a></p>
        </div>

        <?php echo $this->element('sql_dump'); ?>
    </body>
</html>
