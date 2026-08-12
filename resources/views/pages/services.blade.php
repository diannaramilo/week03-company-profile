@extends('layouts.app')

@section('title', 'Our Services')

@section('content')

    <section class="max-w-6xl mx-auto px-6 py-16">
        <h1 class="text-4xl font-bold mb-4 text-center">Our Services</h1>
        <p class="text-gray-600 text-center max-w-2xl mx-auto mb-12">
            We offer a full range of software services to help your business launch, grow,
            and stay secure online.
        </p>

        <div class="grid md:grid-cols-3 gap-8">
            @foreach ($services as $service)
                <div class="p-6 bg-white border rounded-xl hover:shadow-lg transition">
                    <div class="text-4xl mb-3">{{ $service['icon'] }}</div>
                    <h2 class="text-xl font-semibold mb-2 text-indigo-600">{{ $service['title'] }}</h2>
                    <p class="text-gray-600">{{ $service['description'] }}</p>
                </div>
            @endforeach
        </div>
    </section>

@endsection
