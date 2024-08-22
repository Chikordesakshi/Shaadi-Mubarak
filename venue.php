<?php
include("connection.php");
session_start();


if (isset($_POST["submit"])) {
  $state = $_POST["state"];
}

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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

  <!-- JavaScript Bundle with Popper -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./states.css">

  <style>
    .back {
      margin-left: -20px;
    }

    .btn-state {
      position: relative;
      left: 11rem;
    }

    .price {
      position: relative;
      right: 13rem;
      margin-left: 15rem;
    left: -19rem;
}
    

    .front {
      height: 30rem;
      width: 30rem;
    }

    .back {
      width: 30rem;
    }

    label {
      margin-top: 20px;
      margin-bottom: 20px;
    }

    .card-body{
      top: 4px;
    width: 590px;
    right: 5px;
    background-color: #f2c7dc;
    }

    .card-header {
  background-color: #f2c7dc;
}

.btn-state:hover{
  background-color: white;
  color: black;
  border: none;
}
  </style>

</head>

<body style="background-color: #FF4B7F;">

  <?php include("./header.php"); ?>


  <section id="container">

    <div class="head" >
      <h1 style="background-color: #000;"><?php echo $state; ?></h1>
    </div>
    <?php
    $sql = "SELECT * FROM master_list WHERE item_category='venues' and state='$state'  and status='active'";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
      die("no elements found");
    }
    $count = 0;
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
      $count++;
      $image = explode(',', $row["images"]);
      $card_id = "card_id" . $count;
      $data_bs_target = "#carouselExampleControls" . $count;
      $data_bs_id = "carouselExampleControls" . $count;

    ?>
      <input type="checkbox" id=<?php echo $card_id; ?> />
      <label class="col-md-5 card-container" for=<?php echo $card_id; ?>>

        <div class="card-flip">
          <!-- Card 1 Front -->
          <div class="card front">
            <div id=<?php echo $data_bs_id; ?> class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <?php echo '<img src="./images/' . $state . '/' . $row["item_name"] . '/' . $image[0] . '" class="d-block w-100" alt="..." width="538px" height="358px">'; ?>
                </div>
                <div class="carousel-item">
                  <?php echo '<img src="./images/' . $state . '/' . $row["item_name"] . '/' . $image[1] . '" class="d-block w-100" alt="..." width="538px" height="358px">'; ?>
                </div>
                <div class="carousel-item">
                  <?php echo '<img src="./images/' . $state . '/' . $row["item_name"] . '/' . $image[2] . '" class="d-block w-100" alt="..." width="538px" height="358px">'; ?>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target=<?php echo $data_bs_target; ?> data-bs-slide="prev" value="click" onclick="flip">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target=<?php echo $data_bs_target; ?> data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <div class="card-body">
              <h5 class="card-title"><?php echo $row["item_name"]; ?></h5>
              <h6>LOCATION:<?php echo $row["location"]; ?></h6>

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
                <?php echo $row["item_description"]; ?>
              </p>
              <div class="price" style="top:7rem;"><?php echo $row["price"]; ?></div>
              <!-- <a href="#" class="btn btn-primary" style="text-align: center;">Add to cart</a> -->
              <form action="venueback.php" method="post">
                <?php echo '<input type="hidden" name="venue" value=' . $row["item_id"] . '>' ?>
                <button class="btn-state btn-primary" name="select" style=" top: 5rem;">Select</button>
              </form>
            </div>
          </div>
          <!-- End Card 1 Back -->
        </div>
      </label>
      <!-- End Card 1 -->

    <?php
    } //end of while
    ?>

  </section>


  <?php include("./footer.php"); ?>

</body>

<?php include("./progress-wrap.php"); ?>

<?php include("./javascript.php"); ?>

</html>