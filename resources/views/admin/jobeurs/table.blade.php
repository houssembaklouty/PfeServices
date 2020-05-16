<div class="table-responsive-sm">
    <table class="table table-striped" id="jobeurs-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Tel</th>
                <th>Profil_img</th>
                <th>Cin_img</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($jobeurs as $jobeur)
            <tr>
                <td>{{ $jobeur->id }}</td>
                <td>{{ $jobeur->name }}</td>
                <td>{{ $jobeur->email }}</td>
                <td>{{ $jobeur->tel }}</td>
                <td>
                    <img src="{{ url('images/profil/', $jobeur->profil_img) }}" width="80">
                </td>
                <td>
                    <img src="{{ url('images/cin/', $jobeur->cin_img) }}" width="80">
                </td>
                <td>
                    {!! Form::open(['route' => ['admin.jobeurs.destroy', $jobeur->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.jobeurs.show', [$jobeur->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        {{-- <a href="{{ route('admin.jobeurs.edit', [$jobeur->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a> --}}
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
