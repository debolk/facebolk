			<div class="media post">
              <img class="d-flex mr-3 rounded-circle" src="/photo/{{ Auth::user()->id }}" height='48' width='48' alt="">
              <div class="media-body d-inline-block">
                <form>
                	{{ csrf_field() }}
                  	<div class="d-inline-block w-100">
                  		<textarea class="form-control post-input" placeholder="Write something..."></textarea>
              		</div>
              		<hr>
              		<div class="d-inline-block float-right">
                  		<button class="bolk-button">Post</button>
                  	</div>
                </form>
              </div>
            </div>