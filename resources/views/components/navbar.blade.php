<nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
        <a href="{{ route('home') }}" class="text-2xl font-bold text-indigo-600">
            Nova<span class="text-gray-800">Tech</span>
        </a>

        <ul class="hidden md:flex items-center gap-8 font-medium">
            <li><a href="{{ route('home') }}" class="hover:text-indigo-600 {{ request()->routeIs('home') ? 'text-indigo-600' : '' }}">Home</a></li>
            <li><a href="{{ route('about') }}" class="hover:text-indigo-600 {{ request()->routeIs('about') ? 'text-indigo-600' : '' }}">About</a></li>
            <li><a href="{{ route('services') }}" class="hover:text-indigo-600 {{ request()->routeIs('services') ? 'text-indigo-600' : '' }}">Services</a></li>
            <li><a href="{{ route('contact') }}" class="hover:text-indigo-600 {{ request()->routeIs('contact') ? 'text-indigo-600' : '' }}">Contact</a></li>
        </ul>

        <a href="{{ route('contact') }}" class="hidden md:inline-block bg-indigo-600 text-white px-5 py-2 rounded-lg hover:bg-indigo-700 transition">
            Get in Touch
        </a>
    </div>
</nav>
