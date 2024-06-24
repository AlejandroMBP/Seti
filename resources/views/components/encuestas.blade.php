@extends('layouts.app')
@section('title', 'Encuestas')
@section('content')

    <div class="main-panel">
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
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-7">
                                <h5>Listado de encuestas</h5>
                            </div>
                            <div class="col-sm-5 text-md-right">
                                <a href="{{ route('encuesta.create') }}" class="mb-3 btn btn-icon-text mb-sm-0 btn-inverse-primary font-weight-normal">
                                    <i class="mdi mdi-chart-areaspline btn-icon-prepend"></i> Agregar nueva encuesta
                                </a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Titulo</th>
                                        <th>Descripción</th>
                                        <th>Fecha Inicio</th>
                                        <th>Fecha Final</th>
                                        <th>Estado</th>
                                        <th>Editar</th>
                                        <th>Preguntas</th>
                                        <th>Habilitar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($encuestas as $encuesta)
                                    <tr>
                                        <td>{{ $encuesta->titulo }}</td>
                                        <td>{{ $encuesta->descripcion }}</td>
                                        <td>{{ $encuesta->fecha_inicio }}</td>
                                        <td>{{ $encuesta->fecha_fin }}</td>
                                        <td>
                                            @if ($encuesta->estado)
                                            <div class="badge badge-inverse-success">En curso</div>
                                            @else
                                            <div class="badge badge-inverse-danger">Finalizado</div>
                                            @endif
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary open-modal" data-id="{{ $encuesta->id }}" data-action="edit" data-titulo="{{ $encuesta->titulo }}" data-descripcion="{{ $encuesta->descripcion }}" data-fecha-inicio="{{ $encuesta->fecha_inicio }}" data-fecha-fin="{{ $encuesta->fecha_fin }}">
                                                <i class="mdi mdi-lead-pencil btn-icon-append"></i> Editar
                                            </button>
                                        </td>
                                        <td>
                                            <a href="{{ route('encuesta.addQuestions', $encuesta->id) }}" class="btn btn-primary" title="Adicionar preguntas">
                                                <i class="mdi mdi-plus-box"></i> Agregar
                                            </a>
                                        </td>
                                        <td>
                                            <form method="POST" action="{{ route('encuesta.disable', $encuesta->id) }}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-warning"><i class="mdi mdi-eye"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="pagination-container">
                            <ul class="pagination">
                                {{-- Botón "Previous" --}}
                                <li title="atras" class="page-item {{ $encuestas->onFirstPage() ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $encuestas->previousPageUrl() }}" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Atras</span>
                                    </a>
                                </li>

                                {{-- Páginas enumeradas --}}
                                @for ($i = 1; $i <= $encuestas->lastPage(); $i++)
                                    <li title="pagina {{$i}}" class="page-item {{ $encuestas->currentPage() == $i ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $encuestas->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor
                                
                                {{-- Botón "Next" --}}
                                <li title="siguiente" class="page-item {{ !$encuestas->hasMorePages() ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $encuestas->nextPageUrl() }}" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Siguiente</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>


<!-- Modal -->
<div id="modal2_container" class="modal2-container">
    <div class="modal2 card">
        <div class="card-body">
            <h4 id="modal-title" class="card-title">Editar Encuesta</h4>
            <div id="modal-content">
                <!-- Contenido del formulario se inyectará aquí -->
            </div>
            <button id="close" class="btn btn-light btn-fw-modal">Cerrar</button>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('.open-modal').forEach(button => {
        button.addEventListener('click', () => {
            const id = button.getAttribute('data-id');
            const action = button.getAttribute('data-action');
            const modalContainer = document.getElementById('modal2_container');
            const modalTitle = document.getElementById('modal-title');
            const modalContent = document.getElementById('modal-content');

            if (action === 'edit') {
                const titulo = button.getAttribute('data-titulo');
                const descripcion = button.getAttribute('data-descripcion');
                const fechaInicio = button.getAttribute('data-fecha-inicio');
                const fechaFin = button.getAttribute('data-fecha-fin');
                modalTitle.innerText = 'Editar Encuesta';
                modalContent.innerHTML = `
                    <form id="edit-form" class="forms-sample" method="POST" action="{{ route('encuesta.update', ['id' => ':id']) }}">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="${id}">
                        <div class="form-group row">
                            <label for="titulo" class="col-sm-3 col-form-label">Título</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="titulo" id="titulo" value="${titulo}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="descripcion" class="col-sm-3 col-form-label">Descripción</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="descripcion" id="descripcion" value="${descripcion}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fecha_inicio" class="col-sm-3 col-form-label">Fecha Inicio</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio" value="${fechaInicio}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fecha_fin" class="col-sm-3 col-form-label">Fecha Fin</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="fecha_fin" id="fecha_fin" value="${fechaFin}" required>
                            </div>
                        </div>
                        <button type="submit" class="mr-2 btn-fw-modal btn btn-primary">Guardar Cambios</button>
                    </form>
                `;
                modalContent.innerHTML = modalContent.innerHTML.replace(':id', id); // Reemplazar ':id' con el valor real
            }

            modalContainer.classList.add('show'); // Mostrar el modal
        });
    });

    document.getElementById('close').addEventListener('click', () => {
        document.getElementById('modal2_container').classList.remove('show'); // Cerrar el modal
    });
</script>

   @endsection