<x-layout>
    <x-slot name="titre">
        {{ __('taches.edit.titre') }}
    </x-slot>

    <x-errors :errors="$errors"/>
    <form method="POST" action="{{ route('taches.update', $tache->id) }}" class="bg-white shadow-md rounded p-8 my-4">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="titre" class="block text-sm font-bold mb-2">{{ __('taches.edit.titreTache') }}</label>
            <input type="text"
                   class="shadow appearance-none border @error('titre') border-red-500 @enderror rounded w-full py-2 px-3 focus:outline-none focus:shadow-outline"
                   id="titre" name="titre" value="{{ old('titre', $tache->titre) }}">
        </div>
        <button type="submit"
                class="bg-sky-700 hover:bg-sky-900 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            {{ __('taches.edit.enregistrer') }}
        </button>
    </form>
</x-layout>
