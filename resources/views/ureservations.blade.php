<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./css/reserve.css">
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
            <a class="nav-link active" href="./main_page">Home</a>
          </li>
          <li class="contact">
            <a class="nav-link active" href="./contactus">Contact us</a>
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

  <div class="container">
    <div class="row">
      <div class="offset-md-2 col-md-8 table1">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Room</th>
              <th>Check-In</th>
              <th>Check_Out</th>
              <th>Num. of days</th>
              <th>Total cost($)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Vladimir Putin</td>
              <td>Delux</td>
              <td>2020-01-01</td>
              <td>2020-01-07</td>
              <td>7</td>
              <td>2100</td>

            </tr>
            <tr>
              <th scope="row">2</th>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table>
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