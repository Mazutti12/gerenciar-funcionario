<form action='/funcionarios/store' method='post'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
    <input type='text' name='nome' placeholder="Nome" required>
    <input type='text' name='cargo' placeholder="Cargo" required>
    <input type='date' name='dtnasc' placeholder="Data de Nascimento" required>
    <button type='submit'>Enviar</button>
</form>
