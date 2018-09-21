          <!-- Comment with nested comments -->
          <div class="media comment">
            <img class="img-profile" src="/photo/{{ $comment->user_id }}"  alt="{{ $comment->user->name }}"> <!-- height='40' width='40' -->
            <div class="media-body d-inline-block">
              <div class="comment-body">
                <span class="commenter-name">{{ $comment->user->name }}</span>
                {{ $comment->body }}
              </div>
              <p class="reactions small">👍6❤️5🤣4😮3😢2😡1</p>
              <div class="comment-react">
                <a href="#">Like</a> &middot
                <a href='#' onclick="return add_reply_section({{ $comment->id }});">Reply</a> &middot
                <small class="text-muted"">Posted on {{ $post->created_at->format('l, j F Y \a\t G:i') }}</small>
              </div>
              <div id="replies-to-{{ $comment->id }}">
                @foreach ($comment->comments() as $reply)
                  @include('comments.reply')
                @endforeach

              </div>
            </div>
          </div>
         

          
          