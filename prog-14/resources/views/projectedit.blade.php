<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modifica Progetto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-center">
                    <form action="/projects/{{$project->id}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <input type="text" value="{{$project->name}}" class="form-control" placeholder="nome..." name="name">
                        </div>
                        <div class="mb-3">
                            <input type="text" value="{{$project->description}}" class="form-control" placeholder="descrizione..." name="description">
                        </div>
                        <button type="submit" class="btn btn-outline-info w-25 rounded-5">MODIFICA</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
