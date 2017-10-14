@extends('admin')

@section('content')
<div>
  <h3> Create Resource Links </h3>
</div>
<form class="form-horizontal" method="POST" action="{{ route('material.store') }}">
<!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
    {{ csrf_field() }}
    <div class="form-group">
      <div class="col-xs-4">
        <label for="exampleSelect1">Title # </label>
      </div>
      <div class="col-xs-8">
        <input type="text" style="width:600px;" name="title">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        or
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button type="submit" class="btn btn-default"><a href="{{ URL::route('material') }}">Cancel</a></button>

</form>
@include('layouts.errors')
@endsection
