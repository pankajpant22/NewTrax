@extends('admin')

@section('content')
<div>
  <h3> Resource Link Edit </h3>
</div>
<form class="form-horizontal" method="POST" action="{{ route('link.update', $link->id) }}">
<!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
    {{ csrf_field() }}
    {{ method_field('patch') }}
    <div class="form-group">
      <div class="col-xs-4">
        <label for="exampleSelect1">URL #</label>
      </div>
      <div class="col-xs-8">
        <input type="text" style="width:600px;" name="url" value="{{ old('url', $link->url) }}">
      </div>
    </div>

    <div class="form-group">
      <div class="col-xs-4">
        <label for="exampleSelect1">Link to Resource # </label>
      </div>
      <div class="col-xs-8">
        <select name="resource">
          @foreach($resources as $res)
            <option value="{{$res->id}}" {{ ($res->title == $link->material->title )? "selected":"" }}>{{ $res->title }}</option>
          @endforeach
        </select>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        or
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button type="submit" class="btn btn-default"><a href="{{ URL::route('link') }}">Cancel</a></button>

</form>
@include('layouts.errors')
@endsection
