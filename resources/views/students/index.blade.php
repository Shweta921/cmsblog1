@extends('students.layout')

@section('content') 


<style>
body {
  background: #e2e2e2;
}
</style>
<div class="pull-left">

<h2 class="text-center">Users Blog</h2>
</div>

<div class="row">
    <div class="col-lg-12 margin-tb">
    <div class="pull-right">
    <a class="btn btn-primary" href="{{ route('home') }}">Home</a>
    <a class="btn btn-success" href="{{ route('students.create')}}">Create New Blog</a>
    </div>
    </div>
    </div>

    @if($message=Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif
<br>
<br>
    <table class="table table-bordered">
    <tr>
    <th>No</th>
    <th>Name</th>
    <th>Description</th>
    <th>Image</th>
    <th width="200px">Action</th>
    </tr>

    @foreach($students as $student)
    <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $student->blogname }}</td>
    <td>{{ $student->desc }}</td>
    <td>{{ $student->img }}</td>
    <td>
        <form action="{{ route('students.destroy' ,$student->id) }}" method="POST">
        <a class="btn btn-info" href="{{ route('students.show',$student->id) }}">Show</a>
        <a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}">Edit</a>

        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </td>
    </tr>
    @endforeach
    </table>
  
