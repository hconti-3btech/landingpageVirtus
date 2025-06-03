<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>3bTech | Informática e Segurança</title>
	<meta charset="UTF-8">
	<meta name="description" content="loans HTML Template">
	<meta name="keywords" content="loans, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="dist/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="dist/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="dist/css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="dist/css/flaticon.css"/>
	<link rel="stylesheet" href="dist/css/slicknav.min.css"/>
	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="dist/css/style.css"/>
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<link rel="apple-touch-icon" href="apple/apple-touch-icon-iphone-60x60.png">
	<link rel="apple-touch-icon" sizes="60x60" href="apple/apple-touch-icon-ipad-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="apple/apple-touch-icon-iphone-retina-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="apple/apple-touch-icon-ipad-retina-152x152.png">

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	<!-- Header Section -->
	<header class="header-section">
        <a href="index" class="site-logo">
            <img src="dist/img/logo.png" height="80">
        </a>
        <nav class="header-nav">
            <ul class="main-menu">
                <li><a href="{{ route('BemVindo') }}">Home</a></li>
        
                <li><a href="https://wa.me/5512981134343">Whats App</a></li>

				{{-- Precisa manter essas linhas --}}
                @if (Route::has('login'))
                    @auth
                        <li><a href="{{ url('/home') }}">Acesso Sistema</a></li>
                    @else
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Cadastrar</a></li>
                    @endauth
                    
                @endif
				{{-- END Precisa manter essas linhas --}}
            </ul>
            <div class="header-right">
                <div class="hr-btn hr-btn-2"><a href="https://wa.me/5512981134343" style="color: inherit; text-decoration: none;"><img width="30" src="dist/img/whatsapp.png"> 12 98113-4343</a></div>
            </div>
        </nav>
	</header>
	<!-- Header Section end -->
	<!-- Hero Section end -->
	<section class="hero-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="hs-text">
						<h2>Quem Somos?</h2>
						<p>
                            Bem-vindo à 3Btech Informática e Segurança, especialista em soluções de TI e segurança eletrônica. Com ampla experiência no desenvolvimento de soluções tecnológicas, oferecemos serviços personalizados e inovadores para impulsionar o sucesso dos nossos clientes. Em parceria com o <a href="http://grupottc.com.br"><b>GRUPO TTC</b></a>, fornecemos soluções de segurança eletrônica de ponta, utilizando as mais recentes tecnologias para proteger os ativos mais valiosos dos nossos clientes. Nossa equipe altamente qualificada está comprometida em estabelecer uma parceria sólida e confiável, fornecendo soluções de alta qualidade que atendam às necessidades específicas de cada cliente. Explore nosso portfólio e descubra como podemos ajudar sua empresa a alcançar novos níveis de sucesso e segurança.
                        </p>
						<a href="#" class="site-btn sb-dark">Saiba mais</a>
					</div>
				</div>
				<div class="col-lg-6">
					<form class="hero-form" action="enviar" method="POST">
						<h2>Entre em Contato</h2>
						<input type="text" name="nome" placeholder="Nome">
						<input type="text" name="email" placeholder="E-mail">
						<input type="text" name="tel" placeholder="Telefone">
						<p>Solicite um contato, nos podemos te ajudar !!!</p>
						<button class="site-btn">Solicitar Contato</button>
					</form>
				</div>
			</div>
		</div>
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="dist/img/hero-slider/1.jpg"></div>
		</div>
	</section>
	<!-- Hero Section end -->
	<!-- Why Section end -->
	<section class="why-section spad">
		<div class="container">
			<div class="text-center mb-5 pb-4">
				<h2>Porque nos escolher?</h2>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="icon-box-item">
						<div class="ib-icon">
							<i class="flaticon-003-like"></i>
						</div>
						<div class="ib-text">
							<h5>Atendimento Rapido</h5>
							<p>O seu problema resolvido por um técnico especializado, de maneira rápida e direta. Para que você possa produzir mais.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="icon-box-item">
						<div class="ib-icon">
							<i class="flaticon-004-assistance"></i>
						</div>
						<div class="ib-text">
							<h5>Equipe Capacitada</h5>
							<p>Profissionais capacitados para cada tipo de nesseidade, Informática, Segurança, Telefonia, Redes e etc.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="icon-box-item">
						<div class="ib-icon">
							<i class="flaticon-037-responsive"></i>
						</div>
						<div class="ib-text">
							<h5>Credibilidade</h5>
							<p>A 3bTech é uma empresa que esta há 8 anos no mercado e vem inovando na área de segurança e tecnologia em geral, sempre buscando o melhor para seus clientes com qualidade e respeito.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Footer Section -->
	<footer class="footer-section">
		<div class="container">
			<a href="login" class="footer-logo">
				<img src="dist/img/logo.png" alt="">
			</a>
			<div class="row">
                <div class="col-lg-6">
                    <div class="footer-widget">
                        <h2>Entre em contato</h2>
                        <ul>
                            <li><a href="#">Telefone/Whatsapp - 12 981134343</a></li>
                            <li><a href="#">Email - contato@3btech.com.br</a></li>
                            <li><a href="https://www.facebook.com/3btechinformatica/">Facebook - https://www.facebook.com/3btechinformatica/</a></li>
                        </ul>
                    </div>
                </div>
			</div>
			<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
		</div>
	</footer>
	<!-- Footer Section end -->
	<!--====== Javascripts & Jquery ======-->
	<script src="dist/js/jquery-3.2.1.min.js"></script>
	<script src="dist/js/bootstrap.min.js"></script>
	<script src="dist/js/jquery.slicknav.min.js"></script>
	<script src="dist/js/owl.carousel.min.js"></script>
	<script src="dist/js/jquery-ui.min.js"></script>
	<script src="dist/js/main.js"></script>
	</body>
</html>
