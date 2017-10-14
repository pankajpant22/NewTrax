@extends('admin')

@section('content')
<div>
  <h3> Social Contacts </h3>
</div>
<form class="form-horizontal" method="POST" action="{{ route('social.update', $social->id) }}">
<!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
{{ csrf_field() }}
{{ method_field('patch') }}
    <div class="form-group">
      <div class="col-xs-4">
        <label for="exampleSelect1">LinkedIn #</label>
      </div>
      <div class="col-xs-8">
        <input type="text" style="width:600px;" name="linkedin_url" value="{{ old('linkedin_url', $social->linkedin_url) }}">
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-4">
        <label for="exampleSelect1">Contact Email #</label>
      </div>
      <div class="col-xs-8">
        <input type="text" style="width:600px;" name="contact_email" value="{{ old('contact_email', $social->contact_email) }}">
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-4">
        <label for="exampleSelect1">Quora #</label>
      </div>
      <div class="col-xs-8">
        <input type="text" style="width:600px;" name="quora_url" value="{{ old('quora_url', $social->quora_url) }}">
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-4">
        <label for="exampleSelect1">Rss Feeds Links #</label>
      </div>
      <div class="col-xs-8">
        <input type="text" style="width:600px;" name="rss_feed" value="{{ old('rss_feed', $social->rss_feed) }}">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        or
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button type="submit" class="btn btn-default"><a href="{{ URL::route('social') }}">Cancel</a></button>

</form>
@include('layouts.errors')
@endsection
