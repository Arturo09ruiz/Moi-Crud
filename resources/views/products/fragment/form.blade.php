<div class="form-group">
    {!! Form::label('name', 'Nombre del Producto') !!}
    {!! Form::text('name', null, ['class'=> 'form-control' ] )!!}
</div>
<div class="form-group">
    {!! Form::label('last_name', 'Apellido') !!}
    {!! Form::text('last_name', null, ['class'=> 'form-control' ] )!!}
</div>
<div class="form-group">
    {!! Form::label('nationality', 'Nacionalidad') !!}
    {!! Form::text('nationality', null, ['class'=> 'form-control' ] )!!}
</div>
<div class="form-group">
    {!! Form::label('birthdate', 'Fecha de nacimiento') !!}
    {!! Form::text('birthdate', null, ['class'=> 'form-control' ] )!!}
</div>
<div class="form-group">
    {!! Form::label('sex', 'Sexo') !!}
    {!! Form::text('sex', null, ['class'=> 'form-control' ] )!!}
</div>
<div class="form-group">
    {!! Form::label('email', 'Email') !!}
    {!! Form::text('email', null, ['class'=> 'form-control' ] )!!}
</div>
<div class="form-group">
    {!! Form::label('civil_status', 'Estado Civil') !!}
    {!! Form::text('civil_status', null, ['class'=> 'form-control' ] )!!}
</div>
<div class="form-group">
    {!! Form::label('id_number', 'Numero de Cedula') !!}
    {!! Form::text('id_number', null, ['class'=> 'form-control' ] )!!}
</div>
<div class="form-group">
    {!! Form::label('type_of_title', 'Tipo de Certificado') !!}
    {!! Form::text('type_of_title', null, ['class'=> 'form-control' ] )!!}
</div>
<div class="form-group">
    {!! Form::label('title_name', 'Nombre del Certificado') !!}
    {!! Form::text('title_name', null, ['class'=> 'form-control' ] )!!}
</div>
<div class="form-group">
    {!! Form::label('level_of_title', 'Nivel del Certificado') !!}
    {!! Form::text('level_of_title', null, ['class'=> 'form-control' ] )!!}
</div>
<div class="form-group">
    {!! Form::label('status_of_title', 'Status Del Certificado') !!}
    {!! Form::text('status_of_title', null, ['class'=> 'form-control' ] )!!}
</div>



<div class="form-group">
    {!! Form::submit('ENVIAR', ['class'=> 'btn btn-primary' ] )!!}
</div>