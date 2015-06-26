@extends('templates.base')

@section('content')
	<div id="content" class="signup" role="main">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-4 col-md-4 text-center">

					<h1>Inicia sesión</h1>

					<form class="text-left" role="form">
						<div class="form-group">
							<label for="exampleInputEmail1">Email</label>
							<input type="email" class="form-control" id="exampleInputEmail1">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Contraseña</label>
							<input type="password" class="form-control" id="exampleInputPassword1">
						</div>
						<div class="submit-container">
							<button class="submit btn" type="submit">Ingresar</button>
						</div>
					</form>

					<div class="other-form-link">
						<p>¿No tienes una cuenta? <a class="link" href="{{ URL::route('signup') }}">Regístrate</a></p>
					</div>
					<hr>
					<div class="other-signup-methods">
						<p>
							Inicia Sesión con:
							<a class="image-link" href="#">
								<span class="fa-stack fa-lg">
									<i class="fa fa-square-o fa-stack-2x"></i>
									<i class="fa fa-twitter fa-stack-1x"></i>
								</span>
							</a>
							<a class="image-link" href="#">
								<span class="fa-stack fa-lg">
									<i class="fa fa-square-o fa-stack-2x"></i>
									<i class="fa fa-facebook fa-stack-1x"></i>
								</span>
							</a>
							<a class="image-link" href="#">
								<span class="fa-stack fa-lg">
									<i class="fa fa-square-o fa-stack-2x"></i>
									<i class="fa fa-google-plus fa-stack-1x"></i>
								</span>
							</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop
