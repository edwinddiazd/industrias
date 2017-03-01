@if(Session::has('success'))
  <div class="mdl-js-snackbar mdl-snackbar">
    <div class="mdl-snackbar__text"></div>
  </div>
  <script>
    var notification = document.querySelector('.mdl-js-snackbar');
    notification.MaterialSnackbar.showSnackbar(
      {
        message: '{{ Session::get('success') }}'
      }
    );
  </script>
  @endif

  @if(count($errors) > 0)
    <div>
      <strong>Errors</strong>
      @foreach($errors->all() as $error)
        <ul>
          <li>{{ $error }}</li>
        </ul>
      @endforeach      
    </div>
  @endif