@extends('admin')

@section('content')
<div>
  <h3> Profile Update </h3>
</div>
<form class="form-horizontal" method="POST" action="{{ route('profile.update', $profile->id) }}" enctype="multipart/form-data">
<!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
{{ csrf_field() }}
{{ method_field('patch') }}
    <div class="form-group">
      <div class="col-xs-4">
        <label for="exampleSelect1">Name #</label>
      </div>
      <div class="col-xs-8">
        <input type="text" style="width:600px;" name="name" value="{{ old('name', $profile->name) }}">
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-4">
        <label for="exampleSelect1">Age #</label>
      </div>
      <div class="col-xs-8">
        <input type="text" style="width:600px;" name="age" value="{{ old('age', $profile->age) }}">
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-4">
        <label for="exampleSelect1">Email #</label>
      </div>
      <div class="col-xs-8">
        <input type="text" style="width:600px;" name="email" value="{{ old('email', $profile->email) }}">
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-4">
        <label for="exampleSelect1">Phone #</label>
      </div>
      <div class="col-xs-8">
        <input type="text" style="width:600px;" name="phone" value="{{ old('phone', $profile->phone) }}">
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-4">
        <label for="exampleSelect1">About Me Description #</label>
      </div>
      <div class="col-xs-8">
        <textarea name="about_me_text" cols="50" rows="15" style="width:600px;">{{ old('about_me_text', $profile->about_me_text) }}</textarea>
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-4">
        <label for="exampleSelect1">Image #</label>
      </div>
      <div class="col-xs-8">
        <img src="{{$profile->image_path}}" width="246" height="246"  style="border-radius: 50%;"/>
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
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        or
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button type="submit" class="btn btn-default"><a href="{{ URL::route('social') }}">Cancel</a></button>

</form>
@include('layouts.tinymce')
@include('layouts.errors')
@endsection
