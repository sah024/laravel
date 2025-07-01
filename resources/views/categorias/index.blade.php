<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Produtos 🛒
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                   <x-link-button href="{{ route('categorias.create') }}">
                    Adicionar Nova Categoria
                   </x-link-button>
                </div>
            </div>
        </div>
    </div>

    <div>
        @foreach ($categorias as $categoria)
            <div class="dark:border-indigo-500 p-6 border-solid border-2 rounded-md ">
                <p class="text-white text-5xl">{{ $categoria->nome }}</p>
                <p class="dark:text-gray-200">Descrição: {{ $categoria->descricao }}</p>
            </div>
        @endforeach
    </div>
</x-app-layout>
