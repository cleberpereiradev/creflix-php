<x-layout title="Séries">
    <a href="/series/criar" class="btn btn-warning my-3">Adicionar nova série</a>
    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item">{{ $serie->nome }}</li>
        @endforeach
    </ul>
</x-layout>