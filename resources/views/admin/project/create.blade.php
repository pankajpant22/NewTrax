@extends('admin')

@section('content')
<div>
  <h3> Create Project </h3>
</div>
<form class="form-horizontal" method="POST" action="{{ route('portProject.store') }}">
<!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
    {{ csrf_field() }}
    <div class="form-group">
      <div class="col-xs-4">
        <label for="exampleSelect1">Name # </label>
      </div>
      <div class="col-xs-8">
        <input type="text" style="width:600px;" name="projectName">
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-4">
        <label for="exampleSelect1">Title # </label>
      </div>
      <div class="col-xs-8">
        <input type="text" style="width:600px;" name="title">
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-4">
        <label for="exampleSelect1">Description # </label>
      </div>
      <div class="col-xs-8">
        <textarea name="description" cols="50" rows="15" style="width:600px;"></textarea>
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-4">
        <label for="exampleSelect1">URL # </label>
      </div>
      <div class="col-xs-8">
        <input type="text" style="width:600px;" name="url">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        or
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button type="submit" class="btn btn-default"><a href="{{ URL::route('portProject') }}">Cancel</a></button>

</form>
@include('layouts.tinymce')
@include('layouts.errors')
@endsection
