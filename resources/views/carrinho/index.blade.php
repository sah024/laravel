<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Carrinho') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if (count($carrinho) > 0)
                        @foreach ($carrinho as $car)
                            <div>
                                @if (!empty($car->imagem))
                                    <img src="{{ asset("storage/$car->imagem") }}" alt="Imagem do produto">
                                @endif
                                <div>
                                    <p>{{ $car->nome }}</p>
                                    <p>{{ $car->preco }}</p>
                                    <button type="button">Comprar</button>
                                    <form action="{{ route('carrinho.remover', $car->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit">Remover Produto</button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                        <button type="button">Comprar Carrinho</button>
                    @else
                        <p>Seu carrinho está vazio</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
