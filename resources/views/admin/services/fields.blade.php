<!-- Nom Field -->
<div class="form-group col-sm-6 col-md-6">
    {!! Form::label('nom', 'Nom:') !!}
    {!! Form::text('nom', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6 col-md-6">
    <label>Categorie:</label>

    <select class="form-control" name="categorie_id">
        @foreach($categories as $categorie)

            @if( old('categorie_id') == $categorie->id )

                <option value="{{ $categorie->id }}" selected> {{ $categorie->nom }}</option>
            @elseif( $service->categorie_id == $categorie->id)

                <option value="{{ $categorie->id }}" selected> {{ $categorie->nom }}</option>
            @else

                <option value="{{ $categorie->id }}"> {{ $categorie->nom }}</option>
            @endif
        @endforeach
    </select>
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">Cancel</a>
</div>
