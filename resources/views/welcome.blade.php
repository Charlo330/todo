<x-layout>
    <x-slot name="titre">{{ __('welcome.titre') }}</x-slot>
        <p>{{ __('welcome.salut', ['nom' => $nom]) }}</p>
</x-layout>
