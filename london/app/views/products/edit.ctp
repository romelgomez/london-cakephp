<?php 

echo $this->Form->create('Product',  array('url' => "/".$this->params['username']."/editar_producto"."/".$this->params['id'], 'type' => 'file'));


echo $this->Form->input('id');
echo $this->Form->input('title');
echo $this->Form->input('body',array('type'=>'textarea'));
echo $this->Form->input('price' );
echo $this->Form->input('status', array('options' => array(
    '1'=>'Publico',
    '0'=>'Borrador' 
    )));

echo $this->Form->input('imagenes',array('type'=>'file'));

echo $this->Form->end('Guardar'); 

// echo $this->data['Product']['body'];

?>

