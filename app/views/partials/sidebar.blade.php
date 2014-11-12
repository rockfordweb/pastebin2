<div class="paste-list">
  <h3>Recent Pastes</h3>
  <ul>
  @foreach ($pastes as $paste)
    <li><a href="/paste/{{{ $paste->id }}}">{{{ $paste->title }}}</a>
  @endforeach
  </ul>
</div>
