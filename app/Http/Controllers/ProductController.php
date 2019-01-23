<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Product;
use Illuminate\Http\Request;



class ProductController extends Controller
{

    public function index (){
        $products = Product::orderBy('id', 'DESC')->paginate();
        return view('products.index', compact('products'));
    }

    public function create(){
        return view('products.create');
    }

    public function store(ProductRequest $request){

        $product = new Product;
        $product->name  = $request->name;
        $product->last_name  = $request->last_name;
        $product->nationality  = $request->nationality;
        $product->birthdate  = $request->birthdate;
        $product->sex  = $request->sex;
        $product->email  = $request->email;
        $product->civil_status  = $request->civil_status;
        $product->id_number  = $request->id_number;
        $product->type_of_title  = $request->type_of_title;
        $product->title_name  = $request->title_name;
        $product->level_of_title  = $request->level_of_title;
        $product->status_of_title  = $request->status_of_title;


        $product->save();


        return redirect()->route('products.index')->with('info', 'El Usuario Fue Guardado¡');
    }



    public function edit($id){
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    public function update(ProductRequest $request, $id){
        $product = Product::find($id);

        $product->name  = $request->name;
        $product->last_name  = $request->last_name;
        $product->nationality  = $request->nationality;
        $product->birthdate  = $request->birthdate;
        $product->sex  = $request->sex;
        $product->email  = $request->email;
        $product->civil_status  = $request->civil_status;
        $product->id_number  = $request->id_number;
        $product->type_of_title  = $request->type_of_title;
        $product->title_name  = $request->title_name;
        $product->level_of_title  = $request->level_of_title;
        $product->status_of_title  = $request->status_of_title;

        $product->save();


        return redirect()->route('products.index')->with('info', 'El Usuario Fue Actualizado¡');
    }

    public function show ($id){

        $product = Product::find($id);
        return view('products.show', compact('product'));

    }

    public function destroy($id){

        $product=Product::find($id);
        $product->delete();
        return back()->with('info', 'El Usuario Fue Eliminado¡');
    }





}
