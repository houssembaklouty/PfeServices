<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $jobeur->id }}</p>
</div>

<!-- Nom Field -->
<div class="form-group">
    {!! Form::label('nom', 'Nom:') !!}
    <p>{{ $jobeur->name }}</p>
</div>

<!-- email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $jobeur->email }}</p>
</div>

<!-- tel Field -->
<div class="form-group">
    {!! Form::label('tel', 'tel:') !!}
    <p>{{ $jobeur->tel }}</p>
</div>

<!-- email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $jobeur->email }}</p>
</div>

<div class="row">
    <div class="col-md-6">
        <!-- profil_img Field -->
        <div class="form-group">
            {!! Form::label('profil_img', 'Profil_img:') !!} <br>
            <img src="{{ url('images/profil/', $jobeur->profil_img) }}" width="300">
        </div>
    </div>

    <div class="col-md-6">
        <!-- cin_img Field -->
        <div class="form-group">
            {!! Form::label('cin_img', 'Cin_img:') !!} <br>
            <img src="{{ url('images/cin/', $jobeur->cin_img) }}" width="300">
        </div>
    </div>
</div>



<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $jobeur->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $jobeur->updated_at }}</p>
</div>

