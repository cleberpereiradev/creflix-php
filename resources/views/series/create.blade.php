<x-layout title="Nova Série">
    <form action="/series/salvar" method="POST" class="flex-column">
        @csrf
        <div class="form-group my-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" id="nome" name="nome" class="form-control">
        </div>
        <button class="btn btn-success">Salvar</button>
    </form>
</x-layout>
