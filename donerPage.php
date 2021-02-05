<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
        
    .column {

        width: 30%;
        padding: 0 10px;


    }

    /* Remove extra left and right margins, due to padding */
    .row {
        margin: auto;

    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Responsive columns */
    @media screen and (max-width: 600px) {
        .column {
            width: 100%;
            display: block;
            margin-bottom: 20px;
        }
    }

    /* Style the counter cards */
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        padding: 16px;
        text-align: center;
        background-color: #f1f1f1;
    }

    .card3 {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        padding: 100px;
        height: 250px;
        width: 600px;
        text-align: center;
        background-color: #f1f1f1;
    }

    .input-group .btn1,
    .btn2 {

        margin: 50px 100px 40px;
        border-radius: 5px;
        background-color: #4CAF50;
        /* Green */
        border: 1px solid green;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        font-size: 16px;
        cursor: pointer;
        width: 150px;
        display: block;
    }

    .column .img1 {
        float: right;
        margin-left: 300px;
        width: 200px;
        height: 100px;

    }
    }
    </style>
</head>

<body>


    <div class="topnav">

        <div>
            <form class="example" action="/action_page.php" style="margin:auto;max-width:300px;float:right">
                <input type="text" placeholder="Search.." name="search2">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>


        <a href="login.php">Log out</a>
        
        <a class="active" href="index.php">Home</a>


    </div>
    <header class="headersection">
        <div class="container-fluit">
            <div class="carousel slide" id="screenshort-carousel" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#screenshort-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#screenshort-carousel" data-slide-to="1"></li>
                    <li data-target="#screenshort-carousel" data-slide-to="2"></li>
                    <li data-target="#screenshort-carousel" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="image/blood3.jpg" alt="slide image">

                    </div>
                    <div class="item">
                        <img src="image/blood2.jpg" alt="slide image">
                    </div>
                    <div class="item">
                        <img src="image/blood4.jpeg" alt="slide image">
                    </div>
                    <div class="item">
                        <img src="image/blood1.jpg" alt="slide image">
                    </div>
                </div>
                <!--end carousel-inner-->
                <a href="#screenshort-carousel" class="left carousel-control" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a href="#screenshort-carousel" class="right carousel-control" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
            <!--end carousel-->
        </div>
    </header>

    <div class="row style">

        <form method="post" action="donerAs.php">
            <img class="img1" src="image/blood 2.png" alt=""
                style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);margin: 30px 90px 90px 15px;float:right; width: 590px;height: 250px;">
            <div class="column" style="float:left;margin: 30px 5px 90px 140px;">

                <div class="card">
                    <h3>Want to donate blood</h3>
                    <div class="input-group">
                        <button type="submit" class="btn1" name="donerAs_btn">Click</button>
                    </div>
                </div>
            </div>


</form>
    </div>
    <div class="row style">
        <form method="post" action="doners_list.php">
            <img class="img1" src="image/blood 2.png" alt=""
                style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);margin: 30px 15px 90px 90px;float:left; width: 590px;height: 250px;">

            <div class="column" style="float:right;margin:30px 140px 90px 5px;">
                <div class="card">
                    <h3>Donors list</h3>

                    <div class="input-group">
                        <button type="submit" class="btn2" name="donerLis_btn">Click</button>
</div>
        

    </div>
    </form>
    </div>
    <div class="row style">

<form method="post" action="donerReq.php">
    <img class="img1" src="image/blood 2.png" alt=""
        style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);margin: 30px 90px 90px 5px;float:right; width: 590px;height: 250px;">
    <div class="column" style="float:left;margin: 30px 5px 90px 140px;">

        <div class="card">
            <h3>Send requests </h3>
            <p>If you dont find anyone in the donors list,<br>you can send requests for blood</p>
            <div class="input-group">
                <button type="submit" class="btn1" name="donerAs_btn">Click</button>
            </div>
        </div>
    </div>


</form>
</div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>