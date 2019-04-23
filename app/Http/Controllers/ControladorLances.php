<?php

namespace App\Http\Controllers;

use App\Lances;
use App\Leilao;
use App\Pessoa;
use App\Produto;
use Illuminate\Http\Request;

class ControladorLances extends Controller
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
        $lances = Lances::all();
        return view('lances', compact('pessoas','produtos','lances','leiloes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $leiloes = Leilao::find($id);
        $pessoas = Pessoa::all();
        $produtos = Produto::all();
        $lances = Lances::all();

        return view('novolance', compact('pessoas','produtos','lances','leiloes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lei= Leilao::find( $request->input ('leilao_id'));
        $lan = new Lances();
        if($lan->valor < $request->input ('lanceleilao'))
        {
            return redirect()->back()->withErrors('Efetue um lance com valor maior que o atual');
        }else {
            $lan->pessoa_id = $request->input('pessoa_id');
            $lan->leilao_id = $request->input('leilao_id');
            $lan->produto_id = $request->input('idprodutoo_id');
            $lan->valor = $request->input('lanceleilao');
            $lan->save();
            return redirect('/leiloes')->with('mensagem', 'Lance efetuado com sucesso');
        }
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
        //
    }
    public  function listaLances($id)
    {
       //
        $lances = Lances::find('id');
        return view('listaLances', compact('lances'));

    }
}
