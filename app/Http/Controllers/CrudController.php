<?php

namespace App\Http\Controllers;

use App\Http\Requests\CrudRequest;
use Illuminate\Http\Request;
use App\Models\ModelCrud;
use App\Models\User;

class CrudController extends Controller
{

    private $objUser;
    private $objCliente;

    public function __construct()
    {
        $this->objUser = new User();
        $this->objCliente = new ModelCrud();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cliente = $this->objCliente->all();
        // PASSANDO PRA VIEW TODOS OS CLIENTES.
        return view('index', compact('cliente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = $this->objUser->all();
        return view('create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrudRequest $request)
    {
        $cad = $this->objCliente->create([
            'nome' => $request->nomeCliente,
            'id_user' => $request->id_user,
            'razao_social' => $request->razaosocialCliente,
            'cnpj' => $request->cnpjCliente,
            'data_inclusao' => $request->dataCriacaoCliente,
        ]);

        if ($cad) {
            return redirect('clientes');
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
        //BUSCA O ID DO CLIENTE PELO ID PASSADO COMO PARAMETRO E RETORNA NA VIEW
        $cliente = $this->objCliente->find($id);
        return view('show', compact('cliente'));
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
    public function update(CrudRequest $request, $id)
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
}
