@extends('templates.base')

@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="page-header">
    <h1>Aprende Haciendo <small>Sin pasos previos. Sin problemas. Sólo aprende.</small></h1>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    {{ HTML::image('img/home-image.jpg', '', ['class' => 'img-thumbnail']) }}
  </div>

  <div class="col-md-6">
    <div class="panel panel-default">
      <div class="panel-body">
        <p class="lead">
          Aprende tecnologías web en la comodidad de tu navegador con lecciones en video, pruebas de código y screencasts.
        </p>
        <p class="lead text-center">
          <button type="button" class="btn btn-primary btn-lg">Nuestros cursos</button> <a href="#">O, mira cómo empezar.</a>
        </p>
        <p>
          Aprende: <span class="label label-warning">Angular.js</span> <span class="label label-success">SASS</span> <span class="label label-danger">Rails</span> <span class="label label-warning">JQuery</span> <span class="label label-primary">Objective-C</span>
        </p>
      </div>
    </div>
  </div>

</div>
@stop
