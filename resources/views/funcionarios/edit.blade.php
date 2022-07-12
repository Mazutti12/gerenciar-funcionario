<form action='/funcionarios/update' method='post'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
    <input type='text' value="{{ $funcionario->nome }}" name='nome' placeholder="Nome" required>
    <input type='text' value="{{ $funcionario->cargo}}" name='cargo' placeholder="Cargo" required>
    <input type='date' value="{{ $funcionario->dtnasc}}" name='dtnasc' placeholder="Data de Nascimento" required>
    <input type="hidden" value="{{ $funcionario->id}}" name="id">
    <button type='submit'>Alterar</button>
</form>
