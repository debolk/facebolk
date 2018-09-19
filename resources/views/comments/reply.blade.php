		  	<div class="media reply">
                <img class="img-profile" src="/photo/{{ $reply->user_id }}"  alt="{{ $reply->user->name }}"><!-- height='32' width='32' -->
                <div class="d-inline-block">
	                <div class="media-body comment-body">
	                  <span class="commenter-name">{{ $reply->user->name }}</span>
	                  {{ $reply->body }}
	                </div>
	                <div class="comment-react">
			            <a href="#">Like</a> &middot
			            <a href='#' onclick="return add_reply_section({{ $comment->id }}, '{{ $reply->user->name }}');">Reply</a> &middot
		            	<small class="text-muted"">Posted on {{ $post->created_at->format('l, j F Y \a\t G:i') }}</small>
		          	</div>
		        </div>
          	</div>
