<div class="col-md-12 mb-3">
    <form method="POST" action="{{route('admin.redes.store')}}">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <input type="text" placeholder="Nombre de la red" name="name" class="form-control"
                    value="{{ old('name') }}">
                @error('name')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <input type="text" placeholder="Lider de la Red" name="lider" class="form-control"
                    value="{{ old('last_name') }}">
                @error('last_name')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <input type="text" placeholder="Color que la Identifica" name="color" class="form-control"
                    value="{{ old('color') }}">
                @error('color')
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
