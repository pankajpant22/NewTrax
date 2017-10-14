@extends('admin')

@section('content')
<div>
  <h3> Education Record</h3>
</div>
<table class="table table-bordered table-striped">
    <tr>
      <td>University #</td>
      <td>{{ $education->university}}</td>
    </tr>
    <tr>
      <td>From Date #</td>
      <td>{{ $education->from}}</td>
    </tr>
    <tr>
      <td>To Date #</td>
      <td>{{ $education->to}}</td>
    </tr>
    <tr>
      <td>Course Title #</td>
      <td>{{ $education->course_title}}</td>
    </tr>
    <tr>
      <td>Course Description #</td>
      <td>{{ $education->course_desc}}</td>
    </tr>
    <tr>
      <td>University URL#</td>
      <td>{{ $education->university_url}}</td>
    </tr>
</table>
@endsection
