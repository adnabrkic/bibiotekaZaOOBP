<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Upiti') }}
        </h2>
    </x-slot>

<div class="py-12">
        <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class=" grid-cols-4 gap-4 p-4 justify-items-center ">
                    <div>
                        <h1>Upit 1.</h1>
                        @foreach($knjigeZanr as $knjigeZanr)
                        <p>{{$loop->iteration}}. {{$knjigeZanr->title}} -  {{$knjigeZanr->zanr}} </p>
                        @endforeach
                        <hr/>
                    </div>
                    <div>
                        <h1>Upit 2: Knjige sa najvećim brojem kopija</h1>
                        @foreach($najviseKnjiga as $najviseKnjiga)
                        <p>{{$loop->iteration}}. {{$najviseKnjiga->title}} -  {{$najviseKnjiga->dostupneKopije}} </p>
                        @endforeach
                        <hr/>
                    </div>
                    <div>
                        <h1>Upit 3:Knjige koje su izdane u posljednjih mjesec dana</h1>
                        <p> {{$knjigeIzdane }}  </p>
                        <hr/>
                    </div>

                    <div>
                        <h1>Upit 4:Drzave iz kojih su autori</h1>
                        @foreach($drzave as $drzave)
                        <p>{{$loop->iteration}}. {{$drzave->drzava}} </p>
                        @endforeach
                        <hr/>
                    </div>
                    <div>
                        <h1>Upit 5: Radnici i njihove plate</h1>
                        @foreach($radnici as $radnici)
                        <p>{{$loop->iteration}}. {{$radnici->ime}} - {{$radnici->prezime}} - {{$radnici->plata}} </p>
                        @endforeach
                        <hr/>
                    </div> 
                    
                </div>
            </div>

        </div>
</div>

</x-app-layout>