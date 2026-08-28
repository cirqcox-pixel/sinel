{{-- Sinel Hospitality — Site Footer --}}
<footer class="bg-emerald-deep text-sage mt-10">

    {{-- CTA banner --}}
    <div class="border-b border-sage/10">
        <div class="max-w-[1400px] mx-auto px-5 md:px-8 py-16 flex flex-col lg:flex-row items-start lg:items-center justify-between gap-8">
            <h2 class="font-display text-3xl sm:text-4xl font-medium italic max-w-xl leading-tight">
                Let&rsquo;s build the best hospitality company in Africa, together.
            </h2>
            <a href="#contact"
               class="inline-flex items-center gap-2 bg-coral hover:bg-coral-dark text-white font-semibold px-7 py-3.5 rounded-full transition-colors shrink-0">
                Book a Consultation
            </a>
        </div>
    </div>

    {{-- Columns --}}
    <div class="max-w-[1400px] mx-auto px-5 md:px-8 py-16 grid sm:grid-cols-2 lg:grid-cols-[1.1fr_0.9fr_1fr_1.2fr] gap-12">

        <div>
            <a href="{{ route('home') }}" class="flex items-center gap-3 mb-5">
                <span class="w-10 h-10 rounded-full bg-sage/10 border border-sage/20 flex items-center justify-center">
                    <span class="font-display text-base font-semibold">S</span>
                </span>
                <span class="font-display text-lg font-semibold">Sinel Hospitality</span>
            </a>
            <p class="text-sage/60 text-sm leading-relaxed max-w-xs">
                A hospitality consultancy firm delivering hotel &amp; resort management, restaurant
                management, event planning and personalized itineraries — working toward being the
                best hospitality company in Africa.
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
            <p class="font-mono text-xs uppercase tracking-[0.2em] text-coral mb-5">Company</p>
            <ul class="space-y-3 text-sm text-sage/75">
                <li><a href="#about" class="hover:text-sage transition-colors">About Us</a></li>
                <li><a href="#services" class="hover:text-sage transition-colors">Services</a></li>
                <li><a href="#why-us" class="hover:text-sage transition-colors">Why Choose Us</a></li>
                <li><a href="#academy" class="hover:text-sage transition-colors">Academy</a></li>
                <li><a href="#insights" class="hover:text-sage transition-colors">Insights</a></li>
                <li><a href="#sustainability" class="hover:text-sage transition-colors">Sustainability</a></li>
            </ul>
        </div>

        <div>
            <p class="font-mono text-xs uppercase tracking-[0.2em] text-coral mb-5">Services</p>
            <ul class="space-y-3 text-sm text-sage/75">
                <li><a href="#services" class="hover:text-sage transition-colors">Property Development</a></li>
                <li><a href="#services" class="hover:text-sage transition-colors">Design &amp; Construction</a></li>
                <li><a href="#services" class="hover:text-sage transition-colors">Recruitment &amp; Training</a></li>
                <li><a href="#services" class="hover:text-sage transition-colors">Operations</a></li>
                <li><a href="#services" class="hover:text-sage transition-colors">Sales &amp; Marketing</a></li>
            </ul>
        </div>

        <div>
            <p class="font-mono text-xs uppercase tracking-[0.2em] text-coral mb-5">Contact</p>
            <ul class="space-y-4 text-sm text-sage/75">
                <li>
                    <p class="text-sage font-medium">Nelson Besigye</p>
                    <a href="tel:+256772902188" class="block hover:text-sage transition-colors">+256 772 902 188</a>
                    <a href="mailto:nelson@sinelhospitality.com" class="block hover:text-sage transition-colors">nelson@sinelhospitality.com</a>
                </li>
                <li>
                    <p class="text-sage font-medium">Simon Ateesa</p>
                    <a href="tel:+256774058752" class="block hover:text-sage transition-colors">+256 774 058 752</a>
                    <a href="mailto:simon@sinelhospitality.com" class="block hover:text-sage transition-colors">simon@sinelhospitality.com</a>
                </li>
                <li class="pt-1 border-t border-sage/10">
                    <span>Kampala, Uganda — operating across Africa &amp; the Middle East</span>
                </li>
            </ul>
        </div>
    </div>

    {{-- Bottom bar --}}
    <div class="border-t border-sage/10">
        <div class="max-w-[1400px] mx-auto px-5 md:px-8 py-6 flex flex-col sm:flex-row items-center justify-between gap-3 text-xs text-sage/50">
            <p>&copy; {{ now()->year }} Sinel Hospitality. All rights reserved.</p>
            <p class="font-mono">www.sinelhospitality.com</p>
        </div>
    </div>
</footer>