<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Autori') }}
        </h2>
    </x-slot>

<div class="py-12">
        <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    <h1 class="font-xl">Ovdje ce biti izlistani autori</h1>
                    @foreach($autor as $autor)
                    <p class="p-2"> {{$loop->iteration}} - {{$autor->ime}} - {{$autor->prezime}} - {{$autor->drzava}}</p>
                    @endforeach
                </div>
            </div>

        </div>
</div>

</x-app-layout>