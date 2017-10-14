@extends('admin')

@section('content')
<div>
  <h3> Tools </h3>
</div>
@if(Session::has('message'))
  <div class="alert alert-info">
    {{Session::get('message')}}
  </div>
@endif
<div style="margin:20px 20px 20px 0px;">
    <a href="{{ route('portTool.create') }}" class="btn btn-primary"> Create </a>
</div>
<div class="table-responsive">
  <table class="table table-bordered table-striped">
    @foreach($tool as $x)
      <tr>
        <td><a href="{{ route('portTool.show', $x->id) }}">{{ $x->tool }}</a></td>
        <td><a href="{{ route('portTool.edit', $x->id) }}" class="btn btn-default"> Edit </a></td>
        <td>
          <form method="POST" action="{{ route('portTool.delete', $x) }}">
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
