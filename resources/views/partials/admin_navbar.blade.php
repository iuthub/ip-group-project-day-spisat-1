<div style="border: 1px solid black; margin: 0 40px;">
  <ul style="display: inline-block">
    <li style="display: inline"><a href="{{ route('adminReservations') }}">Reservations</a></li>
    <li style="display: inline">
      <a href="{{ route('logout') }}"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
      </a>
    </li>
  </ul>

  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
  </form>
</div>