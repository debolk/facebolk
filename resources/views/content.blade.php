@extends('layout.master')

@section('content')

<div id="page-top">
  <img class="img-fluid img-responsive" id="bolkvlag" src="/images/bolkvlag_cut.png" alt="Bolkvlag">
  <p>D.S.V. "Nieuwe Delft" (D.S.S. De Bolk)</p>
</div>
<div class="row">
  

<!-- Post Content Column -->
        <div class="content">

          @foreach ($posts as $post)
            @include('posts.post')
          @endforeach

        </div>
      </div>
      <!-- /.row -->
@endsection()