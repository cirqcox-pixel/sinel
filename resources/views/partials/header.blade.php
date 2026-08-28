{{--
    Sinel Hospitality — Site Header
    Structure: (1) utility ticker bar, (2) main nav, (3) mobile off-canvas menu.
    Nav order matches the actual section order on the home page:
    Home → About → Solutions → Why Us → Insights → Academy → Contact.
    Active state: pass the current route/section name to `nav-link` via the
    `active` class check below, or wire up `request()->routeIs(...)` per link.
--}}
<header class="sticky top-0 z-50">

    {{-- Utility ticker bar --}}
    <div class="bg-emerald text-sage/90 overflow-hidden border-b border-emerald-light/40">
        <div class="max-w-[1400px] mx-auto flex items-center justify-between px-5 md:px-8 h-9 text-xs font-mono tracking-wide">
            <div class="hidden sm:flex items-center overflow-hidden w-full" aria-hidden="true">
                <div class="ticker-track">
                    @php
                        $tickerItems = [
                            'TURNKEY PROJECTS',
                            'HOSPITALITY MANAGEMENT',
                            'DESIGN & BUILD',
                            'PRE-OPENING & LAUNCH',
                            'REVENUE MANAGEMENT',
                            'STAFF TRAINING',
                            'ASSET MANAGEMENT',
                            'QUALITY AUDITS',
                        ];
                        // Duplicated once so the 50%-translate loop is seamless.
                        $tickerItems = array_merge($tickerItems, $tickerItems);
                    @endphp
                    @foreach ($tickerItems as $item)
                        <span class="mx-6">{{ $item }}</span><span class="text-coral">&middot;</span>
                    @endforeach
                </div>
            </div>
            <p class="flex sm:hidden items-center gap-1 font-mono text-[11px]">THE BEST HOSPITALITY COMPANY IN AFRICA</p>
            <a href="mailto:info@sinelhospitality.com" class="hidden md:inline-block shrink-0 pl-6 hover:text-coral transition-colors">
                info@sinelhospitality.com
            </a>
        </div>
    </div>

    {{-- Main nav --}}
    <div class="bg-sage/95 backdrop-blur border-b border-line">
        <div class="max-w-[1400px] mx-auto flex items-center justify-between px-5 md:px-8 h-20">

            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                {{-- TODO: swap in the real logo file at public/images/logo.png --}}
                <img src="{{ asset('sinel_logo.png') }}" alt="Sinel Hospitality" class="h-12 w-auto shrink-0">
            </a>

            <nav class="hidden lg:flex items-center gap-9 font-medium text-[15px] text-ink/80" aria-label="Primary">
                @php
                    // Order mirrors the section order on the home page itself.
                    $navItems = [
                        'home' => ['label' => 'Home', 'href' => route('home')],
                        'about' => ['label' => 'About', 'href' => '#about'],
                        'solutions' => ['label' => 'Solutions', 'href' => '#solutions'],
                        'why-us' => ['label' => 'Why Us', 'href' => '#why-us'],
                        'insights' => ['label' => 'Insights', 'href' => '#insights'],
                        'academy' => ['label' => 'Academy', 'href' => '#academy'],
                        'contact' => ['label' => 'Contact', 'href' => '#contact'],
                    ];
                @endphp
                @foreach ($navItems as $key => $item)
                    <a href="{{ $item['href'] }}"
                       class="nav-link transition-colors {{ request()->routeIs($key) ? 'text-emerald' : 'hover:text-emerald' }}">
                        {{ $item['label'] }}
                    </a>
                @endforeach
            </nav>

            <div class="flex items-center gap-3">

                @auth
                    {{-- Signed in: straight to the right dashboard, plus logout --}}
                    <a href="{{ auth()->user()->isAdmin() ? route('admin.dashboard') : route('student.dashboard') }}"
                       class="hidden lg:inline-flex items-center gap-2 text-sm font-semibold text-ink/80 hover:text-emerald border border-line hover:border-emerald rounded-full pl-3 pr-4 py-2 transition-colors">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle>
                        </svg>
                        {{ explode(' ', auth()->user()->name)[0] }}
                    </a>
                    <form method="POST" action="{{ route('logout') }}" class="hidden lg:block">
                        @csrf
                        <button type="submit" class="text-sm font-semibold text-ink/50 hover:text-coral transition-colors px-2">Log Out</button>
                    </form>
                @else
                    {{-- Guest: student / admin login dropdown --}}
                    <details class="relative hidden lg:block group/login">
                        <summary class="list-none cursor-pointer inline-flex items-center gap-2 text-sm font-semibold text-ink/80 hover:text-emerald border border-line hover:border-emerald rounded-full pl-3 pr-4 py-2 transition-colors select-none">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            Login
                        </summary>
                        <div class="absolute right-0 mt-2 w-48 bg-card border border-line rounded-2xl shadow-xl overflow-hidden py-2 z-10">
                            <a href="{{ route('login.student') }}" class="block px-4 py-2.5 text-sm text-ink/80 hover:bg-sage hover:text-emerald transition-colors">
                                Student Login
                            </a>
                            <a href="{{ route('login.admin') }}" class="block px-4 py-2.5 text-sm text-ink/80 hover:bg-sage hover:text-emerald transition-colors">
                                Admin Login
                            </a>
                            <a href="{{ route('register') }}" class="block px-4 py-2.5 text-sm text-emerald font-medium hover:bg-sage transition-colors border-t border-line">
                                Create Student Account
                            </a>
                        </div>
                    </details>
                @endauth

                <a href="#contact"
                   class="hidden lg:inline-flex items-center gap-2 bg-coral hover:bg-coral-dark text-white text-sm font-semibold px-5 py-2.5 rounded-full transition-colors">
                    Discuss Your Project
                </a>

                <button type="button"
                        id="menuBtn"
                        aria-label="Open menu"
                        aria-expanded="false"
                        aria-controls="mobileMenu"
                        class="lg:hidden w-10 h-10 flex flex-col items-center justify-center gap-1.5 rounded-full border border-line">
                    <span class="block w-5 h-[2px] bg-ink"></span>
                    <span class="block w-5 h-[2px] bg-ink"></span>
                </button>
            </div>
        </div>
    </div>

    {{-- Mobile off-canvas menu --}}
    <div id="mobileMenu"
         class="mobile-menu fixed top-0 right-0 h-full w-[82%] max-w-sm bg-emerald text-sage z-[60] shadow-2xl px-7 pt-7 pb-10 flex flex-col"
         role="dialog" aria-modal="true" aria-label="Mobile navigation">
        <div class="flex items-center justify-between mb-10">
            <span class="font-display text-lg font-semibold">Sinel Hospitality</span>
            <button type="button" id="menuClose" aria-label="Close menu"
                    class="w-9 h-9 rounded-full border border-sage/30 flex items-center justify-center">
                <span class="block w-4 h-[2px] bg-sage rotate-45 relative top-[1px]"></span>
                <span class="block w-4 h-[2px] bg-sage -rotate-45 relative -left-4"></span>
            </button>
        </div>
        <nav class="flex flex-col gap-6 font-display text-2xl" aria-label="Mobile primary">
            @foreach ($navItems as $item)
                <a href="{{ $item['href'] }}" class="hover:text-coral transition-colors">{{ $item['label'] }}</a>
            @endforeach
        </nav>

        <div class="mt-10 pt-6 border-t border-sage/15">
            @auth
                <p class="font-mono text-[10px] uppercase tracking-[0.2em] text-sage/50 mb-3">Account</p>
                <div class="flex flex-col gap-3 font-body text-base">
                    <a href="{{ auth()->user()->isAdmin() ? route('admin.dashboard') : route('student.dashboard') }}"
                       class="inline-flex items-center gap-2 hover:text-coral transition-colors">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle>
                        </svg>
                        {{ explode(' ', auth()->user()->name)[0] }}'s Dashboard
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="inline-flex items-center gap-2 hover:text-coral transition-colors">Log Out</button>
                    </form>
                </div>
            @else
                <p class="font-mono text-[10px] uppercase tracking-[0.2em] text-sage/50 mb-3">Login</p>
                <div class="flex flex-col gap-3 font-body text-base">
                    <a href="{{ route('login.student') }}" class="inline-flex items-center gap-2 hover:text-coral transition-colors">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                        Student Login
                    </a>
                    <a href="{{ route('login.admin') }}" class="inline-flex items-center gap-2 hover:text-coral transition-colors">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                        Admin Login
                    </a>
                    <a href="{{ route('register') }}" class="inline-flex items-center gap-2 text-coral font-medium">
                        Create Student Account
                    </a>
                </div>
            @endauth
        </div>

        <a href="#contact" class="mt-6 inline-flex justify-center items-center gap-2 bg-coral text-white font-semibold px-5 py-3 rounded-full">
            Discuss Your Project
        </a>
    </div>
    <div id="menuOverlay" class="fixed inset-0 bg-ink/50 z-[55] hidden"></div>
</header>