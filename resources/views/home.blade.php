@extends('layouts.app')

@section('title', 'Sinel Hospitality — Hospitality Solutions Company | Turnkey Projects & Management Solutions')
@section('meta_description', 'Sinel Hospitality is a hospitality solutions company specializing in turnkey hospitality projects and professional management solutions across East Africa — from concept to operations.')

@section('content')

<section class="relative min-h-[88vh] flex items-end overflow-hidden">
    <div class="absolute inset-0">
        <img
            src="https://images.unsplash.com/photo-1571896349842-33c89424de2d?auto=format&fit=crop&w=2000&q=80"
            alt="Sunlit resort terrace overlooking water"
            class="w-full h-full object-cover"
        >
        <div class="absolute inset-0 bg-gradient-to-r from-ink/80 via-ink/45 to-ink/15"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-ink/50 via-transparent to-ink/20"></div>
    </div>

    <div class="relative max-w-[1400px] w-full mx-auto px-5 md:px-8 pt-28 pb-16 sm:pb-20">
        <p class="text-[11px] uppercase tracking-[0.28em] text-coral mb-5">Est. 2022 &middot; A house for houses</p>
        <h1 class="font-display text-[2.7rem] sm:text-6xl lg:text-7xl font-medium text-sage leading-[1.05] max-w-3xl">
            We work with you to bring the future of your property <span class="italic">to life.</span>
        </h1>
        <p class="mt-6 text-base sm:text-lg text-sage/80 max-w-xl leading-relaxed font-light">
            From the first sketch to the first guest — Sinel stays at the table.
            Hotels, restaurants and resorts, opened and kept with care.
        </p>
        <div class="mt-9 flex flex-wrap items-center gap-3">
            <a href="#contact" class="btn btn-gold">Begin with us</a>
            <a href="#insights" class="btn btn-ghost btn-on-dark">See the houses</a>
        </div>

        <div class="mt-14 grid grid-cols-3 gap-6 max-w-lg border-t border-sage/20 pt-6">
            <div>
                <p class="font-display text-3xl text-sage italic">20+</p>
                <p class="mt-1 text-[11px] uppercase tracking-[0.16em] text-sage/60">Properties</p>
            </div>
            <div>
                <p class="font-display text-3xl text-sage italic">4</p>
                <p class="mt-1 text-[11px] uppercase tracking-[0.16em] text-sage/60">Countries</p>
            </div>
            <div>
                <p class="font-display text-3xl text-sage italic">2022</p>
                <p class="mt-1 text-[11px] uppercase tracking-[0.16em] text-sage/60">Founded</p>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     ABOUT — Identity, Positioning, Vision & Mission, Values
     Review #10: keep it tight — who we are, mission, vision, values.
     Review #11 + #17: state the identity sentence and full
     positioning statement once, clearly, instead of scattering it.
============================================================ --}}
<section id="about" class="py-16 sm:py-20 md:py-24 lg:py-28 border-t border-line">
    <div class="max-w-[1400px] mx-auto px-5 md:px-8">

        {{-- Bio / Positioning --}}
        <div class="grid lg:grid-cols-[0.9fr_1.1fr] gap-12 lg:gap-16 items-center mb-20">
            <div class="reveal photo-frame aspect-[4/5] max-h-[560px]">
                <img
                    src="https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?auto=format&fit=crop&w=1200&q=80"
                    alt="A quietly set hotel dining room"
                    loading="lazy"
                >
            </div>
            <div class="reveal">
                <span class="inline-flex items-center gap-2 text-[11px] uppercase tracking-[0.22em] text-coral mb-5">
                    <span class="w-8 h-px bg-coral"></span> Who we are
                </span>
                <h2 class="font-display text-4xl sm:text-5xl font-medium text-ink tracking-tight leading-[1.12]">
                    A partner in the room,<br><span class="italic text-emerald">not a deck on the table.</span>
                </h2>
                <div class="mt-6 space-y-5 text-ink/70 leading-relaxed">
                <p>
                    Sinel Hospitality is a hospitality solutions company specializing in turnkey hospitality
                    projects and professional management solutions. We partner with hotel owners, investors,
                    developers, and restaurateurs to design, develop, launch, operate, and optimize hospitality
                    businesses across East Africa.
                </p>
                <p>
                    From concept creation and pre-opening to operational management and commercial growth, we
                    deliver practical solutions that create exceptional guest experiences and sustainable
                    business performance.
                </p>
                </div>
            </div>
        </div>

        {{-- Vision & Mission --}}
        <div class="grid sm:grid-cols-2 gap-5 mb-20">
            <div class="reveal bg-card border border-line rounded-xl p-8">
                <p class="text-[11px] uppercase tracking-[0.22em] text-coral mb-4">Vision</p>
                <p class="font-display text-2xl sm:text-3xl italic text-ink leading-snug">
                    The best hospitality company in Africa.
                </p>
            </div>
            <div class="reveal bg-card border border-line rounded-xl p-8" style="transition-delay: 80ms">
                <p class="text-[11px] uppercase tracking-[0.22em] text-coral mb-4">Mission</p>
                <p class="font-display text-2xl sm:text-3xl italic text-ink leading-snug">
                    Above-average returns through professional management and real partnership.
                </p>
            </div>
        </div>

        {{-- Values --}}
        <div class="mb-14 reveal">
            <p class="font-mono text-xs uppercase tracking-[0.2em] text-coral mb-4">Core Values</p>
            <h3 class="font-display text-3xl sm:text-4xl font-semibold text-ink tracking-tight">What we stand for.</h3>
        </div>

        @php
            $values = [
                'Family Atmosphere', 'Creative & Innovative', 'Respect & Integrity',
                'Professionalism', 'Employee Development', 'Pride & Ownership',
                'Environmental Harmony', 'Community Impact', 'We Have Fun',
            ];
        @endphp
        <div class="reveal flex flex-wrap gap-3 mb-20">
            @foreach ($values as $value)
                <span class="inline-flex items-center gap-2 bg-card border border-line rounded-full px-4 py-2 text-sm font-medium text-ink/75">
                    <span class="w-1.5 h-1.5 rounded-full bg-coral shrink-0"></span>
                    {{ $value }}
                </span>
            @endforeach
        </div>

        {{-- Purpose --}}
        <div class="reveal relative rounded-xl overflow-hidden min-h-[280px] flex items-center">
            <img src="https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?auto=format&fit=crop&w=1800&q=80" alt="" class="absolute inset-0 w-full h-full object-cover" loading="lazy">
            <div class="absolute inset-0 bg-emerald-deep/75"></div>
            <div class="relative px-8 py-16 sm:py-20 text-center text-sage w-full">
                <p class="text-[11px] uppercase tracking-[0.22em] text-coral mb-6">Our purpose</p>
                <p class="font-display text-2xl sm:text-4xl italic leading-snug max-w-3xl mx-auto">
                    &ldquo;Innovative, complete, wholesome hospitality — in a unique, sustainable environment.&rdquo;
                </p>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     PROCESS — Discover → Design → Build → Open → Operate → Optimize
     Review #5: one diagram says more than three pages of copy.
============================================================ --}}
<section id="process" class="py-16 sm:py-20 md:py-24 lg:py-28 border-t border-line">
    <div class="max-w-[1400px] mx-auto px-5 md:px-8">

        <div class="max-w-2xl mb-14 reveal">
            <span class="inline-flex items-center gap-2 font-mono text-xs uppercase tracking-[0.2em] text-coral mb-5">
                <span class="w-8 h-px bg-coral"></span> How We Work
            </span>
            <h2 class="font-display text-4xl sm:text-5xl font-semibold text-ink tracking-tight leading-[1.1]">
                One process,<br><span class="italic text-emerald">start to finish.</span>
            </h2>
        </div>

        @php
            $processSteps = ['Discover', 'Design', 'Build', 'Open', 'Operate', 'Optimize'];
        @endphp
        <div class="reveal grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-6 lg:gap-4">
            @foreach ($processSteps as $i => $step)
                <div class="process-step">
                    <p class="font-display text-3xl italic text-coral">{{ sprintf('%02d', $i + 1) }}</p>
                    <p class="mt-2 font-display text-xl text-ink">{{ $step }}</p>
                    @unless($loop->last)
                        <span class="hidden lg:block absolute top-5 right-0 w-8 h-px bg-line translate-x-1/2"></span>
                    @endunless
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================================
     SOLUTIONS — "What We Deliver"
     Review #2, #8, #12, #13: replace the flat 8-item service list
     with two clearly explained pillars (Turnkey Projects and
     Management Solutions), each grouping many sub-services so the
     company reads as larger and more focused, not as a consultancy
     that does a little of everything.
============================================================ --}}
<section id="solutions" class="py-16 sm:py-20 md:py-24 lg:py-28 border-t border-line">
    <div class="max-w-[1400px] mx-auto px-5 md:px-8">

        <div class="max-w-2xl mb-16 reveal">
            <span class="inline-flex items-center gap-2 font-mono text-xs uppercase tracking-[0.2em] text-coral mb-5">
                <span class="w-8 h-px bg-coral"></span> What We Deliver
            </span>
            <h2 class="font-display text-4xl sm:text-5xl font-semibold text-ink tracking-tight leading-[1.1]">
                Two ways we build<br><span class="italic text-emerald">hospitality businesses.</span>
            </h2>
        </div>

        @php
            $turnkeySteps = [
                'Feasibility', 'Design', 'Construction Coordination', 'Procurement',
                'Kitchen Design', 'Interior Styling', 'Recruitment', 'Training',
                'Pre-opening', 'Launch',
            ];
            $turnkeyTypes = [
                'Hotel Development', 'Restaurant Development', 'Boutique Hotels', 'Resort Development',
                'Interior Design', 'Kitchen Planning', 'Equipment Procurement', 'Pre-opening',
            ];
            $managementSolutions = [
                'Hotel Management', 'Asset Management', 'Revenue Management', 'Sales & Marketing',
                'SOP Development', 'Staff Training', 'Recruitment', 'Financial Controls',
                'Procurement', 'Quality Audits',
            ];
        @endphp

        <div class="grid lg:grid-cols-2 gap-6">
            {{-- Turnkey Projects --}}
            <div class="reveal bg-card border border-line rounded-xl p-8">
                <span class="w-12 h-12 rounded-full bg-emerald/10 flex items-center justify-center">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="text-emerald">
                        <polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/>
                    </svg>
                </span>
                <h3 class="mt-5 font-display text-2xl font-semibold text-ink">Turnkey Hospitality Projects</h3>
                <p class="mt-3 text-ink/65 leading-relaxed">
                    We take hospitality projects from an idea to a fully operational business — from land or
                    buildings to operational hotels and restaurants.
                </p>
                <div class="mt-6 flex flex-wrap gap-2">
                    @foreach ($turnkeySteps as $step)
                        <span class="inline-flex items-center bg-sage/30 border border-line rounded-full px-3.5 py-1.5 text-xs font-medium text-ink/75">{{ $step }}</span>
                    @endforeach
                </div>
                <p class="mt-6 text-xs font-mono uppercase tracking-[0.15em] text-ink/40">We design and build</p>
                <div class="mt-3 flex flex-wrap gap-2">
                    @foreach ($turnkeyTypes as $type)
                        <span class="inline-flex items-center border border-line rounded-full px-3.5 py-1.5 text-xs font-medium text-ink/60">{{ $type }}</span>
                    @endforeach
                </div>
            </div>

            {{-- Management Solutions --}}
            <div class="reveal bg-card border border-line rounded-xl p-8" style="transition-delay: 80ms">
                <span class="w-12 h-12 rounded-full bg-emerald/10 flex items-center justify-center">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="text-emerald">
                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                    </svg>
                </span>
                <h3 class="mt-5 font-display text-2xl font-semibold text-ink">Hospitality Management Solutions</h3>
                <p class="mt-3 text-ink/65 leading-relaxed">
                    Already own a hotel? We help improve profitability, service quality and operational
                    performance through professional hospitality management.
                </p>
                <div class="mt-6 flex flex-wrap gap-2">
                    @foreach ($managementSolutions as $solution)
                        <span class="inline-flex items-center bg-sage/30 border border-line rounded-full px-3.5 py-1.5 text-xs font-medium text-ink/75">{{ $solution }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     INDUSTRIES WE SERVE
     Review #6: one simple checklist section.
============================================================ --}}
<section id="industries" class="py-16 sm:py-20 md:py-24 lg:py-28 border-t border-line bg-card">
    <div class="max-w-[1400px] mx-auto px-5 md:px-8">
        <div class="max-w-2xl mb-10 reveal">
            <span class="inline-flex items-center gap-2 font-mono text-xs uppercase tracking-[0.2em] text-coral mb-5">
                <span class="w-8 h-px bg-coral"></span> Who We Work With
            </span>
            <h2 class="font-display text-4xl sm:text-5xl font-semibold text-ink tracking-tight leading-[1.1]">
                We work with
            </h2>
        </div>

        @php
            $industries = [
                'Hotels', 'Resorts', 'Guest Houses', 'Restaurants',
                'Lodges', 'Retreat Centres', 'Apartments', 'Clubs & Wellness Facilities',
            ];
        @endphp
        <div class="reveal flex flex-wrap gap-3">
            @foreach ($industries as $industry)
                <span class="inline-flex items-center gap-2 bg-white border border-line rounded-full px-4 py-2 text-sm font-medium text-ink/80">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="text-emerald shrink-0"><path d="M20 6 9 17l-5-5"/></svg>
                    {{ $industry }}
                </span>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================================
     NUMBERS — Review #9: people trust numbers, even approximate.
============================================================ --}}
<section id="numbers" class="py-16 sm:py-20 border-t border-line">
    <div class="max-w-[1400px] mx-auto px-5 md:px-8">
        @php
            $stats = [
                ['value' => '20+', 'label' => 'Hospitality Projects'],
                ['value' => '500+', 'label' => 'Staff Trained'],
                ['value' => '4', 'label' => 'Countries Served'],
                ['value' => '50+', 'label' => 'Years Combined Experience'],
            ];
        @endphp
        <div class="reveal grid grid-cols-2 sm:grid-cols-4 gap-6 text-center">
            @foreach ($stats as $stat)
                <div>
                    <p class="font-display text-4xl sm:text-5xl font-semibold text-emerald">{{ $stat['value'] }}</p>
                    <p class="mt-2 text-sm text-ink/60">{{ $stat['label'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================================
     WHY US — four points (review #14) plus the "how we manage"
     principles strip, kept as supporting texture underneath.
============================================================ --}}
<section id="why-us" class="py-16 sm:py-20 md:py-24 lg:py-28 bg-emerald-deep text-sage">
    <div class="max-w-[1400px] mx-auto px-5 md:px-8">

        <div class="max-w-2xl mb-16 reveal">
            <span class="inline-flex items-center gap-2 font-mono text-xs uppercase tracking-[0.2em] text-coral mb-5">
                <span class="w-8 h-px bg-coral"></span> Why Choose Us
            </span>
            <h2 class="font-display text-4xl sm:text-5xl font-semibold tracking-tight leading-[1.1]">
                Built for owners.<br><span class="italic">Trusted by brands.</span>
            </h2>
        </div>

        @php
            $whyUs = [
                ['icon' => 'compass', 'title' => 'Industry Experience', 'copy' => 'Decades of practical leadership.'],
                ['icon' => 'layers', 'title' => 'End-to-End Delivery', 'copy' => 'One partner from concept to operation.'],
                ['icon' => 'trending-up', 'title' => 'Commercial Focus', 'copy' => 'Everything is designed to improve profitability.'],
                ['icon' => 'map-pin', 'title' => 'Local Knowledge', 'copy' => 'East African hospitality specialists.'],
            ];
            $whyUsIcons = [
                'compass' => '<circle cx="12" cy="12" r="10"/><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"/>',
                'layers' => '<polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/>',
                'trending-up' => '<polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/>',
                'map-pin' => '<circle cx="12" cy="10" r="3"/><path d="M12 21s-7-6.5-7-11a7 7 0 0 1 14 0c0 4.5-7 11-7 11Z"/>',
            ];
        @endphp

        <div class="reveal grid sm:grid-cols-2 lg:grid-cols-4 gap-5 mb-16">
            @foreach ($whyUs as $i => $point)
                <div class="bg-sage/[0.06] border border-sage/15 rounded-3xl p-7" style="transition-delay: {{ $i * 60 }}ms">
                    <span class="w-11 h-11 rounded-full bg-coral text-white flex items-center justify-center">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                            {!! $whyUsIcons[$point['icon']] !!}
                        </svg>
                    </span>
                    <p class="mt-4 font-display text-lg font-semibold">{{ $point['title'] }}</p>
                    <p class="mt-1.5 text-sm text-sage/70 leading-relaxed">{{ $point['copy'] }}</p>
                </div>
            @endforeach
        </div>

        {{-- How we manage — condensed to short standalone lines --}}
        <div class="reveal border-t border-sage/15 pt-14">
            <p class="font-mono text-xs uppercase tracking-[0.2em] text-coral mb-8">How We Manage</p>
            @php
                $principles = ['Players, not spectators.', 'No standard patterns.', 'Detail is a driving force.', 'Managers own their unit.'];
            @endphp
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ($principles as $p)
                    <p class="font-display text-lg italic text-sage leading-snug">&ldquo;{{ $p }}&rdquo;</p>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     FEATURED PROJECTS ("Insights" / project index)
     Review #7: people buy results — each project should read as
     Photo, Location, Challenge, Solution, Outcome, not just a name.
     Still driven by the admin-managed $project record; the
     challenge/solution/outcome fields are optional so this keeps
     working even before those columns are populated.
============================================================ --}}
<style>
    #insights .project-row.is-active .row-number,
    #insights .project-row:hover .row-number,
    #insights .project-row.is-active .row-arrow,
    #insights .project-row:hover .row-arrow { color: #C4A574; }
    #insights .project-row.is-active .row-name,
    #insights .project-row:hover .row-name { color: #2A241E; }
</style>
<section id="insights" class="py-16 sm:py-20 md:py-24 lg:py-28 bg-sage overflow-hidden">
    <div class="max-w-[1400px] mx-auto px-5 md:px-8">

        <div class="flex flex-wrap items-end justify-between gap-6 mb-14 reveal">
            <div>
                <span class="inline-flex items-center gap-2 font-mono text-xs uppercase tracking-[0.2em] text-coral mb-5">
                    <span class="w-8 h-px bg-coral"></span> Featured Projects
                </span>
                <h2 class="font-display text-4xl sm:text-5xl font-medium text-ink tracking-tight leading-[1.1]">
                    Houses we keep.<br><span class="italic text-emerald">Guests can feel it.</span>
                </h2>
            </div>
            <a href="{{ route('projects.index') }}" class="hidden sm:inline-flex items-center gap-2 text-sm font-semibold text-ink/70 hover:text-emerald transition-colors">
                View all projects
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
            </a>
        </div>

        @php
            // Pulled from the projects table (managed at /admin/projects).
            // Falls back to an empty state below if none are published yet.
            $projects = \App\Models\Project::published()->ordered()->get();
        @endphp

        @if ($projects->isEmpty())
            <div class="reveal bg-card border border-line rounded-3xl p-10 text-center text-ink/50">
                No projects published yet — add one from
                <a href="{{ route('admin.projects.index') }}" class="text-emerald font-medium">the admin dashboard</a>.
            </div>
        @else
        <div class="reveal grid lg:grid-cols-[0.85fr_1.15fr] gap-x-16 gap-y-10 items-start">

            {{-- Directory list — hover / focus / tap a row to update the panel --}}
            <div role="list" aria-label="Project index" class="order-2 lg:order-1 border-t border-line">
                @foreach ($projects as $i => $project)
                    <button type="button"
                            class="project-row w-full text-left py-6 border-b border-line {{ $i === 0 ? 'is-active' : '' }}"
                            data-project-row="{{ $i }}"
                            aria-pressed="{{ $i === 0 ? 'true' : 'false' }}">
                        <span class="flex items-baseline justify-between gap-4">
                            <span class="flex items-baseline gap-4 min-w-0">
                                <span class="row-number font-mono text-xs shrink-0">{{ sprintf('%02d', $i + 1) }}</span>
                                <span class="row-name font-display text-2xl sm:text-3xl font-medium truncate">{{ $project->title }}</span>
                            </span>
                            <svg class="row-arrow shrink-0" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14M13 5l7 7-7 7"/>
                            </svg>
                        </span>
                        <span class="row-meta block mt-1.5 pl-[2.9rem] font-mono text-[11px] uppercase tracking-[0.15em]">
                            {{ $project->category }} — {{ $project->location }}
                        </span>
                    </button>
                @endforeach
            </div>

            {{-- Visual panel — one layer per project, cross-faded by is-active. --}}
            <div id="projectPanelWrap" class="order-1 lg:order-2 relative aspect-[4/3] lg:aspect-[4/5] rounded-[2rem] overflow-hidden">
                @foreach ($projects as $i => $project)
                    <div class="project-panel absolute inset-0 {{ $i === 0 ? 'is-active' : '' }}"
                         data-project-panel="{{ $i }}"
                         @unless($project->cover_image_url) style="background: linear-gradient(160deg, {{ $project->color_from }}, {{ $project->color_to }});" @endunless>
                        @if ($project->cover_image_url)
                            <img src="{{ $project->cover_image_url }}" alt="{{ $project->title }}" class="absolute inset-0 w-full h-full object-cover">
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-ink/75 via-ink/15 to-transparent"></div>
                        <span class="absolute -top-6 -right-2 font-display text-[9rem] sm:text-[11rem] font-semibold text-white/[0.07] select-none leading-none pointer-events-none">
                            {{ sprintf('%02d', $i + 1) }}
                        </span>
                        <div class="absolute top-6 left-6 flex items-center gap-2">
                            <span class="font-mono text-[10px] uppercase tracking-[0.15em] text-coral bg-ink/30 backdrop-blur px-2.5 py-1 rounded-full">
                                {{ $project->category }}
                            </span>
                            @if ($project->hasVideo())
                                <span class="w-6 h-6 rounded-full bg-ink/30 backdrop-blur flex items-center justify-center" title="Video available">
                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="white"><polygon points="5 3 19 12 5 21 5 3"/></svg>
                                </span>
                            @endif
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 p-7 sm:p-8">
                            <p class="font-display text-2xl sm:text-3xl font-semibold text-white leading-tight">{{ $project->title }}</p>
                            <p class="text-sm text-white/70 mt-1">{{ $project->location }}</p>

                            {{-- Challenge / Solution / Outcome — optional fields, shown only when set --}}
                            @if (!empty($project->challenge) || !empty($project->solution) || !empty($project->outcome))
                                <div class="mt-4 space-y-1.5">
                                    @if (!empty($project->challenge))
                                        <p class="text-xs text-white/60"><span class="text-coral font-semibold uppercase tracking-wide">Challenge </span>{{ $project->challenge }}</p>
                                    @endif
                                    @if (!empty($project->solution))
                                        <p class="text-xs text-white/60"><span class="text-coral font-semibold uppercase tracking-wide">Solution </span>{{ $project->solution }}</p>
                                    @endif
                                    @if (!empty($project->outcome))
                                        <p class="text-xs text-white/60"><span class="text-coral font-semibold uppercase tracking-wide">Outcome </span>{{ $project->outcome }}</p>
                                    @endif
                                </div>
                            @elseif ($project->description)
                                <p class="text-sm text-white/60 mt-3 leading-relaxed max-w-md line-clamp-2">{{ $project->description }}</p>
                            @endif

                            <a href="{{ route('projects.show', $project) }}" class="inline-flex items-center gap-1.5 mt-4 text-sm font-semibold text-coral hover:text-white transition-colors">
                                View project details
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        @endif

        <div class="sm:hidden mt-8">
            <a href="{{ route('projects.index') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-ink/70 hover:text-emerald transition-colors">
                View all projects
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
            </a>
        </div>
    </div>

    {{--
        INLINE on purpose. This section's click-to-update behavior kept
        breaking in production whenever the separate public/js/site.js file
        was missing, stale, or 404ing after deploys — impossible to debug
        blind. Putting the script directly on the page removes that entire
        failure mode: if you can see this section at all, this script is
        guaranteed to be present too.
    --}}
    <script>
        (function () {
            var rows = document.querySelectorAll('#insights .project-row');
            var panels = document.querySelectorAll('#insights .project-panel');
            if (!rows.length || !panels.length) return;

            function activate(index) {
                rows.forEach(function (row) {
                    var isMatch = row.getAttribute('data-project-row') === index;
                    row.classList.toggle('is-active', isMatch);
                    row.setAttribute('aria-pressed', isMatch ? 'true' : 'false');
                });
                panels.forEach(function (panel) {
                    var isMatch = panel.getAttribute('data-project-panel') === index;
                    panel.classList.toggle('is-active', isMatch);
                });
            }

            rows.forEach(function (row) {
                var index = row.getAttribute('data-project-row');
                row.addEventListener('mouseenter', function () { activate(index); });
                row.addEventListener('focus', function () { activate(index); });
                row.addEventListener('click', function () {
                    activate(index);
                    var panelWrap = document.getElementById('projectPanelWrap');
                    if (panelWrap && window.matchMedia('(max-width: 1023px)').matches) {
                        panelWrap.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    }
                });
            });
        })();
    </script>
</section>

{{-- ============================================================
     ACADEMY BRIEF — Sinel Academy teaser
     (Unchanged from the previous build — kept as-is per request.
     It automatically picks up the new brand colors since the
     Tailwind tokens it references — emerald/coral/sage/ink/card/line —
     were recolored above, not renamed.)
============================================================ --}}
<section id="academy" class="py-16 sm:py-20 md:py-24 lg:py-28 border-t border-line">
    <div class="max-w-[1400px] mx-auto px-5 md:px-8 grid lg:grid-cols-[1fr_0.85fr] gap-14 items-center">

        <div class="reveal">
            <span class="inline-flex items-center gap-2 font-mono text-xs uppercase tracking-[0.2em] text-coral mb-5">
                <span class="w-8 h-px bg-coral"></span> Sinel Academy
            </span>
            <h2 class="font-display text-4xl sm:text-5xl font-semibold text-ink tracking-tight leading-[1.1]">
                Where hospitality talent<br><span class="italic text-emerald">is built, not just hired.</span>
            </h2>
            <p class="mt-6 text-lg text-ink/65 leading-relaxed max-w-lg">
                Our advisory playbooks, turned into property-ready training your team can run from day one.
            </p>
            <a href="{{ route('academy') }}" class="btn btn-primary mt-8">
                Visit the Academy
            </a>
        </div>

        <div class="reveal bg-card border border-line rounded-3xl p-8">
            @php
                $academyPoints = [
                    ['icon' => 'trending-up', 'label' => 'Adaptive Curriculum'],
                    ['icon' => 'users', 'label' => 'Cohort-Based Learning'],
                    ['icon' => 'award', 'label' => 'Property-Ready Certification'],
                    ['icon' => 'bar-chart', 'label' => 'Measurable Performance Gains'],
                ];
                $academyIcons = [
                    'trending-up' => '<polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/>',
                    'users' => '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>',
                    'award' => '<circle cx="12" cy="8" r="6"/><path d="M15.5 13.5 17 22l-5-3-5 3 1.5-8.5"/>',
                    'bar-chart' => '<line x1="12" y1="20" x2="12" y2="10"/><line x1="18" y1="20" x2="18" y2="4"/><line x1="6" y1="20" x2="6" y2="16"/>',
                ];
            @endphp
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-7">
                @foreach ($academyPoints as $point)
                    <div class="flex items-start gap-3">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"
                             class="text-emerald shrink-0 mt-0.5">
                            {!! $academyIcons[$point['icon']] !!}
                        </svg>
                        <span class="text-sm font-medium text-ink/80 leading-snug">{{ $point['label'] }}</span>
                    </div>
                @endforeach
            </div>
            <div class="mt-7 pt-6 border-t border-line">
                <p class="font-mono text-[11px] uppercase tracking-[0.15em] text-ink/40">
                    Designed for hotel, resort &amp; restaurant teams across East Africa
                </p>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     SUSTAINABILITY — Environment & Sustainability
============================================================ --}}
<section id="sustainability" class="py-16 sm:py-20 md:py-24 lg:py-28 border-t border-line">
    <div class="max-w-[1400px] mx-auto px-5 md:px-8">

        <div class="max-w-2xl mb-16 reveal">
            <span class="inline-flex items-center gap-2 font-mono text-xs uppercase tracking-[0.2em] text-coral mb-5">
                <span class="w-8 h-px bg-coral"></span> Environment &amp; Sustainability
            </span>
            <h2 class="font-display text-4xl sm:text-5xl font-semibold text-ink tracking-tight leading-[1.1]">
                Sustainability is how<br><span class="italic text-emerald">we do business.</span>
            </h2>
            <p class="mt-5 text-ink/65 text-lg leading-relaxed">
                Environment, health and safety — built into how we operate.
            </p>
        </div>

        @php
            $sustainability = [
                ['title' => 'Reduce Energy Use', 'copy' => 'Energy-efficient facilities and solutions.', 'icon' => 'zap'],
                ['title' => 'Clean Air & Water', 'copy' => 'Less waste, safer materials.', 'icon' => 'droplet'],
                ['title' => 'Health & Safety', 'copy' => 'A safe workplace, always.', 'icon' => 'heart'],
                ['title' => 'People & Community', 'copy' => 'A workforce that reflects who we serve.', 'icon' => 'users'],
            ];
            $sustainabilityIcons = [
                'zap' => '<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>',
                'droplet' => '<path d="M12 2s7 7.5 7 12a7 7 0 0 1-14 0c0-4.5 7-12 7-12Z"/>',
                'heart' => '<path d="M20.8 4.6a5.5 5.5 0 0 0-7.8 0L12 5.6l-1-1a5.5 5.5 0 0 0-7.8 7.8l1 1L12 21l7.8-7.8 1-1a5.5 5.5 0 0 0 0-7.8Z"/>',
                'users' => '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>',
            ];
        @endphp

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
            @foreach ($sustainability as $i => $item)
                <div class="reveal group bg-card border border-line rounded-3xl p-7 hover:border-emerald hover:shadow-xl hover:-translate-y-1 transition-all duration-300"
                     style="transition-delay: {{ $i * 60 }}ms">
                    <span class="w-12 h-12 rounded-full bg-emerald/10 group-hover:bg-emerald flex items-center justify-center transition-colors">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"
                             class="text-emerald group-hover:text-sage transition-colors">
                            {!! $sustainabilityIcons[$item['icon']] !!}
                        </svg>
                    </span>
                    <h3 class="mt-5 font-display text-lg font-semibold text-ink leading-snug">{{ $item['title'] }}</h3>
                    <p class="mt-3 text-sm text-ink/60 leading-relaxed">{{ $item['copy'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================================
     CONTACT — Review #15: stronger calls to action than "Contact Us".
============================================================ --}}
<section id="contact" class="py-16 sm:py-20 md:py-24 lg:py-28 bg-emerald-deep text-sage">
    <div class="max-w-[1400px] mx-auto px-5 md:px-8">

        <div class="max-w-2xl mb-14 reveal">
            <span class="inline-flex items-center gap-2 font-mono text-xs uppercase tracking-[0.2em] text-coral mb-5">
                <span class="w-8 h-px bg-coral"></span> Schedule a Discovery Meeting
            </span>
            <h2 class="font-display text-4xl sm:text-5xl font-medium tracking-tight leading-[1.1]">
                Let's sit down and talk<br><span class="italic">about the house you see.</span>
            </h2>
            <p class="mt-5 text-sage/65 text-lg leading-relaxed">
                New development or existing property — let's discuss your project directly.
            </p>
        </div>

        @php
            $contacts = [
                ['name' => 'Nelson Besigye', 'phone' => '+256 772 902 188', 'phoneHref' => '+256772902188', 'whatsapp' => 'https://wa.me/256772902188'],
                ['name' => 'Simon Ateesa', 'phone' => '+256 774 058 752', 'phoneHref' => '+256774058752', 'whatsapp' => 'https://wa.me/256774058752'],
            ];
        @endphp

        <div class="grid sm:grid-cols-2 gap-5 mb-10">
            @foreach ($contacts as $i => $contact)
                <div class="reveal bg-sage/[0.06] border border-sage/15 rounded-3xl p-7" style="transition-delay: {{ $i * 80 }}ms">
                    <span class="w-12 h-12 rounded-full bg-coral/15 flex items-center justify-center">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="text-coral">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </span>
                    <p class="mt-5 font-display text-xl font-semibold">{{ $contact['name'] }}</p>
                    <a href="tel:{{ $contact['phoneHref'] }}" class="block mt-2 text-sm text-sage/70 hover:text-coral transition-colors">{{ $contact['phone'] }}</a>
                    <a href="{{ $contact['whatsapp'] }}" target="_blank" rel="noopener"
                       class="mt-2 inline-flex items-center gap-2 text-sm text-coral hover:text-sage transition-colors">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M17.5 14.4c-.3-.1-1.7-.8-1.9-.9-.3-.1-.5-.1-.7.1-.2.3-.8.9-.9 1.1-.2.2-.3.2-.6.1-1.6-.8-2.6-1.4-3.7-3.2-.3-.5.3-.4.8-1.5.1-.2 0-.4 0-.5l-.8-2c-.2-.5-.4-.4-.6-.4h-.5c-.2 0-.5.1-.7.3-.3.3-1 1-1 2.4s1 2.8 1.2 3c.1.2 2 3.1 4.9 4.3.7.3 1.2.5 1.6.6.7.2 1.3.2 1.8.1.6-.1 1.7-.7 2-1.4.2-.7.2-1.3.2-1.4 0-.2-.2-.2-.5-.3Z"/>
                            <path d="M20.5 3.5A11 11 0 0 0 2.2 16.7L1 23l6.4-1.7A11 11 0 1 0 20.5 3.5Zm-8.6 17.7h-.1a9.1 9.1 0 0 1-4.6-1.3l-.3-.2-3.8 1 1-3.7-.2-.4a9.1 9.1 0 1 1 8 4.6Z"/>
                        </svg>
                        WhatsApp
                    </a>
                </div>
            @endforeach
        </div>

        <div class="reveal flex flex-wrap items-center gap-4">
            <a href="https://wa.me/256772902188" target="_blank" rel="noopener" class="btn btn-gold">
                WhatsApp us
            </a>
            <span class="text-sm text-sage/50 font-mono">Kampala, Uganda — operating across Africa &amp; the Middle East</span>
        </div>
    </div>
</section>
@endsection