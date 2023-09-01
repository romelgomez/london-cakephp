
<?php 
	// debug($products);
	//debug($this->params);
	// debug($this->Paginator);

	//

?>

<!-- Todas las etiquetas de UsersController::index() heredan _UserIndex -->
<div class="bloque_UsersIndex">
	
	<div class="paginacion_bloque_UsersIndex">
		<div class="caja_general_UsersIndex"> 
	
				<?php if($this->params['paging']['Product']['prevPage']){ ?>
			<div class="caja_isquierda_UsersIndex">
				<?php echo $this->Paginator->prev('<< ' . __('Anterior', true), array('class'=>'flecha', 'id'=>'prev'), null, array());?>
			</div>
				<?php } else { ?>
			<div class="caja_isquierda_UsersIndex">
				<?php echo $this->Paginator->prev('<< ' . __('Anterior', true), array(), null, array('class'=>'flecha_pagina_1', 'id'=>'prev'));?>
			</div>
				<?php } ?>
				
			<div class="caja_centrar_UsersIndex">
				<div class="paginas_UsersIndex">
					<?php echo $this->Paginator->numbers();?>
				</div>
			</div>
				 
				<?php if($this->params['paging']['Product']['nextPage']){ ?>
			
			<div class="caja_derecha_UsersIndex">
				<?php 
						echo $this->Paginator->next(__('Proximo', true) . ' >>', array('class' => 'flecha','id'=>'next'), null, array());  
						// 1 array es para el link a, 2 arrar es para la etiqueta <span>
				?>
			</div>				 
				<?php } else { ?>		
			<div class="caja_derecha_UsersIndex">
				<?php echo $this->Paginator->next(__('Proximo', true) . ' >>', array(), null, array('class' => 'flecha_pagina_1','id'=>'next'));?>
			</div>
				<?php } ?>	
		
		</div>
	</div>

	<div class="productos_UsersIndex"> 
	<!-- Productos -->
		<?php
			foreach ($products as $product):
		?>
		<a href="<?php echo $this->Html->url('/'.$seller.'/'.Inflector::slug($product['Product']['title']).'/'.$product['Product']['id'], true); ?>" class="box">
			<span class="imagen_producto">
				<div style="display:none;">
					<?php
					/* Este foreach arma un array que contiene todas la imagenes en el tamano 270x270px que tiene el producto....
					* array(
					* 		 [0] => imagen.jpg
					* 		 [1] => imagen1.jpg
					* 	)
					* 		  
					* */
					$arrayImagenes = array();
					foreach ($product['Image'] as $i => $arrayValues  ){
								if($arrayValues['size']=='270x270px'){
										$arrayImagenes[] = $arrayValues['name'];  
									}
							}
					//debug($arrayImagenes);		
					?>
				</div>
				<?php echo $this->Html->image('products/'.$arrayImagenes[0], array('alt' => 'Test'))?>
			</span>
			<span class="nombre_producto">
				<div class="nombre_producto_margen">
					<?php 
						echo  substr($product['Product']['title'], 0, 18); if((strlen($product['Product']['title']))>18){ echo" ...";} 
					?>
				</div>
			</span>
			<span class="precio_y_calificacion">
				<div class="precio_y_calificacion_margen">
					Precio :<?php echo $product['Product']['price']; ?> BsF.
				</div>	
			</span>
		</a>
		<?php endforeach; ?>
	<!-- Fin Productos -->
	</div>
	
	<div class="paginacion_bloque_UsersIndex">
		<div class="caja_general_UsersIndex"> 
	
				<?php if($this->params['paging']['Product']['prevPage']){ ?>
			<div class="caja_isquierda_UsersIndex">
				<?php echo $this->Paginator->prev('<< ' . __('Anterior', true), array('class'=>'flecha', 'id'=>'prev'), null, array());?>
			</div>
				<?php } else { ?>
			<div class="caja_isquierda_UsersIndex">
				<?php echo $this->Paginator->prev('<< ' . __('Anterior', true), array(), null, array('class'=>'flecha_pagina_1', 'id'=>'prev'));?>
			</div>
				<?php } ?>
				
			<div class="caja_centrar_UsersIndex">
				<div class="paginas_UsersIndex">
					<?php echo $this->Paginator->numbers();?>
				</div>
			</div>
				 
				<?php if($this->params['paging']['Product']['nextPage']){ ?>
			
			<div class="caja_derecha_UsersIndex">
				<?php 
						echo $this->Paginator->next(__('Proximo', true) . ' >>', array('class' => 'flecha','id'=>'next'), null, array());  
						// 1 array es para el link a, 2 arrar es para la etiqueta <span>
				?>
			</div>				 
				<?php } else { ?>		
			<div class="caja_derecha_UsersIndex">
				<?php echo $this->Paginator->next(__('Proximo', true) . ' >>', array(), null, array('class' => 'flecha_pagina_1','id'=>'next'));?>
			</div>
				<?php } ?>	
		
		</div>
	</div>

	
</div>
