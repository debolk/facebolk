          <div>
            @foreach ($post->comments() as $comment)
              @include('comments.comment')
            @endforeach
            <hr>
            <!-- Comments Form -->
            <div class="media comment-section">
              <img class="d-flex mr-3 rounded-circle d-inline-block" src="/photo/{{ Auth::user()->id }}" height='40' width='40' alt="">
              <div class="media-body d-inline-block">
                <form>
                  {{ csrf_field() }}
                  <input class="form-control comment-input" id="comment-{{ $post->id }}" placeholder="Leave a comment..."></input>
                </form>
              </div>
            </div>
          </div>