@extends('layouts.master')

@section('content')

<div class="main">
<div class="container booking">
      <div class="searchingrooms" style="background-color:#2C405B">
        <div class="row align-items-center">

          <div class="col">
            <div class="checkin">
              <ul>
                <label for="check-in">Check In</label><br>
                <div class="input-group">
                  <input type="date" class="form-control text-light bg-transparent" id="check-in" />
                </div>
              </ul>
            </div>
          </div>

          <div class="col">
            <div class="checkout">
              <ul>
                <label for="check-out">Check Out</label>
                <div class="input-group">
                  <input type="date" class="form-control text-light bg-transparent" id="check-out" />
                </div>
              </ul>
            </div>
          </div>

          <div class="col">
            <div class="guestslist">
              <ul>
                <label for="checking">Guests</label>
                <select class="form-control text-light bg-transparent" id="checking">
                  <option class="text-dark">1</option>
                  <option class="text-dark">2</option>
                  <option class="text-dark">3</option>
                  <option class="text-dark">4</option>
                </select>
              </ul>
            </div>
          </div>

          <div class="col">
            <div class="checkrooms">
              <form action="{{URL::route('urooms')}}">
                <button type="submit" class="btn btn-success active">Check Availability</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="offset-md-5 col-md-2 about">
    <img src="./images/AboutUs.svg" alt="About Us">
  </div>
  <div class="offset-md-2 col-md-8 atxt">
    <p class="text-center">“The Chemodan” Hotel is one of the best places where you can take a rest after your flight or
      meeting. Access to the high-speed Internet will give you ability to be in contact with your family, friends, and
      colleagues. Delicious dishes in our restaurant and an outdoor pool will not leave you indifferent, while various
      entertainment clubs will help you to have fun. For those who came with families our hotel have special family
      rooms and playground for little ones.
    </p>
  </div>
  <div class="offset-md-4 col-md-4 btxt">
    <p class="text-center">Enjoy your time in our hotel!</p>
  </div>
</div>

@endsection