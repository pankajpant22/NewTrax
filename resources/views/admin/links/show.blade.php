@extends('admin')

@section('content')
<div>
  <h3> Resource Link Detail</h3>
</div>
<table class="table table-bordered table-striped">
    <tr>
      <td>URL #</td>
      <td>{{ $link->url}}</td>
    </tr>
</table>
@endsection
