<?php
$this->layout = 'home';
?>

<div id="panelLog">


    <table  cellspacing="5" cellpadding="5">

        <th>id</th>
        <th>Id_Session</th>
        <th>Ip de Usuario</th>
        <th>Usuario</th>
        <th>Accion Realizada</th>
        <th>Fecha</th>        

        <tr>
            <td><?php echo $logs['Log']['id']; ?></td>
            <td><?php echo $logs['Log']['session_id']; ?></td>
            <td><?php echo $logs['Log']['ip_address']; ?></td>
            <td><?php echo $logs['User']['name']; ?></td>
            <td><?php echo $logs['Log']['action']; ?></td>
            <td><?php echo $logs['Log']['date_action']; ?></td>

        </tr>



    </table>



</div>
