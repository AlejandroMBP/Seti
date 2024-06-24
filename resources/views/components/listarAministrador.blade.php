@extends('layouts.app')
@section('title', 'titulados')
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
            <div class="flex-wrap page-header">
              <h3 class="mb-0"> Administradores <span class="pl-0 h6 pl-sm-2 text-muted d-inline-block"></span>
              </h3>
              <div class="d-flex">
                <button type="button" class="btn btn-primary btn-rounded btn-fw open-modal" data-action="create">Nuevo Usuario</button>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Usuario</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Estado</th>
                    <th>Editar</th>
                  </tr>
                </thead>
                <tbody>                
                  @foreach($usuarios as $usuario)
                      <tr>
                          <td class="py-1">
                            <img src="../../assetsDash/images/faces-clipart/pic-1.png" alt="image" />
                          </td>
                          <td>{{ $usuario->name }}</td>
                          <td>{{ $usuario->email }}</td>
                          @if ($usuario->estado == 1)
                            <td>
                              
                              <form method="POST" action="{{route('profile.disable', $usuario->id)}}" >
                                {{-- @dump(Auth::user()->id) --}}
                                
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-inverse-success btn-fw"> Activo </button>
                              </form>
                            </td>
                          @else
                             <td>
                              <form method="POST" action="{{route('profile.disable', $usuario->id)}}" >
                                {{-- @dump(Auth::user()->id) --}}
                                
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-inverse-danger btn-fw"> Inactivo </button>
                            </form>
                            </td>
                          @endif
                          {{-- <td>{{ $usuarios->estado }}</td> --}}
                          <td>
                            <button type="button" class="btn btn-dark btn-icon-text open-modal" data-id="{{ $usuario->id }}" data-action="edit" data-name="{{ $usuario->name }}" data-email="{{ $usuario->email }}">
                              <i class="mdi mdi-file-check btn-icon-append"></i> Editar
                            </button>
                          </td>
                      </tr>
                      @endforeach
                </tbody>
              </table>
            </div>
            <div class="pagination-container">
              <ul class="pagination">
                  {{-- Botón "Previous" --}}
                  <li class="page-item {{ $usuarios->onFirstPage() ? 'disabled' : '' }}">
                      <a class="page-link" href="{{ $usuarios->previousPageUrl() }}" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                          <span class="sr-only">Atras</span>
                      </a>
                  </li>
                  
                  {{-- Páginas enumeradas --}}
                  @for ($i = 1; $i <= $usuarios->lastPage(); $i++)
                      <li class="page-item {{ $usuarios->currentPage() == $i ? 'active' : '' }}">
                          <a class="page-link" href="{{ $usuarios->url($i) }}">{{ $i }}</a>
                      </li>
                  @endfor
                  
                  {{-- Botón "Next" --}}
                  <li class="page-item {{ !$usuarios->hasMorePages() ? 'disabled' : '' }}">
                      <a class="page-link" href="{{ $usuarios->nextPageUrl() }}" aria-label="Next">
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
      <h4 id="modal-title" class="card-title">Ventana Modal</h4>
      <div id="modal-content">
        <!-- Modal content will be injected here -->
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

      if (action === 'create') {
        modalTitle.innerText = 'Nuevo Usuario';
        modalContent.innerHTML = `
          <form id="create-form" class="forms-sample" method="POST" action="{{ route('admin.users.storeFromAdmin') }}">
            @csrf
            <div class="form-group row">
              <label for="name" class="col-sm-3 col-form-label">Nombre</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="name" id="name" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-sm-3 col-form-label">Correo</label>
              <div class="col-sm-9">
                <input type="email" class="form-control" name="email" id="email" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="password" class="col-sm-3 col-form-label">Contraseña</label>
              <div class="col-sm-9">
                <input type="password" class="form-control" name="password" id="password" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="password_confirmation" class="col-sm-3 col-form-label">Confirmar Contraseña</label>
              <div class="col-sm-9">
                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required>
              </div>
            </div>
            <button type="submit" class="mr-2 btn-fw-modal btn-primary">Crear Usuario</button>
          </form>
        `;
      } else if (action === 'edit') {
        const name = button.getAttribute('data-name');
        const email = button.getAttribute('data-email');
        modalTitle.innerText = 'Editar Usuario';
        modalContent.innerHTML = `
          <form id="edit-form" class="forms-sample" method="POST" action="{{ route('profile.updateFromModal') }}">
            @csrf
            @method('PATCH')
            <input type="hidden" name="id" value="${id}">
            <div class="form-group row">
              <label for="name" class="col-sm-3 col-form-label">Nombre</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="name" id="name" value="${name}" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-sm-3 col-form-label">Correo</label>
              <div class="col-sm-9">
                <input type="email" class="form-control" name="email" id="email" value="${email}" required>
              </div>
            </div>
            <button type="submit" class="mr-2 btn-fw-modal btn-primary">Guardar Cambios</button>
          </form>
        `;
      }

      modalContainer.classList.add('show');
    });
  });

  document.getElementById('close').addEventListener('click', () => {
    document.getElementById('modal2_container').classList.remove('show');
  });

  // Close alert
  document.querySelectorAll('.alert .close').forEach(button => {
      button.addEventListener('click', () => {
        button.parentElement.style.display = 'none';
      });
    });
</script>
</div>
@endsection



