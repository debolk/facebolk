          <div class="comment-section">
            @foreach ($post->comments() as $comment)
              @include('comments.comment')
            @endforeach
            <hr>
            <!-- Comments Form -->
            @include('comments.write_comment_form')
          </div>