@extends('admin')

@section('content')
<div>
  <h3> Career</h3>
</div>
<form class="form-horizontal" method="POST" action="{{ route('career.update', $career) }}">
<!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
    {{ csrf_field() }}
    {{ method_field('patch') }}
    <div class="form-group">
      <div class="col-xs-4">
        <label for="exampleSelect1">Company #</label>
      </div>
      <div class="col-xs-8">
        <input type="text" style="width:600px;" name="company" value="{{ old('company', $career->company) }}">
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-4">
        <label for="exampleSelect1">From # </label>
      </div>
      <div class="col-xs-8">
        <input type="date" style="width:600px;" name="from" value="{{ old('from', $career->from) }}">
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-4">
        <label for="exampleSelect1">To # </label>
      </div>
      <div class="col-xs-8">
        <input type="date" style="width:600px;" name="to" value="{{ old('to', $career->to) }}">
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-4">
        <label for="exampleSelect1">Designation # </label>
      </div>
      <div class="col-xs-8">
        <input type="text" style="width:600px;" name="designation" value="{{ old('designation', $career->designation) }}">
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-4">
        <label for="exampleSelect1">Responsibility # </label>
      </div>
      <div class="col-xs-8">
        <textarea name="responsibility" cols="50" rows="15" style="width:600px;">{{ old('responsibility', $career->responsibility) }}</textarea>
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-4">
        <label for="exampleSelect1">Company URL # </label>
      </div>
      <div class="col-xs-8">
        <input type="text" style="width:600px;" name="company_url" value="{{ old('company_url', $career->company_url) }}">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        or
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button type="submit" class="btn btn-default"><a href="{{ URL::route('career') }}">Cancel</a></button>

</form>
@include('layouts.tinymce')
@include('layouts.errors')
@endsection
