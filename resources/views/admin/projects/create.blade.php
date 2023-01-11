@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.projects.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Insert text"
                aria-describedby="helpId">
            <small id="helpId" class="text-muted">Insert a title project</small>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" name="description" id="description" class="form-control" placeholder="Insert text"
                aria-describedby="helpId">
            <small id="helpId" class="text-muted">Insert project description</small>
        </div>

        <button type="submit" class="btn btn-dark">Add Project</button>
    </form>
@endsection
