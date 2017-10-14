@extends('admin')

@section('content')
<div class="col-10">
<div>
  <h3> Active Main Welcome Page </h3>
</div>
<div class="table-responsive">
  <table class="table table-bordered table-striped">
    <tr>
      <td class="active"><a href="{{ route('welcome.edit',$data->id)}}">Active Profile Picture</a></td>
      <td class="info">
        <img src="{{ asset($data->main_image_path) }}" width="500px" height="300px" alt="Main Image Path"/>
      </td>
    </tr>
  </table>
</div>
</div>
@endsection
