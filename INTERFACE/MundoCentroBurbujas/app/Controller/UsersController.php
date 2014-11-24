<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class UsersController extends AppController {

//Establece el limite para la paginacion
    public $paginate = array(
        'limit' => '1',
        'order' => array('User.id' => 'asc')
    );

    public function verificar($datos) {

        if ($datos === 'admin'):
            parent::beforeFilter();
            $this->Auth->allow('index', 'view', 'add', 'delete');
            $this->Auth->autoRedirect = false;

        else:
            parent::beforeFilter();
            $this->Auth->allow('index', 'view', 'add');
            $this->Auth->autoRedirect = false;

        endif;
    }

    public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {

                $this->verificar($this->Auth->user('role'));

                $guardarSession = Security::hash($this->request->clientIp() . 'MundoCentroBB' . $this->request->domain() . 'MundoCentroBB' . $this->Auth->user('id'));
                $this->Session->write('idSession', $guardarSession);

                return $this->redirect($this->Auth->redirect());
            } else {
                $this->Session->setFlash(__('Invalid username or password, try again'));
            }
        }
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }

    public function index() {
        $this->redirect(array('controller' => 'pages', 'action' => 'display', 'inicio'));
    }

    public function view() {

        $this->User->recursive = 0;

        $this->set('user', $this->paginate());
    }

    public function add() {

        if ($this->request->is('post')):

            if ($this->User->save($this->request->data)): // guarda los datos directo en la base datos

                App::uses('CakeTime', 'Utility') . '<br>';

                $datosLog = array(
                    'session_id' => $this->Session->read('idSession'),
                    'ip_address' => $this->request->clientIp(),
                    'user_id' => $this->Auth->user('id'),
                    'action' => 'Se agrega un nuevo usuario al sistema con el nombre: (' . $this->request->data['User']['username'] . ')',
                    'date_action' => CakeTime::format(time(), '%Y-%m-%e %H:%M:%S', false, new DateTimeZone('America/Costa_Rica'))
                );
                //Si no existiera la relacion a nivel de modelo no se podria acceder a los logs para guardar los registros
                $this->User->Log->save($datosLog);

                $this->Session->setFlash('El usuario ha sido guardado'); // Setflash es para enviar mesajes
                $this->redirect(array('action' => 'view')); // redirecciona la accion de guardado a la funcion de index 
                
            endif;
        endif;
    }

}
