@extends('layout')

@section('content')

    <div class="row">
        
        <div class="col-sm-8">
            <h2>
                Resultados de busqueda
            </h2>
        </div>
            
        <div class="col-sm-4">
            @if (count($articles) === 0)
            ... html showing no articles found
            @elseif (count($articles) >= 1)
            ... print out results
                @foreach($articles as $article)
                print article
                @endforeach
            @endif
        </div>

    </div>
    

@endsection