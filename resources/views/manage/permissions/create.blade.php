@extends('layouts.manage')

@section('content')
<div class="flex-container">

    <div class="columns m-t-10">
        <div class="column">
            <h1 class="title">Create New Permission</h1>
        </div>
    </div>

    <hr class="m-t-0">
    <div class="block">
        <input type="radio" class="form-radio" checked="checked" onclick="javascript:permissionChoice();" id="basic" name="permissionChoice" checked="checked"> Basic Permission
        <input type="radio" class="form-radio m-l-10" onclick="javascript:permissionChoice();" id="crud" name="permissionChoice" value="crud"> CRUD Permission
    </div>
    <div class="columns" id="basicPermission">
        <div class="column is-three-quarters">
            <form action="{{ route('permissions.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="field">
                    <label for="name" class="label">Name (Display Name)</label>
                    <p class="control">
                        <input type="text" class="input" name="name" id="name">
                    </p>
                </div>
                <div class="field">
                    <label for="slug" class="label">Slug</label>
                    <p class="control">
                        <input type="text" class="input" name="slug" id="slug">
                    </p>
                </div>
                <div class="field">
                    <label for="description" class="label">Description</label>
                    <p class="control">
                    <input type="text" class="input" name="description" id="description"  placeholder="Describe what this permission does">
                    </p>
                </div>
                <button class="button is-success is-centered">Create Permission</button>
            </form>
        </div> <!-- end of .column -->
    </div>
    <div class="columns" id="crudPermission" style="display:none;">
        <div class="column">
            <form action="{{ route('users.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="column">
                    <label for="name" class="label">Resource</label>
                    <p class="control">
                    {{ $resource = ''}}
                        <input type="text" class="input" name="resource" id="resource" value = "{{ $resource }}" placeholder="Name of resource">
                    </p>
                </div>
                <div class="column is-three-quarters">
                    <input type="checkbox" class="form-checkbox" id="create" name="crud" checked="checked"> Create
                    <input type="checkbox" class="form-checkbox m-l-15" id="read" name="crud" checked="checked"> Read
                    <input type="checkbox" class="form-checkbox m-l-15" id="update" name="crud" checked="checked"> Update
                    <input type="checkbox" class="form-checkbox m-l-15" id="delete" name="crud" checked="checked"> Delete
                </div>
                <div class="column" v-bind:title="message">
                    <table class="table is-bordered m-t-20">
                        <thead>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Description</th>
                        </thead>
                        <tbody @if (strlen($resource > 3) &&  )@endif>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                
                <button class="button is-success is-centered m-t-20">Create Permission</button>
            </form>
        </div> <!-- end of .column -->
    </div>

</div> <!-- end of .flex-container -->
@endsection

@section('scripts')

<script>

function permissionChoice() {
    let basic = document.getElementById('basicPermission');
    let crud = document.getElementById('crud');
    let crudPermission = document.getElementById('crudPermission');

    if (crud.checked) {
        crudPermission.style.display = 'block';
        basic.style.display = 'none';

        } else {
        crudPermission.style.display = 'none';
        basic.style.display = 'block';
    }
}

</script>

@endsection 