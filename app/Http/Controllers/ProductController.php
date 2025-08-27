<?php

namespace App\Http\Controllers;

use App\Models\produto;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function home()
    {
        $produtos = produto::orderByDesc("created_at")->take(6)->get();
        return view('welcome', ['produtos' => $produtos]);
    }

    function admin()
    {
        $produtos = produto::orderByDesc('id')->paginate(10);
        return view("products.admin", ['produtos' => $produtos]);
        // $produtos = \App\Models\produtos::all();
        // return dd($produtos);
    }

    function store(Request $request)
    {
        try {
            produto::create([
                'nome' => $request->name,
                'preco' => $request->price,
                'estoque' => $request->stoke,
                'image_url' => 'https://domplastic.com.br/wp-content/uploads/2023/05/caixa_de_papelao_n_2_10_unidades_929_2_e75e165d331104a281a17efaff1e0afa.jpg'
            ]);
            return redirect()->route('product.admin')->with('success', 'Deu certo');
        } catch (\Exception $e) {
            // return back()->withInput()->with('error', 'alguma desgraça');
            return "deu erro " . $e->getMessage();
        }
    }

    function show($id)
    {
        $produto = produto::find($id);
        return view('products.show', ['produto' => $produto]);
    }
}
