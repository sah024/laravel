<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Categorias &raquo; Criar
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <form action="{{ route('categorias.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div>
                            <x-input-label for="nome" :value="__('Nome')" />
                            <x-text-input id="nome" class="block mt-1" type="text" name="nome" :value="old('nome')" required autofocus autocomplete="nome" />
                            <x-input-error :messages="$errors->get('nome')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="descricao" :value="__('Descrição')" />
                            <x-textarea id="descricao" class="block mt-1" name="descricao" required autofocus autocomplete="descricao">{{ old ('descricao') }}</x-textarea>
                            <x-input-error :messages="$errors->get('descricao')" class="mt-2" />
                        </div>
                        <x-primary-button>
                            Salvar Categoria
                        </x-primary-button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>