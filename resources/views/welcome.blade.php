@extends('app')

@section('content')
<div id="home">
	<div class="jumbotron">
		<div class="container">
			 <h1>Welcome to <span id="logo-color">&lt GIT Code Eval /&gt;	</span></h1>
	 <h2> <span id="logo-color">Bring out the best developer in you.</span></h2>
	 <br/>
	 <br/>
  <a  href="{{ url('/auth/register') }}" class="btn btn-primary btn-lg btn-home">Sign up</a>
  <a  href="{{ url('/auth/login') }}" class="btn btn-primary btn-lg btn-home">Log in</a>
</p>
		</div>
<p> A product by GIT MCA Student</p>
</div>
</div>

@endsection
