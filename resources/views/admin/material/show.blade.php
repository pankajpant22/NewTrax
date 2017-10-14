@extends('admin')

@section('content')
<div>
  <h3> Resource Detail</h3>
</div>
<table class="table table-bordered table-striped">
    <tr>
      <td>Title #</td>
      <td>{{ $material->title}}</td>
    </tr>
    <tr>
      <td>Links Associated #</td>
      <td>
        <ul>
          @foreach($material->links as $link)
            <li>{{$link->url}}</li>
          @endforeach
        </ul>
      </td>
    </tr>
</table>
@endsection
