@extends('admin')

@section('content')
<div>
  <h3> Social Contacts </h3>
</div>
<div class="table-responsive">
  <table class="table table-bordered table-striped">
    <tr>
      <td>LinkedIn URL #</td>
      <td>{{ $social->linkedin_url }}</td>
    </tr>
    <tr>
      <td>Contact EmailL #</td>
      <td>{{ $social->contact_email }}</td>
    </tr>
    <tr>
      <td>Quora URL #</td>
      <td>{{ $social->quora_url }}</td>
    </tr>
    <tr>
      <td>Rss feed Links #</td>
      <td>{{ $social->rss_feed }}</td>
    </tr>
  </table>
</div>@endsection
