            <div class="media post">
              <img class="img-profile" src="/photo/{{ Auth::user()->id }}" alt=""> <!-- height='48' width='48' -->
              <div class="media-body d-inline-block">
                <form method="POST" action="/post">
                  {{ csrf_field() }}
                  <div class="d-inline-block w-100">
                    <textarea class="form-control post-input" name="body" placeholder="Write something..."></textarea>
                  </div>
                  <hr>
                  <div class="d-inline-block float-right">
                    <button type="submit" class="bolk-button">Post</button>
                  </div>
                </form>
              </div>
            </div>