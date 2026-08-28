@extends('layouts.auth')

@section('title', 'Create Account')

@section('content')
    <span class="inline-flex items-center gap-2 font-mono text-xs uppercase tracking-[0.2em] text-coral mb-5">
        <span class="w-8 h-px bg-coral"></span> Sinel Academy
    </span>
    <h1 class="font-display text-3xl font-semibold text-ink tracking-tight mb-2">Create your account</h1>
    <p class="text-ink/60 mb-8">Join Sinel Academy and start property-ready training.</p>

    @if ($errors->any())
        <div class="mb-6 rounded-2xl border border-coral/30 bg-coral/5 text-coral px-4 py-4 text-sm">
            <ul class="list-disc list-inside space-y-0.5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('register') }}" class="space-y-5">
        @csrf

        <div>
            <label for="name" class="block text-sm font-medium text-ink mb-2">Full Name</label>
            <input type="text" name="name" id="name" required autofocus
                   value="{{ old('name') }}"
                   class="w-full rounded-xl border border-line px-4 py-2.5 text-sm focus:outline-none focus:border-emerald"
                   placeholder="Jane Doe">
        </div>

        <div>
            <label for="email" class="block text-sm font-medium text-ink mb-2">Email</label>
            <input type="email" name="email" id="email" required
                   value="{{ old('email') }}"
                   class="w-full rounded-xl border border-line px-4 py-2.5 text-sm focus:outline-none focus:border-emerald"
                   placeholder="you@example.com">
        </div>

        <div>
            <label for="phone" class="block text-sm font-medium text-ink mb-2">Phone <span class="text-ink/40 font-normal">(optional)</span></label>
            <input type="text" name="phone" id="phone"
                   value="{{ old('phone') }}"
                   class="w-full rounded-xl border border-line px-4 py-2.5 text-sm focus:outline-none focus:border-emerald"
                   placeholder="+256 7XX XXX XXX">
        </div>

        <div>
            <label for="password" class="block text-sm font-medium text-ink mb-2">Password</label>
            <input type="password" name="password" id="password" required
                   class="w-full rounded-xl border border-line px-4 py-2.5 text-sm focus:outline-none focus:border-emerald"
                   placeholder="At least 8 characters">
        </div>

        <div>
            <label for="password_confirmation" class="block text-sm font-medium text-ink mb-2">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required
                   class="w-full rounded-xl border border-line px-4 py-2.5 text-sm focus:outline-none focus:border-emerald"
                   placeholder="Re-enter your password">
        </div>

        <button type="submit"
                class="w-full inline-flex items-center justify-center gap-2 bg-emerald hover:bg-emerald-light text-white font-semibold px-6 py-3 rounded-full transition-colors">
            Create Account
        </button>
    </form>

    <p class="mt-8 text-sm text-ink/50">
        Already have an account?
        <a href="{{ route('login.student') }}" class="text-emerald font-semibold">Sign in</a>
    </p>

    <a href="{{ route('home') }}" class="mt-8 inline-flex items-center gap-2 text-sm text-ink/40 hover:text-ink transition-colors">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
        Back to site
    </a>
@endsection