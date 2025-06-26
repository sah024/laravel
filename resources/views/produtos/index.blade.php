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
                   <x-link-button href="{{ route('produtos.create') }}">
                    Adicionar Novo Produto
                   </x-link-button>
                </div>
            </div>
        </div>
    </div>

    <div>
        @foreach ($produtos as $produto)
            <div class="dark:border-indigo-500 p-6 border-solid border-2 rounded-md ">
                <p class="text-white text-5xl">{{ $produto->nome }}</p>
                <p class="dark:text-indigo-300 text-2xl">R$ {{ $produto->preco }}</p>
                <p class="dark:text-gray-200">Descrição: {{ $produto->descricao }}</p>
                @if ($produto->imagem !== null)
                    <img src="{{ asset("storage/$produto->imagem") }}" alt="imagem {{ $produto->nome }}">
                @endif
                <form action="{{ route('carrinho.adicionar') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $produto->id }}">
                    <button type="submit">Adicionar ao carrinho</button>
                </form>
            </div>
        @endforeach
    </div>
</x-app-layout>
