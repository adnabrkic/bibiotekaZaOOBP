<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Knjige') }}
        </h2>
    </x-slot>

<div class="py-12">
        <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
            <a href="\dodaj_knjige" class="m-2 p-2 text-xl">Dodaj knjigu</a>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    <h1 class="font-xl">Ovdje ce biti izlistane knjige</h1>
                    @foreach($knjige as $knjige)
                    <p class="p-2"> {{$knjige->title}} - {{$knjige->zanr}}</p>
                    @endforeach
                </div>
            </div>

        </div>
</div>

</x-app-layout>