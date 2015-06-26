<a href="#content" class="skip">Skip to main content</a>
<header class="text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-3 navbar-logo-container">
				<a class="image-link" href="{{ URL::route('home') }}">
					{{ HTML::image('img/be-accessible-logo.png', 'Be Accessible Home') }}
				</a>
			</div>
			<nav class="col-md-offset-3 col-md-6" aria-label="main menu" role="navigation">
				<ul class="navbar">
					<li><a href="{{ URL::route('courses') }}">Cursos</a></li>
					<a class="sign-up" href="{{ URL::route('signup') }}"><li>Registrate Gratis!</li></a>
					<li><a href="{{ URL::route('signin') }}">Iniciar Sesión</a></li>
				</ul>
			</nav>
		</div>
	</div>
</header>