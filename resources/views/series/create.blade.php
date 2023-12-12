<x-layout title="Nova Série">
    <form action="{{ route('series.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col-8">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text"
                       autofocus
                       id="nome"
                       name="nome"
                       class="form-control"
                       value="{{ old('nome') }}">
            </div>
            <div class="col-2">
                <label for="seasonQty" class="form-label">Seasons:</label>
                <input type="text"
                       autofocus
                       id="seasonQty"
                       name="seasonQty"
                       class="form-control"
                       value="{{ old('seasonQty') }}">
            </div>
            <div class="col-2">
                <label for="episodePerSeason" class="form-label">Eps / temporada:</label>
                <input type="text"
                       autofocus
                       id="episodePerSeason"
                       name="episodePerSeason"
                       class="form-control"
                       value="{{ old('episodePerSeason') }}">
            </div>
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
</x-layout>
