<div class="table-responsive-sm">
    <table class="table table-striped" id="posts-table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Categorie</th>
                <th>Service</th>
                <th>Skills</th>
                <th>Price</th>
                <th>Description</th>
                <th>Date</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->catgeory->nom }}</td>
                <td>{{ $post->service_relation->nom }}</td>
                <td>{{ $post->skills }}</td>
                <td>{{ $post->price }}</td>
                <td style="max-width:100px;">{{ $post->description }}</td>
                <td>{{ $post->date }}</td>
                <td>
                    {!! Form::open(['route' => ['admin.posts.destroy', $post->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.posts.show', [$post->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        {{-- <a href="{{ route('admin.posts.edit', [$post->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a> --}}
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
