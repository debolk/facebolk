<!-- Navigation -->
    <nav class="navbar fixed-top bg-bolk header">
      <div class="container">
      	<div class="d-inline-block">
	        <a class="header-title" href="/">
	          <img src="/images/bolkvis_wit.png" alt="FaceBolk" class="header-logo">
	          FaceBolk
	        </a>
	    </div>
        @if (Auth::check())
        <div class="d-inline-block ml-auto">
        	<!-- Temporarily link to logout, to be replaced with user page -->
        	<a class="header-user" href="/logout">
	        	<img class="mr-3 rounded-circle" src="/photo/{{ Auth::user()->id }}" height='48' width='48' alt="{{ $post->user->name }}">
	       		{{ Auth::user()->name }}
	       	</a>
	    </div>
        @endif
      </div>
    </nav>