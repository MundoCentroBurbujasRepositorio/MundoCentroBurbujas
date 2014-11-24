<?php

class Clienttype extends AppModel {

    public $hasMany = array('Client' => array(
            'className' => 'Client',
            'foreignKey' => 'clienttype_id',
            'dependent' => true
    ));
    
    public $validate = array(
        'name' => array('rule' => 'notEmpty', 'message' => 'El campo Nombre no puede ser vacio')
    );

}
