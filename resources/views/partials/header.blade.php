<header class="site-header sticky top-0 z-50">
    <div class="site-header-bar bg-sage/90 backdrop-blur-md border-b border-line/80">
        <div class="max-w-[1400px] mx-auto flex items-center justify-between px-5 md:px-8 h-[4.75rem]">

            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <img src="{{ asset('sinel_logo.png') }}" alt="Sinel Hospitality" class="h-11 w-auto shrink-0">
            </a>

            <nav class="hidden lg:flex items-center gap-8 text-[13px] tracking-[0.04em] text-ink/70" aria-label="Primary">
                @php
                    $home = route('home');
                    $onHome = request()->routeIs('home');
                    $navItems = [
                        'home' => ['label' => 'Home', 'href' => $home],
                        'about' => ['label' => 'About', 'href' => $onHome ? '#about' : $home.'#about'],
                        'solutions' => ['label' => 'Work', 'href' => $onHome ? '#solutions' : $home.'#solutions'],
                        'insights' => ['label' => 'Houses', 'href' => $onHome ? '#insights' : $home.'#insights'],
                        'academy' => ['label' => 'Academy', 'href' => $onHome ? '#academy' : route('academy')],
                        'contact' => ['label' => 'Visit', 'href' => $onHome ? '#contact' : $home.'#contact'],
                    ];
                @endphp
                @foreach ($navItems as $key => $item)
                    <a href="{{ $item['href'] }}"
                       class="nav-link {{ request()->routeIs($key) ? 'text-ink is-active' : 'hover:text-ink' }}">
                        {{ $item['label'] }}
                    </a>
                @endforeach
            </nav>

            <div class="flex items-center gap-3">

                @unless(config('app.static_export'))
                @auth
                    <a href="{{ auth()->user()->isAdmin() ? route('admin.dashboard') : route('student.dashboard') }}"
                       class="hidden lg:inline-flex items-center gap-2 text-sm text-ink/80 hover:text-emerald border border-line hover:border-coral rounded px-3 py-2 transition-colors">
                        {{ explode(' ', auth()->user()->name)[0] }}
                    </a>
                    <form method="POST" action="{{ route('logout') }}" class="hidden lg:block">
                        @csrf
                        <button type="submit" class="text-sm text-ink/50 hover:text-coral transition-colors px-2">Log Out</button>
                    </form>
                @else
                    <details class="relative hidden lg:block">
                        <summary class="list-none cursor-pointer text-sm text-ink/70 hover:text-ink px-2 py-2 select-none">
                            Login
                        </summary>
                        <div class="absolute right-0 mt-2 w-48 bg-card border border-line rounded-lg shadow-xl overflow-hidden py-2 z-10">
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
                @endunless

                <a href="{{ request()->routeIs('home') ? '#contact' : route('home').'#contact' }}"
                   class="btn btn-primary hidden lg:inline-flex">
                    Start a conversation
                </a>

                <button type="button"
                        id="menuBtn"
                        aria-label="Open menu"
                        aria-expanded="false"
                        aria-controls="mobileMenu"
                        class="lg:hidden w-10 h-10 flex flex-col items-center justify-center gap-1.5 rounded border border-line">
                    <span class="block w-5 h-[1.5px] bg-ink"></span>
                    <span class="block w-5 h-[1.5px] bg-ink"></span>
                </button>
            </div>
        </div>
    </div>

    <div id="mobileMenu"
         class="mobile-menu fixed top-0 right-0 h-full w-[82%] max-w-sm bg-emerald-deep text-sage z-[60] shadow-2xl px-7 pt-7 pb-10 flex flex-col"
         role="dialog" aria-modal="true" aria-label="Mobile navigation">
        <div class="flex items-center justify-between mb-10">
            <span class="font-display text-2xl italic">Sinel</span>
            <button type="button" id="menuClose" aria-label="Close menu"
                    class="w-9 h-9 rounded border border-sage/20 flex items-center justify-center text-sage">
                &times;
            </button>
        </div>
        <nav class="flex flex-col gap-5 font-display text-3xl italic" aria-label="Mobile primary">
            @foreach ($navItems as $item)
                <a href="{{ $item['href'] }}" class="hover:text-coral transition-colors">{{ $item['label'] }}</a>
            @endforeach
        </nav>

        <div class="mt-10 pt-6 border-t border-sage/15">
            @unless(config('app.static_export'))
            @auth
                <p class="text-[11px] uppercase tracking-[0.2em] text-sage/50 mb-3">Account</p>
                <div class="flex flex-col gap-3 font-body text-base">
                    <a href="{{ auth()->user()->isAdmin() ? route('admin.dashboard') : route('student.dashboard') }}"
                       class="hover:text-coral transition-colors">
                        {{ explode(' ', auth()->user()->name)[0] }}'s Dashboard
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="hover:text-coral transition-colors">Log Out</button>
                    </form>
                </div>
            @else
                <p class="text-[11px] uppercase tracking-[0.2em] text-sage/50 mb-3">Login</p>
                <div class="flex flex-col gap-3 font-body text-base">
                    <a href="{{ route('login.student') }}" class="hover:text-coral transition-colors">Student Login</a>
                    <a href="{{ route('login.admin') }}" class="hover:text-coral transition-colors">Admin Login</a>
                    <a href="{{ route('register') }}" class="text-coral">Create Student Account</a>
                </div>
            @endauth
            @endunless
        </div>

        <a href="{{ request()->routeIs('home') ? '#contact' : route('home').'#contact' }}" class="btn btn-gold mt-auto">
            Start a conversation
        </a>
    </div>
    <div id="menuOverlay" class="fixed inset-0 bg-ink/40 z-[55] hidden"></div>
</header>
