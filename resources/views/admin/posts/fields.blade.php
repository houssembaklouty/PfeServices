<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Categorie Field -->
<div class="form-group col-sm-6">
    {!! Form::label('categorie', 'Categorie:') !!}
    {!! Form::number('categorie', null, ['class' => 'form-control']) !!}
</div>

<!-- Service Field -->
<div class="form-group col-sm-6">
    {!! Form::label('service', 'Service:') !!}
    {!! Form::number('service', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Cancel</a>
</div>
