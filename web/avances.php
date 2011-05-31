<?php
include('header.inc');
?>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="index.php">Inicio</a></li>
          <li class="selected"><a href="avances.php">Avances de Proyecto</a></li>
          <li><a href="enlaces.php">Enlaces</a></li>
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
        <p><iframe width="630" height="800" src="https://docs.google.com/document/pub?id=1ZTKmVZbVh8Vz2ZtSyTfUi155jwcqnTrKfU4UJY4P6XM&amp;embedded=true"></iframe></p>

      </div>
<?php
    include('footer.inc');
    ?>