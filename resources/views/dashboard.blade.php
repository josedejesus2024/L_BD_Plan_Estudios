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

                    
                    @can('egresado.users.show')
                    <H2>HOLA egresado</H2>
                    @endcan

                    @can('funcionario.users.show')
                    <H2>HOLA funcionario</H2>
                    @endcan

                    @can('admin.users.show')
                    <H2>HOLA administrador</H2>
                    @endcan


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
