<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cocodesign</title>
	<link rel="stylesheet" type="text/css" href="src/estilos/coco.css">
</head>
<body>

	<div id="app">
		<header>
			<h1>COCODESIGNS</h1>
			<nav>
				<ul>
					<li>Machine</li>
					<li>Photos</li>
					<li>Galery</li>
				</ul>
			</nav>
			<div id="menu-hamburguesa" onclick="openNav()">
				<div class="bar"></div>
				<div class="bar"></div>
				<div class="bar"></div>
			</div>
		</header>

		<div id="sidenav" class="sidenav">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
			&times;
			</a>
  			<a href="#">Machine</a>
  			<a href="#">Photos</a>
  			<a href="#">Galery</a>
		</div>


		<section id="portada">
			<div id="wrapper-portada">
				<h1>Coco designs</h1>
				<p>
					Bienvenidos a coco design agencia de diseño web enfocada a desarrollar sitios web dinamicos.
				</p>
			</div>
		</section>
		<section id="services">
			<div id="container">
				<div class="items">
					<div class="logo log">
						<img src="src/assets/log1.png">
					</div>
					<div class="text text-width">
						<h3>Diseños web</h3>
						<p>Realizamos diseños web con graficos que atraigan a clientes pontenciales para tu negocio online. </p>
					</div>
				</div>
				<div class="items">
					<div class="logo log">
						<img src="src/assets/log2.png">
					</div>
					<div class="text text-width">
						<h3>Productivos</h3>
						<p>
							Somos una agencia con alta disponibilidad para enfrentar obstaculos con el fin de alcanzar nuestras metas diarias.
						</p>
					</div>
				</div>
				<div class="items">
					<div class="logo">
						<img src="src/assets/log3.png">
					</div>
					<div class="text ">
						<h3>Publicidad</h3>
						<p>En nuestra agencia consideramos que la publicidad es uno de los factores mas importante en el marketing digital ya que nos ayuda a promocionar nuestra marca en linea.</p>
					</div>
				</div>
				<div class="items">
					<div class="logo log">
						<img src="src/assets/logo4.png">
					</div>
					<div class="text text-width">
						<h3>Posicionamiento (SEO)</h3>
						<p>El posicionamiento en buscadores u optimización de motores de búsqueda para mejorar la visibilidad de los sitios web.</p>
					</div>
				</div>
			</div>
		</section>
		<footer>
			<div id="container-f1">
			   <div class="wrapper-contact">
			   	<h2>Contact</h2>
			   	<div id="container-contacto">
			   		<div class="contact">
			   			<div class="logo-contact">
			   				<img src="src/assets/mail.png">
			   			</div>
			   			<div class="text-contact">
			   				<p>Email</p>
			   				<p>codigo79@live.com</p>
			   			</div>
			   		</div>
			   		<div class="contact">
			   			<div class="logo-contact">
			   				<img src="src/assets/school.png">
			   			</div>
			   			<div class="text-contact">
			   				<p>Dirección</p>
			   				<ul>
			   					<li>Santiago de cali colombia</li>
			   					<li>Cali valle</li>
			   					<li>401 14 32</li>
			   				</ul>
			   			</div>
			   		</div>
			   		<div class="contact">
			   			<div class="logo-contact">
			   				<img src="src/assets/smartphone.png">
			   			</div>
			   			<div class="text-contact">
			   				<p>Telefono</p>
			   				<ul>
			   					<li> +57 3177344141 </li>
			   					<li>Lunes - viernes</li>
			   					<li>07:00 am - 05:00pm</li>
			   				</ul>
			   			</div>
			   		</div>
			   		<div class="contact">
			   			<h2>Medios sociales</h2>
			   			<div id="container-media">
			   					<div class="media">
			   						<img src="src/assets/facebook.png" alt="">
			   					</div>
			   					<div class="media">
			   						<img src="src/assets/linkedin.png" alt="">
			   					</div>
			   					<div class="media">
			   						<img src="src/assets/twitter.png" alt="">
			   					</div>
			   					<div class="media">
			   						<img src="src/assets/youtube.png" alt="">
			   					</div>
			   			</div>
			   		</div>
			   	</div>
			   </div>	
			</div>
			<div id="container-f2">
				<p>
					© Copyrights 2021 design by Cocodesign
				</p>
			</div>
		</footer>
	</div>

<script type="text/javascript">


function openNav() {
  document.getElementById("sidenav").style.width = "250px";
}


function closeNav() {
  document.getElementById("sidenav").style.width = "0";
}


</script>
</body>
</html>