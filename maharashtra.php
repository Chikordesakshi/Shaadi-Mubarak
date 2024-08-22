<?php
session_start(); 
//include("session_check.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php include("./head.php"); ?>

  <!--Bootstrap CSS-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

  <!-- JavaScript Bundle with Popper -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./states.css">

<style>
  .back{
    margin-left: -20px;
  }

  .btn-state{
    position: relative;
    left:11rem;
  }

  .price{
    position:relative;
    right:13rem;
  }

  .front{
    height: 25rem;
    width: 30rem;
  }

  .back{
    width: 30rem;
  }

  label{
    margin-top: 20px;
    margin-bottom: 20px;
  }
</style>

</head>

<body>

  <?php include("./header.php"); ?>

  <form action="venuemaharashtra.php" method="post">
  <section id="container">

    <div class="head">
      <h1>MAHARASHTRA</h1>
    </div>

    <input type="checkbox" id="card-1" />
    <label class="col-md-5 card-container" for='card-1'>

      <div class="card-flip">
        <!-- Card 1 Front -->
        <div class="card front">
          <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./images/Maharashtra/GCC hotel/img1.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Maharashtra/GCC hotel/img2.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Maharashtra/GCC hotel/img3.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls1"
              data-bs-slide="prev" value="click" onclick="flip">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls1"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <div class="card-body">
            <h5 class="card-title">GCC Hotel and Club</h5>
<h6>LOCATION: Mira Road, Mumbai</h6>

          </div>
        </div>

        <!-- End Card 1 Front -->

        <!-- Card 1 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">
              Since 1933, GCC Hotel and Club is amidst the 3-star hotels in the city of Mumbai which provides
              best-in-class services to its clients.
              GCC Hotel and Club is a spectacular place for all kinds of events. Whether it is a big fat Indian wedding
              or a small cocktail party, its modern facilities and the sophisticated interiors will definitely impress
              you. GCC Hotel and Club offers more than 90,000 sq. ft. lawn space to take your wedding party to the next
              level. Its three spacious banquet halls can accommodate 50 to 500 people any time. With more than one
              event space, they also provide you with guest accommodation and basic facilities like valet parking.
            </p>
            <div class="price" style="top:7rem;" >₹87000</div>
            <!-- <a href="#" class="btn btn-primary" style="text-align: center;">Add to cart</a> -->
            <button class="btn-state btn-primary" name="venue1" style=" top: 5rem;">Select</button>
          </div>
        </div>
        <!-- End Card 1 Back -->
      </div>
    </label>
    <!-- End Card 1 -->



    <!--Card 2 starts-->
    <input type="checkbox" id="card-2" />
    <label class="col-md-5 card-container" for='card-2'>

      <div class="card-flip">
        <!-- Card 2 Front -->


        <div class="card front">
          <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/Maharashtra/Eskay Resorts/img1.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="images/Maharashtra/Eskay Resorts/img2.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="images/Maharashtra/Eskay Resorts/img3.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2"
              data-bs-slide="prev" value="click" onclick="flip">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <div class="card-body">
            <h5 class="card-title">Eskay Resorts</h5>
            <h6>LOCATION: Borivali - Kandivali, Mumbai</h6>

          </div>
        </div>

        <!-- End Card 2 Front -->

        <!-- Card 2 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">
              Eskay Resorts is located in Borivali West, Mumbai. The hotel has a lush green lawn, a capacious banquet
              hall, a terrace as well as a poolside. It holds a capacity to accommodate around 2000 guests. Their
              combination of indoor and outdoor spaces make a perfect venue to celebrate any occasion. The hotel
              provides all the modern technologies and amenities for all kinds of events. They have a dedicated bridal
              room, basic lighting and electricity, and modern facilities to ensure -that all your events are carried
              out in a dedicated and hassle-free manner.
            </p>
            <div class="price" style="top:8rem;" >₹110000</div>
            <button class="btn-state btn-primary" name="venue2" style=" top: 6rem;">Select</button>
          </div>
        </div>
        <!-- End Card 2 Back -->
      </div>
    </label>
    <!-- End Card 2 -->




    <!--Card 3 starts-->
    <input type="checkbox" id="card-3" />
    <label class="col-md-5 card-container" for='card-3'>

      <div class="card-flip">
        <!-- Card 3 Front -->


        <div class="card front">
          <div id="carouselExampleControls3" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./images/Maharashtra/Novotel/img1.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Maharashtra/Novotel/img2.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Maharashtra/Novotel/img3.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls3"
              data-bs-slide="prev" value="click" onclick="flip">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls3"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <div class="card-body">
            <h5 class="card-title">Novotel</h5>
            <h6>LOCATION: Balraj Sahni Marg, RB Beach, Konkan</h6>
          </div>
        </div>

        <!-- End Card 3 Front -->

        <!-- Card 3 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">
              They come up with a number of facilities and amenities to call your marriage ceremony the most luxurious
              time of your life. With everything under one roof, it becomes really easy for you to book this venue for
              your wedding night. Welcome to this paradise with open arms and celebrate each day and function in their
              beautiful and full of splendid architecture in their wedding halls. With their in-house salon services,
              half
              of your burden of a makeup artist gets lowered down! A perfect venue with the best quality and everything
              worth the price you’ve paid for your wedding.
            </p>
            <div class="price" style="top:8rem;" >₹91000</div>
            <button class="btn-state btn-primary" name="venue3" style=" top: 6rem;">Select</button>
          </div>
        </div>
        <!-- End Card 3 Back -->
      </div>
    </label>
    <!-- End Card 3 -->



    <!--Card 4 starts-->
    <input type="checkbox" id="card-4" />
    <label class="col-md-5 card-container" for='card-4'>

      <div class="card-flip">
        <!-- Card 4 Front -->


        <div class="card front">
          <div id="carouselExampleControls4" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./images/Maharashtra/The Tamarind Tree/img1.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Maharashtra/The Tamarind Tree/img2.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Maharashtra/The Tamarind Tree/img3.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls4"
              data-bs-slide="prev" value="click" onclick="flip">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls4"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <div class="card-body">
            <h5 class="card-title">The Tamarind Tree</h5>
<h6>LOCATION: 88, Kanakapura Road, Nashik </h6>
          </div>
        </div>

        <!-- End Card 4 Front -->

        <!-- Card 4 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;margin-bottom: -4rem;">
              The Tamarind Tree , is a place where the old, the new, and someplace magical are crafted into an exquisite
              tapestry. Nestled in a five-acre garden of beautiful trees including the original tamarind tree after
              which it was named, a natural pond, colonial Bandstand, elegant pavilions, and ample open spaces, The
              Tamarind Tree is a place like none other. It is the perfect place for a celebration, your wedding. A
              wedding is one of the best days of your life and you surely want to have a great time, since you are about
              to start a new life ahead with your better half. You wish to look out for the best venue where you can
              accommodate your guests, serve with awesome, lip-smacking food and yes, you surely look forward to a
              location with a number of facilities.
            </p>
            <div class="price" style="top:7rem;" >₹94000</div>
            <button class="btn-state btn-primary" name="venue4" style=" top: 5rem;">Select</button>
          </div>
        </div>
        <!-- End Card 4 Back -->
      </div>
    </label>
    <!-- End Card 4 -->




    <!--Card 5 starts-->
    <input type="checkbox" id="card-5" />
    <label class="col-md-5 card-container" for='card-5'>

      <div class="card-flip">
        <!-- Card 5 Front -->


        <div class="card front">
          <div id="carouselExampleControls5" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./images/Maharashtra/The Groves/img1.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Maharashtra/The Groves/img2.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Maharashtra/The Groves/img3.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls5"
            data-bs-slide="next">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls5"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <div class="card-body">
            <h5 class="card-title">The Groves</h5>
            <h6>LOCATION: The Groves, Kada Agrahara Main Road, Rampura, Amravati</h6>
          </div>
        </div>

        <!-- End Card 5 Front -->

        <!-- Card 5 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">
              The Groves is a stunning venue and can be a wonderful location for the biggest day of your life. It
              presents an opportunity for a couple to hold a wedding at a romantic location without spending a fortune,
              surrounded by lush green mango trees and thick vegetation. The venue harmoniously combines nature with
              modernity, Swaggering voguish plushy rooms, each coming with its own balcony facing the pool and crisp air
              from the verdure of trees. Delightful cocktail parties with the sunken bar in the pool for the guests, an
              enclosed area connecting three main spaces together. <br><br>
            </p>
            <div class="price" style="top:8rem;" >₹99000</div>
            <button class="btn-state btn-primary" name="venue5" style=" top: 6rem;">Select</button>
          </div>
        </div>
        <!-- End Card 5 Back -->
      </div>
    </label>
    <!-- End Card 5 -->






    <!--Card 6 starts-->
    <input type="checkbox" id="card-6" />
    <label class="col-md-5 card-container" for='card-6'>

      <div class="card-flip">
        <!-- Card 6 Front -->


        <div class="card front">
          <div id="carouselExampleControls6" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./images/Maharashtra/Arena100 Sports and Recreation/img1.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Maharashtra/Arena100 Sports and Recreation/img2.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Maharashtra/Arena100 Sports and Recreation/img3.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls6"
              data-bs-slide="prev" value="click" onclick="flip">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls6"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <div class="card-body">
            <h5 class="card-title">Arena100 Sports and Recreation</h5>
            <h6>LOCATION: Arena100 Sports and Recreation City ,Bypass Road, Aurangabad</h6>
          </div>
        </div>

        <!-- End Card 6 Front -->

        <!-- Card 6 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center; margin-bottom: -6rem;">
              Arena100 Sports and Recreation is one of the most
              sought-after banqueting facilities in the city. It was set up with a view to providing an elegant and
              superior banqueting space to cater to the varied requirements of their clients. Whatever the celebration
              may be, big or small, it is their endeavor to make each celebration, a grand success. They are perfect
              when it comes to hosting wedding ceremonies as they offer heavenly views combined with lavish hospitality.
              Their warm welcoming nature and hospitality make your wedding experience very special. The location adds
              another level of desire to this venue as it is situated on the outskirts, away from the noise and bustle
              of the city. The venue has outdoor spaces that can accommodate up to 800 people. They have a flexible
              catering policy. They also provide ample parking space for the guests.</p>
              <div class="price" style="top:8rem;" >₹100000</div>
              <button class="btn-state btn-primary" name="venue6" style=" top: 6.5rem;">Select</button>
          </div>
        </div>
        <!-- End Card 6 Back -->
      </div>
    </label>
    <!-- End Card 6 -->







    <!--Card 7 starts-->
    <input type="checkbox" id="card-7" />
    <label class="col-md-5 card-container" for='card-7'>

      <div class="card-flip">
        <!-- Card 7 Front -->


        <div class="card front">
          <div id="carouselExampleControls7" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/Maharashtra/Conrad Pune/img1.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="images/Maharashtra/Conrad Pune/img2.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="images/Maharashtra/Conrad Pune/img3.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls7"
              data-bs-slide="prev" value="click" onclick="flip">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls7"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <div class="card-body">
            <h5 class="card-title">Conrad Pune</h5>
            <h6>LOCATION: Conrad, 7, Mangaldas Road, Sangamvadi, Pune</h6>
          </div>
        </div>

        <!-- End Card 7 Front -->

        <!-- Card 7 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;margin-bottom: -4rem;">Conrad Pune is the Hilton company's first luxury hotel in
              India. An iconic structure in the heart of Pune's dynamic central business district, the striking Conrad
              Pune is only minutes from major corporations, key government institutions and premier residential
              neighborhoods. It is a place to stay inspired. They offer their guests one-of-a-kind experiences with
              sophisticated, locally inspire the surroundings. Service offered is more than personal, it's intuitive.
              While your stay at hote, your connections to people and places around the corner, and half way around the
              world will be at best. The hotel takes the responsibility of meeting every couple need. The wedding at
              this place will help you to pile memories bit by bit in an organised manner.</p>
              <div class="price" style="top:7rem;" >₹89000</div>
              <button class="btn-state btn-primary" name="venue7" style=" top: 5rem;">Select</button>
          </div>
        </div>
        <!-- End Card 7 Back -->
      </div>
    </label>
    <!-- End Card 7 -->






    <!--Card 8 starts-->
    <input type="checkbox" id="card-8" />
    <label class="col-md-5 card-container" for='card-8'>

      <div class="card-flip">
        <!-- Card 8 Front -->


        <div class="card front">
          <div id="carouselExampleControls8" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./images/Maharashtra/Dhepe Wada/img1.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Maharashtra/Dhepe Wada/img2.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="./images/Maharashtra/Dhepe Wada/img3.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls8"
              data-bs-slide="prev" value="click" onclick="flip">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls8"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <div class="card-body">
            <h5 class="card-title">Dhepe Wada</h5>
            <h6>LOCATION: Erandwane, Pune</h6>
          </div>
        </div>

        <!-- End Card 8 Front -->

        <!-- Card 8 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">Dhepe Wada is a banquet hall located in the city of Pune.
              Choosing a venue for your wedding and all its other related events is not an easy decision to make. You
              have to search for multiple options, visit them, compare everything. To ensure that all your wedding
              functions area a successful one, Dhepe Wada offers all the facilities and services which you might require
              to host your perfect wedding and forge happy and everlasting reminiscences with your loved ones. You will
              get a whole set of services and facilities to make your function as a smooth one.</p>
              <div class="price" style="top:8rem;" >₹120000</div>
              <button class="btn-state btn-primary" name="venue8" style=" top: 6rem;">Select</button>
          </div>
        </div>
        <!-- End Card 8 Back -->
      </div>
    </label>
    <!-- End Card 8 -->






    <!--Card 9 starts-->
    <input type="checkbox" id="card-9" />
    <label class="col-md-5 card-container" for='card-9'>

      <div class="card-flip">
        <!-- Card 9 Front -->


        <div class="card front">
          <div id="carouselExampleControls9" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/Maharashtra/Prathamesh Resorts/img1.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="images/Maharashtra/Prathamesh Resorts/img2.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="images/Maharashtra/Prathamesh Resorts/img3.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls9"
              data-bs-slide="prev" value="click" onclick="flip">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls9"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <div class="card-body">
            <h5 class="card-title">Prathamesh Resorts</h5>
            <h6>LOCATION: Prathamesh Resorts, Khed Shivapur</h6>
          </div>
        </div>

        <!-- End Card 9 Front -->

        <!-- Card 9 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">Nestled in the Sahyadri ranges Prathamesh Resorts is the
              ideal destination for your fairytale wedding. Experience the magic of nature and wedding rituals with
              breathtaking locale. We provide customized packages to make your wedding look like one dreamy affair. Your
              Perfect wedding destination is just a click away!</p>
              <div class="price" style="top:12.5rem;" >₹88500</div>
              <button class="btn-state btn-primary" name="venue9" style=" top: 11rem;">Select</button>
          </div>
        </div>
        <!-- End Card 9 Back -->
      </div>
    </label>
    <!-- End Card 9 -->






    <!--Card 10 starts-->
    <input type="checkbox" id="card-10" />
    <label class="col-md-5 card-container" for='card-10'>

      <div class="card-flip">
        <!-- Card 10 Front -->


        <div class="card front">
          <div id="carouselExampleControls10" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/Maharashtra/TouchWood Resort/img1.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="images/Maharashtra/TouchWood Resort/img2.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
              <div class="carousel-item">
                <img src="images/Maharashtra/TouchWood Resort/img3.jpg" class="d-block w-100" alt="..." width="538px" height="358px">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls10"
              data-bs-slide="prev" value="click" onclick="flip">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls10"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <div class="card-body">
            <h5 class="card-title">TouchWood Resort </h5>
            <h6>LOCATION: Igatpuri, Nashik</h6>
          </div>
        </div>

        <!-- End Card 10 Front -->

        <!-- Card 10 Back -->
        <div class="card back">
          <div class="card-header">
            Description
          </div>
          <div class="card-block">
            <p class="card-text" style="text-align: center;">Located in the mystic hills of Igatpuri, surrounded by
              green mountains; enriched with fog & waterfalls, Touchwood Bliss is a nature-inspired banquet hall and
              wellness destination located in Igatpuri. With 6 Fully Equipped AC Glamping Tents and, 4 Courtyard
              Villas,4 Farmside Villas, this venue hopes to bring you closer to nature while providing a comfortable
              stay and a pure veg restaurant serving some delicious food, including Jain preparations. It is a venue
              with a serene ambience and spacious interiors that one would need for events of all sizes. This venue is
              perfect for grandly hosting your pre-wedding, wedding, and post-wedding functions.</p>
              <div class="price" style="top:7rem;" >₹100000</div>
              <button class="btn-state btn-primary" name="venue10" style=" top: 5rem;">Select</button>
          </div>
        </div>
        <!-- End Card 10 Back -->
      </div>
    </label>
    <!-- End Card 10 -->
  </section>
</form>

<?php include("./footer.php"); ?>

</body>

<?php include("./progress-wrap.php"); ?>

<?php include("./javascript.php"); ?>

</html>