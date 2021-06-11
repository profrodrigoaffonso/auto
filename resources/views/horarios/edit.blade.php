@extends('layouts.admin')

@section('content')
<form action="{{ route('horarios.update') }}" method="POST">
    @csrf
    <div class="form-group">
      <input name="id" value="{{ $horario['id'] }}" type="hidden">
      <label for="exampleInputEmail1">Comando</label>
      <input type="text" class="form-control" id="comando" name="comando" value="{{ $horario['comando'] }}" required>
      @if($errors->has('codigo'))
      Digite o código
      @endif
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Data e Hora</label>
      <input type="date" class="form-control" id="data" name="data" value="{{ $horario['data'] }}" required>
      <input type="time" class="form-control" id="hora" name="hora" value="{{ $horario['hora'] }}" required>
      @if($errors->has('nome'))
      Digite o nome
      @endif
    </div>   
    <button type="submit" class="btn btn-primary">Salvar</button>
  </form>
@endsection