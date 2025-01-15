<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <!-- Notifikasi berhasil login -->
        @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
            <a href="{{ route('home') }}" class="btn btn-primary">Go to Home</a>
        </div>
        @endif

    <!-- Tombol Back to Home -->
    <a href="/" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Back to Home
    </a>
</div>
</x-app-layout>
