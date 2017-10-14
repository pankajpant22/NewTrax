@extends('admin')

@section('content')
<div>
  <h3> Create Blog </h3>
</div>
<form class="form-horizontal" method="POST" action="{{ route('blog.store') }}">
<!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
    {{ csrf_field() }}
    <div class="form-group">
      <div class="col-xs-4">
        <label for="exampleSelect1">Title # </label>
      </div>
      <div class="col-xs-8">
        <input type="text" style="width:600px;" name="title">
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-4">
        <label for="exampleSelect1">Description # </label>
      </div>
      <div class="col-xs-8">
        <textarea name="description" cols="50" rows="15" style="width:600px;"></textarea>
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-4">
        <label for="exampleSelect1">Tags Associated #</label>
      </div>
      <div class="col-xs-8">
        @foreach($tags as $all)
          <input type="checkbox" id="inlineCheckbox{{$all->id}}" name="my_checkbox[]" value="{{$all->id}}">{{$all->name}}<br>
        @endforeach
      </div>
    <button type="submit" class="btn btn-primary">Create</button>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        or
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button type="submit" class="btn btn-default"><a href="{{ URL::route('blog') }}">Cancel</a></button>
</form>
<script type="text/javascript">

    $(document).ready(function() {

      tinymce.init({
            selector: 'textarea',
            height: 300,
            plugins: 'textcolor image codesample imagetools link table ',
            toolbar: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
            image_caption: true,
            image_advtab: true,
            media_live_embeds: true,
            // imagetools_cors_hosts: ['tinymce.com', 'codepen.io'],
            content_css: [
              '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
              '//cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.css',
              '//www.tinymce.com/css/codepen.min.css'
            ]
            });
   });

</script>
@include('layouts.errors')
@endsection
