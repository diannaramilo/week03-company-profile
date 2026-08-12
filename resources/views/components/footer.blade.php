<footer class="bg-gray-900 text-gray-300 mt-16">
    <div class="max-w-6xl mx-auto px-6 py-10 grid md:grid-cols-3 gap-8">
        <div>
            <h3 class="text-xl font-bold text-white mb-2">{{ $company['name'] ?? 'NovaTech Solutions' }}</h3>
            <p class="text-sm text-gray-400">{{ $company['tagline'] ?? '' }}</p>
        </div>

        <div>
            <h4 class="font-semibold text-white mb-2">Contact</h4>
            <p class="text-sm">{{ $company['address'] ?? '' }}</p>
            <p class="text-sm">{{ $company['email'] ?? '' }}</p>
            <p class="text-sm">{{ $company['phone'] ?? '' }}</p>
        </div>

        <div>
            <h4 class="font-semibold text-white mb-2">Follow Us</h4>
            <div class="flex gap-4 text-sm">
                <a href="#" class="hover:text-indigo-400">Facebook</a>
                <a href="#" class="hover:text-indigo-400">LinkedIn</a>
                <a href="#" class="hover:text-indigo-400">Twitter</a>
            </div>
        </div>
    </div>

    <div class="border-t border-gray-700 text-center py-4 text-sm text-gray-500">
        &copy; {{ date('Y') }} {{ $company['name'] ?? 'NovaTech Solutions' }}. All rights reserved.
    </div>
</footer>
