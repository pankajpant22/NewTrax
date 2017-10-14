@extends('admin')

@section('content')
<div>
  <h3> Social Contacts </h3>
</div>
@if(Session::has('message'))
  <div class="alert alert-info">
    {{Session::get('message')}}
  </div>
@endif
<div class="table-responsive">
  <table class="table table-bordered table-striped">
    <tr>
      <td><a href="{{ route('profile.show', $profile->id) }}">Activated Profile</a></td>
      <td><a href="{{ route('profile.edit', $profile->id) }}" class="btn btn-default"> Edit </a></td>
    </tr>
  </table>
</div>
@endsection
