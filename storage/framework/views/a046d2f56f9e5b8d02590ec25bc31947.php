

<?php $__env->startSection('title', 'Sinel Hospitality — The Best Hospitality Company in Africa'); ?>

<?php $__env->startSection('content'); ?>


<section class="relative overflow-hidden">
    <div class="max-w-[1400px] mx-auto px-5 md:px-8 pt-14 sm:pt-20 pb-16 sm:pb-24 grid lg:grid-cols-[1.1fr_0.9fr] gap-14 items-center">
        <div>
            <span class="inline-flex items-center gap-2 font-mono text-xs uppercase tracking-[0.2em] text-emerald mb-6">
                <span class="w-8 h-px bg-coral"></span> Full-Service Hotel &amp; Resort Management
            </span>
            <h1 class="font-display text-[2.6rem] leading-[1.08] sm:text-6xl font-semibold text-ink tracking-tight">
                The best hospitality company<br class="hidden sm:block">
                <span class="italic text-emerald">in Africa.</span>
            </h1>
            <p class="mt-6 text-lg text-ink/70 max-w-xl leading-relaxed">
                Sinel Hospitality is a hospitality consultancy firm delivering hotel and resort management,
                restaurant management, event planning and personalized itineraries — creating innovative,
                complete and wholesome hospitality experiences in a unique and sustainable environment.
            </p>
            <div class="mt-9 flex flex-wrap items-center gap-4">
                <a href="#contact" class="inline-flex items-center gap-2 bg-emerald hover:bg-emerald-light text-sage font-semibold px-6 py-3.5 rounded-full transition-colors">
                    Book a Consultation
                </a>
                <a href="#services" class="inline-flex items-center gap-2 text-ink font-semibold px-6 py-3.5 rounded-full border border-line hover:border-emerald hover:text-emerald transition-colors">
                    Explore Services
                </a>
            </div>
        </div>

        <div class="relative">
            <div class="rounded-[2rem] bg-emerald overflow-hidden relative">
                <div class="absolute inset-0 bg-gradient-to-br from-emerald via-emerald-deep to-ink/80"></div>
                <div class="relative p-8 text-sage">
                    <p class="font-mono text-xs uppercase tracking-[0.2em] text-coral mb-4">Third-Party Management</p>
                    <p class="font-display text-xl sm:text-3xl italic leading-snug">
                        &ldquo;Third-party management companies encourage expansion both for the franchisor and the owner.&rdquo;
                    </p>
                    <p class="mt-3 text-sm text-sage/60 font-mono uppercase tracking-wide">— Hotel Analyst</p>

                    <div class="mt-8 pt-6 border-t border-sage/15">
                        <p class="font-display text-4xl font-semibold">360,000+</p>
                        <p class="text-sm text-sage/70 mt-1 max-w-sm">
                            rooms managed by the top ten third-party hotel operators in the U.S. alone —
                            a model Sinel Hospitality brings to Africa.
                        </p>
                    </div>
                </div>
            </div>
            <div class="absolute -bottom-6 -left-6 bg-card border border-line rounded-2xl px-5 py-4 shadow-xl hidden sm:block">
                <p class="font-mono text-[10px] uppercase tracking-widest text-ink/50">Full-Service</p>
                <p class="font-display text-lg font-semibold text-emerald">Site selection to daily operations</p>
            </div>
        </div>
    </div>
</section>


<section id="about" class="py-16 sm:py-20 md:py-24 lg:py-28 border-t border-line">
    <div class="max-w-[1400px] mx-auto px-5 md:px-8">

        
        <div class="grid lg:grid-cols-[0.55fr_1fr] gap-14 mb-20">
            <div class="reveal">
                <span class="inline-flex items-center gap-2 font-mono text-xs uppercase tracking-[0.2em] text-coral mb-5">
                    <span class="w-8 h-px bg-coral"></span> About Us
                </span>
                <h2 class="font-display text-4xl sm:text-5xl font-semibold text-ink tracking-tight leading-[1.1]">
                    Hospitality consultancy,<br><span class="italic text-emerald">end to end.</span>
                </h2>
            </div>
            <div class="reveal space-y-5 text-ink/70 leading-relaxed">
                <p>
                    Sinel Hospitality is a hospitality consultancy firm providing expert advice and support
                    across hotel and resort management, restaurant management, event planning and catering,
                    and personalized itineraries. Our team of experienced consultants brings a deep
                    understanding of the hospitality industry — whether you're improving an existing property
                    or launching a new venture.
                </p>

                <div class="grid sm:grid-cols-2 gap-4 pt-2">
                    <?php
                        $focusAreas = [
                            'Hotel & Resort Management Consulting',
                            'Restaurant Management Consulting',
                            'Event Planning & Catering',
                            'Personalized Itineraries',
                        ];
                    ?>
                    <?php $__currentLoopData = $focusAreas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="flex items-center gap-3 bg-card border border-line rounded-2xl px-4 py-3.5">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-emerald shrink-0"><path d="M20 6 9 17l-5-5"/></svg>
                            <span class="text-sm font-medium text-ink/80"><?php echo e($area); ?></span>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <p class="pt-2">
                    Beyond consulting, Sinel Hospitality supplies hotel linens and amenities — sheets, towels,
                    bedding, soaps, shampoos and lotions — carefully selected for quality, durability and
                    guest comfort.
                </p>
            </div>
        </div>

        
        <div class="grid sm:grid-cols-2 gap-5 mb-20">
            <div class="reveal bg-card border border-line rounded-3xl p-8">
                <p class="font-mono text-xs uppercase tracking-[0.2em] text-coral mb-4">Vision</p>
                <p class="font-display text-xl sm:text-2xl text-ink leading-snug">
                    To be perceived and acknowledged as &ldquo;the best hospitality company in Africa&rdquo; in
                    the eyes of our customers, business partners, employees and our competition.
                </p>
            </div>
            <div class="reveal bg-card border border-line rounded-3xl p-8" style="transition-delay: 80ms">
                <p class="font-mono text-xs uppercase tracking-[0.2em] text-coral mb-4">Mission</p>
                <p class="font-display text-xl sm:text-2xl text-ink leading-snug">
                    To achieve above-average returns for our owners through professional management,
                    positive communication and interaction with our guests, employees and business partners.
                </p>
            </div>
        </div>

        
        <div class="mb-14 reveal">
            <p class="font-mono text-xs uppercase tracking-[0.2em] text-coral mb-4">Our Values</p>
            <h3 class="font-display text-3xl sm:text-4xl font-semibold text-ink tracking-tight">What we stand for.</h3>
        </div>

        <?php
            $values = [
                'We believe in the family atmosphere.',
                'We are creative and innovative in carrying out our daily duties and in our approach to any task.',
                'We continuously strive to better ourselves through our passion for hospitality, self-improvement and learning.',
                'We display respect, fairness and integrity — fostering mutual trust and care with our employees, business partners and guests.',
                'We deal with others in a professional, harmonious manner, as we wish to be treated ourselves.',
                'We consider the development of all our employees a high priority in every field.',
                'We instill a sense of pride and ownership among our people.',
                'We strive for harmony with the natural environment and our cultural surroundings.',
                'We contribute our financial and human resources to bettering the environment and the communities we live in.',
                'We have fun and enjoy our work.',
            ];
        ?>
        <div class="reveal grid sm:grid-cols-2 gap-x-10 gap-y-4 mb-20">
            <?php $__currentLoopData = $values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="flex items-start gap-3 py-2 border-b border-line">
                    <span class="w-1.5 h-1.5 rounded-full bg-coral shrink-0 mt-2"></span>
                    <span class="text-sm text-ink/70 leading-relaxed"><?php echo e($value); ?></span>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        
        <div class="reveal relative rounded-[2rem] overflow-hidden bg-emerald-deep text-sage px-8 py-16 sm:py-20 text-center">
            <p class="font-mono text-xs uppercase tracking-[0.2em] text-coral mb-6">Our Purpose</p>
            <p class="font-display text-2xl sm:text-4xl italic leading-snug max-w-3xl mx-auto">
                &ldquo;To create and manage innovative, complete and wholesome hospitality experiences in a
                unique and sustainable environment.&rdquo;
            </p>
        </div>
    </div>
</section>


<section id="services" class="py-16 sm:py-20 md:py-24 lg:py-28 border-t border-line">
    <div class="max-w-[1400px] mx-auto px-5 md:px-8">

        <div class="max-w-2xl mb-16 reveal">
            <span class="inline-flex items-center gap-2 font-mono text-xs uppercase tracking-[0.2em] text-coral mb-5">
                <span class="w-8 h-px bg-coral"></span> Expertise &amp; Services
            </span>
            <h2 class="font-display text-4xl sm:text-5xl font-semibold text-ink tracking-tight leading-[1.1]">
                Site selection to<br><span class="italic text-emerald">daily operations.</span>
            </h2>
            <p class="mt-5 text-ink/65 text-lg leading-relaxed">
                A full-service hotel management company — Sinel Hospitality can assist at any point from
                site selection, through construction and pre-opening, to the successful ongoing operation
                of your hotel.
            </p>
        </div>

        <?php
            $services = [
                [
                    'label' => '01',
                    'title' => 'Property Development',
                    'copy' => 'Site identification and validation, concept development, market analysis and brand-owner approval for every new project.',
                    'icon' => 'compass',
                ],
                [
                    'label' => '02',
                    'title' => 'Design & Construction',
                    'copy' => 'Design reviews, development budget management, FF&E procurement and pre-opening services.',
                    'icon' => 'layers',
                ],
                [
                    'label' => '03',
                    'title' => 'Recruitment & Training',
                    'copy' => 'Staffing matrices, GM and HOD recruitment, induction, succession planning and employee recognition.',
                    'icon' => 'users',
                ],
                [
                    'label' => '04',
                    'title' => 'Operations',
                    'copy' => 'Day-to-day operations, safety and quality audits, guest satisfaction monitoring and timely reporting.',
                    'icon' => 'activity',
                ],
                [
                    'label' => '05',
                    'title' => 'Sales & Marketing',
                    'copy' => 'Bespoke sales and marketing plans, revenue management, online distribution audits and full channel-mix marketing.',
                    'icon' => 'trending-up',
                ],
                [
                    'label' => '06',
                    'title' => 'Brand Compliance',
                    'copy' => 'Supporting properties to deliver on every brand promise — from loyalty benefits to the guest experience.',
                    'icon' => 'shield',
                ],
                [
                    'label' => '07',
                    'title' => 'Project Management',
                    'copy' => 'Overseeing planning, follow-up and coordination between architects, designers and engineers from start to finish.',
                    'icon' => 'clipboard',
                ],
                [
                    'label' => '08',
                    'title' => 'Contract Management',
                    'copy' => 'Full property management — identifying key objectives and implementing them through unit and group-level management.',
                    'icon' => 'file-text',
                ],
            ];

            $serviceIcons = [
                'compass' => '<circle cx="12" cy="12" r="10"/><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"/>',
                'layers' => '<polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/>',
                'users' => '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>',
                'activity' => '<polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>',
                'trending-up' => '<polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/>',
                'shield' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10Z"/>',
                'clipboard' => '<rect x="4" y="4" width="16" height="18" rx="2"/><path d="M9 2h6a1 1 0 0 1 1 1v2H8V3a1 1 0 0 1 1-1Z"/><path d="M9 12h6M9 16h6"/>',
                'file-text' => '<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8Z"/><polyline points="14 2 14 8 20 8"/><path d="M16 13H8M16 17H8M10 9H8"/>',
            ];
        ?>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="reveal group relative bg-card border border-line rounded-3xl p-7 hover:border-emerald hover:shadow-xl hover:-translate-y-1 transition-all duration-300"
                     style="transition-delay: <?php echo e(($i % 4) * 60); ?>ms">
                    <span class="font-mono text-xs text-ink/30"><?php echo e($service['label']); ?></span>
                    <span class="mt-4 w-12 h-12 rounded-full bg-emerald/10 group-hover:bg-emerald flex items-center justify-center transition-colors">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"
                             class="text-emerald group-hover:text-sage transition-colors">
                            <?php echo $serviceIcons[$service['icon']]; ?>

                        </svg>
                    </span>
                    <h3 class="mt-5 font-display text-xl font-semibold text-ink leading-snug"><?php echo e($service['title']); ?></h3>
                    <p class="mt-3 text-sm text-ink/60 leading-relaxed"><?php echo e($service['copy']); ?></p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>


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

        <?php
            $ownerBenefits = [
                ['title' => 'Flexible terms', 'copy' => 'Equipped to operate everything from smaller, budget and midscale hotels to larger upscale assets, with more flexible contract terms than many providers.'],
                ['title' => 'Impartial advice', 'copy' => 'Independent, personalised guidance on brand selection, performance and the negotiation of competitive franchise fees.'],
                ['title' => 'Proven ability', 'copy' => 'Staffed by hotel industry experts with the international experience and local know-how to maximise success.'],
                ['title' => 'Relieved of the day-to-day', 'copy' => 'Third-party management frees owners from daily asset operations while retaining full financial oversight.'],
            ];
            $companyBenefits = [
                ['title' => 'Brand specialists', 'copy' => 'Our executive team has held high-profile roles within major hotel companies.'],
                ['title' => 'Market experts', 'copy' => 'In-depth working knowledge of the Middle East and African hotel landscape.'],
                ['title' => 'Collaborative partners', 'copy' => 'Committed to working together with brands to deliver enhanced brand equity and performance.'],
                ['title' => 'Asset-light expansion', 'copy' => 'A commercially attractive, lower-risk alternative to direct management that lets brands expand faster into new territories.'],
            ];
        ?>

        <div class="reveal grid lg:grid-cols-2 gap-x-16 gap-y-14 mb-16">
            <div>
                <div class="flex items-center gap-4 mb-7">
                    <span class="w-11 h-11 rounded-full bg-coral text-white flex items-center justify-center font-display text-lg font-semibold shrink-0">1</span>
                    <p class="font-display text-2xl font-semibold">For Hotel Owners</p>
                </div>
                <div class="space-y-6">
                    <?php $__currentLoopData = $ownerBenefits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $benefit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="pl-[3.6rem]">
                            <p class="font-semibold text-sage"><?php echo e($benefit['title']); ?></p>
                            <p class="text-sm text-sage/60 mt-1 leading-relaxed"><?php echo e($benefit['copy']); ?></p>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <div>
                <div class="flex items-center gap-4 mb-7">
                    <span class="w-11 h-11 rounded-full bg-coral text-white flex items-center justify-center font-display text-lg font-semibold shrink-0">2</span>
                    <p class="font-display text-2xl font-semibold">For Hotel Companies</p>
                </div>
                <div class="space-y-6">
                    <?php $__currentLoopData = $companyBenefits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $benefit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="pl-[3.6rem]">
                            <p class="font-semibold text-sage"><?php echo e($benefit['title']); ?></p>
                            <p class="text-sm text-sage/60 mt-1 leading-relaxed"><?php echo e($benefit['copy']); ?></p>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>

        
        <div class="reveal border-t border-sage/15 pt-14">
            <p class="font-mono text-xs uppercase tracking-[0.2em] text-coral mb-8">How We Manage</p>
            <?php
                $principles = [
                    ['title' => 'Players, not spectators.', 'copy' => 'We take an active role in every property we manage.'],
                    ['title' => 'No standard patterns.', 'copy' => 'Every concept is custom-built to its market, culture and setting.'],
                    ['title' => 'Detail is a driving force.', 'copy' => 'From service concepts to the smallest amenity, every element is evaluated.'],
                    ['title' => 'Managers own their unit.', 'copy' => 'We build frameworks and enthusiasm, not layers of oversight.'],
                ];
            ?>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <?php $__currentLoopData = $principles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div>
                        <p class="font-display text-lg italic text-sage leading-snug">&ldquo;<?php echo e($p['title']); ?>&rdquo;</p>
                        <p class="text-sm text-sage/55 mt-2 leading-relaxed"><?php echo e($p['copy']); ?></p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</section>


<style>
    /* Scoped, inline on purpose — same reasoning as the script at the end
       of this section: this feature's look shouldn't depend on whether
       public/css/site.css happens to be the current version on the server. */
    #insights .project-row { cursor: pointer; background: transparent; }
    #insights .project-row .row-number { color: rgba(21,22,26,.35); transition: color .25s ease; }
    #insights .project-row .row-name { color: rgba(21,22,26,.65); transition: color .25s ease; }
    #insights .project-row .row-meta { color: rgba(21,22,26,.35); transition: color .25s ease; }
    #insights .project-row .row-arrow { color: rgba(21,22,26,.25); transition: color .25s ease, transform .25s ease; }
    #insights .project-row.is-active .row-number,
    #insights .project-row:hover .row-number,
    #insights .project-row:focus-visible .row-number { color: #637FC4; }
    #insights .project-row.is-active .row-name,
    #insights .project-row:hover .row-name,
    #insights .project-row:focus-visible .row-name { color: #15161A; }
    #insights .project-row.is-active .row-meta,
    #insights .project-row:hover .row-meta,
    #insights .project-row:focus-visible .row-meta { color: rgba(21,22,26,.6); }
    #insights .project-row.is-active .row-arrow,
    #insights .project-row:hover .row-arrow,
    #insights .project-row:focus-visible .row-arrow { color: #637FC4; transform: translateX(4px); }
    #insights .project-panel { opacity: 0; z-index: 0; transition: opacity .6s ease; }
    #insights .project-panel.is-active { opacity: 1; z-index: 1; }
    @media (prefers-reduced-motion: reduce) {
        #insights .project-panel { transition: none; }
    }
</style>
<section id="insights" class="py-16 sm:py-20 md:py-24 lg:py-28 bg-sage overflow-hidden">
    <div class="max-w-[1400px] mx-auto px-5 md:px-8">

        <div class="flex flex-wrap items-end justify-between gap-6 mb-14 reveal">
            <div>
                <span class="inline-flex items-center gap-2 font-mono text-xs uppercase tracking-[0.2em] text-coral mb-5">
                    <span class="w-8 h-px bg-coral"></span> Insights
                </span>
                <h2 class="font-display text-4xl sm:text-5xl font-semibold text-ink tracking-tight leading-[1.1]">
                    The project index.
                </h2>
            </div>
            <a href="<?php echo e(route('projects.index')); ?>" class="hidden sm:inline-flex items-center gap-2 text-sm font-semibold text-ink/70 hover:text-emerald transition-colors">
                View all projects
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
            </a>
        </div>

        <?php
            // Pulled from the projects table (managed at /admin/projects).
            // Falls back to an empty state below if none are published yet.
            $projects = \App\Models\Project::published()->ordered()->get();
        ?>

        <?php if($projects->isEmpty()): ?>
            <div class="reveal bg-card border border-line rounded-3xl p-10 text-center text-ink/50">
                No projects published yet — add one from
                <a href="<?php echo e(route('admin.projects.index')); ?>" class="text-emerald font-medium">the admin dashboard</a>.
            </div>
        <?php else: ?>
        <div class="reveal grid lg:grid-cols-[0.85fr_1.15fr] gap-x-16 gap-y-10 items-start">

            
            <div role="list" aria-label="Project index" class="order-2 lg:order-1 border-t border-line">
                <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <button type="button"
                            class="project-row w-full text-left py-6 border-b border-line <?php echo e($i === 0 ? 'is-active' : ''); ?>"
                            data-project-row="<?php echo e($i); ?>"
                            aria-pressed="<?php echo e($i === 0 ? 'true' : 'false'); ?>">
                        <span class="flex items-baseline justify-between gap-4">
                            <span class="flex items-baseline gap-4 min-w-0">
                                <span class="row-number font-mono text-xs shrink-0"><?php echo e(sprintf('%02d', $i + 1)); ?></span>
                                <span class="row-name font-display text-2xl sm:text-3xl font-medium truncate"><?php echo e($project->title); ?></span>
                            </span>
                            <svg class="row-arrow shrink-0" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14M13 5l7 7-7 7"/>
                            </svg>
                        </span>
                        <span class="row-meta block mt-1.5 pl-[2.9rem] font-mono text-[11px] uppercase tracking-[0.15em]">
                            <?php echo e($project->category); ?> — <?php echo e($project->location); ?>

                        </span>
                    </button>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            
            <div id="projectPanelWrap" class="order-1 lg:order-2 relative aspect-[4/3] lg:aspect-[4/5] rounded-[2rem] overflow-hidden">
                <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="project-panel absolute inset-0 <?php echo e($i === 0 ? 'is-active' : ''); ?>"
                         data-project-panel="<?php echo e($i); ?>"
                         style="background: linear-gradient(160deg, <?php echo e($project->color_from); ?>, <?php echo e($project->color_to); ?>);">
                        <span class="absolute -top-6 -right-2 font-display text-[9rem] sm:text-[11rem] font-semibold text-white/[0.07] select-none leading-none pointer-events-none">
                            <?php echo e(sprintf('%02d', $i + 1)); ?>

                        </span>
                        <div class="absolute top-6 left-6">
                            <span class="font-mono text-[10px] uppercase tracking-[0.15em] text-coral bg-ink/30 backdrop-blur px-2.5 py-1 rounded-full">
                                <?php echo e($project->category); ?>

                            </span>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 p-7 sm:p-8">
                            <p class="font-display text-2xl sm:text-3xl font-semibold text-white leading-tight"><?php echo e($project->title); ?></p>
                            <p class="text-sm text-white/70 mt-1"><?php echo e($project->location); ?></p>
                            <?php if($project->description): ?>
                                <p class="text-sm text-white/60 mt-3 leading-relaxed max-w-md line-clamp-2"><?php echo e($project->description); ?></p>
                            <?php endif; ?>
                            <a href="<?php echo e(route('projects.show', $project)); ?>" class="inline-flex items-center gap-1.5 mt-4 text-sm font-semibold text-coral hover:text-white transition-colors">
                                View project details
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                            </a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <?php endif; ?>

        <div class="sm:hidden mt-8">
            <a href="<?php echo e(route('projects.index')); ?>" class="inline-flex items-center gap-2 text-sm font-semibold text-ink/70 hover:text-emerald transition-colors">
                View all projects
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
            </a>
        </div>
    </div>

    
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
                Sinel Academy turns our advisory playbooks into structured, property-ready training —
                so your team doesn't just learn the standard, they can run it from day one.
            </p>
            <a href="<?php echo e(route('academy')); ?>" class="mt-8 inline-flex items-center gap-2 bg-ink hover:bg-ink/90 text-sage font-semibold px-6 py-3.5 rounded-full transition-colors">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 10 12 5 2 10l10 5 10-5Z"/><path d="M6 12v5c0 1.5 3 3 6 3s6-1.5 6-3v-5"/>
                </svg>
                Explore the Academy
            </a>
        </div>

        <div class="reveal bg-card border border-line rounded-3xl p-8">
            <?php
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
            ?>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-7">
                <?php $__currentLoopData = $academyPoints; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $point): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="flex items-start gap-3">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"
                             class="text-emerald shrink-0 mt-0.5">
                            <?php echo $academyIcons[$point['icon']]; ?>

                        </svg>
                        <span class="text-sm font-medium text-ink/80 leading-snug"><?php echo e($point['label']); ?></span>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="mt-7 pt-6 border-t border-line">
                <p class="font-mono text-[11px] uppercase tracking-[0.15em] text-ink/40">
                    Designed for hotel, resort &amp; restaurant teams across East Africa
                </p>
            </div>
        </div>
    </div>
</section>


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
                We've aligned our goals for the environment, and health and safety, in five key areas —
                together with our suppliers, customers and stakeholders — to preserve our environment and
                protect the people we work with.
            </p>
        </div>

        <?php
            $sustainability = [
                [
                    'title' => 'Reduce Energy Use',
                    'copy' => 'Cutting carbon emissions through energy-efficient facilities, products and solutions.',
                    'icon' => 'zap',
                ],
                [
                    'title' => 'Preserve Clean Air & Water',
                    'copy' => 'Eliminating toxic materials and heavy metals from our supply chain, minimizing and recycling waste.',
                    'icon' => 'droplet',
                ],
                [
                    'title' => 'Ensure Health & Safety',
                    'copy' => 'Maintaining a safe workplace, supporting wellness programs, and reducing exposure to hazardous materials.',
                    'icon' => 'heart',
                ],
                [
                    'title' => 'People & Community',
                    'copy' => 'Valuing a diverse workforce representative of the people we serve — a moral and competitive advantage.',
                    'icon' => 'users',
                ],
            ];
            $sustainabilityIcons = [
                'zap' => '<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>',
                'droplet' => '<path d="M12 2s7 7.5 7 12a7 7 0 0 1-14 0c0-4.5 7-12 7-12Z"/>',
                'heart' => '<path d="M20.8 4.6a5.5 5.5 0 0 0-7.8 0L12 5.6l-1-1a5.5 5.5 0 0 0-7.8 7.8l1 1L12 21l7.8-7.8 1-1a5.5 5.5 0 0 0 0-7.8Z"/>',
                'users' => '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>',
            ];
        ?>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
            <?php $__currentLoopData = $sustainability; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="reveal group bg-card border border-line rounded-3xl p-7 hover:border-emerald hover:shadow-xl hover:-translate-y-1 transition-all duration-300"
                     style="transition-delay: <?php echo e($i * 60); ?>ms">
                    <span class="w-12 h-12 rounded-full bg-emerald/10 group-hover:bg-emerald flex items-center justify-center transition-colors">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"
                             class="text-emerald group-hover:text-sage transition-colors">
                            <?php echo $sustainabilityIcons[$item['icon']]; ?>

                        </svg>
                    </span>
                    <h3 class="mt-5 font-display text-lg font-semibold text-ink leading-snug"><?php echo e($item['title']); ?></h3>
                    <p class="mt-3 text-sm text-ink/60 leading-relaxed"><?php echo e($item['copy']); ?></p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>


<section id="contact" class="py-16 sm:py-20 md:py-24 lg:py-28 bg-emerald-deep text-sage">
    <div class="max-w-[1400px] mx-auto px-5 md:px-8">

        <div class="max-w-2xl mb-14 reveal">
            <span class="inline-flex items-center gap-2 font-mono text-xs uppercase tracking-[0.2em] text-coral mb-5">
                <span class="w-8 h-px bg-coral"></span> Get In Touch
            </span>
            <h2 class="font-display text-4xl sm:text-5xl font-semibold tracking-tight leading-[1.1]">
                Let's talk about<br><span class="italic">your property.</span>
            </h2>
            <p class="mt-5 text-sage/65 text-lg leading-relaxed">
                Whether you're planning a new development or looking to improve an existing property,
                reach out directly to our team.
            </p>
        </div>

        <?php
            $contacts = [
                ['name' => 'Nelson Besigye', 'phone' => '+256 772 902 188', 'phoneHref' => '+256772902188', 'email' => 'nelson@sinelhospitality.com'],
                ['name' => 'Simon Ateesa', 'phone' => '+256 774 058 752', 'phoneHref' => '+256774058752', 'email' => 'simon@sinelhospitality.com'],
            ];
        ?>

        <div class="grid sm:grid-cols-2 gap-5 mb-10">
            <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="reveal bg-sage/[0.06] border border-sage/15 rounded-3xl p-7" style="transition-delay: <?php echo e($i * 80); ?>ms">
                    <span class="w-12 h-12 rounded-full bg-coral/15 flex items-center justify-center">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="text-coral">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </span>
                    <p class="mt-5 font-display text-xl font-semibold"><?php echo e($contact['name']); ?></p>
                    <a href="tel:<?php echo e($contact['phoneHref']); ?>" class="block mt-2 text-sm text-sage/70 hover:text-coral transition-colors"><?php echo e($contact['phone']); ?></a>
                    <a href="mailto:<?php echo e($contact['email']); ?>" class="block text-sm text-sage/70 hover:text-coral transition-colors"><?php echo e($contact['email']); ?></a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="reveal flex flex-wrap items-center gap-4">
            <a href="mailto:nelson@sinelhospitality.com" class="inline-flex items-center gap-2 bg-coral hover:bg-coral-dark text-white font-semibold px-6 py-3.5 rounded-full transition-colors">
                Send us a message
            </a>
            <span class="text-sm text-sage/50 font-mono">Kampala, Uganda — operating across Africa &amp; the Middle East</span>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/cirqzhav/sinel/sinel_web/resources/views/index.blade.php ENDPATH**/ ?>