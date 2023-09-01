

<?php 



echo $this->Form->create('Product',  array('url' => "/".$this->params['username']."/nuevo_producto", 'type' => 'file'));
echo $this->Form->input('Image.file_upload',array('type'=>'file'));
echo $this->Form->input('id');
echo $this->Form->input('title');
echo $this->Form->input('body');
echo $this->Form->input('price');
echo $this->Form->input('status', array('options' => array(
    '1'=>'Publico',
    '0'=>'Borrador' 
    )));
echo $this->Form->end('Guardar'); 


?>
