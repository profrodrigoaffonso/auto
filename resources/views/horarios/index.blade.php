@extends('layouts.admin')

@section('content')
    <h1>Horários</h1>
    <p><a href="{{ route('horarios.create') }}">Novo</a></p>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Comando</th>
                <th scope="col">Data Hora</th> 
                <th></th>             
            </tr>
        </thead>
        <tbody>
            @foreach($horarios as $horario)
            <tr>
                <td>{{ $horario->comando }}</td>
                <td>{{ date('d/m/Y H:i', strtotime($horario->data_hora)) }}</td>              
                <td><a href="/horarios/{{ $horario->id }}/edit">Editar</a></td>              
            </tr>
            @endforeach            
        </tbody>
    </table>
@endsection