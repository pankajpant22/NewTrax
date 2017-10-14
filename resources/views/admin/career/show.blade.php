@extends('admin')

@section('content')
<div>
  <h3> Career Record</h3>
</div>
<table class="table table-bordered table-striped">
    <tr>
      <td>Company #</td>
      <td>{{ $career->company}}</td>
    </tr>
    <tr>
      <td>From Date #</td>
      <td>{{ $career->from}}</td>
    </tr>
    <tr>
      <td>To Date #</td>
      <td>{{ $career->to}}</td>
    </tr>
    <tr>
      <td>Designation #</td>
      <td>{{ $career->designation}}</td>
    </tr>
    <tr>
      <td>Responsibility #</td>
      <td>{{ $career->responsibility}}</td>
    </tr>
    <tr>
      <td>Company URL#</td>
      <td>{{ $career->company_url}}</td>
    </tr>
</table>
@endsection
