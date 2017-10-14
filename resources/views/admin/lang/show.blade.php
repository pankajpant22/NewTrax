@extends('admin')

@section('content')
<div>
  <h3> Language Record</h3>
</div>
<table class="table table-bordered table-striped">
    <tr>
      <td>Language #</td>
      <td>{{ $lang->lang}}</td>
    </tr>
    <tr>
      <td>Proficiency #</td>
      <td>{{ $lang->stars}}</td>
    </tr>
</table>
@endsection
