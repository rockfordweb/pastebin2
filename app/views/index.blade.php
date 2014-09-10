<h2>Paste something</h2>
<div>
{{ Form::open(array('url' => '/new')) }}
	<div>
		<label>Title</label><br>
		{{ Form::text('title') }}
	</div>
	<div>
		<label>Content</label><br>
    	{{ Form::textarea('content') }}
    </div>
    <div>{{ Form::submit('Create') }}</div>
{{ Form::close() }}
</div>

<ul>
@foreach ($pastes as $paste)	
	<li><a href="/paste/{{{ $paste->id }}}">{{{ $paste->title }}}</a>
@endforeach
</ul>