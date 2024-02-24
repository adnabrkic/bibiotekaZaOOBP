<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Knjige') }}
        </h2>
    </x-slot>

<div class="py-12">
        <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    @foreach($knjige as $knjige)
                            <form method = "POST" action="{{route('update_knjige')}}">
                                @csrf
                                <input type="hidden" name="id" value="{{($knjige->id)}}">
                                <div>
                                    <x-label for="title" value="{{__('Naslov')}}"/>
                                    <input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus/> 
                                </div>
                                <div class="mt-4">
                                    <x-label for="ime" value="{{ __('Ime autora') }}" />
                                    <input id="ime" class="block mt-1 w-full" type="text" name="ime" required autofocus/>
                                </div>
                                <div class="mt-4">
                                    <x-label for="prezime" value="{{ __('Prezime autora') }}" />
                                    <input id="prezime" class="block mt-1 w-full" type="text" name="prezime" required autofocus/>
                                </div>


                                <div class="mt-4">
                                    <x-label for="ISBN" value="{{__('ISBN kod')}}"/>
                                    <input id="ISBN" class="block mt-1 w-full" type="number" name="ISBN" required autofocus/>
                                </div>
                                <div class="mt-4">
                                    <x-label for="zanr" value="{{__('Žanr')}}"/>
                                    <input id="zanr" class="block mt-1 w-full" type="text" name="zanr" required autofocus/>
                                </div>

                                <div class="mt-4">
                                    <x-label for="kategorijaID" value="{{ __('Kategorija') }}" />
                                    <select id="kategorijaID" name="kategorijaID" class="block mt-1 w-full" required>
                                    <option value="">Odaberite kategoriju</option>
                                    @foreach($kategorija as $kategorija)
                                        <option value="{{ $kategorija->id }}">{{ $kategorija->ime }}</option>
                                    @endforeach
                                    </select>
                                </div>

                                <div class="mt-4">
                                    <x-label for="jezikID" value="{{ __('Jezik') }}" />
                                    <select id="jezikID" name="jezikID" class="block mt-1 w-full" required>
                                    <option value="">Odaberite jezik</option>
                                    @foreach($jezik as $jezik)
                                        <option value="{{ $jezik->id }}">{{ $jezik->ime }}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="mt-4">
                                    <x-label for="datumIzdavanja" value="{{__('Datum izdavanja')}}"/>
                                    <input id="datumIzdavanja" class="block mt-1 w-full" type="date" name="datumIzdavanja" required autofocus/>
                                </div>

                                <div class="mt-4">
                                    <x-label for="izdavacID" value="{{ __('Izdavac') }}" />
                                    <select id="izdavacID" name="izdavacID" class="block mt-1 w-full" required>
                                    <option value="">Odaberite izdavaca</option>
                                    @foreach($izdavac as $izdavac)
                                        <option value="{{ $izdavac->id }}">{{ $izdavac->ime }}</option>
                                    @endforeach
                                    </select>
                                </div>

                                <div class="mt-4">
                                    <x-label for="dostupneKopije" value="{{__('Dostupne kopije')}}"/>
                                    <input id="dostupneKopije" class="block mt-1 w-full" type="number" name="dostupneKopije" required autofocus/>
                                </div>


                                <div class="mt-4">
                                    <x-label for="=opis" value="{{__('Opis')}}"/>
                                    <input id="opis" class="block mt-1 w-full" type="text" name="opis" required autofocus/>
                                 </div>
                                 <div class="flex items-center justify-end mt-4">
                                    <x-button class="ml-4">
                                        {{__('Spremi')}}
                                    </x-button>
                                </div>
                            </form>
                    @endforeach
                </div>
            </div>

        </div>
</div>

</x-app-layout>