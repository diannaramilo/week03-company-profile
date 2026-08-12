@extends('layouts.app')

@section('title', 'About Us')

@section('content')

    <section class="max-w-6xl mx-auto px-6 py-16">
        <h1 class="text-4xl font-bold mb-6 text-center">About {{ $company['name'] }}</h1>

        {{-- Company History --}}
        <div class="mb-12">
            <h2 class="text-2xl font-semibold mb-2 text-indigo-600">Our History</h2>
            <p class="text-gray-600">
                Founded by a small team of developers, {{ $company['name'] }} began as a
                freelance consultancy and has grown into a full-service software partner for
                businesses across the region. Every project has taught us something new about
                building software that lasts.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <div class="p-6 bg-white border rounded-xl">
                <h2 class="text-2xl font-semibold mb-2 text-indigo-600">Mission</h2>
                <p class="text-gray-600">To deliver reliable, well-engineered software that helps our clients grow with confidence.</p>
            </div>
            <div class="p-6 bg-white border rounded-xl">
                <h2 class="text-2xl font-semibold mb-2 text-indigo-600">Vision</h2>
                <p class="text-gray-600">To be a trusted technology partner known for quality, transparency, and long-term relationships.</p>
            </div>
        </div>

        {{-- Core Values --}}
        <div class="mb-12">
            <h2 class="text-2xl font-semibold mb-6 text-indigo-600 text-center">Core Values</h2>
            <div class="grid md:grid-cols-4 gap-6">
                @foreach ($coreValues as $value => $description)
                    <div class="p-4 border rounded-lg text-center">
                        <h3 class="font-semibold mb-1">{{ $value }}</h3>
                        <p class="text-sm text-gray-600">{{ $description }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Team Introduction --}}
        <div>
            <h2 class="text-2xl font-semibold mb-6 text-indigo-600 text-center">Meet the Team</h2>
            <div class="grid md:grid-cols-3 gap-6">
                @foreach ($team as $member)
                    <div class="p-6 bg-white border rounded-xl text-center">
                        <div class="w-16 h-16 mx-auto mb-3 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 font-bold text-xl">
                            {{ strtoupper(substr($member['name'], 0, 1)) }}
                        </div>
                        <h3 class="font-semibold">{{ $member['name'] }}</h3>
                        <p class="text-sm text-gray-500">{{ $member['role'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
