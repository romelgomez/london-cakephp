<!-- fixed-floating-elements  products/view -->
<script>
jQuery(function () {
  
  var msie6 = jQuery.browser == 'msie' && jQuery.browser.version < 7;
  
  if (!msie6) {
    var top = jQuery('#sidebars_ProductsView').offset().top - parseFloat(jQuery('#sidebars_ProductsView').css('margin-top').replace(/auto/, 0));
    jQuery(window).scroll(function (event) {
      // what the y position of the scroll is
      var y = jQuery(this).scrollTop();
      
      // whether that's below the form
      if (y >= top) {
        // if so, ad the fixed class
        jQuery('#sidebars_ProductsView').addClass('fixed');
      } else {
        // otherwise remove it
        jQuery('#sidebars_ProductsView').removeClass('fixed');
      }
    });
  }  
});
</script>
<!-- Fin fixed-floating-elements -->
