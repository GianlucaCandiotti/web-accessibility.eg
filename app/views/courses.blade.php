@extends('templates.base')

@section('content')
	<div id="content" class="courses" role="main">
		<div class="courses text-center">
			<h2>Aprende donde empezar mirando algunos de nuestros <a class="with-border" href="{{ URL::route('courses') }}">Cursos</a></h2>
			<div class="container">
				<div class="wrapper">
					<div class="course-card">
						<div class="info">
							<div class="logo">
								{{ HTML::image('img/js-logo.svg', 'Logo Curso Javascript') }}
							</div>
							<p class="title">
								<a href="#" class="yellow-link">
									Curso Javascript
								</a>
							</p>
							<p class="description">
								Invierte algo de tiempo en aprender a usar este poderoso lenguaje de programación y construye aplicaciones livianas con interfaces de usuario interactivas.
							</p>
						</div>
						<div class="link-cont">
							<a class="btn btn-sec" href="#">
								Ver Javascript
							</a>
						</div>
					</div>
					<div class="course-card">
						<div class="info">
							<div class="logo">
								{{ HTML::image('img/front-logo.svg', 'Logo Curso Front-End') }}
							</div>
							<p class="title">
								<a href="#" class="green-link">
									Curso Front-End
								</a>
							</p>
							<p class="description">
								Aprende cosas fundamentales de diseño, desarrollo de interfaces, y creación de experiencias de usuario llamativas y eficientes.
							</p>
						</div>
						<div class="link-cont">
							<a class="btn btn-sec" href="#">
								Ver Front-End
							</a>
						</div>
					</div>
					<div class="course-card">
						<div class="info">
							<div class="logo">
								{{ HTML::image('img/responsive-logo.svg', 'Logo Curso Responsive') }}
							</div>
							<p class="title">
								<a href="#" class="blue-link">
									Curso Responsive Design
								</a>
							</p>
							<p class="description">
								Prueba de cerca cómo desarrollar interfaces escalables, que se ajusten a distintas resoluciones y dispositivos para llegar a una mayor audiencia.
							</p>
						</div>
						<div class="link-cont">
							<a class="btn btn-sec" href="#">
								Ver Responsive Design
							</a>
						</div>
					</div>
					<div class="course-card">
						<div class="info">
							<div class="logo">
								{{ HTML::image('img/distributed-logo.svg', 'Logo Curso Sistemas Distribuidos') }}
							</div>
							<p class="title">
								<a href="#" class="orange-link">
									Curso Sistemas Distribuidos
								</a>
							</p>
							<p class="description">
								Aprende a usar herramientas colaborativas que facilitan el trabajo en paralelo, la productividad y permiten el versionamiento de código. 
							</p>
						</div>
						<div class="link-cont">
							<a class="btn btn-sec" href="#">
								Ver Sistemas Distribuidos
							</a>
						</div>
					</div>
					<div class="course-card">
						<div class="info">
							<div class="logo">
								{{ HTML::image('img/experience-logo.svg', 'Logo Curso Accesibilidad') }}
							</div>
							<p class="title">
								<a href="#" class="grey-link">
									Curso Accesibilidad
								</a>
							</p>
							<p class="description">
								Las mejores prácticas en accesibilidad presentadas de una manera fácil de entender. Material de referencia y ejemplos reales que explican cómo aprovechar sus ventajas.
							</p>
						</div>
						<div class="link-cont">
							<a class="btn btn-sec" href="#">
								Ver Accesibilidad
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop

@section('footer')
  @include('includes/footer')
@stop
