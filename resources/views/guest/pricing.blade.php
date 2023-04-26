<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-4xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Pricing') }}
        </h2>
        <p class="text-lg leading-7 text-gray-400">
            Get to know the different plans within BlogsGPT
        </p>
    </x-slot>

    <div class="mt-16 grid grid-cols-3 gap-3">
        <x-pricing.price-card
            :price="10"
        />
        <x-pricing.price-card
            :price="25"
        />
        <x-pricing.price-card
            :price="40"
        />
    </div>
</x-app-layout>
