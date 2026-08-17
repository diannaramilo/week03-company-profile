@extends('layouts.app')

@section('title', 'Home')

@section('content')

    {{-- Hero Banner --}}
    <section class="relative overflow-hidden">
        <div class="blob w-96 h-96 bg-violet top-[-6rem] left-[-6rem]"></div>
        <div class="blob w-80 h-80 bg-coral top-10 right-[-4rem]"></div>
        <div class="blob w-64 h-64 bg-mint bottom-[-4rem] left-1/3"></div>

        <div class="relative max-w-6xl mx-auto px-6 pt-24 pb-24 text-center">
            <span class="eyebrow inline-block text-xs text-violetdeep bg-violet/10 px-4 py-2 rounded-full mb-8">
                Software Development Partner
            </span>
            <h1 class="font-display text-5xl md:text-7xl font-medium leading-[1.08] text-ink max-w-3xl mx-auto mb-8">
                Building reliable software for growing businesses.
            </h1>
            <p class="text-lg text-slate max-w-xl mx-auto mb-10 leading-relaxed">
                {{ $company['name'] }} partners with startups and enterprises to design, build,
                and maintain software that keeps pace with their business.
            </p>
            <a href="{{ route('contact') }}"
               class="inline-block bg-gradient-to-r from-violet to-coral text-white font-medium px-8 py-4 rounded-full hover:opacity-90 transition shadow-xl shadow-violet/25">
                Start a Project
            </a>
        </div>
    </section>

    {{-- Company Introduction --}}
    <section class="max-w-6xl mx-auto px-6 py-20">
        <div class="grid md:grid-cols-3 gap-12 items-start">
            <div class="md:col-span-2">
                <p class="eyebrow text-xs text-coral mb-4">Who We Are</p>
                <p class="font-display text-2xl md:text-3xl leading-snug text-ink">
                    A software development company dedicated to helping businesses establish
                    a strong digital presence.
                </p>
                <p class="text-slate mt-6 max-w-2xl leading-relaxed">
                    From web platforms to mobile applications, we combine clean engineering with
                    thoughtful design — building products our clients can maintain and grow well
                    beyond launch day.
                </p>
            </div>
            <div class="space-y-4">
                <div class="rounded-2xl bg-violet/10 p-5">
                    <p class="font-display text-3xl text-violetdeep">6</p>
                    <p class="eyebrow text-xs text-slate mt-1">Core Services</p>
                </div>
                <div class="rounded-2xl bg-mint/10 p-5">
                    <p class="font-display text-3xl text-mint">3</p>
                    <p class="eyebrow text-xs text-slate mt-1">Founding Team Members</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Featured Services --}}
    <section class="bg-white py-20">
        <div class="max-w-6xl mx-auto px-6">
            <p class="eyebrow text-xs text-coral mb-10 text-center">Featured Services</p>
            <div class="grid md:grid-cols-3 gap-6">
                @php $accents = ['violet', 'coral', 'mint']; @endphp
                @foreach ($featuredServices as $i => $service)
                    @php $accent = $accents[$i % 3]; @endphp
                    <div class="rounded-2xl border border-ink/5 p-7 hover:shadow-xl hover:-translate-y-1 transition duration-300 bg-paper">
                        <div class="w-11 h-11 rounded-xl bg-{{ $accent }}/15 flex items-center justify-center mb-5">
                            <span class="w-3 h-3 rounded-full bg-{{ $accent }}"></span>
                        </div>
                        <h3 class="font-display text-xl text-ink mb-2">{{ $service['title'] }}</h3>
                        <p class="text-slate leading-relaxed text-sm">{{ $service['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Call To Action --}}
    <section class="relative overflow-hidden bg-ink text-paper py-20 text-center">
        <div class="blob w-72 h-72 bg-violet -top-10 left-10"></div>
        <div class="blob w-72 h-72 bg-coral -bottom-10 right-10"></div>
        <div class="relative">
            <p class="eyebrow text-xs text-mint mb-5">Let's Talk</p>
            <h2 class="font-display text-3xl md:text-4xl mb-8 max-w-lg mx-auto leading-snug">
                Ready to build something great?
            </h2>
            <a href="{{ route('contact') }}"
               class="inline-block bg-gradient-to-r from-violet to-coral text-white font-medium px-8 py-4 rounded-full hover:opacity-90 transition">
                Contact Us Today
            </a>
        </div>
    </section>

@endsection