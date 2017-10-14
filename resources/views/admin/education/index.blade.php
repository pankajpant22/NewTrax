@extends('admin')

@section('content')
<div>
  <h3> Education </h3>
</div>
@if(Session::has('message'))
  <div class="alert alert-info">
    {{Session::get('message')}}
  </div>
@endif
<div style="margin:20px 20px 20px 0px;">
    <a href="{{ route('education.create') }}" class="btn btn-primary"> Create </a>
</div>
<div class="table-responsive">
  <table class="table table-bordered table-striped">
    @foreach($education as $edu)
      <tr>
        <td><a href="{{ route('education.show', $edu->id) }}">{{ $edu->course_title }}</a></td>
        <td><a href="{{ route('education.edit', $edu->id) }}" class="btn btn-default"> Edit </a></td>
        <td>
          <form method="POST" action="{{ route('education.delete', $edu) }}">
            {{ csrf_field() }}
            <button type="submit" class="btn btn-danger"
            onclick="return confirm('Are you sure you want to delete the record ?')"> Delete </button>
          </form>
        </td>
        </td>
      </tr>
    @endforeach
  </table>
</div>
@endsection
