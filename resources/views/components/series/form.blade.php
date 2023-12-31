<form action="{{ $action }}" method="POST">
    @csrf
    @if($update)
        @method('PUT')
    @endif
    <div class="form-group my-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text"
               id="nome"
               name="nome"
               class="form-control"
               @isset($nome) value="{{ $nome }} "@endisset>
    </div>
    <button type="submit" class="btn btn-success">Salvar</button>
</form>
