@php
    $isEdit = $project->exists;
@endphp

@if ($errors->any())
    <div class="mb-6 rounded-2xl border border-coral/30 bg-coral/5 text-coral px-5 py-4 text-sm">
        <p class="font-semibold mb-1">Please fix the following:</p>
        <ul class="list-disc list-inside space-y-0.5">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="grid lg:grid-cols-[1fr_0.7fr] gap-8">
    <div class="bg-card border border-line rounded-3xl p-7 space-y-6">

        <div>
            <label for="title" class="block text-sm font-medium text-ink mb-2">Project Title</label>
            <input type="text" name="title" id="title" required
                   value="{{ old('title', $project->title) }}"
                   class="w-full rounded-xl border border-line px-4 py-2.5 text-sm focus:outline-none focus:border-emerald"
                   placeholder="e.g. Kivu Terrace Residences">
        </div>

        <div>
            <label for="slug" class="block text-sm font-medium text-ink mb-2">
                URL Slug <span class="text-ink/40 font-normal">(optional — auto-generated from the title if left blank)</span>
            </label>
            <input type="text" name="slug" id="slug"
                   value="{{ old('slug', $project->slug) }}"
                   class="w-full rounded-xl border border-line px-4 py-2.5 text-sm font-mono focus:outline-none focus:border-emerald"
                   placeholder="kivu-terrace-residences">
        </div>

        <div class="grid sm:grid-cols-2 gap-6">
            <div>
                <label for="category" class="block text-sm font-medium text-ink mb-2">Category / Tag</label>
                <input type="text" name="category" id="category" required
                       value="{{ old('category', $project->category) }}"
                       class="w-full rounded-xl border border-line px-4 py-2.5 text-sm focus:outline-none focus:border-emerald"
                       placeholder="e.g. Branded Residences">
            </div>
            <div>
                <label for="location" class="block text-sm font-medium text-ink mb-2">Location</label>
                <input type="text" name="location" id="location" required
                       value="{{ old('location', $project->location) }}"
                       class="w-full rounded-xl border border-line px-4 py-2.5 text-sm focus:outline-none focus:border-emerald"
                       placeholder="e.g. Kigali, Rwanda">
            </div>
        </div>

        <div>
            <label for="description" class="block text-sm font-medium text-ink mb-2">Description</label>
            <textarea name="description" id="description" rows="5"
                      class="w-full rounded-xl border border-line px-4 py-2.5 text-sm focus:outline-none focus:border-emerald"
                      placeholder="Shown on the project's detail page.">{{ old('description', $project->description) }}</textarea>
        </div>
    </div>

    <div class="space-y-6">
        {{-- Cover image --}}
        <div class="bg-card border border-line rounded-3xl p-7 space-y-4">
            <p class="text-sm font-medium text-ink">Cover Image</p>
            <p class="text-xs text-ink/50 -mt-2">Used on the homepage, the projects listing, and this project's page. JPG or PNG, up to 5MB.</p>

            <div id="imagePreviewWrap" class="aspect-[4/3] rounded-2xl overflow-hidden bg-sage border border-line {{ $isEdit && $project->cover_image_url ? '' : 'flex items-center justify-center' }}">
                @if ($isEdit && $project->cover_image_url)
                    <img id="imagePreview" src="{{ $project->cover_image_url }}" alt="" class="w-full h-full object-cover">
                @else
                    <img id="imagePreview" src="" alt="" class="w-full h-full object-cover hidden">
                    <span id="imagePreviewPlaceholder" class="text-xs text-ink/40 font-mono uppercase tracking-wide">No image yet</span>
                @endif
            </div>

            <label class="block">
                <span class="sr-only">Choose cover image</span>
                <input type="file" name="cover_image" id="cover_image" accept="image/*"
                       onchange="previewCoverImage(this)"
                       class="block w-full text-sm text-ink/70 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-emerald file:text-white hover:file:bg-emerald-light file:cursor-pointer cursor-pointer">
            </label>

            @if ($isEdit && $project->cover_image)
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="checkbox" name="remove_cover_image" value="1" class="w-4 h-4 rounded border-line text-coral focus:ring-coral">
                    <span class="text-xs text-ink/60">Remove current image</span>
                </label>
            @endif
        </div>

        {{-- Featured video --}}
        <div class="bg-card border border-line rounded-3xl p-7 space-y-3">
            <label for="video_url" class="block text-sm font-medium text-ink">Featured Video <span class="text-ink/40 font-normal">(optional)</span></label>
            <input type="url" name="video_url" id="video_url"
                   value="{{ old('video_url', $project->video_url) }}"
                   class="w-full rounded-xl border border-line px-4 py-2.5 text-sm focus:outline-none focus:border-emerald"
                   placeholder="https://youtube.com/watch?v=... or a direct .mp4 link">
            <p class="text-xs text-ink/40">YouTube and Vimeo links embed automatically. A direct video file link plays with a native player.</p>
        </div>

        <div class="bg-card border border-line rounded-3xl p-7 space-y-5">
            <div>
                <label for="sort_order" class="block text-sm font-medium text-ink mb-2">Sort Order</label>
                <input type="number" name="sort_order" id="sort_order" min="0"
                       value="{{ old('sort_order', $project->sort_order ?? 0) }}"
                       class="w-full rounded-xl border border-line px-4 py-2.5 text-sm focus:outline-none focus:border-emerald">
                <p class="text-xs text-ink/40 mt-1.5">Lower numbers appear first in the project index.</p>
            </div>

            <label class="flex items-center gap-3 cursor-pointer">
                <input type="checkbox" name="is_published" value="1"
                       {{ old('is_published', $project->is_published ?? true) ? 'checked' : '' }}
                       class="w-4 h-4 rounded border-line text-emerald focus:ring-emerald">
                <span class="text-sm font-medium text-ink">Published (visible on the site)</span>
            </label>
        </div>
    </div>
</div>

<div class="flex items-center gap-3 mt-8">
    <button type="submit" class="inline-flex items-center gap-2 bg-emerald hover:bg-emerald-light text-white font-semibold px-6 py-3 rounded-full transition-colors">
        {{ $isEdit ? 'Save Changes' : 'Create Project' }}
    </button>
    <a href="{{ route('admin.projects.index') }}" class="text-sm font-medium text-ink/50 hover:text-ink transition-colors">Cancel</a>
</div>

<script>
    function previewCoverImage(input) {
        const preview = document.getElementById('imagePreview');
        const placeholder = document.getElementById('imagePreviewPlaceholder');
        if (!input.files || !input.files[0]) return;

        const reader = new FileReader();
        reader.onload = function (e) {
            preview.src = e.target.result;
            preview.classList.remove('hidden');
            if (placeholder) placeholder.classList.add('hidden');
        };
        reader.readAsDataURL(input.files[0]);
    }
</script>