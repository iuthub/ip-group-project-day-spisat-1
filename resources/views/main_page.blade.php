<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./css/style.css">
  <title>The Chemodan Hotel</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
</head>

<body class="bg-light">
  <header class="bg-semi-transparent">
    <nav class="container navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="#">
        <img src="./images/Name.svg" alt="The Chemodan" />
      </a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="reserve">
            <a class="nav-link active" href="{{URL::route('ureservations')}}">Reservations</a>
          </li>
          <li class="contact">
            <a class="nav-link active" href="{{URL::route('ucontactus')}}">Contact us</a>
          </li>
          <li class="join">
            <button type="submit" class="btn btn-success">Join</button>
          </li>

          <li class="slash">
            <img src="./images/Line 6.svg" alt="Line">
          </li>
          <li class="signin">
            <button type="submit" class="btn btn-success">Sign In</button>
          </li>
          <li class="icon">
            <a class="nav-link disabled" tabindex="-1" aria-disabled="true">
              <img src="./images/social-media 1.svg" height="30" alt="" />
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <section class="main">
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

  <footer class="page-footer bg-semi-transparent">
    <div class="container-fluid ftr text-center text-md-left">

      <div class=" offset-md-1 col-md-2 ">
        <ul>
          <a href="">Reservations</a><br>
          <a href="">Contact Us</a>
          <br>
          <br>
          <p class="text text-light">Day Spisat'1 Team, 2020</p>
        </ul>
      </div>
    </div>
  </footer>


</body>

</html>