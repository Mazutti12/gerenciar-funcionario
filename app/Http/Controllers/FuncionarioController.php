<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FuncionarioController extends Controller
{

    function index()
    {

        $funcionarios = DB::select('select *, floor(datediff(now(), dtnasc)/365) as idade from funcionarios;');

        return view('funcionarios.index', [
            'funcionarios' => $funcionarios
        ]);
    }

    function show($id, Request $request)
    {
        $funcionarios = DB::select(
        "SELECT * , floor(datediff(now(), dtnasc)/365) as idade FROM funcionarios WHERE id = :id",
            [
                'id' => $id,
            ]
        );

        // $dtnasc = DB::table('funcionarios')->pluck('dtnasc')->all();

        // $idade = Carbon::parse($request->dtnasc)->diff(Carbon::now())->y;



        // $request->date_of_birth = "2000-10-25";
        // $age = Carbon::parse($request->date_of_birth)->diff(Carbon::now())->y;

    

        return view('funcionarios/show', ['funcionarios' => $funcionarios[0]]);
    }


    function store(Request $request)
    {
        $data = $request->all();
        DB::table('funcionarios')->insert([
            'nome' => $data['nome'],
            'cargo' => $data['cargo'],
            'dtnasc' => $data['dtnasc']
        ]);

        return redirect('/funcionarios');
    }

    function create()
    {
        return view('funcionarios.create');
    }

    function edit($id)
    {
        $funcionario = DB::select(
            "
            SELECT * FROM funcionarios WHERE id = ?",
            [$id]
        );
        return view('funcionarios/edit', ['funcionario' => $funcionario[0]]);
    }

    function update(Request $request)
    {
        $data = $request->all();
        // DB::table('pessoas')->UPDATE([
        //     'nome' => $data['nome'],
        //     'sobrenome' => $data['sobrenome']
        // ]);
        //Quebrendo o teken
        unset($data['_token']);
        DB::update("
            UPDATE funcionarios SET
                nome = :nome,
                cargo = :cargo,
                dtnasc = :dtnasc
            WHERE
                id = :id
        ", $data);
        return redirect('/funcionarios');
    }

    function destroy($id)
    {
        DB::delete("DELETE FROM funcionarios WHERE id = ?", [$id]);

        return redirect('/funcionarios');
    }
}
