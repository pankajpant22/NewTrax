@extends('admin')

@section('content')
<div>
  <h3> Project Record</h3>
</div>
<table class="table table-bordered table-striped">
    <tr>
      <td>Name #</td>
      <td>{{ $project->projectName}}</td>
    </tr>
    <tr>
      <td>Title #</td>
      <td>{{ $project->title}}</td>
    </tr>
    <tr>
      <td>Description #</td>
      <td>{{ $project->description}}</td>
    </tr>
    <tr>
      <td>Url #</td>
      <td>{{ $project->url}}</td>
    </tr>
</table>
@endsection
