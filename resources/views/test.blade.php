@extends('layouts.app')
@section('content')
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
      <tr>
        <th scope="row">{{ $user->id }}</th>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
            <button class="btn btn-danger btn-sm">
                X
            </button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @endsection
  @section('javascript')
  $(function() {
    alert(500);
  });
  @endsection