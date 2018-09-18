          <!-- Comment with nested comments -->
          <div class="media">
            <img class="d-flex mr-3 rounded-circle d-inline-block" src="/photo/{{ $comment->user_id }}" height='40' width='40' alt="{{ $comment->user->name }}">
            <div class="media-body d-inline-block">
              <div class="comment-body">
                <span class="commenter-name">{{ $comment->user->name }}</span>
                {{ $comment->body }}
              </div>
              <div class="comment-react">
                <a href="#">Like</a> &middot
                <a href='#'>Reply</a> &middot
                <small class="text-muted"">Posted on {{ $post->created_at->format('l, j F Y \a\t G:i') }}</small>
              </div>
              @foreach ($comment->comments() as $reply)
                @include('comments.reply')
              @endforeach
            </div>
          </div>
         

          
          