<?php
class UsersController extends AppController{
	
	# Advertencia
	// Router::connect('/*', array('controller' => 'users', 'action' => 'index'));
	// No acepta otro controlador a menos que se especifique en routes.php
	// Ejemplo:  Router::connect('/news', array('controller' => 'news', 'action' => 'index'));
	// de otra forma lo que este despues slash de www.dominio.com/ 
	// sera tomado como values por routes para la accion index de el contrololador users
	
	#Tarea
	// Relacionar la imagenes.
	
	#Idea 
	// www.domino.com/username/controller/accion/values
	
	
	###################################### propierties ####################################################
	
	public $name ='Users';
	//public $paginate
	// public $displayField ='username';
	// public $uses = array();
	
	
	
	###################################### functions ######################################################
	
	function index($username=null){
		
	$user = $this->User->findByUsername($username);

		if(empty($user)){
				$this->redirect(array('action'=>'index'));			
			}
			elseif(!empty($user) && $user['User']['role_id'] == 2 ){
			
					$this->set('seller',$user['User']['username']);

					# Ok asi se pagina los productos...
					//debug($this->data['User']['id']);
					//debug($this->paginate('Product', array('user_id'=>$this->data['User']['id'])));
					
					$products = $this->paginate('Product', array('Product.user_id'=>$user['User']['id'],'Product.status'=>'1'));
					$this->set('products', $products);
					

					
					
/*
 * Product_id - 
 * 		1 imagen tal 270x270px
 * 		2 imagen tal 270x270px
 * 
 * 
					$allImagenes = $this->User->Product->Image->find('all', array(
						'group' => 'Product_id',
					));
					
					debug($allImagenes);
					
*/
					
			}
		
	}
	
}	

//debug($this->params);

?>
