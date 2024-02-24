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
                    <hr/>
                    @foreach($knjige as $knjige)
                    <div class="flex space-x-4">
                        <div class="flex-1"><p class="p-2"> {{$knjige->title}} - {{$knjige->zanr}}</p></div>
                        <div class="flex-1">
                            <form method = "POST" action="{{route('obrisi_knjige')}}">
                                @csrf
                                <input type="hidden" name="id" value="{{($knjige->id)}}">
                                <div class="p-2">
                                    <button class="ml-4 inline-flex items-center px-4 py-2 bg-red-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase ml-4">
                                        {{__('Obrisi')}}
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="flex-1">
                            <form method = "POST" action="{{route('uredi_knjige')}}">
                                @csrf
                                <input type="hidden" name="id" value="{{($knjige->id)}}">
                                <div class="p-2">
                                    <button class="ml-4 inline-flex items-center px-4 py-2 bg-red-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase ml-4">
                                        {{__('Uredi')}}
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="flex-1">
                            <form method = "POST" action="{{route('file_add')}}">
                                @csrf
                                <input type="hidden" name="id" value="{{($knjige->id)}}">
                                <div class="p-2">
                                    <button class="ml-4 inline-flex items-center px-4 py-2 bg-red-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase ml-4">
                                        {{__('Dodaj fajl')}}
                                    </button>
                                </div>
                            </form>
                        </div>



                    </div>
                    @endforeach
                </div>
            </div>

        </div>
</div>

</x-app-layout>