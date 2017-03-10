@extends('layouts.app')

@section('content')

    


<div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand" ><a class="brandcol" href="{{ url('/home') }}"> Selenium Made Easy<img style="max-width:100px; margin-top: 0px;"
             src="/favicon.ico"></a></h3>
                <nav >
                <!-- Right Side Of Navbar -->
                <ul class="nav masthead-nav">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
                  
                </nav>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading">It's Kinda Like <strong class="camp">Netflix</strong> for Your Career!</h1>
            <p class="lead">Learn practical, modern automation development, through expert screencasts. <br>Most video tutorials are boring. These aren't. Ready to binge?</p>
            <p class="lead">
              <a href="{{ url('/') }}" class="btn btn-lg btn-primary">Browse Now</a>

            </p>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>@ Selenium Made Easy <a href="#">made</a> by <a href="#">@rsaw</a>.</p>
            </div>
          </div>

        </div>

      </div>
</div>

<div class="jumbotron">
  <div class="container">
    <h2 class="JumLable">Choose a plan that fits your needs.</h2>
      <div class="row">
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="1st.jpg" alt="...">
            <div class="caption">
              <h3>Selenium Training</h3>
              <p>...</p>
              <p><a href="#" class="btn btn-primary" role="button">Subscribe Now</a> <a href="#" class="btn btn-default" role="button"></a></p>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="2nd.jpg" alt="...">
            <div class="caption">
              <h3>Java Training</h3>
              <p>...</p>
              <p><a href="#" class="btn btn-primary" role="button">Subscribe Now</a> <a href="#" class="btn btn-default" role="button"></a></p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="3rd.jpg" alt="...">
            <div class="caption">
              <h3>Bootstrap Training</h3>
              <p>...</p>
              <p><a href="#" class="btn btn-primary" role="button">Subscribe Now</a> <a href="#" class="btn btn-default" role="button"></a></p>
            </div>
          </div>
        </div>

      </div>
    
  </div>
</div>


@endsection

