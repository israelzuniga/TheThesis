<?php
include('header.inc');
?>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="selected"><a href="index.html">Inicio</a></li>
          <li><a href="avances.php">Avances de Proyecto</a></li>
          <li><a href="enlaces.php">Enlaces</a></li>
		  <li><a href="https://github.com/israelzuniga/TheThesis">Repositorio</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
<?php
include('sidebar.inc');
?>
      <div id="content">
        <!-- insert the page content here -->
        <h1>Sobre el Autor y este trabajo de Tesis</h1>
        <img src="img/israelz.jpg" alt="El autor" align="left" style="margin: 10px;"/><p>Mi nombre es Israel Zu&ntilde;iga de la Mora, estudiante de la Facultad de Telem&aacute;tica en la Universidad de Colima. Actualmente curso la Ingenier&iacute;a en Telem&aacute;tica en su 6to. semestre.<br />
	Este espacio tiene el fin de informar al visitante el estado actual del desarrollo de proyecto y del texto de tesis.
	</p>
	<p>En el apartado de <a href="avances.php">Avances</a>, es posible consultar como voy con la redacci&oacute;n de la tesis. Texto que hasta el momento ha sido aprobado por el conjunto de Asesor y Co-asesor.<br />
		</p>
		<p>
	La secci&oacute;n de <a href="enlaces.php">enlaces</a>, es la encargada de mostrar a Ud. visitante, ligas &uacute;tiles a otros sitios de Internet en relaci&oacute;n al tema desarrollado. Esta secci&oacute;n pretende ser un punto de partida para aquel visitante curioso y con necesidad de indagar mayor informaci&oacute;n o consultar otras fuentes para lograr un mejor entendimiento.<br /> Bienvenido!
	<br/ >
	</p>
	<p>
		As&iacute; tambi&eacute;n, se puede consultar el avance en el trabajo, como dise&ntilde;os esquem&aacute;ticos o de PCBs y c&oacuet;digos fuente creados y empleados en este mismo trabajo. <a href="https://github.com/israelzuniga/TheThesis">En el repositorio creado para dicho fin.</a><br /> 
	<a href="mailto:israelzuniga@ucol.mx">Contacto hac&iacute;a el estudiante</a>
		</p>
Actualizado en <strong>12 de Junio de 2011</strong>
      </div>
<?php
    include('footer.inc');
    ?>