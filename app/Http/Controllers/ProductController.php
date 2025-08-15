<?php

namespace App\Http\Controllers;

use App\Models\produtos;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function create()
    {
        return view("products.create");
    }

    function admin()
    {
        $produtos = produtos::orderByDesc('id')->paginate(10);
        return view("products.admin",['produtos'=>$produtos]);
        // $produtos = \App\Models\produtos::all();
        // return dd($produtos);
    }

    function store(Request $request)
    {
        return produtos::create($request->all());
        // try {
        //     $produtos = produtos::create([
        //         'nome'=>$request->name,
        //         'preco'=>$request->price,
        //         'estoque'=>$request->stoke
        //     ]);
        //     return redirect()->route('home');
        // } catch (\Exception $e) {
        //     back()->withInput();
        // }
    }
}
