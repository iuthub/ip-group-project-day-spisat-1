<header class="bg-semi-transparent">
    <nav class="container navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#">
        <img src="./images/Name.svg" alt="The Chemodan" />
      </a>
      <div class="collapse navbar-collapse">
  <ul class="navbar-nav ml-auto">
    @guest 
    @else
      <li class="nav-item active reserve"><a class="nav-link" href="{{ route('reservations') }}">Reservations</a></li>
    @endguest
    <li  class="nav-item active contact"><a class="nav-link" href="{{ route('contactUs') }}">Contact us</a></li>
    @guest
     
        @if (Route::has('register'))
         <li class="join">            
            <form action="{{ route('register') }}">
                <button type="submit" class="btn btn-success">{{ __('Join') }}</button>
                </form>            
            </li>
        @endif
          <li class="slash">
            <img src="./images/Line 6.svg" alt="Line">
          </li>

          <li class="signin">
            <form action="{{ route('login') }}">
            <button type="submit" class="btn btn-success">{{ __('Sign In') }}</button>
            </form>
         </li>
         <li class="icon">
            <a class="nav-link disabled" tabindex="-1" aria-disabled="true">
              <img src="./images/social-media 1.svg" height="30" alt="" />
            </a>
          </li>
    @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->first_name }} {{ Auth::user()->last_name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    @endguest
  </ul>
  </div>
  </nav>
  </header>
  <script>
    $(document).ready(function(){
      $('.dropdown-toggle').dropdown()
    }); 
  </script>


  