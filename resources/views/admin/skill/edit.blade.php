@extends('admin')

@section('content')
<div>
  <h3> Skill </h3>
</div>
<form class="form-horizontal" method="POST" action="{{ route('portSkill.update', $skill->id) }}">
<!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
    {{ csrf_field() }}
    {{ method_field('patch') }}
    <div class="form-group">
      <div class="col-xs-4">
        <label for="exampleSelect1">Skill #</label>
      </div>
      <div class="col-xs-8">
        <input type="text" style="width:600px;" name="skill" value="{{ old('skill', $skill->skill) }}">
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-4">
        <label for="exampleSelect1">Proficiency # </label>
      </div>
      <div class="col-xs-8">
        <input type="number" style="width:600px;" name="stars" value="{{ old('stars', $skill->stars) }}" min="0" max="5">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        or
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button type="submit" class="btn btn-default"><a href="{{ URL::route('portSkill') }}">Cancel</a></button>

</form>
@include('layouts.errors')
@endsection
