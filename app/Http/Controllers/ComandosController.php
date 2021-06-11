<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comandos;

class ComandosController extends Controller
{
    public function receber(){
        $comando = Comandos::select()
            ->where('id', 1)
            ->first();

        if($comando->executado == 'n'){
            Comandos::where('id', 1)
                ->update(['executado' => 's']);
            echo $comando->comando;
        } else {
            echo '';            
        }

        die;

        dd($command);
    }

    public function enviarComando(){

        return view('comandos.enviar_comando');
    }

    public function alterarComando(Request $request){

        $dados = $request->all();
        Comandos::where('id', 1)
                ->update([
                    'comando' => $dados['comando'],
                    'executado' => 'n'
                ]);
        
        return redirect(route('comandos.enviar'));

    }
}
