<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>strawberries</title>
	<link rel="stylesheet" type="text/css" href="src/estilos/strawberries.css">
</head>
<body>
	
	<div id="app">
		<header>
			<div id="header-1">
				<h1>strawberries</h1>
				<div id="menu-hamburguesa" onclick="openNav()">
					<div class="bar"></div>
					<div class="bar"></div>
					<div class="bar"></div>
				</div>
			</div>
			<nav id="menu-deskot">
				<ul>
					<li>Fruits</li>
					<li>Contacto</li>
					<li>Marketplace</li>
				</ul>
			</nav>
		</header>

		<div id="sidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
			&times;
		</a>
  		<a href="#">Fruits</a>
  		<a href="#">Contacto</a>
  		<a href="#">Marketplace</a>
	</div>

		<div id="portada">
			<div id="wrapper-portada">
				
				<div class="my-img">
					<div id="wrapper-img">
						<img src="src/assets/1341264.jpeg">
					</div>
					<div id="wrapper-text">
						<p>Las pepas negras de la fresa, una fuente de antioxidantes</p>
					</div>
				</div>
				<div class="my-img">
					<div id="wrapper-img">
						<img src="src/assets/fresa-y-flo.jpg">
					</div>
					<div id="wrapper-text">
						<p>Las fresas son ricas en fibra, antioxidantes, vitaminas y minerales, lo que ayuda a mantener un intestino saludable.</p>
					</div>
				</div>
				<div class="my-img">
					<div id="wrapper-img">
						<img src="src/assets/lku.jpg">
					</div>
					<div id="wrapper-text">
						<p>Los antioxidantes ayudan en la absorción de nutrientes clave, además de las proteínas y el hierro.</p>
					</div>
				</div>
				<!--<div id="control-port">
					<div class="control"></div>
					<div class="control">1</div>
					<div class="control"></div>
				</div>-->
			</div>
		</div>
		<main id="main">
			<div id="grid">
				<div class="fre">
					<div class="fre-title">
						<h2>Fresa calinda</h2>
					</div>
					<div class="fre-grid">
						<div class="fresa-img">
							<img src="src/assets/1341264.jpeg"/>
						</div>
						<div class="fresa-text">
							<p>La metodología utilizada ha permitido determinar que el aquenio, tras la digestión gástrica, libera una proporción de antioxidantes más elevada que la propia pulpa o parte roja de la fresa.</p>
						</div>
					</div>
				</div>
				<div class="fre">
					<div class="fre-title">
						<h2>Fresa calinda</h2>
					</div>
					<div class="fre-grid">
						<div class="fresa-img">
							<img src="src/assets/fresa-y-flo.jpg"/>
						</div>
						<div class="fresa-text">
							<p>
								La metodología utilizada ha permitido determinar que el aquenio, tras la digestión gástrica, libera una proporción de antioxidantes más elevada que la propia pulpa o parte roja de la fresa.
							</p>
						</div>
					</div>
				</div>
				<div class="fre">
					<div class="fre-title">
						<h2>Fresa calinda</h2>
					</div>
					<div class="fre-grid">
						<div class="fresa-img">
							<img src="src/assets/lku.jpg"/>
						</div>
						<div class="fresa-text">
							<p>
								La metodología utilizada ha permitido determinar que el aquenio, tras la digestión gástrica, libera una 	proporción de antioxidantes más elevada que la propia pulpa o parte roja de la fresa.
							</p>
						</div>
					</div>
				</div>
			</div>
		</main>
		<section id="catalogo">
			<div id="container">
				<div class="contenedors">
					<div class="titles">
						<h2>Fresa calinda</h2>
					</div>
					<div class="wrapper-fres">
						<div class="fres-it">
							<div class="img-it">
								<img src="src/assets/lku.jpg"/>
							</div>
						</div>
						<div class="fres-it">
							<h2 class="title-it">Fresa calinda</h2>
							<p>
								La metodología utilizada ha permitido determinar que el aquenio, tras la digestión gástrica, libera una proporción de antioxidantes más elevada que la propia pulpa o parte roja de la fresa.
							</p>
						</div>
					</div>
				</div>
				<div class="contenedors">
					<div class="contenedors">
						<div class="titles">
							<h2>Fresa camarosa</h2>
						</div>
						<div class="wrapper-fres">
							<div class="fres-it">
								<div class="img-it">
									<img src="src/assets/1341264.jpeg"/>
								</div>
							</div>
							<div class="fres-it">
								<h2 class="title-it">Fresa camarosa</h2>
								<p>
									La metodología utilizada ha permitido determinar que el aquenio, tras la digestión gástrica, libera una proporción de antioxidantes más elevada que la propia pulpa o parte roja de la fresa.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<footer>
			<div id="title-page">
				<h3>strawberries</h3>
			</div>
			<div id="title-ley">
				<p>COPYTIGHY @ 2021- 2022 OLDESIGN ALL RIGHTS RESERVED.</p>
			</div>
		</footer>
	</div>
</body>
</html>


<script type="text/javascript">

var  indexImg = 0;

Show_img();

function Show_img(){

var imagenes = document.getElementsByClassName('my-img');

	for(var i = 0; i < imagenes.length; i++){

			imagenes[i].style.display = "none";
	}

	indexImg++;

	if(indexImg > imagenes.length){indexImg = 1;}
	imagenes[indexImg - 1].style.display = "block";
	setTimeout(Show_img, 3000);
}


function openNav() {
  document.getElementById("sidenav").style.width = "250px";
}


function closeNav() {
  document.getElementById("sidenav").style.width = "0";
}

</script>