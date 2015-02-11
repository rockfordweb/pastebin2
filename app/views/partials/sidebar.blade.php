<div class="paste-list">
    @if ($loggedIn)
        <h3>Your Pastes</h3>
        <ul>
          @foreach ($userPastes as $paste)
            <li><a href="/paste/{{{ $paste->id }}}">{{{ $paste->title }}}</a>
          @endforeach
          </ul>
    @endif

  <h3>Recent Pastes</h3>
  <ul>
  @foreach ($pastes as $paste)
    <li><a href="/paste/{{{ $paste->id }}}">{{{ $paste->title }}}</a>
  @endforeach
  </ul>
</div>
