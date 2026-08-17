<footer class="bg-ink text-paper mt-24 relative overflow-hidden">
    <div class="blob w-72 h-72 bg-violet -bottom-20 -left-10"></div>
    <div class="blob w-64 h-64 bg-coral -bottom-10 right-0"></div>

    <div class="relative max-w-6xl mx-auto px-6 py-16 grid md:grid-cols-3 gap-10">
        <div>
            <div class="flex items-center gap-2.5 mb-3">
                <span class="w-8 h-8 rounded-xl bg-gradient-to-br from-violet to-coral"></span>
                <span class="font-display text-xl font-medium text-paper">NovaTech</span>
            </div>
            <p class="text-sm text-paper/60">{{ $company['tagline'] ?? '' }}</p>
        </div>

        <div>
            <h4 class="eyebrow text-xs text-mint mb-3">Contact</h4>
            <p class="text-sm text-paper/80">{{ $company['address'] ?? '' }}</p>
            <p class="text-sm text-paper/80">{{ $company['email'] ?? '' }}</p>
            <p class="text-sm text-paper/80">{{ $company['phone'] ?? '' }}</p>
        </div>

        <div>
            <h4 class="eyebrow text-xs text-mint mb-3">Follow</h4>
            <div class="flex flex-col gap-1.5 text-sm">
                <a href="#" class="text-paper/80 hover:text-amber transition w-fit">Facebook</a>
                <a href="#" class="text-paper/80 hover:text-amber transition w-fit">LinkedIn</a>
                <a href="#" class="text-paper/80 hover:text-amber transition w-fit">Twitter</a>
            </div>
        </div>
    </div>

    <div class="relative border-t border-white/10 text-center py-5 eyebrow text-[11px] text-paper/50">
        &copy; {{ date('Y') }} {{ $company['name'] ?? 'NovaTech Solutions' }}. All rights reserved.
    </div>
</footer>