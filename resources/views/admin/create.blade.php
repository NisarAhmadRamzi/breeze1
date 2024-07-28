@extends('layout.master')
@section('content')
<h2>Create Page</h2>

<form action="{{route('admin.store')}}" method="POST">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name"><br>
    @error('name')
    <span style="color:red;">
        {{ $message }}
    </span>
    @enderror

    <br>
    <label for="fname">F-Name</label>
    <input type="text" name="fname"><br>
    @error('fname')
    <span style="color:red;">
        {{ $message }}
    </span>
    @enderror

    <br>
    <label for="phone">Phone</label>
    <input type="number" name="phone"><br>
    @error('phone')
    <span style="color:red;">
        {{ $message }}
    </span>
    @enderror

    <br>
    <label for="address">Address</label>
    <input type="text" name="address"><br>
    @error('address')
    <span style="color:red;">
        {{ $message }}
    </span>
    @enderror

    <br>
    <label for="description">Description</label>
    <textarea name="description" id="" rows="10" cols="30"></textarea>

    <button type="submit">Create</button>
</form>

@endsection