<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryController extends Controller
{
    public function search(Request $request)
    {
        //return $request->all();
        ///en esta variable colocas lo q tenia el input o caja de busqueda
        $query = $request->search;
        
        // aqui pones en la variable el resultado de bucar 
        //en la tabla en un campo especifico, comparandolo con la caja de busqueda
        $ususarios = DB::table('products')
            ->where('id_number', 'LIKE', '%' . $query . '%')
            ->paginate(10);
            
        // retornas la vista con un array vacio o lleno si obtienes resuktados
        return view('query.search', compact('ususarios', 'query'));
    }

}
