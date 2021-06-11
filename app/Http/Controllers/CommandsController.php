<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Commands;


class CommandsController extends Controller
{
    //
    public function send(){
        $command = Commands::select()
            ->where('id', 1)
            ->first();

        if($command->executed == 'n'){
            Commands::where('id', 1)
                ->update(['executed' => 'y']);
            echo $command->command;
        } else {
            echo '';            
        }

        die;

        dd($command);
    }

    public function sendCommand(){

        return view('commands.send-command');
    }

    public function sendCommandExecute(Request $request){

        $dados = $request->all();
        Commands::where('id', 1)
                ->update([
                    'command' => $dados['command'],
                    'executed' => 'n'
                ]);
        
        return redirect(route('commands.send.command'));

    }
}
