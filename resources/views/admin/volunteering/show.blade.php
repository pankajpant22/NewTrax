@extends('admin')

@section('content')
<div>
  <h3> Volunteering Record</h3>
</div>
<table class="table table-bordered table-striped">
  <tr>
    <td>Name #</td>
    <td>{{ $volunteering->volunteerName}}</td>
  </tr>
  <tr>
    <td>Title #</td>
    <td>{{ $volunteering->title}}</td>
  </tr>
    <tr>
      <td>Description #</td>
      <td>{{ $volunteering->description}}</td>
    </tr>
    <tr>
      <td>Url #</td>
      <td>{{ $volunteering->url}}</td>
    </tr>
</table>
@endsection
