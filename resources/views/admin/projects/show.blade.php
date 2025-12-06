@extends('layouts.admin')

@section('title', 'Project Details')

@section('content')
<div class="admin-header">
    <h2>{{ $project->title }}</h2>
    <div class="header-actions">
        <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-secondary">Edit</a>
        <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Back to Projects</a>
    </div>
</div>

<div class="project-details">
    @if($project->image)
        <div class="project-image">
            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}">
        </div>
    @endif

    <div class="project-info">
        <h3>Description</h3>
        <p>{{ $project->description }}</p>

        <h3>Technologies</h3>
        <p>{{ $project->techs }}</p>

        @if($project->github_link)
            <h3>GitHub Link</h3>
            <p><a href="{{ $project->github_link }}" target="_blank">{{ $project->github_link }}</a></p>
        @endif

        @if($project->live_link)
            <h3>Live Link</h3>
            <p><a href="{{ $project->live_link }}" target="_blank">{{ $project->live_link }}</a></p>
        @endif

        <h3>Created At</h3>
        <p>{{ $project->created_at->format('M d, Y H:i') }}</p>

        <h3>Updated At</h3>
        <p>{{ $project->updated_at->format('M d, Y H:i') }}</p>
    </div>
</div>
@endsection
