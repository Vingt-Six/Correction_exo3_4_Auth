<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <h1>{{ Auth::user()->name }}</h1>
    <p>{{ Auth::user()->email }}</p>
</x-app-layout>
