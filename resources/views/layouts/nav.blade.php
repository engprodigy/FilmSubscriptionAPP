@php
    function nav_active($url){
        return url()->current() == $url;
    }
@endphp
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('home')}}">Mighty.com.ng</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="menu-collapse">
            <ul id="main-menu" class="nav navbar-nav">
                <li class="dropdown {{nav_active(url('/buyDataStart')) ? 'active':''}}">
                    <a href="{{ url('/buyDataStart') }}" class="dropdown-toggle" data-toggle="dropdown">Data<b class="caret"></b></a>
                    <ul class="dropdown-menu" >
                        <li>
                            <a href="data-mtn.html">MTN</a>
                        </li>
                        <li>
                            <a href="data-etisalat.html">ETISALAT</a>
                        </li>
                        <li>
                            <a href="data-airtel.html">AIRTEL</a>
                        </li>
                        <li>
                            <a href="data-globacom.html">GLOBACOM</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown {{nav_active(url('/web')) ? 'active':''}}">
                    <a href="{{url('/web')}}" class="dropdown-toggle" data-toggle="dropdown">Web<b class="caret"></b></a>
                    <ul class="dropdown-menu" >
                        <li>
                            <a href="data-mtn.html">Corporate Websites</a>
                        </li>
                        <li>
                            <a href="data-etisalat.html">School Portals</a>
                        </li>
                        <li>
                            <a href="data-airtel.html">Blogs</a>
                        </li>
                        <li>
                            <a href="data-globacom.html">Shopping Websites</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown {{nav_active(url('/branding')) ? 'active':''}}">
                    <a href="{{url('/branding')}}" class="dropdown-toggle" data-toggle="dropdown">Branding<b class="caret"></b></a>
                    <ul class="dropdown-menu" >
                        <li>
                            <a href="data-mtn.html">Brand Development</a>
                        </li>
                        <li>
                            <a href="data-etisalat.html">Point of Sales(POS)</a>
                        </li>
                        <li>
                            <a href="data-airtel.html">Interior Branding</a>
                        </li>
                    </ul>
                </li>

               
                <li class="{{nav_active(url('/posts')) ? 'active':''}}">
                    <a href="{{url('/posts')}}">Blog</a>
                </li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if(!Auth::check())
                    <li><a href="{{route('login')}}">Sign In</a></li>
                    <li><a href="{{route('register')}}">Register</a></li>
                @else
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>

                    <li><a href="{{route('account')}}">Hi, {{explode(" ", Auth::user()->name)[0]}}</a></li>
                @endif
            </ul>

        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>