@extends('layouts.app')

@section('title', 'Home')

@section('content')

    {{-- Hero Banner --}}
    <section class="bg-gradient-to-r from-indigo-600 to-indigo-800 text-white">
        <div class="max-w-6xl mx-auto px-6 py-24 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">{{ $company['tagline'] }}</h1>
            <p class="text-lg text-indigo-100 max-w-2xl mx-auto mb-8">
                {{ $company['name'] }} partners with startups and enterprises to design, build,
                and maintain software that keeps pace with their business.
            </p>
            <a href="{{ route('contact') }}"
               class="inline-block bg-white text-indigo-700 font-semibold px-8 py-3 rounded-lg hover:bg-indigo-50 transition">
                Start a Project
            </a>
        </div>
    </section>

    {{-- Company Introduction --}}
    <section class="max-w-6xl mx-auto px-6 py-16 text-center">
        <h2 class="text-3xl font-bold mb-4">Who We Are</h2>
        <p class="max-w-3xl mx-auto text-gray-600">
            {{ $company['name'] }} is a software development company dedicated to helping
            businesses establish a strong digital presence. From web platforms to mobile
            applications, we combine clean engineering with thoughtful design.
        </p>
    </section>

    {{-- Featured Services --}}
    <section class="bg-white py-16">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-10">Featured Services</h2>
            <div class="grid md:grid-cols-3 gap-8">
                @foreach ($featuredServices as $service)
                    <div class="p-6 border rounded-xl hover:shadow-lg transition">
                        <h3 class="text-xl font-semibold mb-2 text-indigo-600">{{ $service['title'] }}</h3>
                        <p class="text-gray-600">{{ $service['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Call To Action --}}
    <section class="bg-indigo-700 text-white py-16 text-center">
        <h2 class="text-3xl font-bold mb-4">Ready to build something great?</h2>
        <a href="{{ route('contact') }}"
           class="inline-block bg-white text-indigo-700 font-semibold px-8 py-3 rounded-lg hover:bg-indigo-50 transition">
            Contact Us Today
        </a>
    </section>

@endsection
