<?php

use Illuminate\Support\Facades\Route;

use App\Models\Produto;
Use Illuminate\Http\Request;


Route::get('/', function () {
    return view('inicio');
});

Route::post('/cadastrar-produto',function(Request $request){
    //dd($request->all());

    Produto::create([
        'nome'=> $request->nome,
        'valor'=> $request->valor,
        'estoque'=> $request->estoque

    ]);

    echo "Produto criado com sucesso!";
});