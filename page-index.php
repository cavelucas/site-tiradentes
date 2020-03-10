<?php
	/* template name: page index */
?>

<!-- esta página anteriormente era o Index.php do site -->

<?php include('header.php') ?>
	<div id="bg-telas">
		<section id="tela1">
			<div id="tela1__texto">
				<h2>A melhor<br>proposta de<br>preparação<br>para a sua</h2>
				<h2 class="texto-azul">APROVAÇÃO</h2>
				<a href="#tela5" >Matrículas abertas</a>
			</div>
		</section>
		<section id="tela2">
			<div id="tela2__texto">
				<h2>A melhor preparação</h2>
				<h3>que mostra</h3>
				<h2 class="texto-azul">RESULTADOS</h2>
				<h4>Gabriel Salim - 1º colocado em 2019 em São Gabriel</h4>
			</div>
		</section>
	</div>
	<section id="tela3">
		<img src="<?php bloginfo('template_url'); ?>/img/mapa.png" alt="silhueta do mapa do Rio Grande do Sul com a escrita mais de 450 aprovados em todo o Rio Grande do Sul">
		<p>O curso preparatório da<br>New Life Educação tem<br>mais de 450 alunos aprovados<br>no Rio Grande do Sul</p>
		<a href="#tela5" class="abre-landing2">Faça Parte deste Número</a>
	</section>
	<div id="bg-fb-contato" >
		<section id="tela4">
			<?php include('fb.php') ?>
		</section>
		<section id="tela5">
			<?php include('form.php') ?>
		</section>
		
	</div>
	<div id="landing">
		<div class="landing__content">
			<?php include('landing.php') ?>
		</div>
	</div>
<?php include('footer.php') ?>