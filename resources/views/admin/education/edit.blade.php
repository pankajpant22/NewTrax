@extends('admin')

@section('content')
<div>
  <h3> Education</h3>
</div>
<form class="form-horizontal" method="POST" action="{{ route('education.update', $education) }}">
<!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
    {{ csrf_field() }}
    {{ method_field('patch') }}
    <div class="form-group">
      <div class="col-xs-4">
        <label for="exampleSelect1">University #</label>
      </div>
      <div class="col-xs-8">
        <input type="text" style="width:600px;" name="university" value="{{ old('university', $education->university) }}">
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-4">
        <label for="exampleSelect1">From # </label>
      </div>
      <div class="col-xs-8">
        <input type="date" style="width:600px;" name="from" value="{{ old('from', $education->from) }}">
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-4">
        <label for="exampleSelect1">To # </label>
      </div>
      <div class="col-xs-8">
        <input type="date" style="width:600px;" name="to" value="{{ old('to', $education->to) }}">
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-4">
        <label for="exampleSelect1">Course Title # </label>
      </div>
      <div class="col-xs-8">
        <input type="text" style="width:600px;" name="course_title" value="{{ old('course_title', $education->course_title) }}">
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-4">
        <label for="exampleSelect1">Course Description # </label>
      </div>
      <div class="col-xs-8">
        <textarea name="course_desc" cols="50" rows="15" style="width:600px;">{{ old('course_desc', $education->course_desc) }}</textarea>
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-4">
        <label for="exampleSelect1">University URL # </label>
      </div>
      <div class="col-xs-8">
        <input type="text" style="width:600px;" name="university_url" value="{{ old('university_url', $education->university_url) }}">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        or
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button type="submit" class="btn btn-default"><a href="{{ URL::route('education') }}">Cancel</a></button>

</form>
@include('layouts.tinymce')
@include('layouts.errors')
@endsection
