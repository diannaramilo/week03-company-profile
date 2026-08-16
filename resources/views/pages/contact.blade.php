@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

    <section class="relative overflow-hidden">
        <div class="blob w-80 h-80 bg-coral top-[-4rem] right-[-4rem]"></div>
        <div class="relative max-w-6xl mx-auto px-6 pt-20 pb-12 text-center">
            <span class="eyebrow inline-block text-xs text-mint bg-mint/10 px-4 py-2 rounded-full mb-6">Get In Touch</span>
            <h1 class="font-display text-5xl font-medium text-ink max-w-2xl mx-auto leading-[1.1] mb-6">Contact Us</h1>
            <p class="text-slate max-w-xl mx-auto leading-relaxed">
                Have a project in mind? Send us a message and our team will get back to you.
            </p>
        </div>
    </section>

    <section class="max-w-6xl mx-auto px-6 pb-24">
        <div class="grid md:grid-cols-2 gap-8">

            {{-- Contact Form (UI only) --}}
            <form class="bg-white rounded-2xl border border-ink/5 p-8 space-y-5">
                <div>
                    <label class="eyebrow text-xs text-slate block mb-2">Full Name</label>
                    <input type="text" placeholder="Juan Dela Cruz"
                           class="w-full border border-ink/10 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-violet/40 focus:border-violet transition">
                </div>
                <div>
                    <label class="eyebrow text-xs text-slate block mb-2">Email Address</label>
                    <input type="email" placeholder="juan@email.com"
                           class="w-full border border-ink/10 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-violet/40 focus:border-violet transition">
                </div>
                <div>
                    <label class="eyebrow text-xs text-slate block mb-2">Message</label>
                    <textarea rows="4" placeholder="Tell us about your project..."
                              class="w-full border border-ink/10 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-violet/40 focus:border-violet transition resize-none"></textarea>
                </div>
                <button type="button"
                        class="w-full bg-gradient-to-r from-violet to-coral text-white font-medium py-3.5 rounded-xl hover:opacity-90 transition">
                    Send Message
                </button>
            </form>

            {{-- Company Details --}}
            <div class="space-y-5">
                <div class="rounded-2xl bg-violet/10 p-6">
                    <p class="eyebrow text-xs text-violetdeep mb-2">Address</p>
                    <p class="text-ink">{{ $company['address'] }}</p>
                </div>
                <div class="rounded-2xl bg-coral/10 p-6">
                    <p class="eyebrow text-xs text-coral mb-2">Email</p>
                    <p class="text-ink">{{ $company['email'] }}</p>
                </div>
                <div class="rounded-2xl bg-mint/10 p-6">
                    <p class="eyebrow text-xs text-mint mb-2">Phone</p>
                    <p class="text-ink">{{ $company['phone'] }}</p>
                </div>
                <div class="rounded-2xl overflow-hidden border border-ink/5">
                    <iframe
                        src="https://maps.google.com/maps?q=Sta.%20Cruz%2C%20Laguna&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        class="w-full h-40" loading="lazy"></iframe>
                </div>
                <div class="rounded-2xl bg-amber/10 p-6">
                    <p class="eyebrow text-xs text-amber mb-2">Social Media</p>
                    <div class="flex gap-4">
                        @foreach ($socialLinks as $platform => $url)
                            <a href="{{ $url }}" class="text-ink hover:text-violet transition text-sm font-medium">{{ $platform }}</a>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection