<div class="instrucion">
    <div class="titulo">Examenes</div>
    <div class="subtitulo">Permite visulizar los examenes registrados con sus caracteristicas.</div>
</div>

<div class="busqueda">
	<form method="POST"  >
    	<div id="cuadrobuscar">
            <?php 
            if (isset($_POST['nombre'])) {
               $valnombre=$_POST['nombre']; 
            }
            else{
               $valnombre="";    
            }
            if (isset($_POST['filtro'])) {
               $selectfiltro=$_POST['filtro']; 
            }
            else{
               $selectfiltro="";    
            }

            ?>
            <input name="nombre" type="text" size="50" maxlength="50" value="<?php echo $valnombre ?>" /> 
            <input type="submit" name="buscar" value="Buscar" /> 
            <div class="subtitulo">
            <?php 
            if ($selectfiltro=="tipo"){
                echo "<input type='radio' name='filtro' value='nombre' > Por Nombre del Examen" ; 
                echo "<input type='radio' name='filtro' value='tipo' checked>Por Tipo del Examen ";

            }else{
                echo "<input type='radio' name='filtro' value='nombre' checked> Por Nombre del Examen" ; 
                echo "<input type='radio' name='filtro' value='tipo'>Por Tipo del Examen ";
            }

            ?>
            
            </div>
        </div>
    	
    </form>

</div>
<table id="example" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
        <!--
            <th>ID</th>
            <th>Nombre</th>
            <th>Obeservacion</th>
            <th>Tubos</th>
        -->
            <th></th> 
            <th></th>
        </tr>
    </thead>
    <tbody>
	<?php if (isset($_POST['buscar'])) { 
			foreach ($examenes as $examen): ?>
			<tr>
            	<td id="tdetiquetas" >
                    <p><strong>ID            :</strong> 
                    <?php echo $examen->getExaIdExamen()?>
                    </p>
                    <p><strong>Tipo Examen   :</strong>
                    <?php echo $examen->getExaTipoExamen()?>
                    </p>
                    <p><strong>Nombre Examen :</strong>
                    <?php echo $examen->getExaNombreExamen()?>
                    </p>
                    
                    <p><strong>Descripción :</strong>
                    <?php echo $examen->getExaDescripExamen()?>
                    </p>

                    <p><strong>Obeservaciones:</strong>
                    <?php echo $examen->getExaObservacion()?>
                    </p>         
            	</td>
    			<td id="tdtubos">
                    <p><strong>Numero de Tubos: </strong> 
	    			<?php echo count($examen->getExaTuboExamen()); ?>
                    </p>
                    <?php foreach ($examen->getExaTuboExamen() as $tubo): ?>
                        <UL>
                            <LI>
                            <input id="ctubo" style="background-color:<?php echo $tubo->getExaTubo()->getExtCodigoColor();?>"  readonly="readonly"/>
                            
                            <?php echo $tubo->getExaTubo()->getExtNombreColor();?>
                            </LI>
                        </UL>
                        
                    <?php endforeach; ?>
    			</td>
    		</tr>
	<?php endforeach;

		} ?>
	</tbody>
</table>
<!--
<div class="results-count">Se han encontrado <?php //echo $examenes->count(); ?> resultados.</div>
-->
