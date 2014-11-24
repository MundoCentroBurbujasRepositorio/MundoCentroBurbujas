<?php

class LogsController extends AppController {
    
    //Establece el limite para la paginacion
    public $paginate = array(
        'limit' => '25',
        'order' => array('Log.id' => 'asc')
    );

    public function index() {

        $this->Log->recursive = 0;
        $logs = $this->paginate();
        if ($this->request->is('requested')) { // Para el funcionamiento del llamado asíncrono
            return $logs;
        } else {
            $this->set('logs', $logs);
        }
    }

    public function view($id = null) {
        $this->Log->id = $id;
        if (!$this->Log->exists()) {
            throw new NotFoundException();
        }
        $this->set('logs', $this->Log->read(null, $id));
    }

}
