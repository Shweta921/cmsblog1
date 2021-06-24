@extends('students.layout')

@section('content')

<style>
body {
  background: #e2e2e2;
}
</style>
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2 class="text-center">Add New Blog</h2>
</div>

<div class="pull-right">
<a class="btn btn-primary" href="{{ route('students.index') }}">Back</a>
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

<form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
@csrf

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Blogger Name:</strong>
            <input type="text" name="blogname" class="form-control" placeholder="blogname">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>Description</strong>
    <input type="text" name="desc" class="form-control" placeholder="desc">
</div>
</div>

 <div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
    <strong>Image</strong>
    <input type="text" name="img" class="form-control" placeholder="img">
</div>
</div> 
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
    
    <input type="file" name="img" id="slider-image-input" >
    
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>

@endsection

