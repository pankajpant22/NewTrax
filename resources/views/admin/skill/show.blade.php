@extends('admin')

@section('content')
<div>
  <h3> Skill Record</h3>
</div>
<table class="table table-bordered table-striped">
    <tr>
      <td>Skill #</td>
      <td>{{ $skill->skill}}</td>
    </tr>
    <tr>
      <td>Proficiency in Stars #</td>
      <td>{{ $skill->stars}}</td>
    </tr>
</table>
@endsection
