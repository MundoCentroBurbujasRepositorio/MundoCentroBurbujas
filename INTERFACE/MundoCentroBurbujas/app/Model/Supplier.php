<?php

class Supplier extends AppModel {

        public $belongsTo = array(
        'Suppliertype' => array(
            'className' => 'Suppliertype',
            'foreignKey' => 'suppliertype_id'
        )
    );   

}
