<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Foods</title>
	<link rel="stylesheet" type="text/css" href="src/estilos/foods.css">
</head>
<body>

	<div id="app">
		<header>
			<div title="encabezado">
				<h1>Foods</h1>
			</div>
			<div id="nav-menu">
				<nav>
					<ul>
						<li>Hot dog</li>
						<li>Pizzas</li>
						<li>Salsas</li>
					</ul>
				</nav>
			</div>
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
  		<a href="#">Hot dog</a>
  		<a href="#">Pizzas</a>
  		<a href="#">Salsas</a>
	</div>

		<div id="wrapper-present">
			<div class="items">
				<h2>Hamburguesas</h2>
				<div class="text-present">
					<p>
						Una hamburguesa es un sándwich hecho a base de carne molida o de  origen vegetal, aglutinada en forma de filete cocinado a la parrilla o a la plancha, aunque también puede freírse u hornearse.
					</p>
				</div>
			</div>
			<div class="items">
				<div class="present-img">
					<img src="src/assets/food.jpg" title="">
				</div>
			</div>
		</div>
		<main id="main">
			<div id="platos">
				<div id="title-platos">
					<h2>Foods</h2>
				</div>
				<div id="wrapper-platos">
					<div class="plat">
						<h2>Hamburguesa a la ranchera</h2>
						<div class="plato">
							<div class="food">
								<img src="src/assets/food1.png">
							</div>
						</div>
					</div>
					<div class="plat">
						<h2>Hamburguesa a la ranchera</h2>
						<div class="plato">
							<div class="food">
								<img src="src/assets/food2.png">
							</div>
						</div>
					</div>
					<div class="plat">
						<h2>Hamburguesa a la ranchera</h2>
						<div class="plato">
							<div class="food">
								<img src="src/assets/food3.png">
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<div class="cols">
			<section id="wrapper-contacto">
			  	<div id="contacto">
					<div id="title">
						<h2>Contacto</h2>
					</div>
					<div id="wrapper-form">
						<form>
							<input type="text" placeholder="Username">
							<input type="text" placeholder="Username">
							<textarea placeholder="Mensaje"></textarea>
							<div id="wrapper-button-submit">
								<button type="button">Enviar</button>
							</div>
						</form>
					</div>
				</div>
			</section>
			<section id="redes">
				<div class="red-e">
					<div id="title-redes">
						<p>Siguenos en nuestra redes sociales</p>
					</div>
					<div id="wrapper-redes">
						<div class="red"></div>
						<div class="red"></div>
						<div class="red"></div>
					</div>
				</div>
			</section>
		</div>
			<div class="red-e">
				<div id="logo"></div>
			</div>
		</section>
		<footer id="pie-pagina">
			<p>Hecho con amor Cocodesign © 2021-2022 todos los derechos reservados.</p>
		</footer>
	</div>
</body>

<script type="text/javascript">


function openNav() {
  document.getElementById("sidenav").style.width = "250px";
}


function closeNav() {
  document.getElementById("sidenav").style.width = "0";
}


</script>
</html>