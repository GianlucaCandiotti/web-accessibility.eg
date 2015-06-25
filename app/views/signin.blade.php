@extends('templates.base')

@section('content')
<div class="row">
	<div class="col-xs-4 col-md-offset-4">

	<h1>Inicia sesión</h1>

		<form>
			<div class="form-group">
				<label for="exampleInputEmail1">Email</label>
				<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Contraseña</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
			</div>
			<button type="submit" class="btn btn-primary">Ingresar</button>
			<button type="submit" class="btn btn-default">Cancelar</button>
		</form>

	</div>
</div>
@stop
