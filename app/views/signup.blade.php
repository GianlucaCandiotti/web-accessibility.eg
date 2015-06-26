@extends('templates.base')

@section('content')
	<div id="content" class="signup" role="main">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-4 col-md-4 text-center">

					<h1>Regístrate</h1>

					<form class="text-left" role="form">
						<div class="form-group">
							<label for="exampleInputEmail1">Email</label>
							<input type="email" class="form-control" id="exampleInputEmail1">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Contraseña</label>
							<input type="password" class="form-control" id="exampleInputPassword1">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword2">Confirma tu contraseña</label>
							<input type="password" class="form-control" id="exampleInputPassword2">
						</div>
						<div class="submit-container">
							<button class="submit btn" type="submit">Crea un Cuenta Gratuita</button>
						</div>
					</form>

					<div class="other-form-link">
						<p>¿Ya tienes una cuenta? <a class="link" href="{{ URL::route('signin') }}">Inicia Sesión</a></p>
					</div>
					<hr>
					<div class="other-signup-methods">
						<p>
							Regístrate con:
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
