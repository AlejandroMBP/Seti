@extends('layouts.app')
@section('title', 'titulados')
@section('content')
<style>
  .modal2-container {
    display: flex;
    background-color: rgba(0, 0, 0, 0.3);
    align-items: center;
    justify-content: center;
    position: fixed;
    pointer-events: none;
    opacity: 0;  
    top: 0;
    left: 0;
    height: 100vh;
    width: 100vw;
    transition: opacity 0.3s ease;
  }
  
  .show {
    pointer-events: auto;
    opacity: 1;
  }
  
  .modal2 {
    background-color: #fff;
    width: 600px;
    max-width: 100%;
    padding: 30px 50px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    text-align: center;
  }
  
  .modal2 h1 {
    margin: 0;
  }
  
  .modal2 p {
    opacity: 0.7;
    font-size: 14px;
  }
  </style>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"></h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#"></a></li>
          <li class="breadcrumb-item active" aria-current="page">  </li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="page-header flex-wrap">
              <h3 class="mb-0"> Administradores <span class="pl-0 h6 pl-sm-2 text-muted d-inline-block"></span>
              </h3>
              <div class="d-flex">
                <button type="button" class="btn btn-primary btn-rounded btn-fw"> Nuevo Usuario </button>
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
                    <th>Eliminar</th>
                  </tr>
                </thead>
                <tbody>                
                  @foreach($usuarios as $usuarios)
                      <tr>
                          <td class="py-1">
                            <img src="../../assetsDash/images/faces-clipart/pic-1.png" alt="image" />
                          </td>
                          <td>{{ $usuarios->name }}</td>
                          <td>{{ $usuarios->email }}</td>
                          @if ($usuarios->estado == 1)
                            <td>
                              
                              <form method="POST" action="{{route('profile.disable', $usuarios->id)}}" >
                                {{-- @dump(Auth::user()->id) --}}
                                
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-inverse-success btn-fw"> Activo </button>
                              </form>
                            </td>
                          @else
                             <td>
                              <form method="POST" action="{{route('profile.disable', $usuarios->id)}}" >
                                {{-- @dump(Auth::user()->id) --}}
                                
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-inverse-danger btn-fw"> Inactivo </button>
                            </form>
                            </td>
                          @endif
                          {{-- <td>{{ $usuarios->estado }}</td> --}}
                          <td>
                            <button type="button" class="btn btn-dark btn-icon-text open-modal" data-id="{{ $usuarios->id }}" data-action="edit" data-name="{{ $usuarios->name }}" data-email="{{ $usuarios->email }}">
                              <i class="mdi mdi-file-check btn-icon-append"></i> Editar
                            </button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-warning btn-icon-text open-modal" data-id="{{ $usuarios->id }}" data-action="delete">
                              <i class="mdi mdi-alert btn-icon-prepend"></i> Eliminar
                            </button>
                          </td>
                      </tr>
                      @endforeach
                </tbody>
              </table>
              <!-- Modal container outside the loop to reuse it -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 <!-- Modal container outside the loop to reuse it -->
<div id="modal2_container" class="modal2-container">
  <div class="modal2">
    <h1 id="modal-title">Ventana Modal</h1>
    <div id="modal-content">
      <!-- Modal content will be injected here -->
    </div>
    <button id="close">Cerrar</button>
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
      const name = button.getAttribute('data-name');
      const email = button.getAttribute('data-email');
      modalTitle.innerText = 'Editar Usuario';
      modalContent.innerHTML = `
        <form id="edit-form" method="POST" action="{{ route('profile.update') }}">
          @csrf
          @method('PATCH')
          <input type="hidden" name="id" value="${id}">
          <input type="hidden" name="source" value="table">
          <div>
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" value="${name}" required>
          </div>
          <div>
            <label for="email">Correo</label>
            <input type="email" name="email" id="email" value="${email}" required>
          </div>
          <button type="submit">Guardar Cambios</button>
        </form>
      `;
    } else if (action === 'delete') {
      modalTitle.innerText = 'Eliminar Usuario';
      modalContent.innerHTML = `
        <p>¿Estás seguro de que quieres eliminar este usuario?</p>
        <form id="delete-form" method="POST" action="/profile/${id}">
          @csrf
          @method('DELETE')
          <button type="submit">Eliminar</button>
        </form>
      `;
    }

    modalContainer.classList.add('show');
  });
});

document.getElementById('close').addEventListener('click', () => {
  document.getElementById('modal2_container').classList.remove('show');
});

</script>
@endsection



