<div>
{{--    crie um card centralizado na tela dizendo bem vindo ao sistema senhor(a) ... --}}
    <div class="flex items-center justify-center h-screen">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-6 sm:px-20">
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 leading-tight">
                    Bem vindo ao sistema, senhor(a) {{ $name }}
                </h2>

                <h1>{{ $count }}</h1>

                <button wire:click="increment">+</button>

                <button wire:click="decrement">-</button>
            </div>
        </div>
    </div>
</div>
