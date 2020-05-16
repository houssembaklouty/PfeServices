<!-- Client Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('client_id', 'Client:') !!}
    {{-- {!! Form::number('client_id', null, ['class' => 'form-control']) !!} --}}
    <select class="form-control" name="client_id">
        @foreach($clients as $client)

            @if( old('client_id') == $client->id )

                <option value="{{ $client->id }}" selected> {{ $client->name }}</option>
            @elseif( $client->client_id == $client->id)

                <option value="{{ $client->id }}" selected> {{ $client->name }}</option>
            @else

                <option value="{{ $client->id }}"> {{ $client->name }}</option>
            @endif
        @endforeach
    </select>
</div>

<!-- Commentaire Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('commentaire', 'Commentaire:') !!}
    {!! Form::textarea('commentaire', null, ['class' => 'form-control']) !!}
</div>

<!-- Statut Field -->
<div class="form-group col-sm-6">
    {!! Form::label('statut', 'Statut:') !!}
    {!! Form::text('statut', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::text('type', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Cancel</a>
</div>
