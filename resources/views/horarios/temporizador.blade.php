@extends('layouts.admin')

@section('content')
<form action="{{ route('horarios.temporizador.alterar') }}" method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Comando</label>
      <input type="text" class="form-control" id="comando" name="comando" required>
      @if($errors->has('codigo'))
      Digite o código
      @endif
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Tempo em minutos</label>
      <input type="text" class="form-control" id="tempo" name="tempo" required>
      @if($errors->has('nome'))
      Digite o nome
      @endif
    </div>   
    <button type="submit" class="btn btn-primary">Salvar</button>
  </form>
@endsection