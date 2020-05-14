<div class="table-responsive-sm">
    <table class="table table-striped" id="categories-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Nom</th>
        <th>Description</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($categories as $categorie)
            <tr>
                <td>{{ $categorie->id }}</td>
            <td>{{ $categorie->nom }}</td>
            <td>{{ $categorie->description }}</td>
                <td>
                    {!! Form::open(['route' => ['admin.categories.destroy', $categorie->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.categories.show', [$categorie->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('admin.categories.edit', [$categorie->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
