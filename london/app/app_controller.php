<?php class AppController extends Controller{
	
	public $name = 'App';
	public $helpers = array('Js' => array('Prototype','Jquery'));
	
	public function beforeFilter(){
		
		  $this->set('controller',$this->params['controller']);
		  $this->set('action',$this->params['action']);		
		  

		
		}

	
	} 
