@extends('layouts.manage')

@section('content')
<div class="container is-half">
    <div class="card is-half m-t-50">
        <div class="card-header">
            <div class="card-header-title">
               <h1 class="title">{{ $user->name }} <br>
                <span class="subtitle">View User Details</span>
               </h1>
            </div>
            <div class="is-pulled-right m-t-20 m-r-20">
                <a class="button is-primary is-centered" href="{{ route('users.edit', $user->id) }}"><i class="fa fa-user m-r-10"></i>Edit User</a>
            </div>
        </div>
        <div class="card-content is-quarter">
            <div class="field">
                <label for="name" class="label">Name</label>
                <pre>{{ $user->name }}</pre>
            </div>
            <div class="field">
                <div class="field">
                    <label for="email" class="label">Email</label>
                    <pre>{{ $user->email }}</pre>
                </div>
            </div>
        </div>
        
    </div> <!-- end of .card -->
</div>
@endsection

@section('scripts')

@endsection 