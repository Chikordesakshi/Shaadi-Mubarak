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

    <link rel="stylesheet" href="./contact.css">

<style>
    section{
    background: url(./assets/img/contact-bg2.jpg);
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    padding: 20px;
    width: 100%;
    background-repeat: no-repeat;
   background-size: cover;
}

.nav-link:hover{
color: #000;
}

.dropdown-item:hover{
color: #000;
}

#btn-sub{
    position: relative;
    left: 20rem;
}
</style>

</head>

<body>
<?php include("./header.php"); ?>

    <section>
        <div class="container-con">
            <h2 style="position: relative;">Contact us</h2>

            <div class="row100">
                <div class="col">
                    <div class="inputBox">
                        <input type="text" required="required">
                        <span class="text">First Name</span>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="col">
                    <div class="inputBox">
                        <input type="text" required="required">
                        <span class="text">Last Name</span>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="row100">
                <div class="col">
                    <div class="inputBox">
                        <input type="text" required="required">
                        <span class="text">Email</span>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="col">
                    <div class="inputBox">
                        <input type="text" required="required">
                        <span class="text">Mobile</span>
                        <span class="line"></span>
                    </div>
                </div>
            </div>

            <div class="row100">
                <div class="col">
                    <div class="inputBox textarea">
                        <textarea required="required"></textarea>
                        <span class="text">Type Your Message Here...</span>
                        <span class="line"></span>
                    </div>
                </div>
            </div>

            <div class="row100">
                <div class="col">
                    <input type="submit" value="send" id="btn-sub">
                </div>
            </div>
        </div>
    </section>



    <?php include("./footer.php"); ?>
</body>
<?php include("./progress-wrap.php"); ?>

<?php include("./javascript.php"); ?>

</html>