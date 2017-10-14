@extends('admin')

@section('content')
<div>
  <h3> Blog</h3>
</div>
<table class="table table-bordered table-striped">
    <tr>
      <td>Title #</td>
      <td>{{ $blog['title'] }}</td>
    </tr>
    <tr>
      <td>Description #</td>
      <td>{{ $blog['description'] }}</td>
    </tr>
    <tr>
      <td>Associated Tags</td>
      <td>
        <ul>
          @foreach($blog['tags'] as $t)
            <li>{{$t['name']}}</li>
          @endforeach
        </ul>
      </td>
    </tr>
</table>
@endsection
