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
      <button type="button" class="btn btn-danger btn-sm delete" data-id="{{ $user->id }}">X</button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
@section('javascript')
//alert('test');
$(function() {
    $('.delete').click(function() {
        $.ajax({
        method: "DELETE",
        url: "http://shop.test/test/" + $(this).data("id"),
        //data: { id: $(this).data("id") }
        })
      .done(function( response ) {
        window.location.reload();
      })
      .fail(function( response ) {
        alert( "Error" );
      });
    });
});
@endsection