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
    @if($data != null)
      <tr>
        <td><a href="{{ route('social.show', $data->id) }}">Activated Social Contacts</a></td>
        <td><a href="{{ route('social.edit', $data->id) }}" class="btn btn-default"> Edit </a></td>
      </tr>
    @endif
  </table>
</div>
@endsection
