<section class="space-y-6">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Actualice la información del perfil y la dirección de correo electrónico de su cuenta.</h4>
                <p class="card-description">Informacion basica</p>
                <form method="POST" action="{{ route('profile.update') }}" class="forms-sample">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label for="exampleInputName1">Nombre de usuario</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Name" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Correo</label>
                        <input type="email" class="form-control" id="exampleInputEmail3" name="email" placeholder="Email" value="{{ old('email', $user->email) }}" required autocomplete="email">
                    </div>
                    <button type="submit" class="mr-2 btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-light" onclick="window.history.back()">Cancel</button>
                </form>
            </div>
        </div>
    </div>
 </section>