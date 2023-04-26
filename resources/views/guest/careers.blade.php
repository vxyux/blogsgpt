<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-4xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Careers') }}
        </h2>
        <p class="text-lg leading-7 text-gray-400">
            Supercharge our team with your knowledge, find your positions here
        </p>
    </x-slot>

    <div class="mt-16">
        <h2 class="font-semibold text-4xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Open') }}
        </h2>

        <div class="grid mt-10 grid-cols-3 gap-3">
            <x-careers.careers-card/>
            <x-careers.careers-card/>
            <x-careers.careers-card/>
        </div>
    </div>
    <div class="mt-16">
        <h2 class="font-semibold text-4xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Closed') }}
        </h2>

        <div class="grid mt-10 grid-cols-3 gap-3">
            <x-careers.careers-card/>
            <x-careers.careers-card/>
            <x-careers.careers-card/>
        </div>
    </div>

    <div class="h-24 min-h-full">

    </div>
</x-app-layout>
