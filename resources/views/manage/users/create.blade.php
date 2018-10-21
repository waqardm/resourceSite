@extends('layouts.manage')

@section('content')
<div class="flex-container">

    <div class="columns m-t-10">
        <div class="column">
            <h1 class="title">Create New User</h1>
        </div>
    </div>

    <hr class="m-t-0">

    <div class="columns is-centered">
        <div class="column is-three-quarters">
            <form action="{{ route('users.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="field">
                    <label for="name" class="label">Name</label>
                    <p class="control">
                        <input type="text" class="input" name="name" id="name">
                    </p>
                </div>
                <div class="field">
                    <label for="email" class="label">Email:</label>
                    <p class="control">
                        <input type="text" class="input" name="email" id="email">
                    </p>
                </div>
                <div class="field">
                    <label for="password" class="label">Password</label>
                    <p class="control">
                    <input type="text" class="input" name="password" id="password" placeholder="Password">
                    </p>
                </div>
                <div class="field">
                    <label for="passwordConfirm" class="label">Password</label>
                    <p class="control">
                    <input type="text" class="input" name="passwordConfirm" id="passwordConfirm"  placeholder="Confirm Password">
                    </p>
                </div>
                <button class="button is-success is-centered">Create User</button>
            </form>
        </div> <!-- end of .column -->
    </div>

</div> <!-- end of .flex-container -->
@endsection

@section('scripts')
@endsection 