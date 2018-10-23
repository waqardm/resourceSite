@extends('layouts.manage')

@section('content')
<div class="flex-container">

    <div class="columns m-t-10">
        <div class="column">
            <h1 class="title">Manage Users</h1>
        </div>
        <div class="column">
            <a href="{{ route('permissions.create') }}" class="button is-primary is-pulled-right"><i class="fa fa-sliders m-r-10"></i> Create New Permission</a>
        </div>
    </div>
    <hr>

    <div class="card">
        <div class="card-content">
            <table class="table is-striped is-hoverable is-fullwidth is-narrow">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($permissions as $permission)
                        <tr>
                            <th>{{ $permission->display_name }}</th>
                            <td>{{ $permission->name }}</td>
                            <td>{{ $permission->description }}</td></td>
                            <td><a class="button is-outlined" href="{{ route('permissions.edit', $permission->name) }}">View </a>
                            <a class="button is-outlined" href="{{ route('permissions.edit', $permission->name) }}">Edit </a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div> <!-- end of .card -->
</div>
@endsection