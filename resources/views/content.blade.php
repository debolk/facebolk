@extends('layout.master')

@section('content')
        <div id="page-top">
          <img class="img-fluid img-responsive" id="bolkvlag" src="/images/bolkvlag_cut.png" alt="Bolkvlag">
          <p>D.S.V. "Nieuwe Delft" (D.S.S. De Bolk)</p>
        </div>

        <div class="row">

        <!-- Post Content Column -->
          <div class="content">

          @include('posts.write_post_form')

@foreach ($posts as $post)
            @include('posts.post')
@endforeach

          </div>
        </div>
      <!-- /.row -->
      <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
      <script type="text/javascript" src='/js/reply-section.js'></script>
      <script type="text/javascript" src='/js/react-button.js'></script>
@endsection()