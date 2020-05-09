<header class="ahdr">
  <nav class="container navbar navbar-expand-lg navbar-dark">
    <a href="#" class="navbar-brand">
      <img src="{{ asset('images/Name.svg') }}" alt="The Chemodan" />
    </a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ml-auto">
      <li style="display: inline">
      <a class="reserve" href="{{ route('adminReservations') }}">Reservations</a></li>
    <li style="display: inline">
      <a class="lgout" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
      </a>
    </li>
      </ul>
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
  </form> 

  </nav>
</header>


