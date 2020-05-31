<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $demende->id }}</p>
</div>

<!-- Proposition Field -->
<div class="form-group">
    {!! Form::label('proposition', 'Proposition:') !!}
    <p>{{ $demende->proposition }}</p>
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', 'Price:') !!}
    <p>{{ $demende->price }}</p>
</div>

<!-- Id Post Field -->
<div class="form-group">
    {!! Form::label('id_post', 'Id Post:') !!}
    <p>{{ $demende->id_post }}</p>
</div>

<!-- Id Jobeur Field -->
<div class="form-group">
    {!! Form::label('id_jobeur', 'Id Jobeur:') !!}
    <p>{{ $demende->id_jobeur }}</p>
</div>

<!-- Etat Field -->
<div class="form-group">
    {!! Form::label('etat', 'Etat:') !!}
    <p>{{ $demende->etat }}</p>
</div>

