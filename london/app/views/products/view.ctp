<?php 
	// debug($product); 
?>

<div class="bigbox" >
	<div class="box_ProductsView">
		<div class="a_ProductsView" >
			<div class="izquierda_ProductsView" >
				<div class="imagen_producto_ProductsView" >
						
						<?php
							/*Este foreach almacena una array con la imgenes */
							foreach ($product['Image'] as $i => $arrayValues){
								if($arrayValues['size']=='900x600px'){
										$arrayImagenes_900x600px[] = $arrayValues['name'];  
									}
								if($arrayValues['size']=='482x362px'){
										$arrayImagenes_482x362px[] = $arrayValues['name'];
									}
								if($arrayValues['size']=='120x120px'){
										$arrayImagenes_120x120px[] = $arrayValues['name'];
									}
							}
							//debug($arrayImagenes);		
						?>
						
						<a href="<?php echo $this->Html->url('/img/products/'.$arrayImagenes_900x600px[0], true); ?>" class="pirobox_gall" title="sexshopvenezolano.com">
							<div id="image_ProductsView">
								<?php echo $this->Html->image('/img/products/'.$arrayImagenes_482x362px[0], array('alt' => 'sexshopvenezolano.com'))?>
							</div>
						</a>
						
						<div style="display:none;">
							<?php					
								foreach ($arrayImagenes_900x600px as $i => $arrayValues){
									if($i > 0){	
										echo '<a href="/img/products/'.$arrayValues.'" class="pirobox_gall" title="Spain 2009">hp</a>';
									}
								}					
							?>	
						</div>				
				</div>
			</div>
			<div class="derecha_ProductsView" >
				<div class="nombre_producto_ProductsView" >
					<?php 
						echo  substr($product['Product']['title'], 0, 18); if((strlen($product['Product']['title']))>18){ echo"...";} 
					?>
				</div>		
				<div class="detalles_generales_ProductsView">
					<div class="opciones_ProductsView"><b>Precio : </b><?php echo $product['Product']['price']; ?> BsF</div>
					<div class="opciones_ProductsView"><b>Vendidos: </b>10 <a href="#mas" onclick="document.getElementById('mas').tabber.tabShow(1)">¿Qué dijeron sus compradores?</a></div>
					<div class="opciones_ProductsView"><b>Conoce al vendedor:</b> sylo ****** </div>
				</div>
			</div>
		</div>
	
		<div class="b_ProductsView">
			<ul id="mycarousel" class="jcarousel-skin-tango"> 
			<?php		
				foreach ($product['Image'] as $i => $arrayValues){
					if($arrayValues['size']=='482x362px'){
						echo '<li><a href="#" rel="/img/products/'.$arrayValues['name'].'" class="image_ProductsView">';
					}
					if($arrayValues['size']=='120x120px'){
						echo '<img src="/img/products/'.$arrayValues['name'].'" class="thumb_ProductsView" border="0"/></a></li>';
					}
				}
			?>
			</ul> 		
		</div>
		
		<div class="description_ProductsView" >
		<h2>Descripci&oacute;n:</h2>		
			<div class="description_contenido_ProductsView">
				
				<?php echo $product['Product']['body']; ?>
				
			</div>		
		</div>
		
		<div class="preguntas_ProductsView" >		
			
			<div class="tabber" id="mas">

				<div class="tabbertab">
					<h2>Preguntas:</h2>
						<div class="contenedor_pregunta_ProductsView">
					
							<?php				
								foreach ($questionsAndAnswer as $i => $arrayValues){
									echo '<div class="pregunta_y_respuesta_ProductsView">';
										if($arrayValues['Question']){
			
											echo '<div class="pregunta_ProductsView">';
												echo 'P: '.$arrayValues['Question']['question'];
													echo '<div class="fecha_y_hora_ProductsView">Jue 9 de dic 2010</div>';
											echo '</div>';
			
					
											if($arrayValues['Answer']['id']){
						
												echo '<div class="respuesta_ProductsView">';
													echo 'R: '.$arrayValues['Answer']['answer'];
														echo '<div class="fecha_y_hora_ProductsView">Vie 10 de dic 2010</div>';
												echo '</div>';
				
											}
										}
									echo '</div>';	
								} 			
							?>

				
						</div>		
				
						<div class="has_tu_ProductsView" ><center><a class="has_tu_pregunta_ProductsView">Has tu pregunta.</a></center></div>
				</div>
				<div class="tabbertab">
					<h2>Comentarios de clientes:</h2>
					<p>Tab 2 content.</p>
				</div>
			</div>
			
		
		</div>
	
	</div>
	<div class="sidebars_container_ProductsView" >
		<div id="sidebars_ProductsView" class="">
		
			<div class="sidebars_box_ProductsView"> 
				<div class="sidebars_title_ProductsView" >Resumen</div>
					<div class="sidebars_details_ProductsView">
						Total: 2000 BsF incl. IVA <br />
						Envío estimado: en 24 horas <br />
						Envío gratuito <br />
						<div class="sidebars_has_tu_ProductsView" ><center><a class="sidebars_has_tu_compra_ProductsView">Confirma la Compra!</a></center></div>

					</div>
			</div>
			<br />
			<div class="sidebars_box_2_ProductsView"> 
				<div class="sidebars_title_ProductsView" >Carrito de Compras</div>
					<div class="sidebars_details_ProductsView">
						(1) leche. <br />
						(4) harinas pan <br />
						(2) sanaorias <br />
						(2) lechugas <br />
						(9) bmx <br />
					</div>
			</div>	
		
		</div>
	</div>
	
</div>




<?php 

// debug($arrayImagenes_900x600px);
// debug($arrayImagenes_120x120px);



/*

<div class="pregunta_y_respuesta_ProductsView">	
		<div class="pregunta_ProductsView">
				P: Que dias es hoy We’re happy to release a brilliantly new icon pack designed especially for our readers by our good friend Dasha Matsigoud, also know as MadOyster. The icon pack contains icons for all 12 zodiac signs, and best of all they are completely free! The icons are available in PNG, ICO and ICNS format. They are free 
			<div class="fecha_y_hora_ProductsView">Jue 9 de dic 2010</div>
		</div>
		
		<div class="respuesta_ProductsView" >
				R: martes
			<div class="fecha_y_hora_ProductsView">Vie 10 de dic 2010</div>
		</div>
</div>	


foreach ($product['Image'] as $i => $arrayValues){
			
	} 			



*/




//debug($similares);
//debug($product);

//echo $product['Product']['title']; 
//echo $similares['Product']['0']['title'];
?>
