<?php
class ImagesController extends AppController {

	var $name = 'Images';
	var $components = array('Upload');
	
	function add($product_id=null) {
	######################## IMAGEN ######################################
							//$imagen = $this->data['Product']['Image'];
							//$imagen = $_FILES['file_upload'];
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
							
							$this->data = null;
							
							// Se arma un array completo que contiene todas las imagenes, ordenando los parametros.
								foreach($array as $i=>$arrayValues){
									$this->data['Image'][$i]['product_id'] = $product_id;
									foreach( $arrayValues as $key => $valor ){
										$this->data['Image'][$i]['size'] = $key;
										$this->data['Image'][$i]['name'] = $valor;
									}
								}
							
							debug($this->data['Image']);	
							//  El resultado es: 
							/*
							Array
								(
									[0] => Array
										(
											[product_id] => 108
											[size] => 270x270px
											[name] => ducati_monster68.jpg
										)

									[1] => Array
										(
											[product_id] => 108
											[size] => 482x362px
											[name] => ducati_monster69.jpg
										)
									...	
							*/

							// Se divide el array, se guarda y se recetea el id, para cumplir el ciclo nuevamente.
							// Ya que guardandolo de una ves no se puede, por que luego de guardar el primero, los siguientes registros estarian editando al primero.  
							/*
							Array
							(
								[product_id] => 108
								[size] => 270x270px
								[name] => ducati_monster68.jpg
							)								
							*/
								foreach($this->data['Image'] as $i=>$arrayValues){
					
									debug($arrayValues);
					
									debug($this->Image->save($arrayValues));
					
									$this->Image->id = null;
					
								}	
														
	########################## END IMAGE ####################################
	}
	
	
}
?>
