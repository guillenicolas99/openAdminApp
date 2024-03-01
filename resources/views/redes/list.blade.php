<div class="w-100">
    <div class="col-md-12 mb-3">
        <a class="btn btn-primary" href="{{route('admin.redes.create')}}">
            <i class="icon-plus"></i>
            Agregar Red
        </a>
    </div>

    <div class="col-md-12 mb-3">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <caption>List of users</caption>
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Líder de Red</th>
                        <th scope="col">Color</th>
                        <th scope="col">Creado</th>
                        <th scope="col">Editado</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($redes as $red)
                        <tr>
                            <td>{{ $red->name }}</td>
                            <td>{{ $red->lider }}</td>
                            <td>{{ $red->color }}</td>
                            <td>{{ $red->created_at->format('j M Y, g:i a') }}</td>
                            <td>{{ $red->updated_at->format('j M Y, g:i a') }}</td>
                            <td>
                                <a href="{{route('admin.redes.edit', $red)}}" class="btn btn-warning">
                                    <i class="icon-edit"></i>
                                </a>
                                <a href="{{route('admin.redes.delete', $red)}}" class="btn btn-danger">
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
