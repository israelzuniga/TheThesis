<?php
include('header.inc');
?>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="index.php">Inicio</a></li>
          <li><a href="avances.php">Avances de Proyecto</a></li>
          <li class="selected"><a href="enlaces.php">Enlaces</a></li>
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
        <h1>Enlaces a sitios web con relacion al proyecto</h1>
        <p>
			<ul>
        		<li><a href="http://www.cansatcompetition.com/Main.html" alt="" target="_blank">Annual Cansat Competition 2011 Texas</a></li>
				<li><a href="http://www.youtube.com/watch?v=d9lg7hUYuGY&feature=related
				" alt="Primera Competencia Europea de Cansat, realizada por la Agencia Espacial Europea en 2010" target="_blank">Primera Competencia Europea de Cansat, realizada por la Agencia Espacial Europea en 2010</a></li>
				<li><a href="http://www.inta.es/" alt="Instituno Nacional de Técnica Aeroespacial de España" target="_blank">Instituto Nacional de T&eacute;cnica Aeroespacial de Espa&ntilde;a</a></li>
				<li><a href="http://www.docstoc.com/docs/47773344/CanSat-Development-Program-in-Tokyo-Institute-of-Technology" alt="CanSat Development Program in Tokyo Institute of Technology
				" target="_blank">	CanSat Development Program in Tokyo Institute of Technology
				</a></li>
				<li><a href="http://ssdl.stanford.edu/" alt="SSDL - Space and Systems Development Laboratory " target="_blank">Universidad de Stanford, SSDL - Space and Systems Development Laboratory </a></li>
				<li><a href="http://www.smallsat.org/" alt="Conferencia Anual Small Satellites de la Universidad de Utah" target="_blank">Conferencia Anual Small Satellites de la Universidad de Utah</a></li>
				<li><a href="http://www.whatthebook.com/book/9781402001994" alt="Libro de Referencia: Smaller Satellites: Bigger Business?: Concepts, Applications and Markets for Micro/Nanosatellites in a New Information World" target="_blank">Libro de Referencia: Smaller Satellites: Bigger Business?: Concepts, Applications and Markets for Micro/Nanosatellites in a New Information World</a></li>
				<li><a href="http://ebookee.org/Space-Mission-Analysis-and-Design-3rd-edition-Space-Technology-Library-_196081.html" alt="Libro de referencia: Space Mission Analysis and Design, 3rd edition (Space Technology Library)" target="_blank">Libro de referencia: Space Mission Analysis and Design, 3rd edition (Space Technology Library)</a></li>
				
			</ul>
				
        </p>

      </div>
<?php
    include('footer.inc');
    ?>