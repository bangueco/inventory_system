@extends('template.default')

@section('title', 'Manage Accounts')

@section('links')

@endsection

@section('content')
<form class="p-3" action="{{ route('manage_accounts.add') }}" method="post">
  @csrf
  <div>
    <div class="form-floating mb-3">
      <input class="form-control" type="text" name="username" id="username" placeholder="Username">
      <label for="username">Username</label>
      @error('username')
      <p class="text text-danger"> {{ $message }} </p>
      @enderror
    </div>
    <div class="form-floating mb-3">
      <input class="form-control" type="password" name="password" id="password" placeholder="Password">
      <label for="password">Password</label>
      @error('password')
      <p class="text text-danger"> {{ $message }} </p>
      @enderror
    </div>
  </div>
  <button class="btn btn-success">Add user</button>
</form>
<div class="table-container">
  <table class="table table-sm table-bordered text-center table-striped">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Password</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody class="table-secondary">
      @php

      $users = DB::table('users')->get();

      foreach($users as $user) {
      echo '<tr>';
        echo '<td>' . $user->id . '</td>';
        echo '<td>' . $user->username . '</td>';
        echo '<td>' . $user->password . '</td>';
        echo '<td>' . $user->created_at . '</td>';
        echo '<td>' . $user->updated_at . '</td>';
        echo '<td class="d-flex justify-content-center gap-2"><button class="edit_product btn btn-light">Edit</button><button class="delete_product btn btn-danger">Delete</button></td>';
        echo '</tr>';
      }
      @endphp
    </tbody>
  </table>
</div>
@endsection

@section('javascript')

@endsection