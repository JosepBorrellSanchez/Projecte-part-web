		<?$this->load->helper('url'); ?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
		<link href="/gestio/assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<style>			
	body {
		background-color:#E9E9E9;
		}
		
</style>
		
				<script src="http://code.jquery.com/jquery.js"></script>
		<div class="navbar">
			<div class="navbar-inner">
				<a class="brand" href="#">Gesti&oacute Cafeteria Da Vinci</a>
				<? if($this->session->userdata('logged_in')){ ?>
				<ul class="nav">
					
					
					<? $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>
					<?
						switch ($actual_link) {
						case "http://localhost/gestio/index.php/":?>
							<li><a href="/gestio/index.php/home">Benvingut</a></li>
							<li><a href="/gestio/index.php/Productes/crear">Insertar un producte</a></li>
							<li><a href="/gestio/index.php/Productes/llistar">Veure productes</a></li>
							<li><a href="/gestio/index.php/Categories/crear">Insertar una categoria</a></li>
							<li><a href="/gestio/index.php/Categories/llistar">Veure categories</a></li>
							<li><a href="/gestio/index.php/Configuracio/canviarpassword">Canviar password</a></li>
							<li><a href="/gestio/index.php/home/logout">Sortir</a></li>
						<? break; ?>
						
						<?
						case "http://localhost/gestio/index.php/Productes/crear":?>
							<li><a href="#">Benvingut</a></li>
							<li class="active"><a href="/gestio/index.php/Productes/crear">Insertar un producte</a></li>
							<li><a href="/gestio/index.php/Productes/llistar">Veure productes</a></li>
							<li><a href="/gestio/index.php/Categories/crear">Insertar una categoria</a></li>
							<li><a href="/gestio/index.php/Categories/llistar">Veure categories</a></li>
							<li><a href="/gestio/index.php/Configuracio/canviarpassword">Canviar password</a></li>
							<li><a href="/gestio/index.php/home/logout">Sortir</a></li>
						<? break; ?>
    
						<?
						case "http://localhost/gestio/index.php/Productes/llistar":?>
							<li><a href="#">Benvingut</a></li>
							<li><a href="/gestio/index.php/Productes/crear">Insertar un producte</a></li>
							<li class="active"><a href="/gestio/index.php/Productes/llistar">Veure productes</a></li>
							<li><a href="/gestio/index.php/Categories/crear">Insertar una categoria</a></li>
							<li><a href="/gestio/index.php/Categories/llistar">Veure categories</a></li>
							<li><a href="/gestio/index.php/Configuracio/canviarpassword">Canviar password</a></li>
							<li><a href="/gestio/index.php/home/logout">Sortir</a></li>
						<? break; ?>
						
						<?
						case "http://localhost/gestio/index.php/Productes/modificar":?>
							<li><a href="#">Benvingut</a></li>
							<li><a href="/gestio/index.php/Productes/crear">Insertar un producte</a></li>
							<li class="active"><a href="/gestio/index.php/Productes/llistar">Veure productes</a></li>
							<li><a href="/gestio/index.php/Categories/crear">Insertar una categoria</a></li>
							<li><a href="/gestio/index.php/Categories/llistar">Veure categories</a></li>
							<li><a href="/gestio/index.php/Configuracio/canviarpassword">Canviar password</a></li>
							<li><a href="/gestio/index.php/home/logout">Sortir</a></li>
						<? break; ?>
						
						<?
						case "http://localhost/gestio/index.php/Categories/crear":?>
							<li><a href="#">Benvingut</a></li>
							<li><a href="/gestio/index.php/Productes/crear">Insertar un producte</a></li>
							<li><a href="/gestio/index.php/Productes/llistar">Veure productes</a></li>
							<li class="active"><a href="/gestio/index.php/Categories/crear">Insertar una categoria</a></li>
							<li><a href="/gestio/index.php/Categories/llistar">Veure categories</a></li>
							<li><a href="/gestio/index.php/Configuracio/canviarpassword">Canviar password</a></li>
							<li><a href="/gestio/index.php/home/logout">Sortir</a></li>
						<? break; ?>
						
						<?
						case "http://localhost/gestio/index.php/Categories/llistar":?>
							<li><a href="#">Benvingut</a></li>
							<li><a href="/gestio/index.php/Productes/crear">Insertar un producte</a></li>
							<li><a href="/gestio/index.php/Productes/llistar">Veure productes</a></li>
							<li><a href="/gestio/index.php/Categories/crear">Insertar una categoria</a></li>
							<li class="active"><a href="/gestio/index.php/Categories/llistar">Veure categories</a></li>
							<li><a href="/gestio/index.php/Configuracio/canviarpassword">Canviar password</a></li>
							<li><a href="/gestio/index.php/home/logout">Sortir</a></li>
						<? break; ?>
						<?
						case "http://localhost/gestio/index.php/home":?>
							<li><a href="#">Benvingut</a></li>
							<li><a href="/gestio/index.php/Productes/crear">Insertar un producte</a></li>
							<li><a href="/gestio/index.php/Productes/llistar">Veure productes</a></li>
							<li><a href="/gestio/index.php/Categories/crear">Insertar una categoria</a></li>
							<li><a href="/gestio/index.php/Categories/llistar">Veure categories</a></li>
							<li><a href="/gestio/index.php/Configuracio/canviarpassword">Canviar password</a></li>
							<li><a href="/gestio/index.php/home/logout">Sortir</a></li>
						<? break;
						default : ?>
							<li><a href="#">Benvingut</a></li>
							<li><a href="/gestio/index.php/Productes/crear">Insertar un producte</a></li>
							<li><a href="/gestio/index.php/Productes/llistar">Veure productes</a></li>
							<li><a href="/gestio/index.php/Categories/crear">Insertar una categoria</a></li>
							<li><a href="/gestio/index.php/Categories/llistar">Veure categories</a></li>
							<li><a href="/gestio/index.php/Configuracio/canviarpassword">Canviar password</a></li>
							<li><a href="/gestio/index.php/home/logout">Sortir</a></li>
							<?} ?>
				</ul> <?} 
				else{?>
					<ul class="nav">
					<? $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>
					<?
						switch ($actual_link) {
						case "http://localhost/gestio/index.php/":?>
							<li class="active"><a href="/gestio/index.php/">Login</a></li>
							<li><a href="/gestio/index.php/Productes/crear">Insertar un producte</a></li>
							<li><a href="/gestio/index.php/Productes/llistar">Veure productes</a></li>
							<li><a href="/gestio/index.php/Categories/crear">Insertar una categoria</a></li>
							<li><a href="/gestio/index.php/Categories/llistar">Veure categories</a></li>
							<li><a href="/gestio/index.php/home/logout">Sortir</a></li>
						<? break; ?>
						
						<?
						case "http://localhost/gestio/index.php/Productes/crear":?>
							<li><a href="/gestio/index.php/">Login</a></li>
							<li class="active"><a href="/gestio/index.php/Productes/crear">Insertar un producte</a></li>
							<li><a href="/gestio/index.php/Productes/llistar">Veure productes</a></li>
							<li><a href="/gestio/index.php/Categories/crear">Insertar una categoria</a></li>
							<li><a href="/gestio/index.php/Categories/llistar">Veure categories</a></li>
							<li><a href="/gestio/index.php/home/logout">Sortir</a></li>
						<? break; ?>
    
						<?
						case "http://localhost/gestio/index.php/Productes/llistar":?>
							<li><a href="/gestio/index.php/">Login</a></li>
							<li><a href="/gestio/index.php/Productes/crear">Insertar un producte</a></li>
							<li class="active"><a href="/gestio/index.php/Productes/llistar">Veure productes</a></li>
							<li><a href="/gestio/index.php/Categories/crear">Insertar una categoria</a></li>
							<li><a href="/gestio/index.php/Categories/llistar">Veure categories</a></li>
							<li><a href="/gestio/index.php/home/logout">Sortir</a></li>
						<? break; ?>
						
						<?
						case "http://localhost/gestio/index.php/Productes/modificar/":?>
							<li><a href="/gestio/index.php/">Login</a></li>
							<li><a href="/gestio/index.php/Productes/crear">Insertar un producte</a></li>
							<li class="active"><a href="/gestio/index.php/Productes/llistar">Veure productes</a></li>
							<li><a href="/gestio/index.php/Categories/crear">Insertar una categoria</a></li>
							<li><a href="/gestio/index.php/Categories/llistar">Veure categories</a></li>
							<li><a href="/gestio/index.php/home/logout">Sortir</a></li>
						<? break; ?>
						
						<?
						case "http://localhost/gestio/index.php/Categories/crear":?>
							<li><a href="/gestio/index.php/">Login</a></li>
							<li><a href="/gestio/index.php/Productes/crear">Insertar un producte</a></li>
							<li><a href="/gestio/index.php/Productes/llistar">Veure productes</a></li>
							<li class="active"><a href="/gestio/index.php/Categories/crear">Insertar una categoria</a></li>
							<li><a href="/gestio/index.php/Categories/llistar">Veure categories</a></li>
							<li><a href="/gestio/index.php/home/logout">Sortir</a></li>
						<? break; ?>
						
						<?
						case "http://localhost/gestio/index.php/Categories/llistar":?>
							<li><a href="/gestio/index.php/">Login</a></li>
							<li><a href="/gestio/index.php/Productes/crear">Insertar un producte</a></li>
							<li><a href="/gestio/index.php/Productes/llistar">Veure productes</a></li>
							<li><a href="/gestio/index.php/Categories/crear">Insertar una categoria</a></li>
							<li class="active"><a href="/gestio/index.php/Categories/llistar">Veure categories</a></li>
							<li><a href="/gestio/index.php/home/logout">Sortir</a></li>
						<? break; ?>
						<?
						case "http://localhost/gestio/index.php/home":?>
							<li><a href="/gestio/index.php/">Login</a></li>
							<li><a href="/gestio/index.php/Productes/crear">Insertar un producte</a></li>
							<li><a href="/gestio/index.php/Productes/llistar">Veure productes</a></li>
							<li><a href="/gestio/index.php/Categories/crear">Insertar una categoria</a></li>
							<li><a href="/gestio/index.php/Categories/llistar">Veure categories</a></li>
							<li><a href="/gestio/index.php/home/logout">Sortir</a></li>
						<? break;
						default : ?>
						 <li><a href="/gestio/index.php/">Login</a></li>
							<li><a href="/gestio/index.php/Productes/crear">Insertar un producte</a></li>
							<li><a href="/gestio/index.php/Productes/llistar">Veure productes</a></li>
							<li><a href="/gestio/index.php/Categories/crear">Insertar una categoria</a></li>
							<li><a href="/gestio/index.php/Categories/llistar">Veure categories</a></li>
							<li><a href="/gestio/index.php/home/logout">Sortir</a></li>
							<?} ?>
				</ul> <?} ?>
				
			</div>
		</div>
