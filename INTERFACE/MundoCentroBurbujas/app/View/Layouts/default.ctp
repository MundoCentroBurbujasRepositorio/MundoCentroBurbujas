<!DOCTYPE html>
<html>
    <head>
        <title>
            <?php echo $title_for_layout ?>:
        </title>
        <?php echo $this->Html->charset(); ?>

        <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css(array('style_cri'));
        // echo $this->Html->script(array(''));

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>

    </head>
    <body>

        <?php echo $this->fetch('content'); ?>
        <?php echo $this->Session->flash(); ?>

        <div id="footer">
            <p id="legal">Copyright &copy; 2014 MundoCentroBrubujas. Todos los derechos Reservados. Diseñado por <a href="http://www.freecsstemplates.org/">PROLOSI S.A</a>.</p>
            <p id="links"><a href="#">Inicio</a> | <a href="#">Términos de Uso</a></p>
        </div>

        <?php echo $this->element('sql_dump'); ?>
    </body>
</html>
