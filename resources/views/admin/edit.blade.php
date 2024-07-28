@extends('layout.master')
@section('content')
<h2>Edit Page</h2>

<form action="{{route('admin.update',['admin'=>$admin->id])}}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Name</label>
    <input type="text" name="name" value="{{$admin->name}}"><br>
    @error('name')
    <span style="color:red;">
        {{ $message }}
    </span>
    @enderror
    <br>

    <label for="f-name">F-Name</label>
    <input type="text" name="fname" value="{{$admin->fname}}"> <br>
    @error('fname')
    <span style="color:red;">
        {{ $message }}
    </span>
    @enderror
    <br>

    <label for="phone">Phone</label>
    <input type="number" name="phone" value="{{$admin->phone}}"><br>
    @error('phone')
    <span style="color:red;">
        {{ $message }}
    </span>
    @enderror
    <br>

    <label for="address">Address</label>
    <input type="text" name="address" value="{{$admin->address}}"><br>
    @error('address')
    <span style="color:red;">
        {{ $message }}
    </span>
    @enderror
    <br>

    <label for="description">Description</label>
    <textarea name="description" id="" rows="10" cols="30">{{$admin->description}}</textarea>

    <button type="submit">Update</button>
</form>

@endsection