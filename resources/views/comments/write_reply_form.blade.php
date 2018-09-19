                <div class="media reply reply-form">
                  <img class="img-profile" src="/photo/{{ Auth::user()->id }}" alt="">
                  <div class="media-body d-inline-block">
                    <form method="POST" action="/comment/{{ $post_id }}">
                      {{ csrf_field() }}
                      <input class="form-control comment-input reply-input" id="reply-{{ $post_id }}" name="body" placeholder="Write a reply...">
                    </form>
                  </div>
                </div>