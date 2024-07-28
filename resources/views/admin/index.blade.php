@extends('layout.master')
@section('content')
<h2>Admin Page</h2>
<br><br><br><br>

<a href="{{route('admin.create')}}"><button>Add New</button></a><br><br>
<table style="border-collapse: collapse;border: 1px solid black;width:80%">
    <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Addres</th>
        <th>Actions</th>
    </thead>

    @foreach($admins as $admin)
    <tbody style="text-align:center;">
        <td>{{$admin->id}}</td>
        <td>{{$admin->name}}</td>
        <td>{{$admin->address}}</td>
        <td>
            <a href="{{route('admin.edit',['admin' => $admin->id])}}"><button>Edit</button></a>
            <form action="{{route('admin.destroy',['admin'=>$admin->id])}}" method="POST">
                @csrf
                @method('DELETE')
                <button>Delete</button>
        </form>
        </td>

    </tbody>
    @endforeach

</table>
@endsection




