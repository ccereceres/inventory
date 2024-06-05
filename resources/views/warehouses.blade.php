{{-- retrive data from WarehouseController method index --}}
{{-- list of all warehouses from loged user as $warehouses --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Almacenes') }}
        </h2>
    </x-slot>

    

    <div class="py-12">
        @include('shared.generic-notification')
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{route('warehouses.create')}}">Crear Almacen</a>
                </div>
            </div>
        </div>
    </div>

    {{-- Table of products --}}

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">Nombre</th>
                    <th scope="col" class="px-6 py-3">Direccion</th>
                    <th scope="col" class="px-6 py-3">Codigo Postal</th>
                    <th scope="col" class="px-6 py-3">Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($warehouses as $warehouse)        
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$warehouse->name}}</th>
                        <td class="px-6 py-4">{{$warehouse->street . ', ' . $warehouse->streetNumber}}</td>
                        <td class="px-6 py-4">{{$warehouse->zipCode}}</td>
                        <td class="px-6 py-4">
                            TODO
                        
                        
                        </td>
                    </tr>               
                @endforeach
            </tbody>            
            
        </table>
    </div>

    
</x-app-layout>