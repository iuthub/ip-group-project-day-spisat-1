<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./css/room.css">
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
            <a class="nav-link active" href="./reservations">Reservations</a>
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

  <div class="container-fluid single">
    <div class="row">
      <div class="offset-md-1 col-md-5">
        <img class="photo" src="./images/single-room.jpg" alt="Single room">
      </div>
      <div class="offset-md-1 col-md-3 fstyle1">
        <ul>
          <p class="text fstyle">
            Single Room
          </p><br>
          <p class="text mstyle">Upgrade your stay with our single room to enjoy more space and additional in-room
            amenities.</p><br>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-success btn1" data-toggle="modal" data-target="#room1">
            More</button>

          <!-- Modal -->
          <div class="modal" id="room1" tabindex="-1" role="dialog" aria-labelledby="room1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <p>
                    <h5 class="modal-title fstyle" id="room1">Single Room</h5>
                  </p>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p class="modal-text" style="font-weight: bold">Inside Your Room</p>
                  <p>
                    <ul>
                      From 44 square metres<br>
                      King bed<br>
                      Nespresso machine and gourmet tea selections<br>
                      Fully stocked minibar<br>
                      Spacious bathroom with glass-enclosed shower and deep-soaking bathtub<br>
                      Luxury bathroom amenities from Roberto Cavalli<br>
                      Microfibre and terry bathrobes<br>
                      Hairdryer<br>
                      42“ interactive flatscreen TV<br>
                      Cable channels (free) and movies on demand (charges apply)<br>
                      Executive work desk<br>
                      iPod/iPhone docking station with alarm and radio<br>
                      In-room safe<br>
                      Iron and ironing board<br>
                      Shoe brush and shoe horn<br>
                      Non-smoking and smoking rooms available<br>
                    </ul>
                  </p>
                  <p class="modal-text" style="font-weight: bold">Max Capacity</p>
                  <p class="modal-text">
                    <ul>3 guests</ul>
                  </p>
                  <p class="modal-text" style="font-weight: bold">Total Price</p>
                  <p class="modal-text">
                    <ul>$75-100(depends on number of guests)</ul>
                  </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-success" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-success btn2">Reserve</button>
        </ul>
      </div>
    </div>
  </div>
  </div>

  <div class="container-fluid double">
    <div class="row">
      <div class="offset-md-1 col-md-3">
        <ul>
          <p class="text fstyle">
            Double Room
          </p><br>
          <p class="text mstyle">Drink in views of the city from the floor-to-ceiling windows of the modest doble room.
          </p><br>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-success btn3" data-toggle="modal" data-target="#room2">
            More</button>

          <!-- Modal -->
          <div class="modal" id="room2" tabindex="-1" role="dialog" aria-labelledby="room2" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <p>
                    <h5 class="modal-title fstyle" id="room2">Double Room</h5>
                  </p>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p class="modal-text" style="font-weight: bold">Inside Your Room</p>
                  <p>
                    <ul>
                      246 square metres<br>
                      2 Bedroom with King bed<br>
                      Dining table<br>
                      Nespresso machine and gourmet tea selections<br>
                      Refrigerator stocked with complimentary non-alcoholic refreshments and snacks<br>
                      Spacious bathroom with glass-enclosed shower and deep-soaking bathtub<br>
                      Microfibre and terry bathrobes<br>
                      Hairdryer<br>
                      Flatscreen TVs in bedroom and living room<br>
                      Cable channels (free) and movies on demand (charges apply)<br>
                      Executive work desk<br>
                      All-in-one printer (scanner, printer, copier and fax)<br>
                      iPod/iPhone docking station with alarm and radio<br>
                      In-suite safe<br>
                      Iron and ironing board<br>
                      Shoe brush and shoe horn<br>
                      Non-smoking<br>
                    </ul>
                  </p>
                  <p class="modal-text" style="font-weight: bold">Max Capacity</p>
                  <p class="modal-text">
                    <ul>3 guests</ul>
                  </p>
                  <p class="modal-text" style="font-weight: bold">Total Price</p>
                  <p class="modal-text">
                    <ul>$110-140(depends on number of guests)</ul>
                  </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-success" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-success btn4">Reserve</button>
        </ul>
      </div>
      <div class="offset-md-2 col-md-4">
        <img class="double-photo" src="./images/double.jpg" alt="Double room">
      </div>
    </div>
  </div>

  <div class="container-fluid family">
    <div class="row">
      <div class="offset-md-1 col-md-5">
        <img class="photo" src="./images/family.jpg" alt="Family room">
      </div>
      <div class="offset-md-1 col-md-3 fstyle1">
        <ul>
          <p class="text fstyle">
            Family Studio
          </p><br>
          <p class="text mstyle">Find all your living needs at this sanctuary that’s designed with families in mind.
          </p><br>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-success btn1" data-toggle="modal" data-target="#room3">
            More</button>

          <!-- Modal -->
          <div class="modal" id="room3" tabindex="-1" role="dialog" aria-labelledby="room3" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <p>
                    <h5 class="modal-title fstyle" id="room3">Family Studio</h5>
                  </p>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p class="modal-text" style="font-weight: bold">Inside Your Room</p>
                  <p>
                    <ul>
                      From 86sqm<br>
                      1 King + 2 Single beds in one large space<br>
                      Spacious, furnished balcony<br>
                      Additional toilet (without shower)<br>
                      Bar counter with two seats<br>
                      Fully stocked minibar<br>
                      Spacious bathroom with glass-enclosed shower and deep-soaking bathtub<br>
                      Luxury bathroom amenities from Roberto Cavalli<br>
                      Waffle bathrobes<br>
                      Hairdryer<br>
                      Interactive flatscreen TV<br>
                      Cable channels (free) and movies on demand (charges apply)<br>
                      Executive work desk<br>
                      In-room safe<br>
                      Iron and ironing board<br>
                      Shoe brush and shoe horn<br>
                      Non-smoking<br>
                    </ul>
                  </p>
                  <p class="modal-text" style="font-weight: bold">Max Capacity</p>
                  <p class="modal-text">
                    <ul>4 guests</ul>
                  </p>
                  <p class="modal-text" style="font-weight: bold">Total Price</p>
                  <p class="modal-text">
                    <ul>$180-240(depends on number of guests)</ul>
                  </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-success" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-success btn2">Reserve</button>
        </ul>
      </div>
    </div>
  </div>
  </div>

  <div class="container-fluid deluxe">
    <div class="row">
      <div class="offset-md-1 col-md-3 fstyle1">
        <ul>
          <p class="text fstyle">
            Deluxe Room
          </p><br>
          <p class="text mstyle">Enjoy the ambience and intimacy of this refined personal luxury residence.
          </p><br>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-success btn3" data-toggle="modal" data-target="#room4">
            More</button>

          <!-- Modal -->
          <div class="modal" id="room4" tabindex="-1" role="dialog" aria-labelledby="room4" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <p>
                    <h5 class="modal-title fstyle" id="room4">Deluxe Room</h5>
                  </p>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p class="modal-text" style="font-weight: bold">Inside Your Room</p>
                  <p>
                    <ul>
                      330 square metres<br>
                      2 bedrooms, 1 King bed in master bedroom, 2 Queen beds in other bedroom<br>
                      Walk-in closet in master bedroom<br>
                      Frette luxury bed linens and pillow menu<br>
                      Powder room with adjoining salon<br>
                      Living room with baby grand piano<br>
                      Dining table<br>
                      Kitchenette with pantry, dry bar, fridge and microwave<br>
                      Nespresso machine and gourmet tea selections<br>
                      Refrigerator stocked with complimentary non-alcoholic refreshments and snacks<br>
                      Spacious bathroom with glass-enclosed shower and Jacuzzi<br>
                      Luxury bathroom amenities from HERMES<br>
                      Microfibre and terry bathrobes<br>
                      Hairdryer<br>
                      Media room with karaoke<br>
                      Flatscreen TVs in all bedrooms, living room and media room<br>
                      Cable channels (free) and movies on demand (charges apply)<br>
                      Private gym room with exercise equipment<br>
                      Massage room<br>
                      Study room<br>
                      Executive work desk<br>
                      All-in-one printer (scanner, printer, copier and fax)<br>
                      iPod/iPhone docking station with alarm and radio<br>
                      In-suite safe<br>
                      Iron and ironing board<br>
                      Shoe brush and shoe horn<br>
                      Non-smoking<br>
                    </ul>
                  </p>
                  <p class="modal-text" style="font-weight: bold">Max Capacity</p>
                  <p class="modal-text">
                    <ul>4 guests</ul>
                  </p>
                  <p class="modal-text" style="font-weight: bold">Total Price</p>
                  <p class="modal-text">
                    <ul>$250-300(depends on number of guests)</ul>
                  </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-success" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-success btn4">Reserve</button>
        </ul>
      </div>
      <div class="offset-md-2 col-md-4">
        <img class="photo" src="./images/LUX!.jpg" alt="Deluxe room">
      </div>
    </div>
  </div>

  <div class="container-fluid double">
    <div class="row">
      <div class="offset-md-10 col-md-1">
        <form action="./main_page.blade.php">
          <button type="submit" class="btn btn-success">Back</button>
        </form>
      </div>
    </div>
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