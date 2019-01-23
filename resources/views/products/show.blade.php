@extends('layout')

@section('content')

    <div class="row">
        
        <div class="col-sm-8">
            <h2>
                
                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary btn-default pull-right">Editar</a>
            </h2>
            <p>
                Nombres : <strong>"{{ $product->name }}"</strong>
            </p>
            <p>
                Apellidos : <strong>"{{ $product->last_name }}"</strong>
            </p>
            <p>
                Nacionalidad : <strong>"{{ $product->nationality }}"</strong>
            </p>
            <p>
                Fecha de Nacimiento : <strong>"{{ $product->birthdate }}"</strong>
            </p>
            <p>
                Sexo : <strong>"{{ $product->sex }}"</strong> 
            </p>
            <p>
                Correo Electronico : <strong>"{{ $product->email }}"</strong>
            </p>
            <p>
                Estado Civil : <Strong>"{{ $product->civil_status }}"</Strong>
            </p>
            <p>
                Numero De Cedula : <strong>"{{ $product->id_number }}"</strong>
            </p>
            <p>
                Tipo del Titulo : <strong>"{{ $product->type_of_title }}"</strong>
            </p>
            <p>
                Nombre del Titulo : " <strong>{{ $product->title_name }}</strong>"
            </p>
            <p>
                Nivel del titulo: "<strong>{{ $product->level_of_title }}</strong>"
            </p>
            <p>Status del titulo: "<strong>{{ $product->status_of_title }}</strong>"</p>
        </div>
            
        <div class="col-sm-4">
            @include('products.fragment.aside')
        </div>

    </div>
    

    <style>
    .id{
        width:20px;
    }
    </style>
@endsection