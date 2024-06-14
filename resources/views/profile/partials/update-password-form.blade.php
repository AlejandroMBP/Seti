
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Actualiza contraseña</h4>
            <p class="card-description">Ingrese sus datos</p>
            <form method="post" action="{{ route('password.update') }}" class="forms-sample">
                @csrf
                @method('put')

                <div class="form-group">
                    <label for="current_password">Contraseña actual</label>
                    <input type="password" class="form-control" id="current_password" name="current_password" placeholder="Contraseña actual">
                </div>

                <div class="form-group">
                    <label for="new_password">Nueva Contraseña</label>
                    <input type="password" class="form-control" id="new_password" name="password" placeholder="Nueva Contraseña">
                </div>

                <div class="form-group">
                    <label for="confirm_password">Confirmar Contraseña</label>
                    <input type="password" class="form-control" id="confirm_password" name="password_confirmation" placeholder="Confirmar Contraseña">
                </div>

                <button type="submit" class="mr-2 btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
