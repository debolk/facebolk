<form id="react-{{ $post->id }}" onsubmit="return react({{ $post->id }});" class="half-width react-btn">
	{{ csrf_field() }}<input type="hidden" name="type" value="like">
	<input type="submit" value="Like" class="
	@if ($post->reactions->where('user_id', Auth()->id())->first() )
		{{ $post->reactions->where('user_id', Auth()->id())->first()->type }}
	@endif">
</form>