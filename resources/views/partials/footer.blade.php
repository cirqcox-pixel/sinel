<footer class="bg-emerald-deep text-sage mt-0">
    <div class="border-b border-sage/10">
        <div class="max-w-[1400px] mx-auto px-5 md:px-8 py-16 md:py-20 flex flex-col lg:flex-row items-start lg:items-end justify-between gap-8">
            <div class="max-w-xl">
                <p class="text-[11px] uppercase tracking-[0.22em] text-coral mb-4">A partner at the table</p>
                <h2 class="font-display text-4xl sm:text-5xl italic font-medium leading-[1.15]">
                    Let us help you bring the house of your future into the world.
                </h2>
            </div>
            <a href="{{ request()->routeIs('home') ? '#contact' : route('home').'#contact' }}"
               class="btn btn-gold shrink-0">
                Book a conversation
            </a>
        </div>
    </div>

    <div class="max-w-[1400px] mx-auto px-5 md:px-8 py-16 grid sm:grid-cols-2 lg:grid-cols-[1.2fr_0.8fr_0.8fr_1.2fr] gap-12">
        <div>
            <a href="{{ route('home') }}" class="flex items-center gap-3 mb-5">
                <img src="{{ asset('sinel_logo.png') }}" alt="" class="h-10 w-auto brightness-0 invert opacity-90">
            </a>
            <p class="text-sage/65 text-sm leading-relaxed max-w-xs">
                We design, open and run hotels, restaurants and resorts with the people who own them —
                quietly, carefully, and for the long stay.
            </p>
            <div class="flex items-center gap-3 mt-6">
                <a href="https://facebook.com/SinelHospitality" target="_blank" rel="noopener" aria-label="Facebook"
                   class="w-9 h-9 rounded-full border border-sage/20 flex items-center justify-center hover:border-coral hover:text-coral transition-colors">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M22 12a10 10 0 1 0-11.6 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.3c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.4v7A10 10 0 0 0 22 12Z"/></svg>
                </a>
                <a href="https://twitter.com/SINELTALITY" target="_blank" rel="noopener" aria-label="Twitter / X"
                   class="w-9 h-9 rounded-full border border-sage/20 flex items-center justify-center hover:border-coral hover:text-coral transition-colors">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M18.9 2H22l-7.6 8.7L23 22h-7l-5.4-6.9L4.4 22H1.3l8.2-9.3L1 2h7.2l4.9 6.3L18.9 2Zm-1.2 18h1.7L7.4 4H5.6l12.1 16Z"/></svg>
                </a>
                <a href="https://instagram.com/sinel_hospitality" target="_blank" rel="noopener" aria-label="Instagram"
                   class="w-9 h-9 rounded-full border border-sage/20 flex items-center justify-center hover:border-coral hover:text-coral transition-colors">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1"/></svg>
                </a>
            </div>
        </div>

        <div>
            <p class="text-[11px] uppercase tracking-[0.2em] text-coral mb-5">The house</p>
            <ul class="space-y-3 text-sm text-sage/75">
                <li><a href="{{ route('home') }}#about" class="hover:text-sage transition-colors">About</a></li>
                <li><a href="{{ route('home') }}#solutions" class="hover:text-sage transition-colors">How we work</a></li>
                <li><a href="{{ route('home') }}#insights" class="hover:text-sage transition-colors">Houses we keep</a></li>
                <li><a href="{{ route('academy') }}" class="hover:text-sage transition-colors">Academy</a></li>
                <li><a href="{{ route('home') }}#contact" class="hover:text-sage transition-colors">Visit</a></li>
            </ul>
        </div>

        <div>
            <p class="text-[11px] uppercase tracking-[0.2em] text-coral mb-5">Care</p>
            <ul class="space-y-3 text-sm text-sage/75">
                <li><a href="{{ route('home') }}#solutions" class="hover:text-sage transition-colors">Turnkey projects</a></li>
                <li><a href="{{ route('home') }}#solutions" class="hover:text-sage transition-colors">Management</a></li>
                <li><a href="{{ route('home') }}#sustainability" class="hover:text-sage transition-colors">Sustainability</a></li>
            </ul>
        </div>

        <div>
            <p class="text-[11px] uppercase tracking-[0.2em] text-coral mb-5">Concierge</p>
            <ul class="space-y-4 text-sm text-sage/75">
                <li>
                    <p class="text-sage font-medium">Nelson Besigye</p>
                    <a href="tel:+256772902188" class="block hover:text-coral transition-colors">+256 772 902 188</a>
                </li>
                <li>
                    <p class="text-sage font-medium">Simon Ateesa</p>
                    <a href="tel:+256774058752" class="block hover:text-coral transition-colors">+256 774 058 752</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="border-t border-sage/10">
        <div class="max-w-[1400px] mx-auto px-5 md:px-8 py-6 flex flex-col sm:flex-row items-center justify-between gap-3 text-xs text-sage/50 tracking-wide">
            <p>&copy; {{ now()->year }} Sinel Hospitality. Site by Cirqco Systems.</p>
            <p>Est. 2022 &middot; Kampala</p>
        </div>
    </div>
</footer>
