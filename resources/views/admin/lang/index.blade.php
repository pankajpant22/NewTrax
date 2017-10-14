@extends('admin')

@section('content')
<div>
  <h3> Languages </h3>
</div>
@if(Session::has('message'))
  <div class="alert alert-info">
    {{Session::get('message')}}
  </div>
@endif
<div style="margin:20px 20px 20px 0px;">
    <a href="{{ route('lang.create') }}" class="btn btn-primary"> Create </a>
</div>
<div class="table-responsive">
  <table class="table table-bordered table-striped">
    @foreach($lang as $x)
      <tr>
        <td><a href="{{ route('lang.show', $x->id) }}">{{ $x->lang }}</a></td>
        <td><a href="{{ route('lang.edit', $x->id) }}" class="btn btn-default"> Edit </a></td>
        <td>
          <form method="POST" action="{{ route('lang.delete', $x) }}">
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
