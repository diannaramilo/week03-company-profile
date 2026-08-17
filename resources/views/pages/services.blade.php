@extends('layouts.app')

@section('title', 'Our Services')

@section('content')

    <section class="relative overflow-hidden">
        <div class="blob w-80 h-80 bg-amber top-[-4rem] left-[-4rem]"></div>
        <div class="relative max-w-6xl mx-auto px-6 pt-20 pb-12 text-center">
            <span class="eyebrow inline-block text-xs text-violetdeep bg-violet/10 px-4 py-2 rounded-full mb-6">What We Do</span>
            <h1 class="font-display text-5xl font-medium text-ink max-w-2xl mx-auto leading-[1.1] mb-6">Our Services</h1>
            <p class="text-slate max-w-xl mx-auto leading-relaxed">
                A full range of software services to help your business launch, grow, and stay
                secure online.
            </p>
        </div>
    </section>

    <section class="max-w-6xl mx-auto px-6 pb-24">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @php $accents = ['violet', 'coral', 'mint', 'amber']; @endphp
            @foreach ($services as $index => $service)
                @php $accent = $accents[$index % 4]; @endphp
                <div class="rounded-2xl border border-ink/5 bg-white p-7 hover:shadow-xl hover:-translate-y-1 transition duration-300">
                    <div class="w-12 h-12 rounded-xl bg-{{ $accent }}/15 flex items-center justify-center mb-6 text-{{ $accent }}">
                        @switch($service['icon'])
                            @case('monitor')
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="4" width="18" height="12" rx="2"/><line x1="8" y1="20" x2="16" y2="20"/><line x1="12" y1="16" x2="12" y2="20"/></svg>
                                @break
                            @case('device')
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="7" y="2" width="10" height="20" rx="2"/><line x1="11" y1="18" x2="13" y2="18"/></svg>
                                @break
                            @case('layers')
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>
                                @break
                            @case('cloud')
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z"/></svg>
                                @break
                            @case('shield')
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 2l8 4v6c0 5-3.5 8.5-8 10-4.5-1.5-8-5-8-10V6l8-4z"/></svg>
                                @break
                            @case('compass')
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="10"/><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"/></svg>
                                @break
                        @endswitch
                    </div>
                    <span class="eyebrow text-[10px] text-slate">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                    <h2 class="font-display text-xl text-ink mt-1 mb-2">{{ $service['title'] }}</h2>
                    <p class="text-slate leading-relaxed text-sm">{{ $service['description'] }}</p>
                </div>
            @endforeach
        </div>
    </section>

@endsection