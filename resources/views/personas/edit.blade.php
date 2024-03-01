<div class="col-md-12 mb-3">
    <form method="POST" action="{{ route('admin.persona.edit', $persona) }}">
        @csrf @method('PUT')
        <div class="row">
            <div class="col-md-6 mb-3">
                <input type="text" placeholder="Nombre" name="name" class="form-control"
                    value="{{ old('name', $persona->name) }}">
                @error('name')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <input type="text" placeholder="Apellido" name="last_name" class="form-control"
                    value="{{ old('last_name', $persona->last_name) }}">
                @error('last_name')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                @enderror
            </div>
            <div class="col-md-12 mb-3">
                <button class="btn btn-success" type="submit">Agregar</button>
            </div>
        </div>
    </form>
</div>
