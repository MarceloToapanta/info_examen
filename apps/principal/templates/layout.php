<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="/css/jquery.dataTables.css">
    <?php include_stylesheets() ?>
    <script src="/js/jquery.js" type="text/javascript"></script>
    <script src="/js/jquery-1.10.2.min.js" type="text/javascript"></script>
    <script src="/js/iColorPicker.js" type="text/javascript"></script>
    <script src="/js/jquery.dataTables.js" type="text/javascript"></script>
    <script type="text/javascript" class="init">
      $(document).ready(function() {
          $('#example').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": false,
          "bInfo": false,
          "bAutoWidth": true });
      });
    </script>
    
    <?php include_javascripts() ?>

  </head>
  <body>
    <div id="lienzo">
      <div id="cabecera">
        <a href="http://www.infoexamen.com/">
        <img src="images/logo.jpg" width="550px"  height="120px">
        </a>
      </div>
      <div id="menu">
        <ul>
          <?php include_slot('menu') ?>
            
            <li><?php echo link_to("Inicio","http://www.infoexamen.com/")?></li>
            <li><?php echo link_to("Panel", "http://www.infoexamen.com/admin_dev.php/")?></li>

        </ul>
    </div>
    <div id="contenido">
      <?php echo $sf_content ?>
    
    
    </div>
    <div id="pie">
      Desarrolloado por Marcelo Toapanta
    </div>
    </div>
  </body>
</html>