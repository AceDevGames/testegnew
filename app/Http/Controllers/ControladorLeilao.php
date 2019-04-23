<?php

namespace App\Http\Controllers;

use App\Pessoa;
use App\Produto;
use App\Leilao;
use Illuminate\Http\Request;

class ControladorLeilao extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leiloes = Leilao::all();
        $pessoas = Pessoa::all();
        $produtos = Produto::all();
        return view('leiloes',compact('leiloes','pessoas','produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pessoas = Pessoa::all();
        $produtos = Produto::all();

        return view('novoleilao', compact('pessoas','produtos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produto = Produto::find($request->input('produto_id'));

        $lei = new Leilao();

        $lei->produto_id = $request->input('produto_id');
        $lei->valor = $produto->valor;
       // $lei->valor = $request->input('lanceleilao');
        $lei->save();
        return redirect('/leiloes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lei = Leilao::find($id);
        if (isset($lei)){
            $lei->delete();

        }
        return   redirect('/leiloes');
    }
    public function novolance($id)
    {
        $pessoas = Pessoa::all();
        $produtos = Produto::all();
        $leiloes = Leilao::find($id);

        return view('novolance', compact('pessoas','produtos','leiloes'));

    }
}
