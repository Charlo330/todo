<x-layout>
    <x-slot name="titre"> {{ __('taches.index.titre') }} </x-slot>

    @foreach ($taches as $tache)
        <li><a href="{{ route('taches.show', $tache->id) }}" class="underline decoration-sky-600 hover:decoration-blue">{{ $tache->titre }}</a></li>
    @endforeach
</x-layout>

