<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $post->id }}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $post->title }}</p>
</div>

<!-- Categorie Field -->
<div class="form-group">
    {!! Form::label('categorie', 'Categorie:') !!}
    <p>{{ $post->catgeory->nom }}</p>
</div>

<!-- Service Field -->
<div class="form-group">
    {!! Form::label('service', 'Service:') !!}
    <p>{{ $post->service_relation->nom }}</p>
</div>

