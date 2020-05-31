<!-- Proposition Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('proposition', 'Proposition:') !!}
    {!! Form::textarea('proposition', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Post Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_post', 'Id Post:') !!}
    {!! Form::number('id_post', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Jobeur Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_jobeur', 'Id Jobeur:') !!}
    {!! Form::number('id_jobeur', null, ['class' => 'form-control']) !!}
</div>

<!-- Etat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('etat', 'Etat:') !!}
    {!! Form::text('etat', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.demendes.index') }}" class="btn btn-secondary">Cancel</a>
</div>
