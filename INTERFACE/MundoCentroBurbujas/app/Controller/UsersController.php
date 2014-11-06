<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class UsersController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        // Allow users to register and logout.
        $this->Auth->autoRedirect = false;
    }

    public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
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
        
        $this-> set('user',$this->paginate());

        
    }

    public function add() {

        if ($this->request->is('post')):
            if ($this->User->save($this->request->data)): // guarda los datos directo en la base datos
                $this->Session->setFlash('El usuario ha sido guardado'); // Setflash es para enviar mesajes
                $this->redirect(array('action' => 'vista')); // redirecciona la accion de guardado a la funcion de index 
            endif;
        endif;
    }

}
