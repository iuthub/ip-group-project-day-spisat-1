<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./css/contactus.css">
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

  <header class="hdr">
    <nav class="container navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="#">
        <img src="./images/Name.svg" alt="The Chemodan" />
      </a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="reserve">
            <a class="nav-link active" href="./ureservations">Reservations</a>
          </li>
          <li class="contact">
            <a class="nav-link active" href="./main_page.blade">Home</a>
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

  <div class="container-fluid contactUs">
    <div class="row">
      <div class="offset-md-3 col-md-6 window">
        <form>
          <div class="form-group">
            <p class="text">
              In case if you want to contact us, you can send your message in the form provided below.
            </p>
            <br>
            <label for="msg">First Name:</label>
            <input type="text" class="form-control" id="msg">
            <label for="msg1">Last Name:</label>
            <input type="text" class="form-control" id="msg1">
            <label for="msg2">Email address:</label>
            <input type="email" class="form-control" id="msg2" aria-describedby="safemsg" placeholder="Enter email">
            <small id="safemsg" class="form-text text-muted">We'll never share your email address with anyone
              else.
            </small>
            <label for="msg3">Message:</label>
            <textarea class="form-control" rows="5" id="msg3"></textarea>
            <br>
            <br>
            <button type="submit" class="btn btn-success">Send Message</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <footer class="page-footer bg-semi-transparent">
    <div class="container-fluid ftr text-center text-md-left">
      <div class=" offset-md-1 col-md-2 ">
        <ul>
          <a href="">Home</a><br>
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