@if(count($errors))
    <div class="alert alert-danger" style="margin: 20px 20px 20px 20px;">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
@endif
