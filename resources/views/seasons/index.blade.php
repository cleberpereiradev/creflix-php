<x-layout title="Temporadas de {!! $series->nome !!}">
    <ul class="list-group">
        @foreach ($seasons as $season)
            <li class="list-group-item d-flex justify-content-between align-items-center col-8">
                Temporada {{$season->number}}
                <span class="badge bg-secondary">
                    {{ $season->episode->count() }}
                </span>
            </li>
        @endforeach
    </ul>
</x-layout>
