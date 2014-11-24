<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {

    public $hasMany = array('Log' => array(
            'className' => 'Log',
            'foreignKey' => 'user_id',
            'dependent' => true
    ));
    public $validate = array(
        'nis' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Debe de completar el número de cédula'
            )
        ),
        'name' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Debe de completar el espacio para su nombre'
            )
        ),
        'last_name' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Debe ingresar su apellido'
            )
        ),
        'salary' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Debe ingresar el salario para el Usuario'
            )
        ),
        'username' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Es necesario un nombre de usuario'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'El espacio de Contraseña no puede estar vacio'
            )
        ),
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('admin', 'employee')),
                'message' => 'Please enter a valid role',
                'allowEmpty' => false
            )
        )
    );

//para evitar errores de blowflish hay que dejar un string mas grande en la base de datos
    public function beforeSave($options = array()) {
        // if ID is not set, we're inserting a new user as opposed to updating
        if (!$this->id) {
            $passwordHasher = new BlowfishPasswordHasher();
            $this->data[$this->alias]['password'] = $passwordHasher->hash($this->data[$this->alias]['password']);
        }
        return true;
    }

}
