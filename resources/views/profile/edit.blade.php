@extends('layouts.student')

@section('title', 'Profile')

@section('content')
    <span class="inline-flex items-center gap-2 font-mono text-xs uppercase tracking-[0.2em] text-coral mb-4">
        <span class="w-8 h-px bg-coral"></span> Account
    </span>
    <h1 class="font-display text-3xl font-semibold text-ink tracking-tight mb-8">Profile</h1>

    <div class="grid lg:grid-cols-2 gap-6">

        {{-- Profile details --}}
        <div class="bg-card border border-line rounded-3xl p-7">
            <p class="font-semibold text-ink mb-5">Personal Details</p>

            @if ($errors->has('name') || $errors->has('email') || $errors->has('phone') || $errors->has('bio'))
                <div class="mb-5 rounded-2xl border border-coral/30 bg-coral/5 text-coral px-4 py-3 text-sm">
                    Please check the fields below.
                </div>
            @endif

            <form method="POST" action="{{ route('profile.update') }}" class="space-y-5">
                @csrf
                @method('PUT')

                <div>
                    <label for="name" class="block text-sm font-medium text-ink mb-2">Full Name</label>
                    <input type="text" name="name" id="name" required
                           value="{{ old('name', $user->name) }}"
                           class="w-full rounded-xl border border-line px-4 py-2.5 text-sm focus:outline-none focus:border-emerald">
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-ink mb-2">Email</label>
                    <input type="email" name="email" id="email" required
                           value="{{ old('email', $user->email) }}"
                           class="w-full rounded-xl border border-line px-4 py-2.5 text-sm focus:outline-none focus:border-emerald">
                </div>

                <div>
                    <label for="phone" class="block text-sm font-medium text-ink mb-2">Phone</label>
                    <input type="text" name="phone" id="phone"
                           value="{{ old('phone', $user->phone) }}"
                           class="w-full rounded-xl border border-line px-4 py-2.5 text-sm focus:outline-none focus:border-emerald">
                </div>

                <div>
                    <label for="bio" class="block text-sm font-medium text-ink mb-2">Bio <span class="text-ink/40 font-normal">(optional)</span></label>
                    <textarea name="bio" id="bio" rows="3"
                              class="w-full rounded-xl border border-line px-4 py-2.5 text-sm focus:outline-none focus:border-emerald">{{ old('bio', $user->bio) }}</textarea>
                </div>

                <button type="submit" class="inline-flex items-center gap-2 bg-emerald hover:bg-emerald-light text-white font-semibold px-5 py-2.5 rounded-full transition-colors text-sm">
                    Save Changes
                </button>
            </form>
        </div>

        {{-- Password --}}
        <div class="bg-card border border-line rounded-3xl p-7 h-fit">
            <p class="font-semibold text-ink mb-5">Change Password</p>

            @if ($errors->has('current_password') || $errors->has('password'))
                <div class="mb-5 rounded-2xl border border-coral/30 bg-coral/5 text-coral px-4 py-3 text-sm">
                    {{ $errors->first('current_password') ?: $errors->first('password') }}
                </div>
            @endif

            <form method="POST" action="{{ route('profile.password') }}" class="space-y-5">
                @csrf
                @method('PUT')

                <div>
                    <label for="current_password" class="block text-sm font-medium text-ink mb-2">Current Password</label>
                    <input type="password" name="current_password" id="current_password" required
                           class="w-full rounded-xl border border-line px-4 py-2.5 text-sm focus:outline-none focus:border-emerald">
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-ink mb-2">New Password</label>
                    <input type="password" name="password" id="password" required
                           class="w-full rounded-xl border border-line px-4 py-2.5 text-sm focus:outline-none focus:border-emerald">
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-ink mb-2">Confirm New Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" required
                           class="w-full rounded-xl border border-line px-4 py-2.5 text-sm focus:outline-none focus:border-emerald">
                </div>

                <button type="submit" class="inline-flex items-center gap-2 bg-ink hover:bg-ink/90 text-white font-semibold px-5 py-2.5 rounded-full transition-colors text-sm">
                    Update Password
                </button>
            </form>
        </div>
    </div>
@endsection