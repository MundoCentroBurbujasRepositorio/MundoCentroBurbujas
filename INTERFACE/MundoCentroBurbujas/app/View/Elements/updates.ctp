<?php

function show_words($contenido, $cantidadPalabras) {
    $contenido = explode(' ', $contenido);
    $contenido = array_slice($contenido, 0, $cantidadPalabras);
    $contenido = implode(' ', $contenido);
    return $contenido;
}
?>

<div id="updates" class="boxed">

    <h2 class="title">Últimos Cambios</h2>
    <?php $logs = $this->requestAction('logs/index/sort:id/direction:desc/limit:5'); ?>


    <div class="content">
        <ul>
            <?php foreach ($logs as $log): ?>            
                <li>
                    <h3><?php echo $this->Html->link($log['Log']['date_action'], 
			array('controller'=>'logs','action'=>'view', $log['Log']['id'])); ?></h3>
                    <p><?php echo show_words($log['Log']['action'], 15) . '... '; ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>