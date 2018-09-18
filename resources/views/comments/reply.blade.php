		  	<div class="media">
                <img class="d-flex mr-2 rounded-circle d-inline-block" src="/photo/{{ $reply->user_id }}" height='32' width='32' alt="{{ $reply->user->name }}"><!-- http://placekitten.com/128/128 -->
                <div class="d-inline-block">
	                <div class="media-body comment-body">
	                  <span class="commenter-name">{{ $reply->user->name }}</span>
	                  {{ $reply->body }}
	                </div>
	                <div class="comment-react">
			            <a href="#">Like</a> &middot
			            <a href='#'>Reply</a> &middot
		            	<small class="text-muted"">Posted on {{ $post->created_at->format('l, j F Y \a\t G:i') }}</small>
		          	</div>
		        </div>
          	</div>
