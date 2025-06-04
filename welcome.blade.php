<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Virtus Telecom | Soluções em Telecomunicações</title>
	<meta charset="UTF-8">
	<meta name="description"
		content="Virtus Telecom - Soluções completas em telecomunicações, internet fibra óptica, telefonia e conectividade">
	<meta name="keywords" content="telecomunicações, fibra óptica, internet, telefonia, conectividade">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
		rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
		rel="stylesheet">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

	<!-- Custom CSS -->
	<style>
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		body {
			font-family: 'Inter', sans-serif;
			line-height: 1.6;
			color: #333;
		}

		/* Preloader */
		#preloder {
			position: fixed;
			width: 100%;
			height: 100vh;
			background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
			z-index: 9999;
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.loader {
			width: 50px;
			height: 50px;
			border: 3px solid rgba(255, 255, 255, 0.3);
			border-radius: 50%;
			border-top-color: #fff;
			animation: spin 1s ease-in-out infinite;
		}

		@keyframes spin {
			to {
				transform: rotate(360deg);
			}
		}

		/* Header */
		.header-section {
			background: rgba(255, 255, 255, 0.95);
			backdrop-filter: blur(10px);
			padding: 1rem 0;
			position: fixed;
			width: 100%;
			top: 0;
			z-index: 1000;
			box-shadow: 0 2px 20px rgba(0, 0, 0, 0.08);
			transition: all 0.3s ease;
		}

		.header-section.scrolled {
			background: rgba(255, 255, 255, 0.98);
			box-shadow: 0 4px 30px rgba(0, 0, 0, 0.12);
		}

		.container {
			max-width: 1200px;
			margin: 0 auto;
			padding: 0 2rem;
		}

		.header-content {
			display: flex;
			justify-content: space-between;
			align-items: center;
			height: 70px;
		}

		.site-logo {
			display: flex;
			align-items: center;
			transition: transform 0.3s ease;
		}

		.site-logo:hover {
			transform: scale(1.05);
		}

		.site-logo img {
			height: 45px;
			width: auto;
		}

		.header-nav {
			display: flex;
		}

		.header-nav ul {
			display: flex;
			list-style: none;
			gap: 2rem;
			align-items: center;
		}

		.header-nav a {
			text-decoration: none;
			color: #374151;
			font-weight: 500;
			font-size: 0.95rem;
			padding: 0.5rem 1rem;
			border-radius: 8px;
			transition: all 0.3s ease;
		}

		.header-nav a:hover {
			color: #2563eb;
			background: rgba(37, 99, 235, 0.1);
		}

		.header-right {
			display: flex;
			align-items: center;
			gap: 1rem;
		}

		.auth-links {
			display: flex;
			align-items: center;
			gap: 0.5rem;
		}

		.auth-link {
			text-decoration: none;
			color: #374151;
			font-weight: 500;
			font-size: 0.9rem;
			padding: 0.6rem 1.2rem;
			border-radius: 8px;
			transition: all 0.3s ease;
			border: 1px solid transparent;
		}

		.auth-link.login {
			color: #2563eb;
			border-color: #e5e7eb;
		}

		.auth-link.login:hover {
			background: rgba(37, 99, 235, 0.1);
			border-color: #2563eb;
		}

		.auth-link.register {
			background: #2563eb;
			color: white;
			border-color: #2563eb;
		}

		.auth-link.register:hover {
			background: #1d4ed8;
			transform: translateY(-1px);
		}

		.whatsapp-btn {
			background: #25d366;
			color: white;
			padding: 0.7rem 1.5rem;
			border-radius: 50px;
			text-decoration: none;
			font-weight: 600;
			font-size: 0.9rem;
			display: flex;
			align-items: center;
			gap: 0.5rem;
			transition: all 0.3s ease;
			box-shadow: 0 4px 15px rgba(37, 211, 102, 0.3);
		}

		.whatsapp-btn:hover {
			background: #20bd5a;
			transform: translateY(-2px);
			box-shadow: 0 6px 20px rgba(37, 211, 102, 0.4);
			color: white;
		}

		.whatsapp-btn i {
			font-size: 1.1rem;
		}

		/* Mobile Menu Toggle */
		.mobile-menu-toggle {
			display: none;
			flex-direction: column;
			cursor: pointer;
			padding: 0.5rem;
			z-index: 1001;
		}

		.mobile-menu-toggle span {
			width: 25px;
			height: 3px;
			background: #2563eb;
			margin: 3px 0;
			transition: 0.3s;
			border-radius: 2px;
		}

		.mobile-menu-toggle.active span:nth-child(1) {
			transform: rotate(-45deg) translate(-5px, 6px);
		}

		.mobile-menu-toggle.active span:nth-child(2) {
			opacity: 0;
		}

		.mobile-menu-toggle.active span:nth-child(3) {
			transform: rotate(45deg) translate(-5px, -6px);
		}

		/* Hero Section */
		.hero-section {
			background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
			min-height: 100vh;
			display: flex;
			align-items: center;
			position: relative;
			overflow: hidden;
			padding-top: 80px;
		}

		.hero-section::before {
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><polygon fill="rgba(255,255,255,0.1)" points="0,0 1000,300 1000,1000 0,700"/></svg>');
			z-index: 1;
		}

		.hero-content {
			position: relative;
			z-index: 2;
			display: grid;
			grid-template-columns: 1fr 400px;
			gap: 4rem;
			align-items: center;
		}

		.hs-text {
			color: white;
		}

		.hs-text h1 {
			font-family: 'Poppins', sans-serif;
			font-size: 3.5rem;
			font-weight: 700;
			margin-bottom: 1.5rem;
			line-height: 1.2;
		}

		.hs-text p {
			font-size: 1.2rem;
			margin-bottom: 2rem;
			opacity: 0.9;
			line-height: 1.8;
		}

		.site-btn {
			background: white;
			color: #2563eb;
			padding: 1rem 2rem;
			border: none;
			border-radius: 50px;
			font-weight: 600;
			text-decoration: none;
			display: inline-block;
			transition: all 0.3s ease;
			cursor: pointer;
		}

		.site-btn:hover {
			transform: translateY(-2px);
			box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
			color: #2563eb;
		}

		/* Hero Form */
		.hero-form {
			background: white;
			padding: 2.5rem;
			border-radius: 20px;
			box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
		}

		.hero-form h2 {
			color: #333;
			margin-bottom: 1.5rem;
			font-family: 'Poppins', sans-serif;
			font-weight: 600;
		}

		.hero-form input {
			width: 100%;
			padding: 1rem;
			margin-bottom: 1rem;
			border: 2px solid #f0f0f0;
			border-radius: 10px;
			font-size: 1rem;
			transition: border-color 0.3s ease;
		}

		.hero-form input:focus {
			outline: none;
			border-color: #2563eb;
		}

		.hero-form p {
			color: #666;
			margin-bottom: 1.5rem;
		}

		.hero-form .site-btn {
			width: 100%;
			background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
			color: white;
		}

		/* Why Section */
		.why-section {
			padding: 6rem 0;
			background: #f8fafc;
		}

		.section-title {
			text-align: center;
			margin-bottom: 4rem;
		}

		.section-title h2 {
			font-family: 'Poppins', sans-serif;
			font-size: 2.5rem;
			font-weight: 700;
			color: #333;
			margin-bottom: 1rem;
		}

		.section-title p {
			font-size: 1.1rem;
			color: #666;
			max-width: 600px;
			margin: 0 auto;
		}

		.services-grid {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
			gap: 2rem;
		}

		.icon-box-item {
			background: white;
			padding: 2.5rem;
			border-radius: 15px;
			text-align: center;
			box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
			transition: transform 0.3s ease;
		}

		.icon-box-item:hover {
			transform: translateY(-10px);
		}

		.ib-icon {
			width: 80px;
			height: 80px;
			background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
			border-radius: 50%;
			display: flex;
			align-items: center;
			justify-content: center;
			margin: 0 auto 1.5rem;
		}

		.ib-icon i {
			font-size: 2rem;
			color: white;
		}

		.ib-text h5 {
			font-family: 'Poppins', sans-serif;
			font-size: 1.3rem;
			font-weight: 600;
			margin-bottom: 1rem;
			color: #333;
		}

		.ib-text p {
			color: #666;
			line-height: 1.7;
		}

		/* Footer */
		.footer-section {
			background: #1a1a1a;
			color: white;
			padding: 3rem 0 1rem;
		}

		.footer-content {
			display: grid;
			grid-template-columns: 1fr 1fr;
			gap: 3rem;
			margin-bottom: 2rem;
		}

		.footer-logo img {
			height: 60px;
			width: auto;
			filter: brightness(0) invert(1);
		}

		.footer-widget h3 {
			font-family: 'Poppins', sans-serif;
			font-weight: 600;
			margin-bottom: 1rem;
		}

		.footer-widget ul {
			list-style: none;
		}

		.footer-widget ul li {
			margin-bottom: 0.5rem;
		}

		.footer-widget ul li a {
			color: #ccc;
			text-decoration: none;
			transition: color 0.3s ease;
		}

		.footer-widget ul li a:hover {
			color: #2563eb;
		}

		.copyright {
			border-top: 1px solid #333;
			padding-top: 1rem;
			text-align: center;
			color: #999;
		}

		/* Responsive */
		@media (max-width: 1024px) {
			.header-content {
				gap: 2rem;
			}

			.auth-links {
				gap: 0.3rem;
			}

			.auth-link {
				padding: 0.5rem 1rem;
				font-size: 0.85rem;
			}
		}

		@media (max-width: 768px) {
			.container {
				padding: 0 1rem;
			}

			.header-content {
				height: 60px;
			}

			.site-logo img {
				height: 35px;
			}

			.header-nav {
				display: none;
				position: absolute;
				top: 100%;
				left: 0;
				right: 0;
				background: white;
				padding: 2rem;
				box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
			}

			.header-nav.active {
				display: block;
			}

			.header-nav ul {
				flex-direction: column;
				gap: 1rem;
			}

			.header-nav a {
				display: block;
				text-align: center;
				padding: 1rem;
				border-radius: 10px;
				background: #f8fafc;
			}

			.mobile-menu-toggle {
				display: flex;
			}

			.auth-links {
				flex-direction: column;
				gap: 0.5rem;
			}

			.auth-link {
				padding: 0.5rem 0.8rem;
				font-size: 0.8rem;
			}

			.whatsapp-btn {
				padding: 0.6rem 1rem;
				font-size: 0.8rem;
			}

			.whatsapp-btn span {
				display: none;
			}

			.hero-content {
				grid-template-columns: 1fr;
				gap: 2rem;
				text-align: center;
				padding-top: 2rem;
			}

			.hs-text h1 {
				font-size: 2.5rem;
			}

			.services-grid {
				grid-template-columns: 1fr;
			}

			.footer-content {
				grid-template-columns: 1fr;
				text-align: center;
			}
		}

		@media (max-width: 480px) {
			.header-right {
				flex-direction: column;
				gap: 0.5rem;
			}

			.auth-links {
				flex-direction: row;
				gap: 0.3rem;
			}

			.auth-link {
				padding: 0.4rem 0.6rem;
				font-size: 0.75rem;
			}

			.whatsapp-btn {
				padding: 0.5rem;
				min-width: 45px;
				justify-content: center;
			}
		}
	</style>
</head>

<body>
	<!-- Page Preloader -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header Section -->
	<header class="header-section">
		<div class="container">
			<div class="header-content">
				<a href="#" class="site-logo">
					<img src="/assets/logo.png" alt="Virtus Telecom">
				</a>

				<nav class="header-nav">
					<ul>
						<li><a href="#home">Home</a></li>
						<li><a href="#servicos">Serviços</a></li>
						<li><a href="#contato">Contato</a></li>
					</ul>
				</nav>

				<div class="mobile-menu-toggle">
					<span></span>
					<span></span>
					<span></span>
				</div>

				<div class="header-right">
					{{-- Precisa manter essas linhas --}}
					@if (Route::has('login'))
					<div class="auth-links">
						@auth
						<a href="{{ url('/home') }}" class="auth-link login">Acesso Sistema</a>
						@else 
						<a href="{{ route('login') }}" class="auth-link login">Login</a>
						<a href="{{ route('register') }}" class="auth-link register">Cadastrar</a>
					@endauth 
					</div>
					@endif
					{{-- END Precisa manter essas linhas --}}

					<a href="https://wa.me/5512981134343" class="whatsapp-btn">
						<i class="fab fa-whatsapp"></i>
						<span>(12) 98113-4343</span>
					</a>
				</div>
			</div>
		</div>
	</header>

	<!-- Hero Section -->
	<section class="hero-section" id="home">
		<div class="container">
			<div class="hero-content">
				<div class="hs-text">
					<h1>Conectando Você ao Futuro</h1>
					<p>
						A Virtus Telecom é especialista em soluções completas de telecomunicações.
						Oferecemos internet fibra óptica de alta velocidade, telefonia empresarial
						e soluções de conectividade personalizadas para residências e empresas.
						Nossa missão é proporcionar conectividade de qualidade superior com
						tecnologia de ponta e atendimento excepcional.
					</p>
					<a href="#servicos" class="site-btn">Conheça Nossos Serviços</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Why Section -->
	<section class="why-section" id="servicos">
		<div class="container">
			<div class="section-title">
				<h2>Por que Escolher a Virtus Telecom?</h2>
				<p>Oferecemos soluções completas em telecomunicações com tecnologia de ponta e atendimento personalizado
				</p>
			</div>
			<div class="services-grid">
				<div class="icon-box-item">
					<div class="ib-icon">
						<i class="fas fa-wifi"></i>
					</div>
					<div class="ib-text">
						<h5>Internet Fibra Óptica</h5>
						<p>Conexão de alta velocidade e estabilidade com tecnologia 100% fibra óptica. Planos
							residenciais e empresariais com velocidades de até 1GB.</p>
					</div>
				</div>
				<div class="icon-box-item">
					<div class="ib-icon">
						<i class="fas fa-phone"></i>
					</div>
					<div class="ib-text">
						<h5>Telefonia Empresarial</h5>
						<p>Soluções completas em telefonia para empresas, incluindo PABX digital, ramais virtuais e
							integração com sistemas corporativos.</p>
					</div>
				</div>
				<div class="icon-box-item">
					<div class="ib-icon">
						<i class="fas fa-headset"></i>
					</div>
					<div class="ib-text">
						<h5>Suporte 24/7</h5>
						<p>Atendimento técnico especializado disponível 24 horas por dia, 7 dias por semana. Suporte
							técnico local com tempo de resposta otimizado.</p>
					</div>
				</div>
				<div class="icon-box-item">
					<div class="ib-icon">
						<i class="fas fa-rocket"></i>
					</div>
					<div class="ib-text">
						<h5>Tecnologia Avançada</h5>
						<p>Utilizamos as mais recentes tecnologias em telecomunicações, garantindo performance superior
							e inovação constante em nossos serviços.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer Section -->
	<footer class="footer-section" id="contato">
		<div class="container">
			<div class="footer-content">
				<div>
					<a href="#" class="site-logo">
						<img src="/assets/logo.png" alt="Virtus Telecom">
					</a>
					<p style="color: #ccc; margin-top: 1rem;">
						Conectando você ao futuro com tecnologia e qualidade superiores.
						Sua parceira em soluções de telecomunicações.
					</p>
				</div>
				<div class="footer-widget">
					<h3>Entre em Contato</h3>
					<ul>
						<li><a href="tel:12981134343"><i class="fas fa-phone"></i> (12) 98113-4343</a></li>
						<li><a href="mailto:contato@virtustelecom.com.br"><i class="fas fa-envelope"></i>
								contato@virtustelecom.com.br</a></li>
						<li><a href="https://wa.me/5512981134343"><i class="fab fa-whatsapp"></i> WhatsApp</a></li>
						<li><a href="#"><i class="fas fa-map-marker-alt"></i> São José dos Campos - SP</a></li>
					</ul>
				</div>
			</div>
			<div class="copyright">
				<p>&copy; 2024 Virtus Telecom. Todos os direitos reservados. | Desenvolvido com <i class="fas fa-heart"
						style="color: #2563eb;"></i> para conectar pessoas</p>
			</div>
		</div>
	</footer>

	<!-- JavaScript -->
	<script>
		// Preloader
		window.addEventListener('load', function () {
			const preloader = document.getElementById('preloder');
			preloader.style.opacity = '0';
			setTimeout(() => {
				preloader.style.display = 'none';
			}, 500);
		});

		// Mobile menu toggle
		const mobileToggle = document.querySelector('.mobile-menu-toggle');
		const headerNav = document.querySelector('.header-nav');

		mobileToggle.addEventListener('click', function () {
			this.classList.toggle('active');
			headerNav.classList.toggle('active');
		});

		// Smooth scrolling
		document.querySelectorAll('a[href^="#"]').forEach(anchor => {
			anchor.addEventListener('click', function (e) {
				e.preventDefault();
				const target = document.querySelector(this.getAttribute('href'));
				if (target) {
					target.scrollIntoView({
						behavior: 'smooth',
						block: 'start'
					});
				}
				// Close mobile menu after click
				headerNav.classList.remove('active');
				mobileToggle.classList.remove('active');
			});
		});

		// Header scroll effect
		window.addEventListener('scroll', function () {
			const header = document.querySelector('.header-section');
			if (window.scrollY > 50) {
				header.classList.add('scrolled');
			} else {
				header.classList.remove('scrolled');
			}
		});

		// Form submission
		document.querySelector('.hero-form').addEventListener('submit', function (e) {
			e.preventDefault();
			alert('Obrigado pelo seu interesse! Entraremos em contato em breve.');
		});
	</script>
</body>

</html>