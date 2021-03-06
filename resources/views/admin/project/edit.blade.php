@extends('admin')

@section('content')
<div>
  <h3> Project</h3>
</div>
<form class="form-horizontal" method="POST" action="{{ route('portProject.update', $project->id) }}">
<!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
    {{ csrf_field() }}
    {{ method_field('patch') }}
    <div class="form-group">
      <div class="col-xs-4">
        <label for="exampleSelect1">Name #</label>
      </div>
      <div class="col-xs-8">
        <input type="text" style="width:600px;" name="projectName" value="{{ old('projectName', $project->projectName) }}">
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-4">
        <label for="exampleSelect1">Title #</label>
      </div>
      <div class="col-xs-8">
        <input type="text" style="width:600px;" name="title" value="{{ old('title', $project->title) }}">
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-4">
        <label for="exampleSelect1">Description #</label>
      </div>
      <div class="col-xs-8">
        <textarea name="description" cols="50" rows="15" style="width:600px;">{{ old('description', $project->description) }}</textarea>
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-4">
        <label for="exampleSelect1">URL # </label>
      </div>
      <div class="col-xs-8">
        <input type="text" style="width:600px;" name="url" value="{{ old('url', $project->url) }}">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        or
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button type="submit" class="btn btn-default"><a href="{{ URL::route('portProject') }}">Cancel</a></button>

</form>
@include('layouts.tinymce')
@include('layouts.errors')
@endsection
