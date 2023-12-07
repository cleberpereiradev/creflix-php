<x-layout title="Séries">
    <a href="{{ route('series.create') }}" class="btn btn-warning my-3">Adicionar nova série</a>
    @isset($mensagemSucesso)
        <div class="alert alert-success">
            {{ $mensagemSucesso }}
        </div>
    @endisset
    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item d-flex justify-content-between align-items-center col-8">
                {{ $serie->nome }}
                <span class="d-flex gap-2">
                    <a href="{{ route('series.edit', $serie->id) }}" class="btn btn-warning btn-sm">
                        E
                    </a>

                    <form action="{{ route('series.destroy', $serie->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">
                            X
                        </button>
                    </form>
                </span>
            </li>
        @endforeach
    </ul>
</x-layout>
