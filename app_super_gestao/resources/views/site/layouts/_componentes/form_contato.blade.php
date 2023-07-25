{{ $slot }}
<form action="{{ route('site.contato') }}" method="POST">
    @csrf
    <input type="text" placeholder="Nome" class="{{ $classe }}" name="nome">
    <br>
    <input type="text" placeholder="Telefone" class="{{ $classe }}" name="telefone">
    <br>
    <input type="text" placeholder="E-mail" class="{{ $classe }}" name="email">
    <br>
    <select class="{{ $classe }}" name="motivo">
        <option value="">Qual o motivo do contato?</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    <br>
    <textarea name="mensagem" class="{{ $classe }}" placeholder="Mensagem..."></textarea>
    <br>
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>