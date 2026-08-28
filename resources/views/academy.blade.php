@extends('layouts.app')

@section('title', 'Sinel Academy — Hospitality Training | Sinel Hospitality')
@section('meta_description', 'Sinel Academy turns Sinel Hospitality\'s advisory playbooks into structured, property-ready training for hotel, resort and restaurant teams across East Africa.')

@section('content')

{{-- ============================================================
     ACADEMY — HERO
============================================================ --}}
<section class="relative overflow-hidden min-h-[70vh] flex items-end">
    <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=2000&q=80" alt="Resort morning light" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-t from-ink/80 via-ink/40 to-ink/25"></div>
    <div class="relative max-w-[1400px] mx-auto px-5 md:px-8 pt-28 pb-16 sm:pb-20">
        <a href="{{ route('home') }}#academy" class="inline-flex items-center gap-2 text-sm text-sage/70 hover:text-coral transition-colors mb-8">
            Back to home
        </a>
        <span class="inline-flex items-center gap-2 text-[11px] uppercase tracking-[0.22em] text-coral mb-5">
            <span class="w-8 h-px bg-coral"></span> Sinel Academy
        </span>
        <h1 class="font-display text-[2.4rem] leading-[1.08] sm:text-6xl font-medium tracking-tight max-w-3xl text-sage">
            Where hospitality talent<br class="hidden sm:block"> <span class="italic">is grown, not just hired.</span>
        </h1>
        <p class="mt-6 text-lg text-sage/75 max-w-xl leading-relaxed font-light">
            Our operating playbooks, taught at the property — so your team can run the house from day one.
        </p>
        <div class="mt-9">
            <a href="#apply" class="btn btn-gold">Enquire about a cohort</a>
        </div>
    </div>
</section>

{{-- ============================================================
     PROGRAM PILLARS
============================================================ --}}
<section class="py-16 sm:py-20 md:py-24 border-b border-line">
    <div class="max-w-[1400px] mx-auto px-5 md:px-8">
        <div class="max-w-2xl mb-14 reveal">
            <span class="inline-flex items-center gap-2 font-mono text-xs uppercase tracking-[0.2em] text-coral mb-5">
                <span class="w-8 h-px bg-coral"></span> How It Works
            </span>
            <h2 class="font-display text-3xl sm:text-4xl font-semibold text-ink tracking-tight leading-[1.1]">
                Four pillars, one goal:<br><span class="italic text-emerald">property-ready teams.</span>
            </h2>
        </div>

        @php
            $pillars = [
                [
                    'title' => 'Adaptive Curriculum',
                    'copy' => 'Modules built from Sinel Hospitality\'s own operating playbooks, adapted to each property\'s brand standard and star rating.',
                    'icon' => 'trending-up',
                ],
                [
                    'title' => 'Cohort-Based Learning',
                    'copy' => 'Small, scheduled cohorts of hotel, resort and restaurant staff learning together — not a self-paced video library.',
                    'icon' => 'users',
                ],
                [
                    'title' => 'Property-Ready Certification',
                    'copy' => 'Every graduate is assessed against the same standards our consultants audit properties against.',
                    'icon' => 'award',
                ],
                [
                    'title' => 'Measurable Performance Gains',
                    'copy' => 'Guest satisfaction, service timing and safety-audit scores tracked before and after each cohort.',
                    'icon' => 'bar-chart',
                ],
            ];
            $pillarIcons = [
                'trending-up' => '<polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/>',
                'users' => '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>',
                'award' => '<circle cx="12" cy="8" r="6"/><path d="M15.5 13.5 17 22l-5-3-5 3 1.5-8.5"/>',
                'bar-chart' => '<line x1="12" y1="20" x2="12" y2="10"/><line x1="18" y1="20" x2="18" y2="4"/><line x1="6" y1="20" x2="6" y2="16"/>',
            ];
        @endphp

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
            @foreach ($pillars as $i => $pillar)
                <div class="reveal bg-card border border-line rounded-3xl p-7" style="transition-delay: {{ $i * 60 }}ms">
                    <span class="w-12 h-12 rounded-full bg-emerald/10 flex items-center justify-center">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="text-emerald">
                            {!! $pillarIcons[$pillar['icon']] !!}
                        </svg>
                    </span>
                    <h3 class="mt-5 font-display text-lg font-semibold text-ink leading-snug">{{ $pillar['title'] }}</h3>
                    <p class="mt-3 text-sm text-ink/60 leading-relaxed">{{ $pillar['copy'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================================
     WHO IT'S FOR
============================================================ --}}
<section class="py-16 sm:py-20 md:py-24 border-b border-line">
    <div class="max-w-[1400px] mx-auto px-5 md:px-8 grid lg:grid-cols-2 gap-14 items-start">
        <div class="reveal">
            <span class="inline-flex items-center gap-2 font-mono text-xs uppercase tracking-[0.2em] text-coral mb-5">
                <span class="w-8 h-px bg-coral"></span> Who It's For
            </span>
            <h2 class="font-display text-3xl sm:text-4xl font-semibold text-ink tracking-tight leading-[1.1]">
                Designed for hotel, resort<br>&amp; restaurant teams.
            </h2>
            <p class="mt-5 text-ink/65 leading-relaxed max-w-lg">
                Whether you're onboarding a new opening team or upskilling an existing property,
                Sinel Academy cohorts are built around real operating roles — not generic hospitality theory.
            </p>
        </div>

        @php
            $tracks = [
                ['role' => 'Front Office & Guest Services', 'copy' => 'Check-in flow, guest recovery, and brand-standard service scripts.'],
                ['role' => 'Food & Beverage', 'copy' => 'Menu costing, service sequencing, and food-safety compliance.'],
                ['role' => 'Housekeeping & Facilities', 'copy' => 'Quality audits, room turnover standards, and preventive maintenance.'],
                ['role' => 'Supervisors & Heads of Department', 'copy' => 'Team leadership, scheduling, and performance management.'],
            ];
        @endphp
        <div class="reveal space-y-4">
            @foreach ($tracks as $i => $track)
                <div class="flex items-start gap-4 bg-card border border-line rounded-2xl px-5 py-4" style="transition-delay: {{ $i * 50 }}ms">
                    <span class="font-mono text-xs text-emerald mt-1 shrink-0">{{ sprintf('%02d', $i + 1) }}</span>
                    <div>
                        <p class="font-semibold text-ink">{{ $track['role'] }}</p>
                        <p class="text-sm text-ink/60 mt-1">{{ $track['copy'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================================
     ENQUIRE
============================================================ --}}
<section id="apply" class="py-16 sm:py-20 md:py-24 bg-emerald-deep text-sage">
    <div class="max-w-[1400px] mx-auto px-5 md:px-8 max-w-2xl">
        <span class="inline-flex items-center gap-2 font-mono text-xs uppercase tracking-[0.2em] text-coral mb-5">
            <span class="w-8 h-px bg-coral"></span> Enquire
        </span>
        <h2 class="font-display text-3xl sm:text-4xl font-semibold tracking-tight leading-[1.1] mb-8">
            Bring a cohort to your property.
        </h2>

        {{--
            Simple mailto-based enquiry for now. Wire this to a real
            Enquiry model / mail notification once the backend is ready —
            e.g. Route::post('/academy/enquire', [AcademyEnquiryController::class, 'store']).
        --}}
        <a href="mailto:train@sinelhospitality.com?subject=Sinel%20Academy%20Enquiry"
           class="btn btn-gold">
            Email Sinel Academy
        </a>
        <p class="mt-4 text-sm text-sage/50">Or call +256 200 902 188.</p>
    </div>
</section>
@endsection