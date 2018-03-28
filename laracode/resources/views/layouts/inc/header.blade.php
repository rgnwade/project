 <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                      <img class="logoku"  src="{{url('public/uploads/logo.png')}}" />
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <li @if (Request::segment(1)=='tour') class="active"   @endif><a href="{{ url('tour/all/list')}}">Event</a></li>
                        <li @if (Request::segment(1)=='guide') class="active"   @endif><a href="{{ url('guide/all/list')}}">Food & Drink</a></li>
                         <li @if (Request::segment(1)=='transfer') class="active"   @endif><a href="{{ url('transfer/all/list')}}">Nightlife</a></li>
                         <li @if (Request::segment(1)=='rental') class="active"   @endif><a href="{{ url('rental/all/list')}}">Lifestyle</a></li>
                        <li @if (Request::segment(1)=='forum') class="active"   @endif><a href="{{ url('forum/all')}}">Fashion</a></li>
                            <li @if (Request::segment(1)=='login') class="active"   @endif><a href="{{ url('/login') }}">Culture</a></li>
                            <li @if (Request::segment(1)=='register') class="active"   @endif><a href="{{ url('/register') }}">Resource</a></li>
                            
                      
                                   
                                </ul>
                            </li>
                            
                     
                    </ul>
                </div>
            </div>
        </nav>