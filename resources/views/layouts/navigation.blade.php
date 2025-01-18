<nav x-data="{ open: false }" class="bg-white border-r border-gray-100 h-full fixed w-64">
    <style>
        /* Sidebar */
        nav {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            width: 250px;
            background-color: #ffffff;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        /* Profile Dropdown */
        .profile-dropdown {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        /* Navigation Links */
        .nav-links {
            flex-direction: column;
            padding-top: 2rem;
            padding-bottom: 2rem;
        }

        /* Active Nav Links */
        .nav-links a:hover, .nav-links a:focus {
            background-color: #f0f0f0;
            color: #006600; /* Green */
        }

        .dropdown button:hover, .dropdown button:focus {
            background-color: #f0f0f0;
        }

        /* Logo */
        .logo {
            margin-top: auto;
            padding: 1rem;
        }
    </style>

    <!-- Primary Navigation Menu -->
    <div class="flex flex-col h-full">
        <!-- Logo -->
        
            <a href="{{ route('dashboard') }}">
                <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
            </a>
       
        <!-- Navigation Links -->
        <div class="nav-links flex flex-col space-y-4 px-6">
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-nav-link>
            <x-nav-link :href="route('menus.index')" :active="request()->routeIs('menus.index')">
                {{ __('Menu Makanan') }}
            </x-nav-link>
            <x-nav-link :href="route('frozen_foods.index')" :active="request()->routeIs('frozen_foods.index')">
                {{ __('Menu Frozen Food') }}
            </x-nav-link>
            <x-nav-link :href="route('artikel.index')" :active="request()->routeIs('artikel.index')">
                {{ __('Artikel') }}
            </x-nav-link>
            <x-nav-link :href="route('hero-sections.index')" :active="request()->routeIs('hero-sections.index')">
                {{ __('Hero Section') }}
            </x-nav-link>
            <x-nav-link :href="route('tentangkami.index')" :active="request()->routeIs('tentangkami.index')">
                {{ __('Tentang Kami') }}
            </x-nav-link>
            <x-nav-link :href="route('footers.index')" :active="request()->routeIs('footers.index')">
                {{ __('Footer') }}
            </x-nav-link>
            <x-nav-link :href="route('pesan_saran.index')" :active="request()->routeIs('pesan_saran.index')">
                {{ __('Pesan Saran') }}
            </x-nav-link>
            <x-nav-link :href="route('homepage')" :active="request()->routeIs('homepage')">
                {{ __('Home Page') }}
            </x-nav-link>
            
            
        </div>

        <!-- Profile Dropdown -->
        <div class="profile-dropdown px-6">
            <x-dropdown align="left" width="48">
                <x-slot name="trigger">
                    <button class="inline-flex items-center w-full text-gray-500 hover:text-gray-700">
                        <div class="mr-2">{{ Auth::user()->name }}</div>
                        <svg class="h-4 w-4 fill-current text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-dropdown-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        </div>

        
    </div>
</nav>
