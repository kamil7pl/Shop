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
      <button type="button" class="btn btn-danger">X</button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
@section('javascript')
//alert('test');
$(function() {
    alert('test jQuery');
});
@endsection