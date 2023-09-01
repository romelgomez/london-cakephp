<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $this->Html->charset(); ?>

<title>
	<?php
		if(isset($seller)){ echo ucfirst(strtolower($seller)).' | '; } 
		if(isset($product_title)){ echo ucfirst(strtolower($product_title)).' | '; } 
	?>
		Sex Shop |  Tienda para Adultos | En Venezuela | SexShopVenezolano.Com
</title>

<?php
echo $this->Html->css(array('basico','cake.generic'));
echo $this->Html->script('jquery-1.4.4.js');

?>

<!-- Galeria -->
<script type="text/javascript">
 $(function() {
		$(".image_ProductsView").click(function() {
			var image = $(this).attr("rel");
						$('#image_ProductsView').hide();
						$('#image_ProductsView').fadeIn('slow');
						$('#image_ProductsView').html('<img src="' + image + '"/>');
			
			return false;
		});
});
</script>
<!-- Fin Galeria -->


<!-- carousel -->
<?php 
		echo $this->Html->script('carousel/jquery.jcarousel.min.js'); 
		echo $this->Html->css(array('carousel/skins/tango/skin.css'));
?>

<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery('#mycarousel').jcarousel();
});
</script>
<!-- Fin of carousel -->

<!-- piroblox -->
<?php 
	echo $this->Html->script('pirobox/pirobox.js'); 
	echo $this->Html->css(array('pirobox/demo2/style.css'));
?>

<script type="text/javascript">
$(document).ready(function() {
	$().piroBox({
			my_speed: 400, //animation speed
			bg_alpha: 0.3, //background opacity
			slideShow : true, // true == slideshow on, false == slideshow off
			slideSpeed : 4, //slideshow duration in seconds(3 to 6 Recommended)
			close_all : '.piro_close,.piro_overlay'// add class .piro_overlay(with comma)if you want overlay click close piroBox

	});
});
</script>
<!-- Fin piroblox -->

<!-- tabifier -->
<?php 
	echo $this->Html->script('tabifier/tabber.js'); 
	echo $this->Html->css(array('tabifier/example.css'));
?>

<!-- Fin tabifier -->

<!-- fixed-floating-elements  products/view -->
<script>
$(function () {
  
  var msie6 = $.browser == 'msie' && $.browser.version < 7;
  
  if (!msie6) {
    var top = $('#sidebars_ProductsView').offset().top - parseFloat($('#sidebars_ProductsView').css('margin-top').replace(/auto/, 0));
    $(window).scroll(function (event) {
      // what the y position of the scroll is
      var y = $(this).scrollTop();
      
      // whether that's below the form
      if (y >= top) {
        // if so, ad the fixed class
        $('#sidebars_ProductsView').addClass('fixed');
      } else {
        // otherwise remove it
        $('#sidebars_ProductsView').removeClass('fixed');
      }
    });
  }  
});
</script>
<!-- Fin fixed-floating-elements -->

<!-- uploadify -->
<?php
	
	echo $this->Html->script('uploadify/jquery.uploadify.v2.1.4.js');
	echo $this->Html->script('uploadify/swfobject.js'); 
	echo $this->Html->css(array('uploadify/uploadify.css'));
	
?>
<script type="text/javascript">
$(document).ready(
	function(){
		$('#file_upload').uploadify({
			'uploader'  : '/js/uploadify/uploadify.swf',
			'script'    : '/sylo/nuevo_producto',
			'cancelImg' : '/js/uploadify/cancel.png',
			'folder'    : '/img/products',
			'auto'      : true
		});
	});
</script>
<!-- Fin uploadify -->

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
			<b>
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
?>

</body>
</html>
