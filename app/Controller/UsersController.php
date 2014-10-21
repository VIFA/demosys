<?php
class UsersController extends AppController{

	var $name = 'Users';
	var $helpers = array('Html', 'Form');
	var $paginate = array(
		'order' => array(
			'User.name'
		),
		'limit'=> 20
	);

    public function beforeFilter() {
        //parent::beforeFilter();
        //$this->Auth->allow('add');
    }

	public function index(){
        $roles = array(
            null => 'Ninguno',
            'admin'=> 'Adminsitrador',
            'audit' => 'Auditor',
            'user' => 'Usuario con restricciones'
        );
		$this->User->recursive = 0;
		$users = $this->paginate();
		$this->set(compact('users'));
        $this->set(compact('roles'));
	}

	public function view($id = null) {
        $user = $this->User->read(null, $id);
        if(empty($user)){
        	$this->Session->setFlash('Usuario no valido', 'error');
        	$this->redirect(array('controller'=>'users', 'action'=>'index'));
        }
        $this->set('user', $this->User->read(null, $id));
    }

    public function add(){
    	if(!empty($this->data)){
    		if($this->User->save($this->data)){
    			$this->Session->setFlash('Usuario creado', 'succes');
    			$this->redirect(array('controller'=>'users', 'aciton'=>'index'));
    		}else{
    			$this->Session->setFlash('Error al crear el usuario. Intente nuevamente', 'error');
    		}
    	}
        $roles = array(
            null => '-Seleccione-',
            'admin'=> 'Adminsitrador',
            'audit' => 'Auditor',
            'user' => 'Usuario con restricciones'
        );
        $this->set(compact('roles'));
    }

    public function edit($id = null){
    	$user = $this->User->read(null, $id);
        if(empty($user)){
        	$this->Session->setFlash('Usuario no valido', 'error');
        	$this->redirect(array('controller'=>'users', 'action'=>'index'));
        }
        if(!empty($this->data)){
        	if($this->User->saveAll($this->data)){
        		$this->Session->setFlash('Usuario creado', 'succes');
    			$this->redirect(array('controller'=>'users', 'aciton'=>'view', $this->User->id));
    		}else{
    			$this->Session->setFlash('Error al crear el usuario. Intente nuevamente', 'error');
    		}
        }else{
        	$this->set('user', $this->User->read(null, $id));
        }
    }

    public function delete($id = null){
    	if($this->User->del($id, false)){
    		$this->Session->setFlash('Usuario eliminado', 'succes');
    		$this->redirect(array('controller'=>'users', 'aciton'=>'index'));
    	}else{
    		$this->Session->setFlash('Usuario creado', 'succes');
    		$this->redirect(array('controller'=>'users', 'aciton'=>'view', $this->User->id));
    	}
    }

    public function login() {
        $this->layout = 'login';
	    if ($this->request->is('post')) {
	        if ($this->Auth->login()) {
	            return $this->redirect($this->Auth->redirect());
	        }
	        $this->Session->setFlash(__('Nombre de usuario y clave incorrecta', 'error'));
	    }
	}

	public function logout() {
	    return $this->redirect($this->Auth->logout());
	}
}

?>