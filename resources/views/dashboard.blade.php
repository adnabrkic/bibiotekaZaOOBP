<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Početna') }}
        </h2>
    </x-slot>

    <div class="flex justify-center align-start py-5">
        <div class="py-3 mx-3 md:bg-white-100">
    <h1 class="text-3x1 font-bold mb-4 text-center">Vremenske informacije:</h2>
    @if(isset($weatherData['main']['temp']))
    <p class="text-1g mb-2 text-center"> Temperatura: {{round($weatherData['main']['temp']-273.15)}}</p>
    <p class="text-1g mb-2 text-center"> Opis vremena: {{$weatherData['weather'][0]['description']}}</p>
    @endif

    @if(isset($weatherData['weather'][0]['description']))
    <p class="text-1g mb-2 text-center"> Grad: {{$weatherData['name']}}</p>
    @endif

</div>
   
</div>

    <div class="flex justify-between items-start text-center">
        <!-- Tekst lijevo -->
        <div class="w-1/2 p-4">
            <p>
            Dobrodošli u našu biblioteku, mjesto gdje se riječi pretvaraju u prozore u neistražene svjetove, 
    gdje stranice knjiga postaju mostovi do mašte i znanja.

    U našoj biblioteci, svaka knjiga je vrata koja vas vode na putovanje kroz vječnost, 
    omogućavajući vam da lutate kroz vremena, susrećete se s junacima iz prošlosti i sanjate o budućnosti.

    Neka naša riznica riječi bude vaša oaza mira, gdje možete pronaći utočište od svakodnevnih briga,
    istraživati nove ideje i otkrivati nepregledna bogatstva svjetske književnosti.

    U našoj biblioteci, svaka stranica zrači saznanjem, svaka rečenica nosi snagu, 
    a svaka priča krije tajnu. Dopustite da vas riječi nose na putovanje kroz nepoznate svjetove, 
    gdje se svaki okretaj stranice osjeća poput otkrića.

    Neka naše police knjiga budu vaše utočište, mjesto gdje možete istraživati, 
    učiti, sanjati i rasti. Dobrodošli u našu biblioteku, gdje se priče rađaju, znanje cvjeta, a mašta leti slobodno.
            </p>
        </div>

        <!-- Slika desno -->
        <div class="w-1/2 p-4">
            <img src="{{ asset('slike/slika1zaOOBP.jpg') }}" class="w-full" alt="Slika">
        </div>
    </div>

</x-app-layout>




