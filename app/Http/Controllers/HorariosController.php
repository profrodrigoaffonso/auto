<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Horarios;


class HorariosController extends Controller
{

    public function index(){
        $horarios = Horarios::get()
            ->where('tipo', 'h');    
        return view('horarios.index', compact('horarios'));
    }

    public function create(){
        return view('horarios.create');
    }

    public function store(Request $request){
        
        $dados = $request->all();

        $dados['data_hora'] = "{$dados['data']} {$dados['hora']}";

        Horarios::create($dados);

        return redirect(route('horarios.index'));


    }

    public function edit($id){

        $horario = Horarios::findOrFail($id);
    
        $horario['data'] = date('Y-m-d', strtotime($horario['data_hora']));
        $horario['hora'] = date('H:i', strtotime($horario['data_hora']));

        return view('horarios.edit', compact('horario'));
    }

    public function update(Request $request){

        $dados = $request->all();

        $horario = Horarios::findOrFail($dados['id']);

        $horario->update([
            'comando' => $dados['comando'],
            'data_hora' => "{$dados['data']} {$dados['hora']}"
        ]);

        return redirect(route('horarios.index'));

    }

}
