<div class="w-100">
    <div class="col-md-12 mb-3">
        <a class="btn btn-primary" href="{{route('admin.persona.create')}}">
            <i class="icon-plus"></i>
            Agregar Persona
        </a>
    </div>

    <div class="col-md-12 mb-3">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <caption>List of users</caption>
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Red</th>
                        <th scope="col">Creado</th>
                        <th scope="col">Editado</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($personas as $persona)
                        <tr>
                            <td>{{ $persona->name }}</td>
                            <td>{{ $persona->last_name }}</td>
                            <td>{{ $persona->red_id }}</td>
                            <td>{{ $persona->created_at->format('j M Y, g:i a') }}</td>
                            <td>{{ $persona->updated_at->format('j M Y, g:i a') }}</td>
                            <td>
                                <a href="{{route('admin.persona.edit', $persona)}}" class="btn btn-warning">
                                    <i class="icon-edit"></i>
                                </a>
                                <a href="{{route('admin.persona.delete', $persona)}}" class="btn btn-danger">
                                    <i class="icon-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
