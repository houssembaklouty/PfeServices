<div class="table-responsive-sm">
    <table class="table table-striped" id="demendes-table">
        <thead>
            <tr>
                <th>Proposition</th>
        <th>Price</th>
        <th>Post</th>
        <th>Jobeur</th>
        <th>Etat</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($demendes as $demende)
            <tr>
                <td>{{ $demende->proposition }}</td>
            <td>{{ $demende->price }}</td>
            <td>{{ $demende->id_post }}</td>
            <td>{{ $demende->id_jobeur }}</td>
            <td>{{ $demende->etat }}</td>
                <td>
                    {!! Form::open(['route' => ['admin.demendes.destroy', $demende->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.demendes.show', [$demende->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('admin.demendes.edit', [$demende->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
