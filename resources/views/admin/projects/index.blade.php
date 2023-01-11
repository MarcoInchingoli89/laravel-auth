@extends('layouts.admin')
@section('name')
    Projects
    <a class="text-white btn btn-dark" href="{{ route('admin.projects.create') }}">
        Add New Project
    </a>
@endsection
@section('content')
    <div class="p-5">
        @include('partials.message')
        <div class="table-responsive">
            <table class="table table-striped
    table-hover	
    table-borderless
    table-light
    align-middle">
                <thead class="table-dark">

                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @forelse($projects as $project)
                        <tr class="table-light">
                            <td scope="row" class="pe-3 fw-bold">{{ $project->id }}</td>
                            <td>{{ $project->title }}</td>
                            <td>{{ $project->description }}</td>
                            <td>
                                <a class="d-flex text-white p-2 my-2 bg-primary justify-content-center rounded-2"
                                    href="{{ route('admin.projects.show', $project->id) }}"><i
                                        class="fa-solid fa-eye"></i></a>
                                <a class="d-flex text-white p-2 my-2 bg-secondary justify-content-center rounded-2"
                                    href="{{ route('admin.projects.edit', $project->id) }}"><i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                <a class="d-flex text-white p-2 my-2 bg-danger justify-content-center rounded-2"
                                    href=""><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    @empty
                    @endforelse
                </tbody>
                <tfoot>

                </tfoot>
            </table>
        </div>
    </div>
@endsection
