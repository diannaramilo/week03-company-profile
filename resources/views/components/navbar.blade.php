<nav class="bg-paper/90 backdrop-blur border-b border-ink/5 sticky top-0 z-50">
    <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
        <a href="{{ route('home') }}" class="flex items-center gap-2.5">
            <span class="w-8 h-8 rounded-xl bg-gradient-to-br from-violet to-coral"></span>
            <span class="font-display text-xl font-medium text-ink">NovaTech</span>
        </a>

        <ul class="hidden md:flex items-center gap-1 text-sm font-medium">
            <li><a href="{{ route('home') }}" class="px-4 py-2 rounded-full transition {{ request()->routeIs('home') ? 'bg-ink text-paper' : 'text-ink/70 hover:bg-ink/5' }}">Home</a></li>
            <li><a href="{{ route('about') }}" class="px-4 py-2 rounded-full transition {{ request()->routeIs('about') ? 'bg-ink text-paper' : 'text-ink/70 hover:bg-ink/5' }}">About</a></li>
            <li><a href="{{ route('services') }}" class="px-4 py-2 rounded-full transition {{ request()->routeIs('services') ? 'bg-ink text-paper' : 'text-ink/70 hover:bg-ink/5' }}">Services</a></li>
            <li><a href="{{ route('contact') }}" class="px-4 py-2 rounded-full transition {{ request()->routeIs('contact') ? 'bg-ink text-paper' : 'text-ink/70 hover:bg-ink/5' }}">Contact</a></li>
        </ul>

        <a href="{{ route('contact') }}" class="hidden md:inline-block bg-gradient-to-r from-violet to-coral text-white text-sm font-medium px-6 py-2.5 rounded-full hover:opacity-90 transition shadow-lg shadow-violet/20">
            Start a Project
        </a>
    </div>
</nav>