<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $this->Html->charset(); ?>

<title>
	<?php
		if(isset($seller)){ echo ucfirst(strtolower($seller)).' | '; } 
		if(isset($product_title)){ echo ucfirst(strtolower($product_title)).' | '; } 
	?>
		| Marker Of London
</title>


<!-- Js -->
<?php
	echo $this->Html->script('prototype');		
	echo $this->Html->script('jquery-1.4.4');		
?>
<!-- end Js -->

<!-- No Conflict -->
 <script>
     jQuery.noConflict();
 </script>   
<?php	
	
	# No funciona la solucion que plantea cakephp, solucione implementando la solucion que plantea Jquery
	#
	# http://docs.jquery.com/Using_jQuery_with_Other_Libraries	
	# http://book.cakephp.org/view/1594/Using-a-specific-Javascript-engine#Using-jQuery-with-other-libraries-1643
	#
	# $this->Js->JqueryEngine->jQueryObject = '$j';
	# print $this->Html->scriptBlock('var $j = jQuery.noConflict();', array('inline' => false)); //Tell jQuery to go into noconflict mode
	
?>
<!-- end No Conflict -->

<!-- CSS3 -->
<?php
	echo $this->Html->css($this->params['controller'].'/'.$this->params['controller']);
	echo $this->Html->css($this->params['controller'].'/'.$this->params['controller'].'_'.$this->params['action']);
	echo $this->Html->css(array('basico','cake.generic'));
?>
<!-- end CSS3 -->

<!-- products/view only -->
<?php echo $this->element('galeria'); ?>
<?php echo $this->element('carousel'); ?>
<?php echo $this->element('piroblox'); ?>
<?php echo $this->element('tabifier'); ?>
<?php echo $this->element('fixed-floating-elements'); ?>
<!-- end products/view only -->

</head>

<body>

<!-- Todas la eiquetas de /layouts/default.ctp heredan _LayoutsDefault    -->

<div class="contenedor_LayoutsDefault"> 
    <div class="header_LayoutsDefault"> 
				
		<div class="introduccion_LayoutsDefault"> 
			
			<a href="/" title="SexShopVenezolano.Com Tienda Er&oacute;tica VIP" >
				<h1 class="logo_LayoutsDefault"></h1>
            </a>
                  
			<div class="buscar_LayoutsDefault"><b>Busca en el SexShop :</b>            
        		<form name="busqueda" action="#">
					<input type="text" class="campo_de_texto_LayoutsDefault" value="" tabindex="1" />
					<input type="submit" class="boton_de_enviar_LayoutsDefault" value="Buscar" tabindex="2" />
				</form>
			</div>  
                  
			<a href="/join" class="inscribete_LayoutsDefault">Informaci&oacute;n</a> 
			<a href="/login" class="entrar_LayoutsDefault">Entrar</a>				
		         
        </div> 
		
   </div> 
        
	<div class="contenido_LayoutsDefault"> 
		<h2 class="subtitulo_LayoutsDefault">
			<b id="user" >
				<?php 
					if(isset($seller) && isset($product)){ 
									
						echo $this->Html->link(ucfirst(strtolower($seller)).' Sexshop', array('controller' => 'users', 'action' => 'index', $seller));
									
					}
					elseif(isset($seller)){ 

						echo ucfirst(strtolower($seller)).' Sexshop';
								
					}
					else				
					{ 
						echo 'Menu';
					}  
				?>		
			</b>
		</h2> 
                    
		<div class="central_LayoutsDefault" >
			<?php
				echo 'Controller: '.$controller.'_controller.php'.'<br />';
				echo 'View: '.$action.'.ctp'.'<br />';
				echo '--------------------------------<br />'
			?>
		
			<?php
				echo $content_for_layout; 
			?>			
		</div>
	</div> 

	<div class="pageshadow_LayoutsDefault"></div>

</div>


<?php 
	//echo '<br /><br /><br />';
	//echo $this->element('sql_dump'); 
	// debug($session);
	// echo $document;

echo $this->Js->writeBuffer();
?>
</body>
</html>
