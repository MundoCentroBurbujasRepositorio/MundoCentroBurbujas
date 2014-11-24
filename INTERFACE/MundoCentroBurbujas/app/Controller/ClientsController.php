<?php

class ClientsController extends AppController {

    //Establece el limite para la paginacion
    public $paginate = array(
        'limit' => '1',
        'order' => array('User.id' => 'asc')
    );

    public function index() {
        
    }

    public function view() {

        $this->User->recursive = 0;

        $this->set('user', $this->paginate());
    }

    public function add() {

        if ($this->request->is('post')):
            if ($this->Client->save($this->request->data)): // guarda los datos directo en la base datos
                $this->Session->setFlash('El cliente ha sido guardado'); // Setflash es para enviar mesajes
                $this->redirect(array('action' => 'view')); // redirecciona la accion de guardado a la funcion de index 
            endif;
        endif;
    }

}
