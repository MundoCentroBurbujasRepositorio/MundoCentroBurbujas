<?php

class Client extends AppModel {

    public $belongsTo = array(
        'Clienttype' => array(
            'className' => 'Clienttype',
            'foreignKey' => 'clienttype_id'
        )
    );
     
    public $validate = array(
        'nis' => array('rule' => 'notEmpty', 'message' => 'El campo de cedula no puede ser vacio'),
        'name' => array('rule' => 'notEmpty', 'message' => 'El campo Nombre no puede ser vacio')
    );

}
