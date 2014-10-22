<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    
    <?php include_stylesheets() ?>
    
    <script src="/js/jquery.js" type="text/javascript"></script>
    <script src="/js/iColorPicker.js" type="text/javascript"></script>
    <script type="text/javascript">
        //$(document).ready(function() {
        //var elemento = document.getElementById('exa_tubo_ext_codigo_color');
        //elemento.className = "iColorPicker";
        //'ext_codigo_color' => new sfWidgetFormInputText(array(), array("class"=>'iColorPicker')),
        //});
    </script>
    <?php include_javascripts() ?>

  </head>
  <body>
    <div id="lienzo">
      <div id="cabecera">
        <a href="http://www.infoexamen.com/">
        <img src="/./images/logo.jpg" width="550px"  height="120px">
        </a>
      </div>
      
      <div id="menu">
        <ul>
          
            
            <li><?php echo link_to("Inicio", "http://www.infoexamen.com/")?></li>
            <li><?php echo link_to("Panel","panel/index")?></li>
            <?php include_slot('menu') ?>
            

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
