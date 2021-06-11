@extends('layouts.admin')

@section('content')
<a class="btn btn-primary btn-block" href="{{ route('comandos.enviar') }}">Enviar Comando</a>
<a class="btn btn-primary btn-block" href="{{ route('horarios.temporizador') }}">Temporizador</a>
<a class="btn btn-primary btn-block" href="{{ route('horarios.index') }}">Horários</a>

@endsection