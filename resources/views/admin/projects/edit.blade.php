@extends('layouts.admin')

@section('content')
    @include('partials.errors')
    <form action="{{ route('admin.projects.update', $project->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Insert text"
                aria-describedby="helpId" value="{{ old('title', $project->title) }}" @error('title') is-invalid @enderror
                required>
            <small id="helpId" class="text-muted">Insert a title project</small>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" name="description" id="description" class="form-control" placeholder="Insert text"
                aria-describedby="helpId" value="{{ old('description', $project->description) }}"
                @error('description') is-invalid @enderror>
            <small id="helpId" class="text-muted">Insert project description</small>
        </div>

        <button type="submit" class="btn btn-dark">Update Project</button>
    </form>
@endsection
