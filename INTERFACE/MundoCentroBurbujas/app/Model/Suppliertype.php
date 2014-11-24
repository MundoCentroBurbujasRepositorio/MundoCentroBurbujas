<?php

class Suppliertype extends AppModel {
    
    public $hasMany = array('Supplier' => array(
            'className' => 'Supplier',
            'foreignKey' => 'suppliertype_id',
            'dependent' => true
    ));   

}
