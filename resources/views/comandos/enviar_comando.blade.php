@extends('layouts.admin')

@section('content')
<form action="{{ route('comandos.executar') }}" id="form" method="POST">
    @csrf
    <div class="form-group">
      <input type="hidden" class="form-control" id="comando" name="comando">
      @if($errors->has('codigo'))
      Digite o código
      @endif
    </div>
    <button type="button" class="btn btn-success" onclick="send('on')">ON</button>
    <button type="button" class="btn btn-danger" onclick="send('off')">OFF</button>
</form>
<script>
    function send(comando){
        document.getElementById('comando').value = comando
        document.getElementById('form').submit()

    }
</script>
@endsection
