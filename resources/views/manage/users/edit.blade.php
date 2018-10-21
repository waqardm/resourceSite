@extends('layouts.manage')

@section('content')

<div class="flex-container" id="manage">
    <div class="columns m-t-10">
        <div class="column">
            <h1 class="title">Edit User</h1>
        </div>
    </div>

    <hr class="m-t-0">

    <div class="columns is-centered">
        <div class="column is-three-quarters">
            {{ method_field('PUT') }}
            {{ csrf_field() }}
            <form action="{{ route('users.update', $user->id) }}" method="POST">
                <div class="field">
                    <label for="name" class="label">Name</label>
                    <p class="control">
                        <input type="text" class="input" name="name" id="name" value="{{ $user->name }}">
                    </p>
                </div>
                <div class="field">
                    <label for="email" class="label">Email:</label>
                    <p class="control">
                        <input type="text" class="input" name="email" id="email" value="{{ $user->email }}">
                    </p>
                </div>
                <div class="block">
                    <label for="password" class="label">Password</label>
                        <input type="radio" checked="checked" onclick="javascript:passwordOptions();" id="keep" name="password_options"> Do Not Change Password
                        <input type="radio" onclick="javascript:passwordOptions();" id="change" name="password_options"> Manually Set New Password</b-radio>
                        <p class="control m-t-10 content">
                            <input style="display:none" type="text" class="input" name="password" id="ifChange" placeholder="New Password">
                        </p>
                </div>
                <button class="button is-primary is-centered m-t-10">Edit User</button>
            </form>
        </div> <!-- end of .column -->
    </div>

</div> <!-- end of .flex-container -->
@endsection

@section('scripts')
<script>
    function passwordOptions() {
    if (document.getElementById('change').checked) {
        document.getElementById('ifChange').style.display = 'block';
        } else {
        document.getElementById('ifChange').style.display = 'none';
    }
}

</script>

@endsection 