@extends('layout')

@section('content')

    <div class="row">
        
        <div class="col-sm-8">
            <br>
            <br>
            <h2>
                Resultados de busqueda
            </h2>
            <br>

            <br>
            <div>
                    @if (count($ususarios) === 0)
                        nada se encontro
                    @elseif (count($ususarios) >= 1)
                    
                        @foreach($ususarios as $usuario)
                            {{ $usuario->name }}
                        @endforeach
                    @endif
            </div>
        </div>
            
        <div class="col-sm-4">
            
        </div>

    </div>
    

@endsection