@if($post->reactions()->count())
<p class="reactions">{{ $post->reaction_string }}</p>
@endif