@extends('templates.base')

@section('content')
	<div id="content" class="home" role="main">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="page-header text-center">
						<h1>Aprende Haciendo</h1>
						<p>Sin pasos previos. Sin problemas. Sólo aprende.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					{{ HTML::image('img/home-image.jpg', 'Be Accessible presentation image', ['class' => 'img-thumbnail']) }}
				</div>
				<div class="col-md-6">
					<div class="presentation-info-cont">
						<div class="panel-body">
							<p class="lead">
						 		 Aprende sobre distintos temas en la comodidad de tu navegador con lecciones en video, pruebas prácticas y screencasts.
							</p>
							<div class="courses-link text-left">
								<a class="btn btn-dark" href="{{ URL::route('courses') }}">Nuestros cursos</a>
							</div>
							<div class="links">
								APRENDE: <span class="label label-warning">Angular.js</span> <span class="label label-success">SASS</span> <span class="label label-danger">Rails</span> <span class="label label-warning">JQuery</span> <span class="label label-primary">Objective-C</span>
							</div>
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
