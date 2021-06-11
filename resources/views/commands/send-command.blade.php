@extends('layouts.admin')

@section('content')
<form action="{{ route('commands.send.command.execute') }}" id="form" method="POST">
    @csrf
    <div class="form-group">
      <input type="hidden" class="form-control" id="command" name="command">
      @if($errors->has('codigo'))
      Digite o código
      @endif
    </div>
    <button type="button" class="btn btn-success" onclick="send('on')">ON</button>
    <button type="button" class="btn btn-danger" onclick="send('off')">OFF</button>
</form>
<script>
    function send(command){
        document.getElementById('command').value = command
        document.getElementById('form').submit()

    }
</script>
@endsection
