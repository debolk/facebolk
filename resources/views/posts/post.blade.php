        <div class="post">
          <!-- Author -->
          <div class="author">
            <img class="img-profile" src="/photo/{{ $post->user_id }} " alt="{{ $post->user->name }}"> <!-- height='48' width='48' -->
            <div>
              <p><a href="#" class="poster-name">{{$post->user->name}}</a></p>
              <small class="text-muted"">Posted on {{ $post->created_at->format('l, j F Y \a\t G:i') }}</small>
            </div>
          </div>

          <!-- Post Content -->
          <p class="post-body">
          {{ $post->body }}
          </p>

          <!-- Reactions -->


          <hr>
          <!-- Like / Comment buttons -->
          <div class="react">
            <a href="#" class="half-width">Like
            </a><a href="javascript:document.getElementById('comment-{{ $post->id }}').focus()" class="half-width">Comment</a>
          </div>

          <hr class="hr-full">
          
          <!-- Comments -->
          @include('comments.comment_section')

        </div>