@extends('students.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Blog</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
        </div>
    </div>
</div>

@if($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong>There where some problems with your input.<br><br>
<ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
</div>
@endif

<form action="{{ route('students.update',$student->id) }}" method="POST">
@csrf
@method('PUT')

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>Blog Name:</strong>
    <input type="text" name="blogname" value="{{ $student->blogname }}" class="form-control" placeholder="Name">
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>Description:</strong>
    <input type="text" name="desc" value="{{ $student->desc }}" 
    class="form-control" placeholder="Description">
    </div>
</div>


<div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image</strong>
                    <input type="text" name="img" value="{{ $student->img }}" class="form-control" placeholder="img">
                    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
@endsection