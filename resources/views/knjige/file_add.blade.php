<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Knjige - Dodaj fajl') }}
        </h2>
    </x-slot>

<div class="py-12">
        <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                <form action = "/process" enctype="multipart/form-data" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$knjiga->id}}">
                    <p>
                        <label for="file">
                            <input type="file" name="file" id="file">
                        </label>
                    </p>
                    <div class="p-2">
                                    <button class="ml-4 inline-flex items-center px-4 py-2 bg-red-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase ml-4">
                                        {{__('Upload')}}
                                    </button>
                                </div>
                </form>
                </div>
            </div>
        </div>
</div>

</x-app-layout>