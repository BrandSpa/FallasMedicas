<footer class="footer">
  <div class="container">
    <div class="row">
    <div class="col-md-4 text-center">
      <?php  require('templates/logo.php') ?>
    </div>
    <div class="col-md-4">
      <ul>
        <li> <i class="far fa-comment-alt"></i>Cel: (+57) 320 979 5969</li>
        <li> <i class="far fa-envelope-open"></i> vanessalotero@fallasmedicas.com</li>
      </ul>
    </div>
    <div class="col-md-4">
      <ul>
        <li>&copy; <?php echo date('Y'); ?></li>
        <li>Fallas Médicas All Rights Reserved</li>
      </ul> 
    </div>
    </div>
  </div>
  
</footer>
<!--wordpress files-->
<?php wp_footer() ?>
<!-- /wordpress files-->
<script src="<?php echo get_template_directory_uri() ?>/client/dist/vendor.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<script>
  onLoad(function() {
    jQuery(window).on('scroll', function(e) {
      var $header = jQuery('.app-header');
      if(jQuery(window).scrollTop() > $header.height()) {
        $header.addClass('app-header--scrolling');
      } else {
        $header.removeClass('app-header--scrolling');
      }
    });
  });
</script>

<!--async load app-->
<script type="text/javascript">
function appendScript(src) {
  var element = document.createElement("script");
  element.src = src;
  document.body.appendChild(element);
}

function downloadJS (){
  [
    "<?php echo get_template_directory_uri() ?>/client/dist/client.js?v=<?php echo filemtime(get_template_directory() . '/client/dist/client.js') ?>"
  ]
  .forEach(function(src) {
    appendScript(src);
  });
}

if (window.addEventListener) {
  window.addEventListener("load", downloadJS, false);
} else if (window.attachEvent) {
  window.attachEvent("onload", downloadJS);
} else {
  window.onload = downloadJS;
}
</script>
<!--/async load app-->

<!--google rich-->
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "url": "https://<?php echo $_SERVER['HTTP_HOST'] ?>",
  "contactPoint": [{
    "@type": "ContactPoint",
    "telephone": "+57-031-636-1051",
    "contactType": "sales",
    "areaServed": "CO"
  },{
    "@type": "ContactPoint",
    "telephone": "+57-320-636-1051",
    "contactType": "customer service",
    "areaServed": "CO"
  }]
}
</script>

</body>
</html>
