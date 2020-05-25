<div class="table-responsive-sm">
    <table class="table table-striped" id="services-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Categorie</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($services as $service)
            <tr>
            <td>{{ $service->id }}</td>
            <td>{{ $service->nom }}</td>
            <td>{{ $service->description }}</td>
            <td>{{ $service->category->nom ?? '' }}</td>
                <td>
                    {!! Form::open(['route' => ['admin.services.destroy', $service->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.services.show', [$service->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('admin.services.edit', [$service->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
