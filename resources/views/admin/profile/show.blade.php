@extends('admin')

@section('content')
<div>
  <h3> Profile </h3>
</div>
<div class="table-responsive">
  <table class="table table-bordered table-striped">
    <tr>
      <td>Name #</td>
      <td>{{ $profile->name }}</td>
    </tr>
    <tr>
      <td>Age #</td>
      <td>{{ $profile->age }}</td>
    </tr>
    <tr>
      <td>Email #</td>
      <td>{{ $profile->email }}</td>
    </tr>
    <tr>
      <td>Phone #</td>
      <td>{{ $profile->phone }}</td>
    </tr>
    <tr>
      <td>About Me Description #</td>
      <td>{{ $profile->about_me_text }}</td>
    </tr>
    <tr>
      <td>Image #</td>
      <td>
        <img src="{{$profile->image_path}}" width="246" height="246"  style="border-radius: 50%;"/>
      </td>
    </tr>
  </table>
</div>@endsection
