<!-- h1>Create</h1 -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Persona') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <div class="flex flex-col justify-center items-center">
                    <form method="POST" action="{{ route('personas.store') }}" class="max-w-sm mx-auto">
                        @csrf
                        <div class="mb-5">
                            <label for="dni" class="mb-2 block text-base font-medium text-white">DNI</label>
                            <input type="number" name="dni" class="form-input px-4 py-1 rounded-full">
                        </div>
                        <div class="mb-5">
                            <label for="paterno" class="mb-2 block text-base font-medium text-white">Paterno</label>
                            <input type="text" name="paterno" class="form-input px-4 py-1 rounded-full">
                        </div>
                        <div class="mb-5">
                            <label for="materno" class="mb-2 block text-base font-medium text-white">Materno</label>
                            <input type="text" name="materno" class="form-input px-4 py-1 rounded-full">
                        </div>
                        <div class="mb-5">
                            <label for="nombres" class="mb-2 block text-base font-medium text-white">Nombres</label>
                            <input type="text" name="nombres" class="form-input px-4 py-1 rounded-full">
                        </div>
                        <div class="mb-5 py-2">
                            <button type="submit" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded focus:outline-none focus:shadow-outline">Grabar</button>
                            <a href="{{ route('personas.index') }}" class="ml-3 bg-indigo-600 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded focus:outline-none focus:shadow-outline">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
