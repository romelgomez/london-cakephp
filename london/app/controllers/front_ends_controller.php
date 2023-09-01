<?php
class FrontEndsController extends AppController {
	
	
	// propierties 
	public $name = 'FrontEnds';
	public $uses = array();
	
	
	//functios
	function index(){
		 
			$this->loadModel('Product');
			
			$this->paginate = array(
				'conditions' => array('Product.status' => '1'),
				'order' => array('Product.importance'=>'asc'),
				'limit' => 8  
			);
						
			$products = $this->paginate('Product');
			$this->set('products', $products);
			
			//debug($products);	
					
		}
	
	
	}


?>
