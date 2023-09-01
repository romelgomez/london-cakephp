<?php
class ProductsController extends AppController {

	public $name = 'Products';
	public $components = array('Upload');
	

	function view($username = null, $slug = null, $id = null) {
		
		// For product
		$product = $this->Product->findById($id);
		
		
		// For <title></title>
		$product_title = $product['Product']['title'];
		$seller = $product['User']['username'];
		
		// For Questions And Answer 
		$questionsAndAnswer = $this->Product->Question->findAllByProductId($id);
		
		$this->set(compact('product','product_title','seller','questionsAndAnswer'));
	
	}
	
	
	function add($username = null){
						
			$user = $this->Product->User->findByUsername($username);
			
			if($user){
			
				if($user['User']['role_id'] == 2 ){
					
					// Si se intenta guardar la data...
					if ($this->data) {
						// leemos el borrador... 	
						$this->Product->read(null, $this->data['Product']['id']);
						// Actualizamos el borrador 
						if ($this->Product->save($this->data)) {
							//$this->flash('se ha guardado la informacion.', array('action'=>'/sylo'));
						}
						######################## IMAGEN ######################################
						if($this->data['Image']['file_upload']['name']){
							$imagen = $this->data['Image']['file_upload'];
							$array = array();
							 
							# 270px x 270px ~ 270x270px 
							$this->Upload->upload($imagen, WWW_ROOT."img/products/",null, array('type' => 'resizecrop', 'size' => array('270', '270'), 'output' => 'jpg'));
							$array[] = array('270x270px'=>$this->Upload->result); 
							
							# 482px x 362px ~ 482x362px 
							$this->Upload->upload($imagen, WWW_ROOT."img/products/",null, array('type' => 'resizecrop', 'size' => array('482', '362'), 'output' => 'jpg'));
							$array[] = array('482x362px'=>$this->Upload->result);
							
							# 120px x 120px ~ 120x120px 
							$this->Upload->upload($imagen, WWW_ROOT."img/products/",null, array('type' => 'resizecrop', 'size' => array('120', '120'), 'output' => 'jpg'));
							$array[] = array('120x120px'=>$this->Upload->result);
							
							# 900px x 600px ~ 900x600px 
							$this->Upload->upload($imagen, WWW_ROOT."img/products/",null, array('type' => 'resizecrop', 'size' => array('900', '600'), 'output' => 'jpg'));
							$array[] = array('900x600px'=>$this->Upload->result);
							
							// Se arma un array completo que contiene todas las imagenes, ordenando los parametros.
								foreach($array as $i=>$arrayValues){
									$imagenes['Image'][$i]['product_id'] = $this->data['Product']['id'];
									foreach( $arrayValues as $key => $valor ){
										$imagenes['Image'][$i]['size'] = $key;
										$imagenes['Image'][$i]['name'] = $valor;
									}
								}
							
								//debug($imagenes['Image']);	
							
								foreach($imagenes['Image'] as $i=>$arrayValues){
									//debug($arrayValues);
									//debug($this->Product->Image->save($arrayValues));
									if($this->Product->Image->save($arrayValues)){
										$this->Product->Image->id = null;
									}
								}	
						}
						########################## END IMAGEN ####################################
					}	
					
					
					// Borrador Automatico. Status 0 (Inactivo)... Si se carga la pagina por primera vez.
					if(empty($this->data)) {
						// encontramos al ultimo producto guardado... da error si no hay almenos 1 producto en la base de datos...
						$draft = $this->Product->find('first', array('order' => array('Product.id DESC')));	
						// armarmos el borrador...
					    $draft['Product']['id'] += 1;
					    $draft['Product']['user_id'] = $user['User']['id']; 
					    $draft['Product']['title']= '(sin asunto)';
					    $draft['Product']['body']= null;
					    $draft['Product']['price']= null;
					    $draft['Product']['status']= 0;
					    $draft['Product']['created']= null;
					    $draft['Product']['modified']= null;
						$draft['User'] = null;
						$draft['Image'] = null;
						// Guardamos el borrador...
						$this->Product->save($draft);
						// Leemos el borrador...
						$this->data = $this->Product->read(null, $draft['Product']['id']);
						// Borramos el titulo...
						$this->data['Product']['title'] = null;
						// Cargamos en la vista el borrador...
					}		
						
					$seller = $user['User']['username'];
					$this->set(compact('seller'));
					
				}else{
					$this->redirect(array('action'=>'index'));
				}			
			}else{
				$this->redirect(array('action'=>'index'));
			}
	}
	
	function edit($username = null,$id =null){
			
		$user = $this->Product->User->findByUsername($username);
		
		if($user){
		
			if($user['User']['role_id'] == 2 ){
			
				if($id){ 
				
					if ($this->data) {
			
							if ($this->Product->save($this->data)) {
								$this->flash('se ha guardado la informacion.', array('action'=>'/index'));
							} else {
								//$this->flash('No se ha guardado la informacion.', array('action'=>'/index'));
							}
					}
					if (empty($this->data)) {
			
						$this->data = $this->Product->read(null, $id);
						
							// Verificamos si el afiliado este editando un producto de su pertenencia 
							if($user['User']['id'] == $this->data['User']['id']){ 
								// ... El usuario esta editando un producto sullo.
							}
							else{
							$this->redirect(array('action'=>'index'));
								// ... El Afiliado quiere editar un producto de otro Afiliado. 
							}
					}
									
				}else{
					$this->redirect(array('action'=>'index')); 					
				}			
			}else{
				$this->redirect(array('action'=>'index'));			
			}
		}else{
			$this->redirect(array('action'=>'index'));
		}
		
		
		//debug($user);
		//debug($this->data);
	}
	
}
?>
