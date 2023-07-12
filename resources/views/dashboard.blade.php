<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
                <!-- Search Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Recherche</h5>
                    <form class="card-body" action="/search" method="GET" role="search">
                        {{ csrf_field() }}
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Rechercher..." name="q">
                            <span class="input-group-btn">
                        <button class="btn btn-secondary" type="submit">Go!</button>
                    </span>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>
