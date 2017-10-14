@extends('admin')

@section('content')
<div>
  <h3> Resources </h3>
</div>
@if(Session::has('message'))
  <div class="alert alert-info">
    {{Session::get('message')}}
  </div>
@endif
<div style="margin:20px 20px 20px 0px;">
    <a href="{{ route('material.create') }}" class="btn btn-primary"> Create </a>
</div>
<div class="table-responsive">
  <table class="table table-bordered table-striped">
    @foreach($material as $x)
      <tr>
        <td><a href="{{ route('material.show', $x->id) }}">{{ $x->title }}</a></td>
        <td><a href="{{ route('material.edit', $x->id) }}" class="btn btn-default"> Edit </a></td>
        <td>
          <form method="POST" action="{{ route('material.delete', $x) }}">
            {{ csrf_field() }}
            {{ method_field('delete') }}
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
