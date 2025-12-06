@extends('layouts.admin')

@section('title', 'Edit Project')

@section('content')
<div class="admin-header">
    <h2>Edit Project: {{ $project->title }}</h2>
    <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Back to Projects</a>
</div>

<form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="{{ old('title', $project->title) }}" required>
        @error('title')
            <span class="error">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea id="description" name="description" rows="4" required>{{ old('description', $project->description) }}</textarea>
        @error('description')
            <span class="error">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="techs">Technologies (comma separated)</label>
        <input type="text" id="techs" name="techs" value="{{ old('techs', $project->techs) }}" required>
        @error('techs')
            <span class="error">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="github_link">GitHub Link</label>
        <input type="url" id="github_link" name="github_link" value="{{ old('github_link', $project->github_link) }}">
        @error('github_link')
            <span class="error">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="live_link">Live Link</label>
        <input type="url" id="live_link" name="live_link" value="{{ old('live_link', $project->live_link) }}">
        @error('live_link')
            <span class="error">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="image">Project Image</label>
        <input type="file" id="image" name="image" accept="image/*">
        @if($project->image)
            <p>Current image: <img src="{{ asset('storage/' . $project->image) }}" alt="Current" style="max-width: 100px;"></p>
        @endif
        @error('image')
            <span class="error">{{ $message }}</span>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Update Project</button>
</form>
@endsection
