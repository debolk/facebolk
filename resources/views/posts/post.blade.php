<!-- Title -->
          
        <div class="post">
          <!-- Author -->
          <div class="author">
            <img class="mr-3 rounded-circle d-inline-block" src="http://placehold.it/50x50" alt="">
            <div class="d-inline-block">
              <p><a href="#">{{$post->user->name}}</a></p>
              <small class="text-muted" style="font-size: 0.8rem">posted on {{ $post->created_at->toDayDateTimeString() }}</small>
            </div>
          </div>

          <hr>

          <!-- Post Content -->
          <p class="lead">
          {{ $post->body }}
          </p>
          <hr>

          @include('comments')
        </div>
