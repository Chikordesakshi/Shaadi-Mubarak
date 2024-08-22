<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plan your Shaadi!</title>

    <style>
        html,
        body {
            height: 95%;
            width: 95%;
            background-color: rgb(206, 84, 141);
            color: white;
        }

        .container {
            background-color: black;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: white;
            margin-top: 16%;
            margin-left: 28%;

            height: 50%;
            width: 50%;

            border: 5px solid rgb(134, 36, 134);
            border-radius: 25px;
            text-align: center;
        }

        .user-input-wrp {
            position: relative;
            width: 50%;
            margin-top: 7%;
            margin-left: 25%;
            /* border: 3px solid gold; */
            border-radius: 25px;
        }

        .user-input-wrp .inputText {
            width: 100%;
            outline: none;
            border: none;
            border-bottom: 1px solid #777;
            box-shadow: none !important;
            height: 25px;
            border-radius: 10px;
        }

        .user-input-wrp .inputText:focus {
            border-color: black;
            border-width: medium medium 2px;
        }

        .user-input-wrp .floating-label {
            position: absolute;
            pointer-events: none;
            top: 23px;
            left: 10px;
            transition: 0.2s ease all;
            color: gold;
            font-weight: bolder;
        }

        .user-input-wrp input:focus~.floating-label,
        .user-input-wrp input:not(:focus):valid~.floating-label {

            top: 0px;
            left: 10px;
            font-size: 13px;
            opacity: 1;
        }

        #btn-gst {
            border-radius: 1rem;
            border: none;
            color: white;
            background: black;
            height: 2.5rem;
            width: 8rem;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 align="center">Select the Number of Guests</h1>
        <form action="guestback.php" method="post">
            <div class="user-input-wrp">

                <h4>For Transport</h4>
                <input type="number" class="inputText" required min="10" name="Transport"
                    placeholder="Minimum of 10" />
                <span class="floating-label">Guests</span>
            </div>

            <div class="user-input-wrp">
                <h4>For Food</h4>
                <input type="number" class="inputText" required min="10" name="Food"
                    placeholder="Minimum of 10" />
                <span class="floating-label">Guests</span>
            </div>
            <br>

        
        <br><br><br>
        
            <input type="submit" id="btn-gst" value="Visit destinations" name="submit" />
        
            </form>
    </div>

</body>

</html>