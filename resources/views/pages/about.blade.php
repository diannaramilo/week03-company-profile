@extends('layouts.app')

@section('title', 'About Us')

@section('content')

    <section class="relative overflow-hidden">
        <div class="blob w-80 h-80 bg-mint top-[-4rem] right-[-4rem]"></div>
        <div class="relative max-w-6xl mx-auto px-6 pt-20 pb-12 text-center">
            <span class="eyebrow inline-block text-xs text-coral bg-coral/10 px-4 py-2 rounded-full mb-6">About Us</span>
            <h1 class="font-display text-5xl font-medium text-ink max-w-2xl mx-auto leading-[1.1]">
                About {{ $company['name'] }}
            </h1>
        </div>
    </section>

    {{-- Company History --}}
    <section class="max-w-4xl mx-auto px-6 pb-16 text-center">
        <p class="text-slate leading-relaxed text-lg">
            Founded by a small team of developers, {{ $company['name'] }} began as a
            freelance consultancy and has grown into a full-service software partner for
            businesses across the region. Every project has taught us something new about
            building software that lasts.
        </p>
    </section>

    {{-- Mission / Vision --}}
    <section class="max-w-6xl mx-auto px-6 pb-20 grid md:grid-cols-2 gap-6">
        <div class="rounded-2xl bg-violet/10 p-8">
            <p class="eyebrow text-xs text-violetdeep mb-3">Mission</p>
            <p class="font-display text-2xl text-ink leading-snug">To deliver reliable, well-engineered software that helps our clients grow with confidence.</p>
        </div>
        <div class="rounded-2xl bg-coral/10 p-8">
            <p class="eyebrow text-xs text-coral mb-3">Vision</p>
            <p class="font-display text-2xl text-ink leading-snug">To be a trusted technology partner known for quality, transparency, and long-term relationships.</p>
        </div>
    </section>

    {{-- Core Values --}}
    <section class="bg-white py-20">
        <div class="max-w-6xl mx-auto px-6">
            <p class="eyebrow text-xs text-coral mb-10 text-center">Core Values</p>
            <div class="grid md:grid-cols-4 gap-5">
                @php $accents = ['violet', 'coral', 'mint', 'amber']; @endphp
                @foreach ($coreValues as $value => $description)
                    @php $accent = $accents[$loop->index % 4]; @endphp
                    <div class="rounded-2xl border-t-4 border-{{ $accent }} bg-paper p-6">
                        <h3 class="font-display text-lg text-ink mb-2">{{ $value }}</h3>
                        <p class="text-sm text-slate leading-relaxed">{{ $description }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Team Introduction --}}
    <section class="max-w-6xl mx-auto px-6 py-20">
        <p class="eyebrow text-xs text-coral mb-10 text-center">Meet the Team</p>
        <div class="grid md:grid-cols-3 gap-6">
            @php $accents = ['violet', 'coral', 'mint']; @endphp
            @foreach ($team as $i => $member)
                @php $accent = $accents[$i % 3]; @endphp
                <div class="rounded-2xl border border-ink/5 p-6 text-center hover:shadow-lg transition">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-{{ $accent }} flex items-center justify-center font-display text-white text-xl">
                        {{ strtoupper(substr($member['name'], 0, 1)) }}
                    </div>
                    <h3 class="font-medium text-ink">{{ $member['name'] }}</h3>
                    <p class="text-sm text-slate">{{ $member['role'] }}</p>
                </div>
            @endforeach
        </div>
    </section>

@endsection