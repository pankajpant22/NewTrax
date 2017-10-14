@extends('admin')

@section('content')
<div>
  <h3> Main Image Path for {{ $data[0]->name }} </h3>
</div>
<form class="form-horizontal" method="POST" action="{{ route('welcome.update', $data[0]->id) }}" enctype="multipart/form-data">
<!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
{{ csrf_field() }}
{{ method_field('patch')}}
    <div class="form-group">
      <div class="col-xs-4">
        <label for="Image">Active Image </label>
      </div>
      <div class="col-xs-8">
        <img src="{{ asset($data[0]->main_image_path ) }}" width="500px" height="300px" alt="Main Image Path"/>
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-4">
        <label for="exampleSelect1">Update Image #</label>
      </div>
      <div class="col-xs-8">
        <input type="file" name="image" />
      </div>
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
    or
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button type="submit" class="btn btn-default"><a href="{{ URL::route('admin') }}">Cancel</a></button>
</form>
@include('layouts.errors')
@endsection
