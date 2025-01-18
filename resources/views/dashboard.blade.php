<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl ml-auto sm:px-6 lg:px-20">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-2xl font-semibold">Selamat Datang di Dashboard {{ __( Auth::user()->name) }}</h2>
                </div>
            </div>

            <!-- Section for Counts -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mt-8">
                <!-- Menu Count -->
                <div class="bg-white p-6 shadow-lg rounded-lg text-center dashboard-item" onclick="addAnimation(this)">
                    <a href="{{ route('menus.index') }}" class="block">
                        <h3 class="text-xl font-medium text-gray-900">{{ __('Jumlah Menu Makanan Tersedia') }}</h3>
                        <p class="text-2xl font-bold text-gray-700">{{ $menuCount }}</p>
                        <img src="{{ asset('img/pecellel-removebg-preview.png') }}" alt="Pecel" class="mx-auto mt-4 w-40 h-40">
                    </a>
                </div>

                <!-- Frozen Foods Count with Animated Image -->
                <div class="bg-white p-6 shadow-lg rounded-lg text-center dashboard-item" onclick="addAnimation(this)">
                    <a href="{{ route('frozen_foods.index') }}" class="block">
                        <h3 class="text-xl font-medium text-gray-900">{{ __('Jumlah Menu Frozen Food Tersedia') }}</h3>
                        <p class="text-2xl font-bold text-gray-700">{{ $frozenFoodCount }}</p>
                        <!-- Animated Image -->
                        <img src="{{ asset('img/fr-removebg-preview.png') }}" alt="Frozen Food" class="mx-auto mt-4 w-40 h-40">
                    </a>
                </div>

                <!-- Pesan Saran Count with Animated Image -->
                <div class="bg-white p-6 shadow-lg rounded-lg text-center dashboard-item" onclick="addAnimation(this)">
                    <a href="{{ route('pesan_saran.index') }}" class="block">
                        <h3 class="text-xl font-medium text-gray-900">{{ __('Jumlah Pesan Saran Di Terima') }}</h3>
                        <p class="text-2xl font-bold text-gray-700">{{ $pesanSaranCount }}</p>
                        <!-- Animated Image -->
                        <img src="{{ asset('img/pesansaran-removebg-preview.png') }}" alt="Pesan Saran" class="mx-auto mt-4 w-40 h-40">
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
