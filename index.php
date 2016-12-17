<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Talita Oliveira</title>
	<link rel="stylesheet" href="css/style.css">
	<meta name="theme-color" content="#3D415B">
	<meta name="viewport" content="width=320px, user-scalable=no">
	<script
	src="https://code.jquery.com/jquery-3.1.1.min.js"
	integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
	crossorigin="anonymous"></script>
	<script type="text/javascript">
		$(document).ready(function($) { 
			$(".scroll").click(function(event){
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top}, 800);
			});
			$("#icon-menu").click(function(){
				$("#lista-menu").toggleClass('esconder');
			});
		});
	</script>
</head>
<body>
	<nav>
		<a href="#" id="logo">Talita Oliveira</a>
		<i class="fa fa-bars fa-2x" aria-hidden="true" id="icon-menu"></i>
		<ul id="lista-menu" class="esconder">
			<li><a href="#conhecimento" class="scroll">O QUE EU SEI</a></li>
			<li><a href="#portfolio" class="scroll">PORTFOLIO</a></li>
			<li><a href="#contato" class="scroll">CONTATO</a></li>
		</ul>
	</nav>
	<header>
		<!-- <h1>Talita Oliveira</h1>
		<p>Programadora PHP, formada em Sistemas de Informação, pós-graduando em Design de Web Apps com tecnologia Front-end, e adora uma sair pra tomar um chopp/cerveja gelada.  </p> -->
		<div id="novo">
			<h1>Talita Oliveira</h1>
			<p id="programadora">programadora PHP <br> 
				<small id="small">e dev front-end nas horas vagas</small>
			</p>
		</div>	
		<!-- <div>
			<div class="heart">
				<div class="square"></div>
				<div class="circle top"></div>
				<div class="circle left"></div>
			</div>
		</div> -->
	</header>

	<section id="conhecimento">
		<h2>O QUE EU SEI</h2>
		<div class="card">
			<div class="content">
				<p> Trabalho com PHP a 3 anos, 2 anos foi mais usando o framework CakePHP. Minha paixão por programação surgiu na faculdade onde primeiramente aprendi Java, e não gostei muito. Quando conheci o PHP foi ~amor a primeira vista~ pois era bem simples de aprender e desenvolver aplicações para web.</p>
				<img src="icons/icon-php.png" alt="cogumelos"/>
			</div>
		</div>
		<div class="card">
			<div class="content">
				<p> Depois que aprendi o PHP, fiquei fascinada por layouts para web. Também aprendi HTML na faculdade, mas fui me apronfundando sozinha. Minha diversão era copiar sites que eu via, só para aprendizado. Fiz uns freelas que nunca recebi nada por isso, e também nem sei se foram usados.</p>
				<img src="icons/icon-html.png" alt="cogumelos"/>
			</div>
		</div>
		<div class="card">
			<div class="content">
				<p> Gosto muito do CSS e procuro alguns desafios para fazer só com CSS, sou apaixonada por Flexbox. Nas horas vagas quando estou no pc sem fazer nada, gosto de ficar vendo coisas no codepen e inventando coisa pra fazer com CSS (e JS as vezes).</p>
				<img src="icons/icon-css.png" alt="cogumelos"/>
			</div>
		</div>
		<div class="card">
			<div class="content">
				<p> Sou nível júnior mas minha meta é aprender bem Javascript e começar a ver NodeJS.</p>
				<img src="icons/icon-js.png" alt="cogumelos"/>
			</div>
		</div>
	</section>

	<section id="portfolio" class="portfolio">
		<h2>PORTFOLIO - Sites</h2>
		<p>-- Sites que fiz para testar meus conhecimentos aprendidos --</p>
		<a target="_blank" href="http://talitaoliveira.com.br/settrans"><img class="img-portfolio" src="img/site-settrans.png"/></a>
		<a target="_blank" href="http://talitaoliveira.com.br/edvilma"><img class="img-portfolio" src="img/site-edvilma.png"/></a>
		<a target="_blank" href="http://talitaoliveira.com.br/quintas-site"><img class="img-portfolio" src="img/site-quintas.png"/></a>
		<a target="_blank" href="http://talitaoliveira.com.br/trailler"><img class="img-portfolio" src="img/site-trailler.png"/></a>
		<a target="_blank" href="http://talitaoliveira.com.br/katinha"><img class="img-portfolio" src="img/site-katinha.png"/></a>
	</section>
	<section id="portfolio2" class="portfolio">
		<h2>PORTFOLIO - Outros - Codepen</h2>
		<a target="_blank" href="http://codepen.io/talitaoliveira/pen/VjdGKb"><img class="img-portfolio" src="img/coisas-pizza.png"/></a>
		<a target="_blank" href="http://codepen.io/talitaoliveira/pen/YWdwJP"><img class="img-portfolio" src="img/coisas-jogodavelha.png"/></a>
		<a target="_blank" href="http://codepen.io/talitaoliveira/pen/KrjrxR"><img class="img-portfolio" src="img/coisas-app.png"/></a>
		<a target="_blank" href="http://codepen.io/talitaoliveira/pen/oLVzor"><img class="img-portfolio" src="img/coisas-form.png"/></a>
		<a target="_blank" href="http://codepen.io/talitaoliveira/pen/NABjbK"><img class="img-portfolio" src="img/coisas-cartao.png"/></a>
	</section>
	<footer id="contato">
		<p>Desenvolvido por Talita Oliveira.</p>
		<div>
			<a href="https://www.facebook.com/liitaoliveira" target="_blank" class="icon-facebook">
				<i class="fa fa-facebook-official fa-4x" aria-hidden="true"></i>
			</a>
			<a href="https://br.linkedin.com/in/litaaoliveira" target="_blank" class="icon-linkedin">
				<i class="fa fa-linkedin-square fa-4x" aria-hidden="true"></i>
			</a>
			<a href="https://github.com/talitaoliveira/" target="_blank" class="icon-github">
				<i class="fa fa-github fa-4x" aria-hidden="true"></i>
			</a>
			<a href="http://talitaoliveira.com.br/blog/" target="_blank" class="icon-wordpress">
				<i class="fa fa-wordpress fa-4x" aria-hidden="true"></i>
			</a>
			<a href="http://codepen.io/talitaoliveira/" target="_blank" class="icon-codepen">
				<i class="fa fa-codepen fa-4x" aria-hidden="true"></i>
			</a>
			<a href="mailto:litaa.oliveira@gmail.com" target="_blank" class="icon-envelope">
				<i class="fa fa-envelope fa-4x" aria-hidden="true"></i>
			</a>
		</div>
	</footer>

</body>
</html>
