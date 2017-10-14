@extends('admin')

@section('content')
<div>
  <h3> Tool Record</h3>
</div>
<table class="table table-bordered table-striped">
    <tr>
      <td>Tool #</td>
      <td>{{ $tool->tool}}</td>
    </tr>
    <tr>
      <td>Proficiency #</td>
      <td>{{ $tool->stars}}</td>
    </tr>
</table>
@endsection
