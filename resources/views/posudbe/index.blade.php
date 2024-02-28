<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Upiti') }}
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="grid grid-cols-4  gap-4 p-4 justify-items-left">
                <!-- Upit 1 -->
                <div>
                    <h1>Upit 1.</h1>
                    <hr/>
                    <h1 class="font-xl"><p style="color:brown">Broj knjiga po kategorijama:</p></h1>
                    <div class="mt-2">
                        <!-- Sadržaj upita 1 -->
                        @foreach($books_by_category as $books_by_category)
                            <p>{{$loop->iteration}}. Kategorija: {{$books_by_category->category_name}} -  Broj knjiga:{{$books_by_category->book_count}} </p>
                        @endforeach
                    </div>
                </div>
                <!-- Upit 2 -->
                <div>
                    <h1>Upit 2:</h1>
                    <hr/>
                    <h1 class="font-xl"><p style="color:brown">Knjige sa najvećim brojem kopija:</p></h1>
                    <div class="mt-2">
                        @foreach($najviseKnjiga as $najviseKnjiga)
                            <p>{{$loop->iteration}}. {{$najviseKnjiga->title}} -  {{$najviseKnjiga->dostupneKopije}} </p>
                        @endforeach
                    </div>
                </div>
                <!-- Upit 3 -->
                <div>
                    <h1>Upit 3</h1>
                    <hr/>
                    <h1 class="font-xl"><p style="color:brown">Knjige izdane u posljednjih mjesec dana:</p></h1>
                    <div class="mt-2">
                    <p>Broj knjiga izdanih: {{ $brojKnjigaIzdanih }}</p>

                    @foreach($knjigeIzdane as $knjigeIzd)
                                <p>Ime knjige: {{$knjigeIzd ->naziv_knjige }}</p>
                                <p>Ime autora: {{ $knjigeIzd->ime_autora }} {{ $knjigeIzd->prezime_autora }}</p>
                        @endforeach
                    
                    </div>
                </div>
                <!-- Upit 4 -->
                <div>
                    <h1>Upit 4</h1>
                    <div class="mt-2">
                    <hr/>
                    <h1 class="font-xl"><p style="color:brown">Spisak izdavača i knjiga koje su izdali:</p></h1>
                        @foreach($knjigePoIzdavacu as $izdavac => $knjige)
                            <h3>Izdavač: {{ $izdavac }}</h3>
                            <ul>
                                @foreach($knjige as $knjiga)
                                    <li>{{$loop->iteration}}. {{ $knjiga->title }}</li>
                            @endforeach
                            </ul>
                        @endforeach

                    </div>
                </div>
                <!-- Upit 5 -->
                <div>
                    <h1>Upit 5</h1>
                    <div class="mt-2">
                    <hr/>
                    <h1 class="font-xl"><p style="color:brown">Spisak bibliotekara:</p></h1>
                        @foreach($radnici as $radnik)
                            <p>{{$loop->iteration}}. {{$radnik->ime}} - {{$radnik->prezime}} - {{$radnik->plata}} </p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







</x-app-layout>