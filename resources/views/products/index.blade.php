@extends('layout')

@section('content')

    <div class="row">
        
        <div class="col-sm-8">
            <h2>
                Listado De Usuarios
                <form action="{{ route('search') }}" method="post">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                    <input type="text" placeholder="Buscar.." name="query">
                </form>
                <a href="{{ route('products.create') }}" class="btn arturo btn-primary  pull-right">Nuevo Usuario</a>
            </h2>
            @include('products.fragment.info')
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th style="id">ID</th>
                        <th>Nombre del Usuario</th>
                        <th colspan="3">&nbsp;</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>
                            <strong>{{ $product->name }}</strong>
                        </td>
                        <td>
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-link" >Ver</a>
                        </td>
                        <td>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-link">Editar</a>
                        </td>
                        <td>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-link">Borrar</button>

                            
                            
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $products->render() !!}

        </div>
            
        <div class="col-sm-4">
            @include('products.fragment.aside')
        </div>

    </div>
    

    <style>
    .id{
        width:20px;
    }
    .arturo{
        transform: translate(10px)
    }

    
    </style>
@endsection