@if(Session::has('success'))
  <div class="mdl-grid">
  <div class="mdl-layout-spacer"></div>
    <div class="mdl-cell mdl-cell--5-col">
      <p>{{ Session::get('success') }}</p>
    </div>
  <div class="mdl-layout-spacer"></div>
  </div>
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