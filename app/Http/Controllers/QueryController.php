<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;

class QueryController extends Controller
{
    public function search(Request $request)
    {
        //return $request->all();
        $query = intval ($request->id_number);
        //$ususarios = Product::where('id_number', 'LIKE', '%'.$query.'%')->get();
        $ususarios = Product::where('id_number', $query)->get();
        //dd($ususarios);
        return view('query.search', compact('ususarios', 'query'));
    }

}
