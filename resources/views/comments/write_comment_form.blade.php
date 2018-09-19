			<div class="media comment">
              <img class="img-profile" src="/photo/{{ Auth::user()->id }}" alt="">
              <div class="media-body d-inline-block">
                <form method="POST" action="/comment/{{ $post->id }}">
                  {{ csrf_field() }}
                  <input class="form-control comment-input" id="comment-{{ $post->id }}" name="body" placeholder="Leave a comment...">
                </form>
              </div>
            </div>