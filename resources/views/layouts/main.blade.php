<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116407373-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-116407373-1');
    </script>
		
		<title>lStarter - Laravel + InfyOm + ACL Nativa + Multi Idiomas</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<span class="logo"><img src="{{ asset('images/logo.svg') }}" alt="" /></span>
						<h1>Laravel Starter</h1>
						<p>Um ponta pé inicial para sistemas web <br />
						desenvolvidos com <a href="https://laravel.com" target="_blank">Laravel 5.5</a> e <a href="https://adminlet.io" target="_blank">AdminLTE</a>.</p>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="#about" class="active">Sobre</a></li>
							<li><a href="#packages">Pacotes</a></li>
							<li><a href="#nativeacl">ACL Nativa</a></li>
							<li><a href="#downloadnow">Teste / Compre / Baixe</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Introduction -->
							<section id="about" class="main">
								<div class="spotlight">
									<div class="content">
										<header class="major">
											<h2>Laravel 5.5 + AdminLTE</h2>
										</header>
										<p>
											Cansado daquele trabalho repetitivo para iniciar qualquer projeto web? Cansado de criar arquivos de views manualmente? <br/>
											Como o Laravel Starter você tem ACL nativa (e os cruds necessários), template AdminLTE painel de administração e a possibilidade de trabalhar com múltiplos idiomas.
										</p>
									</div>
									<span class="image"><img src="{{ asset('images/logo-laravel.svg') }}" alt="" /></span>
								</div>
							</section>

						<!-- First Section -->
							<section id="packages" class="main special">
								<header class="major">
									<h2>Pacotes Facilitadores</h2>
								</header>
								<ul class="features">
									<li>
										<span class="icon major style1 fa-code"></span>
										<h3>Yajra Datatables</h3>
										<p>
											Tabelas dinâmicas e estilizadas
										</p>
									</li>
									<li>
										<span class="icon major style3 fa-copy"></span>
										<h3>InfyOm Generators</h3>
										<p>
											Gerador de Controllers, DataTables, Requests, Models, Migrations, Views para artesãos...
										</p>
									</li>
									<li>
										<span class="icon major style5 fa-diamond"></span>
										<h3>AdminLTE</h3>
										<p>
											Painel de administração moderno e responsivo
										</p>
									</li>
								</ul>
							</section>

						<!-- Second Section -->
							<section id="nativeacl" class="main special">
								<header class="major">
									<h2>ACL Nativa</h2>
									<p>Não dependa de pacotes de terceiros para ter a segurança de seu sistema</p>
								</header>
								<p class="content">
									Faça uso somente as funcionalidades disponíveis no Laravel Framework para manter a integridade e segurança de suas
									informações atrvés de Papéis/Funções, Permissões e Usuários.
								</p>
							</section>

						<!-- Get Started -->
							<section id="downloadnow" class="main special">
								<header class="major">
									<h2>Compre ou Baixe</h2>
									<p>
										O Laravel Starter é <b>gratuito</b>. Para ter suporte as funcionalidades e dúvidas você pode comprar ele no CodeCanyon.
									</p>
									<p>
										Para demonstrações utilize os seguintes usuários: <br/>
										<h6>Usuário Administrador</h6>
										<b>Email: </b>demoadmin@domain.com<br/>
										<b>Senha: </b>secret<br/><br/>
										ou<br/><br/>
										<h6>Usuário Comum (com limitações)</h6>
										<b>Email: </b>demo@domain.com<br/>
										<b>Senha: </b>secret<br/>
									</p>
								</header>
								<footer class="major">
									<ul class="actions">
										<li><a href="{{ route('admin.home') }}" class="button">Demonstração</smal></a></li>
										<li><a href="{{ route('documentation.index') }}" class="button" style="background-color: darkgreen !important; color: white !important;">Documentação</a></li>
										<li><a href="#" class="button special">Comprar (em breve)</a></li>
										<li><a href="https://github.com/dpossas/lstarter" target="_blank" class="button">Baixar <smal>(sem suporte)</smal></a></li>
									</ul>
								</footer>
							</section>

					</div>

				<!-- Footer -->
					<footer id="footer">
						<section>
							<h2>Sobre o Autor</h2>
							<p>
								Me chamo Douglas Bezerra Possas e sou apaixonado por desenvolvimento web desde 1997. Entusiasta PHP tenho trabalhado com Laravel desde a versão 4.2.
							</p>
							<ul class="actions">
								<li><a href="http://webmoderna.com.br/douglas/CV-Europass-20171124-BezerraPossas-PT.pdf" class="button">Acesse meu CV</a></li>
							</ul>
						</section>
						<section>
							<h2>Fale Comigo</h2>
							<dl class="alt">
								<dt>Email</dt>
								<dd><a href="#">douglaspossas@gmail.com</a></dd>
							</dl>
							<ul class="icons">
								<li>
									<a href="https://twitter.com/dpossas" class="icon fa-twitter alt" target="_blank"><span class="label">Twitter</span></a>
								</li>
								<li>
									<a href="https://www.facebook.com/douglasbezerrapossas/" target="_blank" class="icon fa-facebook alt"><span class="label">Facebook</span></a>
								</li>
								<li>
									<a href="https://github.com/dpossas" target="_blank" class="icon fa-github alt"><span class="label">GitHub</span></a>
								</li>
								<li>
									<a href="https://www.linkedin.com/in/douglaspossas" target="_blank" class="icon fa-linkedin alt"><span class="label">Dribbble</span></a>
								</li>
							</ul>
						</section>
						<p class="copyright">&copy; lStarter. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
