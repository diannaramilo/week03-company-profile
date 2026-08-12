@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

    <section class="max-w-6xl mx-auto px-6 py-16">
        <h1 class="text-4xl font-bold mb-4 text-center">Contact Us</h1>
        <p class="text-gray-600 text-center max-w-2xl mx-auto mb-12">
            Have a project in mind? Send us a message and our team will get back to you.
        </p>

        <div class="grid md:grid-cols-2 gap-10">

            {{-- Contact Form (UI only) --}}
            <form class="bg-white p-6 border rounded-xl space-y-4">
                <div>
                    <label class="block text-sm font-medium mb-1">Full Name</label>
                    <input type="text" placeholder="Juan Dela Cruz"
                           class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Email Address</label>
                    <input type="email" placeholder="juan@email.com"
                           class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Message</label>
                    <textarea rows="5" placeholder="Tell us about your project..."
                              class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
                </div>
                <button type="button"
                        class="w-full bg-indigo-600 text-white font-semibold py-3 rounded-lg hover:bg-indigo-700 transition">
                    Send Message
                </button>
            </form>

            {{-- Company Details --}}
            <div class="space-y-6">
                <div>
                    <h2 class="font-semibold text-indigo-600 mb-1">Address</h2>
                    <p class="text-gray-600">{{ $company['address'] }}</p>
                </div>
                <div>
                    <h2 class="font-semibold text-indigo-600 mb-1">Email</h2>
                    <p class="text-gray-600">{{ $company['email'] }}</p>
                </div>
                <div>
                    <h2 class="font-semibold text-indigo-600 mb-1">Phone</h2>
                    <p class="text-gray-600">{{ $company['phone'] }}</p>
                </div>
                <div>
                    <h2 class="font-semibold text-indigo-600 mb-1">Find Us</h2>
                    <div class="w-full h-48 rounded-lg overflow-hidden border">
                        <iframe
                            src="https://maps.google.com/maps?q=Sta.%20Cruz%2C%20Laguna&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            class="w-full h-full" loading="lazy"></iframe>
                    </div>
                </div>
                <div>
                    <h2 class="font-semibold text-indigo-600 mb-1">Social Media</h2>
                    <div class="flex gap-4">
                        @foreach ($socialLinks as $platform => $url)
                            <a href="{{ $url }}" class="text-gray-600 hover:text-indigo-600">{{ $platform }}</a>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
