<?php
include('header.inc');
?>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="index.php">Inicio</a></li>
          <li class="selected"><a href="avances.php">Avances de Proyecto</a></li>
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
        <h1>Desarrollo y redacci&oacute;n del Proyecto</h1>
        <p>
	Para acceder al texto  del proyecto solo es necesario abrir el siguiente enlace, sin necesidad de usar un lector para PDF:  
<a href="https://docs.google.com/viewer?a=v&pid=explorer&chrome=true&srcid=0B1JXJmZz7gBLNTIyNjY2OGQtZDhiOC00NTk0LTlhMzEtMWUyNjQ5ZjAxMjEw&hl=en">Tesis al d&iacute;a 22 de Agosto</a> 

</p>
      </div>
<?php
    include('footer.inc');
    ?>