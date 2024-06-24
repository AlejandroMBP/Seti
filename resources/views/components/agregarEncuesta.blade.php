@extends('layouts.app')
@section('title', 'CrearEncuestas')
@section('content')
<div class="col-12 grid-margin">
    @if (session()->has('status') || session()->has('success') || session()->has('error') || $errors->any())
              @php
                $alerts = [
                  'status' => 'alert-success',
                  'success' => 'alert-success',
                  'error' => 'alert-danger',
                ];
              @endphp

              @foreach ($alerts as $key => $class)
                @if (session()->has($key))
                  <div class="alert {{ $class }} alert-dismissible fade show" role="alert">
                    {{ session($key) }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif
              @endforeach

              @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              @endif
            @endif
    <div class="card">
        <div class="card-body">
            <h2 class="text-muted">Nueva encuesta</h2>
            <form method="POST" action="{{ route('encuesta.store') }}">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Titulo</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="titulo" required />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Fecha Inicio</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="fecha_inicio" required />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Fecha Fin</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="fecha_fin" required />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleTextarea1">Descripcion</label>
                    <textarea class="form-control" id="exampleTextarea1" rows="9" name="descripcion"></textarea>
                </div>
                <button type="submit" class="mr-2 btn btn-primary"> Guardar </button>
                <button type="button" class="btn btn-light" onclick="window.history.back();">Cancelar</button>
            </form>
        </div>
    </div>
</div>
@endsection