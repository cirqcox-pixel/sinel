@extends('layouts.admin')

@section('title', 'Edit Project')

@section('content')
<div class="mb-8">
    <a href="{{ route('admin.projects.index') }}" class="inline-flex items-center gap-2 text-sm text-ink/50 hover:text-emerald transition-colors mb-3">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
        Projects
    </a>
    <h1 class="text-2xl font-semibold text-ink">Edit &ldquo;{{ $project->title }}&rdquo;</h1>
</div>

<form method="POST" action="{{ route('admin.projects.update', $project) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    @include('admin.projects._form')
</form>
@endsection